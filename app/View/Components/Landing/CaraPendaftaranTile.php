<?php

namespace App\View\Components\Landing;

use Illuminate\View\Component;

class CaraPendaftaranTile extends Component
{
    public $number;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.cara-pendaftaran-tile', [
            'number' => $this->number,
        ]);
    }
}
