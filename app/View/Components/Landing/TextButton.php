<?php

namespace App\View\Components\Landing;

use Illuminate\View\Component;

class TextButton extends Component
{
    public $route;
    public $color;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $route, string $color = 'text-custom-orange')
    {
        $this->route = $route;
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.text-button', [
            'route' => $this->route,
            'color' => $this->color,
        ]);
    }
}
