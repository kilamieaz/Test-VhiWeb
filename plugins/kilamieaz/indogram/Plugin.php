<?php

namespace Kilamieaz\Indogram;

use Backend;
use System\Classes\PluginBase;

/**
 * indogram Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'indogram',
            'description' => 'Sharing Photo',
            'author' => 'kilamieaz',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Kilamieaz\Indogram\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'kilamieaz.indogram.some_permission' => [
                'tab' => 'indogram',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'indogram' => [
                'label' => 'indogram',
                'url' => Backend::url('kilamieaz/indogram/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['kilamieaz.indogram.*'],
                'order' => 500,
            ],
        ];
    }
}
