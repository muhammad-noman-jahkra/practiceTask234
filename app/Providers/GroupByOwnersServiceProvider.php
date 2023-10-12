<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GroupByOwnersServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('groupByOwnersService', function ($app) {
            return new \App\Services\GroupByOwnersService();
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
