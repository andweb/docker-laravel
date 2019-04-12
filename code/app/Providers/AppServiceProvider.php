<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        echo PHP_EOL . 'App:boot ';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        echo PHP_EOL . 'App:reg ';
    }
}
