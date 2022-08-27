<?php

namespace App\View\Components\Forms\Buttons;

use Illuminate\View\Component;

class Cancel extends Component
{

    public ?string $text = null;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(?string $text = "Cancel")
    {
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.buttons.cancel');
    }
}
