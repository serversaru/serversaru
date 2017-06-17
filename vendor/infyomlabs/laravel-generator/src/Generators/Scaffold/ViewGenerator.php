<?php

namespace InfyOm\Generator\Generators\Scaffold;

use Illuminate\Support\Str;
use InfyOm\Generator\Common\CommandData;
use InfyOm\Generator\Generators\BaseGenerator;
use InfyOm\Generator\Utils\FileUtil;
use InfyOm\Generator\Utils\GeneratorFieldsInputUtil;
use InfyOm\Generator\Utils\TemplateUtil;

class ViewGenerator extends BaseGenerator
{
    /** @var CommandData */
    private $commandData;

    /** @var string */
    private $path;

    /** @var string */
    private $templateType;

    /** @var array */
    private $htmlFields;

    public function __construct(CommandData $commandData)
    {
        $this->commandData = $commandData;
        $this->path = $commandData->config->pathModel.'/'. $this->commandData->modelName.'/View/';
        $this->templateType = config('infyom.laravel_generator.templates', 'core-templates');
    }

    public function generate()
    { 
       /* if (!file_exists($this->path)) {
            mkdir($this->path, 0755, true);
        }*/

        $this->commandData->commandComment("\nGenerating Views...");

        $this->generateMain(); ####main file
        $this->generateIndex(); ####ajax file
        $this->generateFields();
        $this->generateShowFields();
/*        $this->generateUpdate();
        $this->generateShowFields();
        $this->generateShow();*/
        $this->commandData->commandComment('Views created: ');
    }

    private function generateMain()
    {
        if ($this->commandData->getAddOn('datatables')) {
            $templateData = $this->generateDataTableBody();
        } else {
            $templateData = $this->generateBladeTableBody();
        }

        FileUtil::createFile($this->path, $this->commandData->modelName.'.blade.php', $templateData);

        $this->commandData->commandInfo('table.blade.php created');
    }

    private function generateTableHeaderFields()
    {
        $headerFieldTemplate = TemplateUtil::getTemplate('scaffold.views.table_header', $this->templateType);

        $headerFields = [];

        foreach ($this->commandData->inputFields as $field) {
            if (!$field['inIndex']) {
                continue;
            }
            $headerFields[] = $fieldTemplate = TemplateUtil::fillTemplateWithFieldData(
                $this->commandData->dynamicVars,
                $this->commandData->fieldNamesMapping,
                $headerFieldTemplate,
                $field
            );
        }

        return implode(infy_nl_tab(1, 2), $headerFields);
    }

    private function generateBladeTableBody()
    {
        $templateData = TemplateUtil::getTemplate('scaffold.views.blade_table_body', $this->templateType);

        $templateData = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);

        $templateData = str_replace('$FIELD_HEADERS$', $this->generateTableHeaderFields(), $templateData);

        $cellFieldTemplate = TemplateUtil::getTemplate('scaffold.views.table_cell', $this->templateType);

        $tableBodyFields = [];

        foreach ($this->commandData->inputFields as $field) {
            if (!$field['inIndex']) {
                continue;
            }

            $tableBodyFields[] = TemplateUtil::fillTemplateWithFieldData(
                $this->commandData->dynamicVars,
                $this->commandData->fieldNamesMapping,
                $cellFieldTemplate,
                $field
            );
        }

        $tableBodyFields = implode(infy_nl_tab(1, 3), $tableBodyFields);

