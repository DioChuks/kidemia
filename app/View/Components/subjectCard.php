<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class subjectCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $logo,
        public string $title,
        public Int $topicAmount,
        public Int $id,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.subject-card');
    }
}
