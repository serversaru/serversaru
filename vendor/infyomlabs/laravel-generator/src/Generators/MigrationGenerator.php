<?php

namespace InfyOm\Generator\Generators;

use File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use InfyOm\Generator\Common\CommandData;
use InfyOm\Generator\Utils\FileUtil;
use InfyOm\Generator\Utils\SchemaUtil;
use InfyOm\Generator\Utils\TemplateUtil;
use SplFileInfo;

class MigrationGenerator extends BaseGenerator
{
    /** @var CommandData */
    private $commandData;

    /** @var string */
    private $path;

    public function __construct($commandData)
    {
        $this->commandData = $commandData;
        $this->path = $commandData->config->pathModel.'/'. $this->commandData->modelName.'/Migration/';
    }

    public function generate()
    {
 
        $templateData = TemplateUtil::getTemplate('migration', 'laravel-generator');

        $templateData = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $templateData);

        $templateData = str_replace('$FIELDS$', $this->generateFields(), $templateData);
        $tableName=str::plural($this->commandData->modelName);
        $link_name=strtolower($tableName);
        $addToModuleStr='DB::table("modules")->insert(
            array("name" =>"'.$this->commandData->modelName.'","link_name" => "'.$link_name.'","status"=>1,"created_at"=>"'.date('Y-m-d H:i:s').'")
        );';

        $templateData = str_replace('###Add to module table', $addToModuleStr, $templateData);

        $tableName = $this->commandData->dynamicVars['$TABLE_NAME$'];

        $fileName = date('Y_m_d_His').'_'.$this->commandData->modelName.'.php';


        $str1 = file_get_contents(base_path('vendor/composer/autoload_classmap.php'));
        $dumpstr="    '".$this->commandData->modelName."'".' => $baseDir . '."'/database/migrations/$fileName',";
        $fine_str="'Zizaco\\\\Entrust\\\\MigrationCommand' => ".'$vendorDir'." . '/zizaco/entrust/src/commands/MigrationCommand.php',";
        $str11=str_replace($fine_str,$fine_str."\n".$dumpstr."\n",$str1);
        file_put_contents(base_path('vendor/composer/autoload_classmap.php'),  $str11);


        \Session::put('migration_fileName',$fileName); 
        FileUtil::createFile($this->path, $fileName, $templateData);
        chmod(base_path('modules/'.$this->commandData->modelName.'/Migration/'),0777);
        chmod(base_path('modules/'.$this->commandData->modelName.'/Migration/'.$fileName),0777);
        $this->commandData->commandComment("\nMigration created: ");
        $this->commandData->commandInfo($fileName);

    }

    private function generateFields()
    {
        $fields = [];

        foreach ($this->commandData->inputFields as $field) {
            if ($field['fieldName'] == 'created_at' or $field['fieldName'] == 'updated_at') {
                continue;
            }
            $fields[] = SchemaUtil::createField($field);
        }

        $fields[] = '$table->timestamps();';
        /*
        if ($this->commandData->getOption('softDelete')) {
            $fields[] = '$table->softDeletes();';
        }*/

        return implode(infy_nl_tab(1, 3), $fields);
    }

    public function rollback()
    {
        $fileName = 'create_'.$this->commandData->config->tableName.'_table.php';

        /** @var SplFileInfo $allFiles */
        $allFiles = File::allFiles($this->path);

        $files = [];

        foreach ($allFiles as $file) {
            $files[] = $file->getFilename();
        }

        $files = array_reverse($files);

        foreach ($files as $file) {
            if (Str::contains($file, $fileName)) {
                if ($this->rollbackFile($this->path, $file)) {
                    $this->commandData->commandComment('Migration file deleted: '.$file);
                }
                break;
            }
        }
    }
}
