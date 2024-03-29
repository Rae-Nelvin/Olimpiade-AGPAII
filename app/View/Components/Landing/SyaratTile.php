<?php

namespace App\View\Components\Landing;

use Illuminate\View\Component;

class SyaratTile extends Component
{
    public $itemsAlignment;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $itemsAlignment = 'items-start')
    {
        $this->itemsAlignment = $itemsAlignment;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.syarat-tile', [
            'itemsAlignment' => $this->itemsAlignment,
        ]);
    }
}
