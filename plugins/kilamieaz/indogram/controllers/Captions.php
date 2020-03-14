<?php namespace Kilamieaz\Indogram\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Captions Back-end Controller
 */
class Captions extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Kilamieaz.Indogram', 'indogram', 'captions');
    }
}
