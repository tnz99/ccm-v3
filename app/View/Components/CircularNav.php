<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CircularNav extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $cnavBackground,
        public bool $darkMode
    )
    {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.circular-nav');
    }
}
