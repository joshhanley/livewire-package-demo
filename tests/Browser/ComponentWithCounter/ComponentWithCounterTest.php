<?php

namespace LivewirePackageDemo\Tests\Browser\ComponentWithCounter;

use Laravel\Dusk\Browser;
use Livewire\Livewire;
use LivewirePackageDemo\Tests\Browser\TestCase;

class ComponentWithCounterTest extends TestCase
{
    /** @test */
    public function counter_component_can_be_used_in_another_component()
    {
        $this->browse(function (Browser $browser) {
            Livewire::visit($browser, ComponentWithCounter::class)
                    ->assertSeeAnythingIn('@component-view')
                    ->assertSeeIn('@component-view', 0)
                    ;
        });
    }
}
