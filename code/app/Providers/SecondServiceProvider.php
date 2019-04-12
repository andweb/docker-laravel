<?php

namespace App\Providers;

use App\Contracts\FirstContract;
use App\Contracts\SecondContract;
use App\Services\SecondService;
use App\Contracts\ThirdContract;
use Illuminate\Support\ServiceProvider;

class SecondServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        echo PHP_EOL . 'S:boot ';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        echo PHP_EOL . 'S:reg ';

        $this->app->bind(SecondContract::class, function ($app) {
            return new SecondService($app->make(FirstContract::class), $app->make(ThirdContract::class));
        });
    }
}
