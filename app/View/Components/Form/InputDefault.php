<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputDefault extends Component
{
    public string $id;
    public string $class;
    public string $name;
    public string $placeHolder;
    public string $label;
    public string $val;


    /**
     * Create a new component instance.
     */
    public function __construct(string $id, string $class, string $name, string $placeHolder, string $label,string $val="kong")
    {
        $this->id = $id;
        $this->class = $class;
        $this->name = $name;
        $this->placeHolder = $placeHolder;
        $this->label = $label;
        $this->val = $val;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input-default');
    }
}
