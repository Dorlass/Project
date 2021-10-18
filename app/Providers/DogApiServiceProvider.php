<?php

namespace App\Providers;

use App\Services\DogApiService;
use Illuminate\Support\ServiceProvider;

class DogApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(DogApiService::class, function(){
            return new DogApiService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
