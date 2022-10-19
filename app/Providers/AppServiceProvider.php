<?php

namespace App\Providers;

use App\Payment\Wire;
use App\Payment\WireAdapter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(WireAdapter::class, function ($app) {
            $wire = $app->make(Wire::class);
            return new WireAdapter($wire);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
