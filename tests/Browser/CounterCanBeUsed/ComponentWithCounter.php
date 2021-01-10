<?php

namespace LivewirePackageDemo\Tests\Browser\CounterCanBeUsed;

use Livewire\Component;

class ComponentWithCounter extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div dusk='component-view'>
            <livewire:counter-component />
        </div>
        HTML;
    }
}