        return str_replace('$FIELD_BODY$', $tableBodyFields, $templateData);
    }

    private function generateDataTableBody()
    {
        $templateData = TemplateUtil::getTemplate('scaffold.views.datatable_body', $this->templateType);

        return TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);
    }

    private function generateIndex()
    {
        $templateData = TemplateUtil::getTemplate('scaffold.views.index', $this->templateType);

        $templateData = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);
        FileUtil::createFile($this->path,  $this->commandData->modelName.'ajax.blade.php', $templateData);
        $this->commandData->commandInfo('main_ajax.blade.php created');
    }

    private function generateFields()
    {
        $this->htmlFields = [];
        $i=1;
        foreach ($this->commandData->inputFields as $field) {

            if (!$field['inForm']) {
                continue;
            }
            switch ($field['htmlType']) {
                case 'text':
                case 'textarea':
                case 'editor':
                case 'date':
                case 'file':
                case 'email':
                case 'password':
                case 'number':
                    $fieldTemplate = TemplateUtil::getTemplate('scaffold.fields.'.$field['htmlType'], $this->templateType);
                   $fieldTemplate = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $fieldTemplate);
                    break;
                case 'image':
                    $fieldTemplate = TemplateUtil::getTemplate('scaffold.fields.'.$field['htmlType'].$i, $this->templateType);
                    $i++;
                    $fieldTemplate = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $fieldTemplate);
                    $str1 = file_get_contents(base_path('modules/'.$this->commandData->modelName.'/Controller/'. $this->commandData->modelName.'Controller.php'));
                    $image_str="        ####Upload image\n
           if (file_exists('temp/'.". '$request["'.$field['fieldName'].'"]) && $request["'.$field['fieldName'].'"] != "")'."\n".
  '            File::move("temp/" . $request["'.$field['fieldName'].'"], "uploads/" . $request["'.$field['fieldName'].'"]);'."\n";
                    $str11=str_replace('####Upload image',$image_str."\n",$str1);
                    file_put_contents(base_path('modules/'.$this->commandData->modelName.'/Controller/'. $this->commandData->modelName.'Controller.php'),  $str11);
                    break;

                case 'multipleImage':
                    $fieldTemplate = TemplateUtil::getTemplate('scaffold.fields.'.$field['htmlType'], $this->templateType);
                    $fieldTemplate = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $fieldTemplate);
                    $str11 = file_get_contents(base_path('modules/'.$this->commandData->modelName.'/Controller/'. $this->commandData->modelName.'Controller.php'));
                    $image_str="            ####Multi upload image\n".
                    'if (isset($request["'.$field['fieldName'].'"][0])&&$request["'.$field['fieldName'].'"][0]) {
                $'.$field["fieldName"].'=(json_decode($request["'.$field['fieldName'].'"]));
                    foreach ($'.$field["fieldName"].' as $val) {
					   if (file_exists(public_path()."/temp/" . $val) && $val !="")
                            File::move(public_path()."/temp/" . $val, public_path()."/uploads/" . $val);
                        ModuleAlbum::create(["name" => $val,"Module_type_id"=>$Module_type_id, "Module_id" => $'.$this->commandData->modelName.'->id]);
                       }
                   }';

                    $updateimage_str="            ####update Multi upload image\n".
                        'if ($request["'.$field['fieldName'].'"][0]) {
                             ModuleAlbum::where("Module_id",$request["id"])->where("Module_type_id",$Module_type_id)->delete();
                             $'.$field["fieldName"].'=(json_decode($request["'.$field['fieldName'].'"]));
                             foreach ($'.$field["fieldName"].' as $val) {
					             if (file_exists(public_path()."/temp/" . $val) && $val !="")
                                  File::move(public_path()."/temp/" . $val, public_path()."/uploads/" . $val);
                                  ModuleAlbum::create(["name" => $val,"Module_type_id"=>$Module_type_id, "Module_id" => $'.$this->commandData->modelName.'->id]);
                              }
                        }';
                    $str11=str_replace('####Multi upload image',$image_str."\n",$str11);
                    $str11=str_replace('####update Multi upload image',$updateimage_str."\n",$str11);
                    $delete_image_str="### delete multi uploader\n".'ModuleAlbum::where("Module_id",$val)->where("Module_type_id",$Module_type_id)->delete();'."\n";
                    $str11=str_replace('### delete multi uploader',$delete_image_str."\n",$str11);


                    $str11=str_replace("####Edit multiple upload image\n","####Edit multiple upload image\n".'$edit'. $this->commandData->modelName.'["'.$field['fieldName'].'"]=ModuleAlbum::select("name")->where("Module_id",$id)->where("Module_type_id",$Module_type_id)->lists("name")->tojson();'."\n",$str11);

                    file_put_contents(base_path('modules/'.$this->commandData->modelName.'/Controller/'. $this->commandData->modelName.'Controller.php'),  $str11);

                   /*
                    * remove field from migration
                    */

                    $str11 = file_get_contents(base_path('modules/'.$this->commandData->modelName.'/Migration/'. \Session::get('migration_fileName')));
                    $str11=str_replace('$table->string('."'".$field['fieldName']."'","####",$str11);
                    file_put_contents(base_path('modules/'.$this->commandData->modelName.'/Migration/'. \Session::get('migration_fileName')),  $str11);
                    /*
                    * remove field from model
                    */
                    $str11 = file_get_contents(base_path('modules/'.$this->commandData->modelName.'/Model/'. $this->commandData->modelName.'.php'));
                    $str11=str_replace("'".$field['fieldName']."',","",$str11);
                    $str11=str_replace("'".$field['fieldName']."'","",$str11);
                    file_put_contents(base_path('modules/'.$this->commandData->modelName.'/Model/'. $this->commandData->modelName.'.php'),  $str11);



                    break;
                case 'select':
                case 'enum':
                    $fieldTemplate = TemplateUtil::getTemplate('scaffold.fields.select', $this->templateType);
                    $select_array = explode(',', $field['htmlTypeInputs']);
                    $inputsArr='';
                    foreach($select_array as $val){
                        $inputsArr .='<option  {{isset($edit$MODEL_NAME$["$FIELD_NAME$"])&&$edit$MODEL_NAME$["$FIELD_NAME$"]=="'.$val.'" ? "selected" : ""}}   value="'.$val.'"">'.$val.'</option>';
                    }
                     $fieldTemplate = str_replace('$INPUT_ARR$', $inputsArr,$fieldTemplate);
                     $fieldTemplate = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $fieldTemplate);
                    break;

                case 'radio':
                    $fieldTemplate = TemplateUtil::getTemplate('scaffold.fields.radio_group', $this->templateType);
                    $radioTemplate = TemplateUtil::getTemplate('scaffold.fields.radio', $this->templateType);
                    $inputsArr = explode(',', $field['htmlTypeInputs']);
                    $radioButtons = [];
                    foreach ($inputsArr as $item) {
                        $radioButtonsTemplate = TemplateUtil::fillFieldTemplate(
                            $this->commandData->fieldNamesMapping,
                            $radioTemplate, $field
                        );
                        $radioButtonsTemplate = str_replace('$VALUE$', $item, $radioButtonsTemplate);
                        $radioButtons[] = $radioButtonsTemplate;
                    }
                    $fieldTemplate = str_replace('$RADIO_BUTTONS$', implode("\n", $radioButtons), $fieldTemplate);
                    $fieldTemplate = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $fieldTemplate);
                    break;

