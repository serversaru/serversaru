<?php

namespace InfyOm\Generator\Generators\Scaffold;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;
use InfyOm\Generator\Common\CommandData;
use InfyOm\Generator\Utils\FileUtil;
use InfyOm\Generator\Utils\TemplateUtil;

class RoutesGenerator
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
        /*if (!file_exists($this->path.'/'. $this->commandData->modelName.'/Route')) {
            mkdir($this->path.'/'. $this->commandData->modelName.'/Route', 0755, true);

        }*/
        $this->path = $commandData->config->pathModel.'/'. $this->commandData->modelName.'/Route/';
        $this->routesTemplate = TemplateUtil::getTemplate('scaffold.routes.routes', 'laravel-generator');
        $this->routesTemplate = TemplateUtil::fillTemplate($this->commandData->dynamicVars, $this->routesTemplate);
    }

    public function generate()
    {
        $this->routeContents .= $this->routesTemplate;
        FileUtil::createFile($this->path, 'routes.php',  $this->routeContents);
        $this->commandData->commandComment("\n".$this->commandData->config->mCamelPlural.' 000routes added.');
        Artisan::call("vendor:publish");
    }

    public function rollback()
    {
        if (Str::contains($this->routeContents, $this->routesTemplate)) {
            $this->routeContents = str_replace($this->routesTemplate, '', $this->routeContents);
            file_put_contents($this->path, $this->routeContents);
            $this->commandData->commandComment('scaffold routes deleted');
        }
    }
}
