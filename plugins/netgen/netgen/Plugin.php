<?php namespace Netgen\Netgen;

use System\Classes\PluginBase;
use Event;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Netgen\Netgen\Components\RegisterComplaint' => 'RegisterComplaint',
        ];
    }

    public function registerSettings()
    {
    }


    public function boot(){
        
    }
}
