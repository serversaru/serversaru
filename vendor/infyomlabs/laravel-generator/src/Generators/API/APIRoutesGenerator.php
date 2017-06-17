<?php

namespace InfyOm\Generator\Generators\API;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use InfyOm\Generator\Common\CommandData;
use InfyOm\Generator\Generators\BaseGenerator;
use InfyOm\Generator\Utils\FileUtil;
use InfyOm\Generator\Utils\TemplateUtil;

class APIRoutesGenerator extends BaseGenerator
{
    /** @var CommandData */
    private $commandData;

    /** @var string */
    private $path;

    /** @var string */
    private $routeContents;

    /** @var string */
    private $routesTemplate;

    public function __construct(CommandData $commandData)
    {
        $this->commandData = $commandData;
       /* if (!file_exists($this->path.'/'. $this->commandData->modelName.'/Route')) {
            mkdir($this->path.'/'. $this->commandData->modelName.'/Route', 0755, true);

        }*/
        $this->path = $commandData->config->pathModel.'/'. $this->commandData->modelName.'/Route/';


        $routesTemplate = TemplateUtil::getTemplate('api.routes.routes', 'laravel-generator');

        $this->routesTemplate = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $routesTemplate);
    }

    public function generate()
    {
        $this->routeContents .= "\n\n".$this->routesTemplate;

       // file_put_contents($this->path, $this->routeContents);

        FileUtil::createFile($this->path, 'routes.php',  $this->routeContents);


        $this->commandData->commandComment("\n".$this->commandData->config->mCamelPlural.' api routes added.');
    }

    public function rollback()
    {
        if (Str::contains($this->routeContents, $this->routesTemplate)) {
            $this->routeContents = str_replace($this->routesTemplate, '', $this->routeContents);
            file_put_contents($this->path, $this->routeContents);
            $this->commandData->commandComment('api routes deleted');
        }
    }
}
