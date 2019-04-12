<?php

namespace App\Providers;

use App\Contracts\ThirdContract;
use App\Services\ThirdService;
use Illuminate\Support\ServiceProvider;

class ThirdServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        echo PHP_EOL . 'T:boot ';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        echo PHP_EOL . 'T:reg ';

        $this->app->bind(ThirdContract::class, function () {
            return new ThirdService;
        });
    }
}
