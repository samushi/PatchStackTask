<?php

namespace App\View\Components\Forms\Buttons;

use Illuminate\View\Component;

class Delete extends Component
{

    public ?int $id = null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(?int $id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.buttons.delete');
    }
}
