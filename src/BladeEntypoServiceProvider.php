<?php

declare(strict_types=1);

namespace OwenVoke\BladeEntypo;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeEntypoServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-entypo', []);

            $factory->add('entypo', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-entypo.php', 'blade-entypo');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-entypo'),
            ], 'blade-entypo');

            $this->publishes([
                __DIR__.'/../config/blade-entypo.php' => $this->app->configPath('blade-entypo.php'),
            ], 'blade-entypo-config');
        }
    }
}
