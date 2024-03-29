<?php

namespace App\View\Components\Button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class IconTextOutlined extends Component
{
    public string $id;
    public string $class;
    public string $text;
    public string $icon;

    /**
     * @param string $id
     * @param string $class
     * @param string $text
     * @param string $icon
     */
    public function __construct(string $id, string $class, string $text, string $icon)
    {
        $this->id = $id;
        $this->class = $class;
        $this->text = $text;
        $this->icon = $icon;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button.icon-text-outlined');
    }
}
