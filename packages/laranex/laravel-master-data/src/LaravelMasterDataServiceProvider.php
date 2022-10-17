<?php

namespace Laranex\LaravelMasterData;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class LaravelMasterDataServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerRoutes();

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-master-data.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-master-data');

        $this->app->singleton('laravel-master-data', function () {
            return new LaravelMasterData;
        });
    }

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('laravel-master-data.prefix'),
            'middleware' => config('laravel-master-data.middleware'),
        ];
    }
}
