<?php

namespace Johnguild\Muffincms;

use Illuminate\Support\ServiceProvider;

class MuffincmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/muffincms/'),
            __DIR__.'/migrations' => base_path('database/migrations/'),
        ]);
        // $this->loadViewsFrom(__DIR__.'/views', 'muffincms');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        // include __DIR__.'/web.php';
        // $this->app->make('Johnguild\Muffincms\TestController');
    }
}
