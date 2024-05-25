<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\Story;

class PageNav extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $navLinks,
        public int $nextHeadlineId
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-nav');
    }
}
