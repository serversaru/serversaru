<?php

namespace InfyOm\Generator\Generators;

use Illuminate\Support\Facades\Artisan;
use InfyOm\Generator\Common\CommandData;
use InfyOm\Generator\Utils\FileUtil;
use InfyOm\Generator\Utils\TableFieldsGenerator;
use InfyOm\Generator\Utils\TemplateUtil;

class ModelGenerator extends BaseGenerator
{
    /** @var CommandData */
    private $commandData;

    /** @var string */
    private $path;

    /** @var string */
    private $composerpath;
    /** @var string */
    private $fileName;

    public function __construct(CommandData $commandData)
    {

        $this->commandData = $commandData;

        FileUtil::createFile($commandData->config->pathModel.'/'. $this->commandData->modelName.'/Lang/en/', 'message.php', '<?php  return [ ];');
        $this->path = $commandData->config->pathModel.'/'. $this->commandData->modelName.'/Model/';
        $this->composerpath = $commandData->config->pathModel.'/'. $this->commandData->modelName.'/';
        $this->fileName = $this->commandData->modelName.'.php';

    }

    public function generate() 
    {
        $templateData = TemplateUtil::getTemplate('model', 'laravel-generator');
        $templateData = $this->fillTemplate($templateData);
        FileUtil::createFile($this->path, $this->fileName, $templateData);

        $templateData = TemplateUtil::getTemplate('composer', 'laravel-generator');
        $templateData = $this->fillTemplate($templateData);
        FileUtil::createFile($this->composerpath,  $this->commandData->modelName.'composer.json', $templateData);

        $templateData = TemplateUtil::getTemplate('serviceprovider', 'laravel-generator');
        $templateData = $this->fillTemplate($templateData);
        FileUtil::createFile($this->composerpath,  $this->commandData->modelName.'ServiceProvider.php', $templateData);

        ####write in composer.json
        $str = file_get_contents(base_path('composer.json'));
        $str1=str_replace('"psr-4": {','"psr-4": {'."\n".'            '.'"'.$this->commandData->modelName.'\\\\'.'"'.': '.'"'."modules".'/'.$this->commandData->modelName.'/'.'"'.',',$str);
        file_put_contents(base_path('composer.json'),$str1);
        ######

        ####write in config/app.php
        $str22=$this->commandData->modelName.'\\'. $this->commandData->modelName.'ServiceProvider::class'.', //'. $this->commandData->modelName.'  module';
        $str1 = file_get_contents(base_path('config/app.php'));
        $str1=str_replace("'providers' => [","'providers' => ["."\n".'        '.$str22,$str1);
        file_put_contents(base_path('config/app.php'),  $str1);

/*
$add=base_path('vendor');
   system ("chmod 777 $add");

$add=base_path('vendor/composer');
   system ("chmod 777 $add");
$add=base_path('vendor/composer/autoload_psr4.php');
   system ("chmod 777 $add");
            $str1 = file_get_contents(base_path('vendor/composer/autoload_psr4.php'));
            $dumpstr="    '".$this->commandData->modelName.'\\\\'."'".'=> array($baseDir . '."'/modules/".$this->commandData->modelName."'),";
            $fine_str="'App\\\\' => array(".'$baseDir . '."'/app'),";
            $str11=str_replace($fine_str,$fine_str."\n".$dumpstr."\n",$str1);
            file_put_contents(base_path('vendor/composer/autoload_psr4.php'),  $str11);
*/


        $this->commandData->commandComment("\nModel created: ");
        $this->commandData->commandInfo($this->fileName);

    }

    private function fillTemplate($templateData)
    {
        $templateData = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);

        $templateData = $this->fillSoftDeletes($templateData);

        $fillables = [];

        foreach ($this->commandData->inputFields as $field) {
            if ($field['fillable']==true) {
                $fillables[] = "'".$field['fieldName']."'";
            }
        }

        $searchable = [];
        $i=100;
        foreach ($this->commandData->inputFields as $field) {
            if ($field['searchable']) {
                if($field['htmlType']!='multipleImage')
                $searchable[] = "'".$this->commandData->dynamicVars['$TABLE_NAME$'].'.'.$field['fieldName']."'".'=>'.$i;
                $i++;
            }
        }
        $templateData = $this->fillDocs($templateData);

        $templateData = $this->fillTimestamps($templateData);

        if ($this->commandData->getOption('primary')) {
            $primary = infy_tab()."protected \$primaryKey = '".$this->commandData->getOption('primary')."';\n";
        } else {
            $primary = '';
        }

        $templateData = str_replace('$PRIMARY$', $primary, $templateData);

        $templateData = str_replace('$FIELDS$', implode(','.infy_nl_tab(1, 2), $fillables), $templateData);
        $tempstr=implode(','.infy_nl_tab(1, 1), $searchable);
        $templateData = str_replace('$SEARCHABLE$', $tempstr.',', $templateData);

        $templateData = str_replace('$RULES$', implode(','.infy_nl_tab(1, 2), $this->generateRules()), $templateData);