//                case 'checkbox-group':
//                    $fieldTemplate = TemplateUtil::getTemplate('scaffold.fields.checkbox_group', $this->templateType);
//                      $radioTemplate = TemplateUtil::getTemplate('scaffold.fields.checks', $this->templateType);
//                      $inputsArr = explode(',', $field['htmlTypeInputs']);
//                      $radioButtons = [];
//                      foreach ($inputsArr as $item) {
//                          $radioButtonsTemplate = TemplateUtil::fillFieldTemplate(
//                              $this->commandData->fieldNamesMapping,
//                              $radioTemplate,
//                              $field
//                          );
//                          $radioButtonsTemplate = str_replace('$VALUE$', $item, $radioButtonsTemplate);
//                          $radioButtons[] = $radioButtonsTemplate;
//                      }
//                    $fieldTemplate = str_replace('$CHECKBOXES$', implode("\n", $radioButtons), $fieldTemplate);
//                    break;

                case 'checkbox':
                    $fieldTemplate = TemplateUtil::getTemplate('scaffold.fields.checkbox', $this->templateType);
                    $checkboxValue = $value = $field['htmlTypeInputs'];
                    if ($field['fieldType'] != 'boolean') {
                        $checkboxValue = "'".$value."'";
                    }
                    $fieldTemplate = str_replace('$CHECKBOX_VALUE$', $checkboxValue, $fieldTemplate);
                    $fieldTemplate = str_replace('$VALUE$', $value, $fieldTemplate);
                    $fieldTemplate = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $fieldTemplate);
                    break;

                default:
                    $fieldTemplate = '';
                    break;
            }

            if (!empty($fieldTemplate)) {
                $fieldTemplate = TemplateUtil::fillFieldTemplate(
                    $this->commandData->fieldNamesMapping,
                    $fieldTemplate,
                    $field
                );
                $this->htmlFields[] = $fieldTemplate;
            }

        }
        $templateData = TemplateUtil::getTemplate('scaffold.views.fields', $this->templateType);
        $templateData = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);

        $templateData = str_replace('$FIELDS$', implode("\n\n", $this->htmlFields), $templateData);

        FileUtil::createFile($this->path, $this->commandData->modelName.'fields.blade.php', $templateData);
        $this->commandData->commandInfo('field.blade.php created');
    }

    private function generateCreate()
    {
        $templateData = TemplateUtil::getTemplate('scaffold.views.create', $this->templateType);

        $templateData = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);

        FileUtil::createFile($this->path, $this->commandData->modelName.'create.blade.php', $templateData);
        $this->commandData->commandInfo('create.blade.php created');
    }

    private function generateUpdate()
    {
        $templateData = TemplateUtil::getTemplate('scaffold.views.edit', $this->templateType);

        $templateData = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);

        FileUtil::createFile($this->path, 'edit.blade.php', $templateData);
        $this->commandData->commandInfo('edit.blade.php created');
    }

    private function generateShow()
    {
        $templateData = TemplateUtil::getTemplate('scaffold.views.show', $this->templateType);

        $templateData = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);

        FileUtil::createFile($this->path, 'show.blade.php', $templateData);
        $this->commandData->commandInfo('show.blade.php created');
    }

    private function generateShowFields()
    {
        ####table header
        $fieldTemplate = TemplateUtil::getTemplate('scaffold.views.show_table_header', $this->templateType);
        $fieldsStr = '';

        foreach ($this->commandData->inputFields as $field) {
            if($field['inGrid']) {
                $singleFieldStr = str_replace('$FIELD_NAME_TITLE$', Str::title(str_replace('_', ' ', $field['fieldName'])), $fieldTemplate);
                $singleFieldStr = str_replace('$FIELD_NAME$', $field['fieldName'], $singleFieldStr);
                $singleFieldStr = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $singleFieldStr);

                $fieldsStr .= $singleFieldStr . "\n\n";
            }
        }
       $fieldsStr = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $fieldsStr);
        FileUtil::createFile($this->path, $this->commandData->modelName.'show_table_header.blade.php', $fieldsStr);
        ####table fields
        $fieldTemplate = TemplateUtil::getTemplate('scaffold.views.show_table_fields', $this->templateType);
        $fieldsStr = '';

        foreach ($this->commandData->inputFields as $field) {
            if($field['inGrid']) {
                $singleFieldStr = str_replace('$FIELD_NAME_TITLE$', Str::title(str_replace('_', ' ', $field['fieldName'])), $fieldTemplate);
                $singleFieldStr = str_replace('$FIELD_NAME$', $field['fieldName'], $singleFieldStr);
                $singleFieldStr = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $singleFieldStr);

                $fieldsStr .= $singleFieldStr . "\n\n";
            }
        }
        $fieldsStr = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $fieldsStr);
        FileUtil::createFile($this->path, $this->commandData->modelName.'show_table_fields.blade.php', $fieldsStr);


        $this->commandData->commandInfo('show_fields.blade.php created');
    }

    public function rollback()
    {
        $files = [
            'table.blade.php',
            'index.blade.php',
            'fields.blade.php',
            'create.blade.php',
            'edit.blade.php',
            'show.blade.php',
            'show_fields.blade.php',
        ];

        foreach ($files as $file) {
            if ($this->rollbackFile($this->path, $file)) {
                $this->commandData->commandComment($file.' file deleted');
            }
        }
    }
}
