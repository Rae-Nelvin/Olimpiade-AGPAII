<?php

namespace App\View\Components\Admin;

use App\Models\User;
use Illuminate\View\Component;

class DeleteModal extends Component
{
    public $id;
    public User $user;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
        $this->user = User::find($id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.delete-modal', [
            'user' => $this->user,
        ]);
    }
}
