<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Header extends Component
{
    public $role;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $role)
    {
        $this->role = $role;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.header', [
            'role' => $this->role
        ]);
    }
}
