<?php

namespace LivewirePackageDemo\Tests\Browser\ComponentWithCustomInput;

use Livewire\Component;

class ComponentWithCustomInput extends Component
{
    public $name = "Bob";

    public function render()
    {
        return <<<'HTML'
        <div>
            <x-lw-pkg-demo::custom-input wire:model="name" />
        </div>
        HTML;
    }
}
