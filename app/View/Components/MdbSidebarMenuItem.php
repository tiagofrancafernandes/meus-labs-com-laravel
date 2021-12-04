<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Helpers\StrHelpers;
use Str;

class MdbSidebarMenuItem extends Component
{
    public array $item;
    public $name;
    public $route;
    public $link;
    public $icon;
    public $flag_active;
    public $flag_active_class;
    public $flag_active_style;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $item)
    {
        $this->item              = $item;
        $this->name              = StrHelpers::stringOrNull($item['name'] ?? null);
        $this->route             = StrHelpers::stringOrNull($item['route'] ?? null);
        $this->link              = StrHelpers::stringOrNull($item['link'] ?? null) ?: '#!'.Str::slug($this->name);
        $this->flag_active       = !! $item['flag_active'] ?? null;
        $this->flag_active_class = StrHelpers::stringOrNull($item['flag_active_class'] ?? null);
        $this->flag_active_style = StrHelpers::stringOrNull($item['flag_active_style'] ?? null);
        $this->icon              =  ($icon = StrHelpers::stringOrNull($item['icon'] ?? null, 3))
                                    ? '<i class="' . $icon . '"></i>' : null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mdb-sidebar-menu-item');
    }
}
