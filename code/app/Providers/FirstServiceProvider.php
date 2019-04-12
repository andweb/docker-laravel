<?php

namespace App\Providers;

use App\Contracts\FirstContract;
use App\Services\FirstService;
use Illuminate\Support\ServiceProvider;

class FirstServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        echo PHP_EOL . 'F:boot ';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        echo PHP_EOL . 'F:reg ';

        $this->app->bind(FirstContract::class, function () {
            return new FirstService(1000);
        });
    }
}
