<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MdbSidebarMenu extends Component
{
    public array $menu_items;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->menu_items = [
            [
                'name'          => __('Dashboard'),
                'route'         => 'dashboard.index', //Prioridade por rota, depois o link caso nenhum, utilizará o '#!{name}'
                'link'          => 'https://site.com', //https://site.com || url('meu-link')
                'icon'          => 'fa fa-tachometer-alt',
                'flag_active'   => true, //Por padrão o item de menu é true
                'flag_active_class' => 'active',
                'flag_active_style' => '',
            ],
            [
                'name'          => __('CS - Onboarding'),
                'route'         => null,
                'link'          => null,
                'icon'          => 'fas fa-plane-departure',
                'flag_active'   => true,
                'flag_active_class' => 'active',
                'flag_active_style' => '',
            ],
            [
                'name'          => __('Webiste traffic'),
                'route'         => null,
                'link'          => null,
                'icon'          => 'fas fa-chart-area fa-fw me-3',
                'flag_active'   => true,
                'flag_active_class' => 'active',
                'flag_active_style' => '',
            ],
            [
                'name'          => __('SEO'),
                'route'         => null,
                'link'          => null,
                'icon'          => 'fas fa-chart-pie fa-fw me-3',
                'flag_active'   => true,
                'flag_active_class' => 'active',
                'flag_active_style' => '',
            ],
            [
                'name'          => __('Orders'),
                'route'         => null,
                'link'          => null,
                'icon'          => 'fas fa-chart-bar fa-fw me-3',
                'flag_active'   => true,
                'flag_active_class' => 'active',
                'flag_active_style' => '',
            ],
            [
                'name'          => __('Partners'),
                'route'         => null,
                'link'          => null,
                'icon'          => 'fas fa-building fa-fw me-3',
                'flag_active'   => true,
                'flag_active_class' => 'active',
                'flag_active_style' => '',
            ],
            [
                'name'          => __('Calendar'),
                'route'         => null,
                'link'          => null,
                'icon'          => 'fas fa-calendar fa-fw me-3',
                'flag_active'   => true,
                'flag_active_class' => 'active',
                'flag_active_style' => '',
            ],
            [
                'name'          => __('Users'),
                'route'         => null,
                'link'          => null,
                'icon'          => 'fas fa-users fa-fw me-3',
                'flag_active'   => true,
                'flag_active_class' => 'active',
                'flag_active_style' => '',
            ],
            [
                'name'          => __('Sales'),
                'route'         => null,
                'link'          => null,
                'icon'          => 'fas fa-money-bill fa-fw me-3',
                'flag_active'   => true,
                'flag_active_class' => 'active',
                'flag_active_style' => '',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mdb-sidebar-menu');
    }
}
