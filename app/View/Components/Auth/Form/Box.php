<?php

namespace App\View\Components\Auth\Form;

use Illuminate\View\Component;

class Box extends Component
{
    public $colSpan;
    public $subtitle;
    public $title;
    public $action;
    public $formClass;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $colSpan, string $subtitle, string $title, string $action, string $formClass)
    {
        $this->colSpan = $colSpan;
        $this->subtitle = $subtitle;
        $this->title = $title;
        $this->action = $action;
        $this->formClass = $formClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth.form.box', [
            'colSpan' => $this->colSpan,
            'subtitle' => $this->subtitle,
            'title' => $this->title,
            'action' => $this->action,
            'formClass' => $this->formClass,
        ]);
    }
}
