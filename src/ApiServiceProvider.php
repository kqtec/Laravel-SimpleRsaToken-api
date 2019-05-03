<?php

namespace Kqtec\SimpleRsaTokenApi;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $commands = [
      
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
      
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
       
    ];

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
//        $this->loadViewsFrom(__DIR__.'/../resources/views', 'api');

        if (file_exists($routes = api_path('routes.php'))) {
            $this->loadRoutesFrom($routes);
        }

        if ($this->app->runningInConsole()) {
//            $this->publishes([__DIR__.'/../config' => config_path()], 'config');
//            $this->publishes([__DIR__.'/../resources/lang' => resource_path('lang')], 'lang');
//            $this->publishes([__DIR__.'/../resources/views' => resource_path('views/vendor/admin')],           'views');
//            $this->publishes([__DIR__.'/../database/migrations' => database_path('migrations')], 'migrations');
//            $this->publishes([__DIR__.'/../resources/assets' => public_path('vendor/laravel-admin')], 'laravel-admin-assets');
        }

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
      
    }
}
