<?php

namespace App\Providers\Algorithms;

use Illuminate\Support\ServiceProvider;

class AlgorithmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('algorithms', function ($app) {
            return new AlgorithmsManager($app);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
