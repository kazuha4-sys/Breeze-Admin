<?php

use Illuminate\Support\Facades\Route;
use Kazuha\BreezeAdmin\Http\Controllers\DashboardController;

Route::middleware(['web', 'auth'])
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('breezeadmin.dashboard');
    });
