<?php

namespace OwenVoke\BladeEntypo\Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench;
use OwenVoke\BladeEntypo\BladeEntypoServiceProvider;

class TestCase extends Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            BladeIconsServiceProvider::class,
            BladeEntypoServiceProvider::class,
        ];
    }
}
