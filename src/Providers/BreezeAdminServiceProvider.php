<?php

namespace Kazuha\BreezeAdmin\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class BreezeAdminServiceProvider extends ServiceProvider
{


    public function register()
    {
        $this->commands([
            \Kazuha\BreezeAdmin\Console\Commands\CreateAdminUser::class,
        ]);
    }
    public function boot()
    {
        
        // Rotas
        $this->loadRoutesFrom(__DIR__.'/../Routes/admin.php');

        // Views
        $this->loadViewsFrom(__DIR__.'/../../Resources/Views', 'breezeadmin');

        $this->app['router']->aliasMiddleware('isadmin', \Kazuha\BreezeAdmin\Http\Middleware\IsAdmin::class);

        // Config
        $this->publishes([
            __DIR__.'/../Config/breezeadmin.php' => config_path('breezeadmin.php'),
            __DIR__.'/../../Resources/Views' => resource_path('views/vendor/breezeadmin'),
        ], 'breezeadmin-config', 'views');

        // Migrations
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');
    }
}