<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class NavLink extends Component
{
    public $route;
    public $name;
    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $route, string $name, bool $active = false)
    {
        $this->route = $route;
        $this->name = $name;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.nav-link', [
            'route' => $this->route, 'name' => $this->name, 'active' => $this->active
        ]);
    }
}
