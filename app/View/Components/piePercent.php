<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class piePercent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Int $progress,
        public string $textSize,
        public string $whitespaceBg,
        public string $bgType,
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pie-percent');
    }
}
