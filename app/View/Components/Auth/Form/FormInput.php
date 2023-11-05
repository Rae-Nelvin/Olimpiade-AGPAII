<?php

namespace App\View\Components\Auth\Form;

use Illuminate\View\Component;

class FormInput extends Component
{
    public $label;
    public $type;
    public $name;
    public $isPassword;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $label, string $type, string $name, bool $isPassword = false, string $value = null)
    {
        $this->label = $label;
        $this->type = $type;
        $this->name = $name;
        $this->isPassword = $isPassword;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.auth.form.form-input', [
            'label' => $this->label,
            'type' => $this->type,
            'name' => $this->name,
            'isPassword' => $this->isPassword,
            'value' => $this->value,
        ]);
    }
}
