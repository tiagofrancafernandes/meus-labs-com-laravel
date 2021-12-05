<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MdbMainNavTeamSwitch extends Component
{
    public $current_team;
    public $allowed_teams;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->current_team = collect([
            'id'    => 2,
            'name'  => 'Vendas',
            'slug'  => 'vendas',
            'icon'  => 'fas fa-money-bill fa-fw',
        ]);

        $this->allowed_teams = collect([
            [
                'id'    => 2,
                'name'  => 'Vendas',
                'slug'  => 'vendas',
                'icon'  => 'fas fa-money-bill fa-fw',
            ],
            [
                'id'    => 2,
                'name'  => 'CS - Onboarding',
                'slug'  => 'cs-onboarding',
                'icon'  => 'fas fa-plane-departure',
            ],
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mdb-main-nav-team-switch');
    }
}
