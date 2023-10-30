<?php

namespace App\View\Components\Auth\Form;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class FormSelect extends Component
{
    public $label;
    public $name;
    public $datas;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $label, string $name, Collection $datas)
    {
        $this->label = $label;
        $this->name = $name;
        $this->datas = $datas;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth.form.form-select', [
            'label' => $this->label,
            'name' => $this->name,
            'datas' => $this->datas,
        ]);
    }
}
