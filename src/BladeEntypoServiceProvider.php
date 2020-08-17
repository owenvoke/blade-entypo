<?php

declare(strict_types=1);

namespace OwenVoke\BladeEntypo;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

final class BladeEntypoServiceProvider extends ServiceProvider
{
    private const PATH = 'path';

    private const PREFIX = 'prefix';

    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('entypo', [
                self::PATH => __DIR__.'/../resources/svg',
                self::PREFIX => 'entypo',
            ]);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-entypo'),
            ], 'blade-entypo');
        }
    }
}
