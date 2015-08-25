<?php namespace Celepar\Catalogo;

use Backend;
use System\Classes\PluginBase;

/**
 * Catalogo Plugin Information File
 */
class Plugin extends PluginBase {

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Catálogo de Serviços',
            'description' => 'Catálogo de Serviços - Portal 2015',
            'author'      => 'Guilherme Joel Zawadzki',
            'icon'        => 'icon-book'
        ];
    }

    public function registerNavigation()
    {
        return [
            'catalogo' => [
                'label'       => 'Catalogo de serviços',
                'url'         => Backend::url('celepar/catalogo/servico'),
                'icon'       => 'icon-book',
                'permissions' => ['catalogo.*'],
                'order'       => 100,

                'sideMenu' => [
                    'servico' => [
                        'label'       => 'Serviços',
                        'icon'        => 'icon-files-o',
                        'url'         => Backend::url('celepar/catalogo/servico'),
                        'permissions' => ['catalogo.servico.access_servico']
                    ],
                    'tipos' => [
                        'label'       => 'Tipos de serviços',
                        'icon'        => 'icon-th-large',
                        'url'         => Backend::url('celepar/catalogo/tiposervico'),
                        'permissions' => ['catalogo.servico.access_tipo_servico']
                    ]
                ]
            ]
        ];
    }

}
