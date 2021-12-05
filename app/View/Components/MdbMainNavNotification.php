<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MdbMainNavNotification extends Component
{
    public $notifications;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->notifications = collect([
            [
                'id'    => 111,
                'title' => 'Você tem novas mensagens',
                'time'  => now()->subSeconds(5),
                'url'   => '#',
                'to'    => null,
                'read'  => false,
            ],
            [
                'id'    => 112,
                'title' => 'Alguma notícia incrivel! Veja agora',
                'time'  => now()->subSeconds(15),
                'url'   => '#',
                'to'    => 'vendas',
                'read'  => true,
            ],
            [
                'id'    => 113,
                'title' => 'Pagamento caiu!',
                'time'  => now()->subSeconds(35),
                'url'   => '#',
                'to'    => 'all',
                'read'  => false,
            ],
            [
                'id'    => 114,
                'title' => 'Festa da firma confirmada',
                'time'  => now()->subDays(35),
                'url'   => '#',
                'to'    => 'all',
                'read'  => false,
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
        return view('components.mdb-main-nav-notification');
    }
}
