<?php

namespace Kazuha\BreezeAdmin\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class BreezeAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Rotas
        $this->loadRoutesFrom(__DIR__.'/../Routes/admin.php');

        // Views
        $this->loadViewsFrom(__DIR__.'/../Views', 'breezeadmin');

        // Config
        $this->publishes([
            __DIR__.'/../Config/breezeadmin.php' => config_path('breezeadmin.php'),
        ], 'breezeadmin-config');

        // Migrations
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');
    }
}
