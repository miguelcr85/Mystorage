<?php namespace Mcramirez\Mystorage;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'mcramirez\mystorage\Components\Fastcode' => 'fastcode'
        ];
    }

    public function registerSettings()
    {
    }
}
