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
        return [
            'Kilamieaz\Indogram\Components\IndexPosts' => 'indexPosts',
            'Kilamieaz\Indogram\Components\CreatePosts' => 'createPosts',
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
        return [
            'indogram' => [
                'label' => 'indogram',
                'url' => Backend::url('kilamieaz/indogram/posts'),
                'icon' => 'icon-camera-retro',
                'permissions' => ['kilamieaz.indogram.*'],
                'order' => 500,

                'sideMenu' => [
                    'posts' => [
                        'label' => 'Posts',
                        'icon' => 'icon-cloud-upload',
                        'url' => Backend::url('kilamieaz/indogram/posts'),
                        'permissions' => ['kilamieaz.indogram.*'],
                    ],
                    'tag' => [
                        'label' => 'Tags',
                        'icon' => 'icon-tags',
                        'url' => Backend::url('kilamieaz/indogram/tags'),
                        'permissions' => ['kilamieaz.indogram.*'],
                    ]
                ]
            ],
        ];
    }
}
