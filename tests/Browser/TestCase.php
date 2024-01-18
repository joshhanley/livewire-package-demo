<?php

namespace LivewirePackageDemo\Tests\Browser;

use LivewireDuskTestbench\TestCase as LivewireDuskTestbenchTestCase;
use LivewirePackageDemo\LivewirePackageDemoServiceProvider;

class TestCase extends LivewireDuskTestbenchTestCase
{
    public array $packageProviders = [
        LivewirePackageDemoServiceProvider::class,
    ];

    public function configureViewsDirectory(): string
    {
        // Resolves to 'tests/Browser/views'
        return __DIR__ . '/views';
    }
}