        $templateData = str_replace('$CAST$', implode(','.infy_nl_tab(1, 2), $this->generateCasts()), $templateData);

        return $templateData;
    }

    private function fillSoftDeletes($templateData)
    {
        if (!$this->commandData->getOption('softDelete')) {
            $templateData = str_replace('$SOFT_DELETE_IMPORT$', '', $templateData);
            $templateData = str_replace('$SOFT_DELETE$', '', $templateData);
            $templateData = str_replace('$SOFT_DELETE_DATES$', '', $templateData);
        } else {
            $templateData = str_replace(
                '$SOFT_DELETE_IMPORT$', "use Illuminate\\Database\\Eloquent\\SoftDeletes;\n",
                $templateData
            );
            $templateData = str_replace('$SOFT_DELETE$', infy_tab()."use SoftDeletes;\n", $templateData);
            $deletedAtTimestamp = config('infyom.laravel_generator.timestamps.deleted_at', 'deleted_at');
            $templateData = str_replace(
                '$SOFT_DELETE_DATES$', infy_nl_tab()."protected \$dates = ['".$deletedAtTimestamp."'];\n",
                $templateData
            );
        }

        return $templateData;
    }

    private function fillDocs($templateData)
    {
        if ($this->commandData->getAddOn('swagger')) {
            $templateData = $this->generateSwagger($templateData);
        } else {
            $docsTemplate = TemplateUtil::getTemplate('docs.model', 'laravel-generator');
            $docsTemplate = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $docsTemplate);
            $templateData = str_replace('$DOCS$', $docsTemplate, $templateData);
        }

        return $templateData;
    }

    private function fillTimestamps($templateData)
    {
        $timestamps = TableFieldsGenerator::getTimestampFieldNames();

        $replace = '';

        if ($this->commandData->getOption('fromTable')) {
            if (empty($timestamps)) {
                $replace = infy_nl_tab()."public \$timestamps = false;\n";
            } else {
                list($created_at, $updated_at) = collect($timestamps)->map(function ($field) {
                    return !empty($field) ? "'$field'" : 'null';
                });

                $replace .= infy_nl_tab()."const CREATED_AT = $created_at;";
                $replace .= infy_nl_tab()."const UPDATED_AT = $updated_at;\n";
            }
        }

        return str_replace('$TIMESTAMPS$', $replace, $templateData);
    }

    public function generateSwagger($templateData)
    {
        $fieldTypes = SwaggerGenerator::generateTypes($this->commandData->inputFields);

        $template = TemplateUtil::getTemplate('model.model', 'swagger-generator');

        $template = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $template);

        $template = str_replace('$REQUIRED_FIELDS$', implode(', ', $this->generateRequiredFields()), $template);

        $propertyTemplate = TemplateUtil::getTemplate('model.property', 'swagger-generator');

        $properties = SwaggerGenerator::preparePropertyFields($propertyTemplate, $fieldTypes);

        $template = str_replace('$PROPERTIES$', implode(",\n", $properties), $template);

        $templateData = str_replace('$DOCS$', $template, $templateData);

        return $templateData;
    }

    private function generateRequiredFields()
    {
        $requiredFields = [];

        foreach ($this->commandData->inputFields as $field) {
            if (!empty($field['validations'])) {
                if (str_contains($field['validations'], 'required')) {
                    $requiredFields[] = $field['fieldName'];
                }
            }
        }

        return $requiredFields;
    }

    private function generateRules()
    {
        $rules = [];

        foreach ($this->commandData->inputFields as $field) {
            if (!empty($field['validations'])) {
                $rule = "'".$field['fieldName']."' => '".$field['validations']."'";
                $rules[] = $rule;
            }
        }

        return $rules;
    }

    public function generateCasts()
    {
        $casts = [];

        $timestamps = TableFieldsGenerator::getTimestampFieldNames();

        foreach ($this->commandData->inputFields as $field) {
            if (in_array($field['fieldName'], $timestamps)) {
                continue;
            }

            switch ($field['fieldType']) {
                case 'integer':
                    $rule = "'".$field['fieldName']."' => 'integer'";
                    break;
                case 'double':
                    $rule = "'".$field['fieldName']."' => 'double'";
                    break;
                case 'float':
                    $rule = "'".$field['fieldName']."' => 'float'";
                    break;
                case 'boolean':
                    $rule = "'".$field['fieldName']."' => 'boolean'";
                    break;
                case 'dateTime':
                case 'dateTimeTz':
                    $rule = "'".$field['fieldName']."' => 'datetime'";
                    break;
                case 'date':
                    $rule = "'".$field['fieldName']."' => 'date'";
                    break;
                case 'enum':
                case 'string':
                case 'char':
                case 'text':
                    $rule = "'".$field['fieldName']."' => 'string'";
                    break;
                default:
                    $rule = '';
                    break;
            }

            if (!empty($rule)) {
                $casts[] = $rule;
            }
        }

        return $casts;
    }

    public function rollback()
    {
        if ($this->rollbackFile($this->path, $this->fileName)) {
            $this->commandData->commandComment('Model file deleted: '.$this->fileName);
        }
    }
}
