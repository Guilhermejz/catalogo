<?php namespace Celepar\Catalogo\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Servicos Back-end Controller
 */
class Servico extends Controller {

    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Celepar.Catalogo', 'catalogo', 'servico');
    }
}