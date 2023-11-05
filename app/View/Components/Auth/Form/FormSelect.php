<?php

namespace App\View\Components\Auth\Form;

use App\Models\Province;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class FormSelect extends Component
{
    public $label;
    public $name;
    public $datas;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $label, string $name, Collection $datas, int $value = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->datas = $datas;
        $this->value = Province::find($value);
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
            'value' => $this->value,
        ]);
    }
}
