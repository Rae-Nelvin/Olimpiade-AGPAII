<?php

namespace App\View\Components\Landing;

use Illuminate\View\Component;

class NavLink extends Component
{
    public $route;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $route, string $name)
    {
        $this->route = $route;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.nav-link', ['route' => $this->route, 'name' => $this->name, 'active' => $this->route === request()->path() ? 'active' : '']);
    }
}
