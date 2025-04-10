<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardInfoBox extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $iconName,
        public string $title,
        public string $amount,
        public string $type
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-info-box');
    }
}
