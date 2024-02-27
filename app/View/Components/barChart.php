<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class barChart extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $bars,
    ) {
    }

    public function getColorBasedOnValue($value): string
    {
        if ($value <= 25) {
            return '#C83042';
        } elseif ($value > 25 && $value < 75) {
            return '#f28729';
        } else {
            return '#16732d';
        }
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bar-chart');
    }
}
