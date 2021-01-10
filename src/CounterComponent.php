<?php

namespace LivewirePackageDemo;

use Livewire\Component;

class CounterComponent extends Component
{
    public $count = 0;

    public function decrease()
    {
        $this->count--;
    }

    public function increase()
    {
        $this->count++;
    }

    public function render()
    {
        return view('lw-pkg-demo::livewire.counter-component');
    }
}
