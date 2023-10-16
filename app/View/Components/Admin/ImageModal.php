<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class ImageModal extends Component
{
    public $imageUrl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.image-modal', [
            'imageUrl' => $this->imageUrl,
        ]);
    }
}
