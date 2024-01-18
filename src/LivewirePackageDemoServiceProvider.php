<?php

namespace LivewirePackageDemo;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LivewirePackageDemoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        ray('boot');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'lw-pkg-demo');

        Livewire::component('counter-component', CounterComponent::class);
    }
}
