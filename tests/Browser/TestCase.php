<?php

namespace LivewirePackageDemo\Tests\Browser;

use LivewireDuskTestbench\TestCase as LivewireDuskTestbenchTestCase;
use LivewirePackageDemo\LivewirePackageDemoServiceProvider;

class TestCase extends LivewireDuskTestbenchTestCase
{
    public $packageProviders = [
        LivewirePackageDemoServiceProvider::class
    ];
}
