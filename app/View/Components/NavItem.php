<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavItem extends Component
{
    public function __construct(
        public string $href,
        public string $active = ''
    ) {
        $this->active = $active ? 'active' : '';
    }

    public function render(): View|Closure|string
    {
        return view('components.nav-item');
    }
}
