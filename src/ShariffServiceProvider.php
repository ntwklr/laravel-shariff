<?php

namespace Ntwklr\Shariff;

use Illuminate\Support\ServiceProvider;

class ShariffServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/shariff.php' => config_path('shariff.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/shariff'),
        ], 'views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'shariff');

        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/shariff.php', 'shariff');
    }
}