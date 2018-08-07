<?php namespace momo\Movies;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return[
            'momo\Movies\Components\Actors' => 'actors',
            'momo\Movies\Components\ActorForm' => 'actorform'
        ];
        
    }

    // test pour voir si la modification a été prise en compte après le clone
    public function registerFormwidgets()
    {
        return[
            'momo\Movies\Formwidgets\Actorbox' => [
                'label' => 'ActorBox field',
                'code' => 'actorbox'
            ]
        ];
    }


    public function registerSettings()
    {
    }
}
