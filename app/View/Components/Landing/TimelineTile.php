<?php

namespace App\View\Components\Landing;

use Illuminate\View\Component;

class TimelineTile extends Component
{
    public $number;
    public $date;
    public $event;
    public $isActive;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $number, string $date, string $event, bool $isActive = false)
    {
        $this->number = $number;
        $this->date = $date;
        $this->event = $event;
        $this->isActive = $isActive;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.landing.timeline-tile', [
            'number' => $this->number,
            'date' => $this->date,
            'event' => $this->event,
            'isActive' => $this->isActive,
        ]);
    }
}
