<?php

namespace App\View\Components\Landing;

use Illuminate\View\Component;

class TimelineTile extends Component
{
    public $date;
    public $event;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $date, string $event)
    {
        $this->date = $date;
        $this->event = $event;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.timeline-tile', [
            'date' => $this->date,
            'event' => $this->event,
        ]);
    }
}
