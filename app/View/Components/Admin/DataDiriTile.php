<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class DataDiriTile extends Component
{
    public $label;
    public $value;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $label, string $type, string $value)
    {
        $this->label = $label;
        $this->value = $value;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.data-diri-tile', [
            'label' => $this->label,
            'type' => $this->type,
            'value' => $this->value,
        ]);
    }
}
