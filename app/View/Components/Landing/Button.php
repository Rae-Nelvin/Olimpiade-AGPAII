<?php

namespace App\View\Components\Landing;

use Illuminate\View\Component;

class Button extends Component
{
    public $background;
    public $border;
    public $textColor;
    public $hover;
    public $route;
    public $rounded;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $background = 'bg-transparent', string $border = 'border-custom-orange border-[1px]', string $textColor = 'text-custom-orange', string $hover= 'hover:bg-custom-orange hover:text-white', string $rounded = 'rounded-lg', string $route = '')
    {
        $this->background = $background;
        $this->border = $border;
        $this->textColor = $textColor;
        $this->hover = $hover;
        $this->route = $route;
        $this->rounded = $rounded;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.button', [
            'background' => $this->background,
            'border' => $this->border,
            'textColor' => $this->textColor,
            'hover' => $this->hover,
            'route' => $this->route,
            'rounded' => $this->rounded,
        ]);
    }
}
