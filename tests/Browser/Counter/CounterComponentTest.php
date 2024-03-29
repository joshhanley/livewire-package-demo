<?php

namespace LivewirePackageDemo\Tests\Browser\Counter;

use Livewire\Livewire;
use LivewirePackageDemo\CounterComponent;
use LivewirePackageDemo\Tests\Browser\TestCase;

class CounterComponentTest extends TestCase
{
    /** @test */
    public function it_can_be_increased_and_decreased()
    {
        Livewire::visit(CounterComponent::class)
                ->assertSeeIn('@count', 0)
                ->waitForLivewire()->click('@increase')
                ->assertSeeIn('@count', '1')
                ->waitForLivewire()->click('@increase')
                ->waitForLivewire()->click('@increase')
                ->waitForLivewire()->click('@increase')
                ->assertSeeIn('@count', '4')
                ->waitForLivewire()->click('@decrease')
                ->waitForLivewire()->click('@decrease')
                ->assertSeeIn('@count', '2')
                ->waitForLivewire()->click('@decrease')
                ->waitForLivewire()->click('@decrease')
                ->assertSeeIn('@count', '0')
        ;
    }
}
