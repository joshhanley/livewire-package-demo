<?php

namespace LivewirePackageDemo\Tests\Browser;

use LivewireDuskTestbench\TestCase as LivewireDuskTestbenchTestCase;
use LivewirePackageDemo\LivewirePackageDemoServiceProvider;

class TestCase extends LivewireDuskTestbenchTestCase
{
    public $packageProviders = [
        LivewirePackageDemoServiceProvider::class
    ];

    public function configureViewsDirectory()
    {
        // Resolves to 'tests/Browser/views'
        $this->viewsDirectory = __DIR__.'/views';
    }
}
