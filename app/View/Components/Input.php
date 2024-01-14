<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $label;
    public $type;
    public $name;
    public $icon;
    public $placeholder;
    public $autocomplete;
    public $value;
    public function __construct($label,$type,$name,$icon,$placeholder,$autocomplete,$value="")
    {
        $this->label = $label;
        $this->type = $type;
        $this->name = $name;
        $this->icon = $icon;
        $this->placeholder = $placeholder;
        $this->autocomplete = $autocomplete;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
