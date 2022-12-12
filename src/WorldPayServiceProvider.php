<?php

namespace Rootways\Worldpay;
use Illuminate\Support\ServiceProvider;

class WorldPayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/worldpay.php' => config_path('worldpay.php'),
            __DIR__ . '/views/worldpay.php' => resource_path('worldpay.php'),
        ]);
    }
}
