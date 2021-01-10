<?php

namespace LivewirePackageDemo\Tests\Browser\ComponentWithCustomInput;

use Laravel\Dusk\Browser;
use Livewire\Livewire;
use LivewirePackageDemo\Tests\Browser\TestCase;

class ComponentWithCustomInputTest extends TestCase
{
    /** @test */
    public function component_contains_custom_input()
    {
        $this->browse(function (Browser $browser) {
            Livewire::visit($browser, ComponentWithCustomInput::class)
                    ->assertValue('@model-input', 'Bob')
                    ->assertSeeIn('@model-output', 'Bob')
                    ->waitForLivewire()->type('@model-input', 'Gary')
                    ->assertValue('@model-input', 'Gary')
                    ->assertSeeIn('@model-output', 'Gary')
                    ;
        });
    }
}
