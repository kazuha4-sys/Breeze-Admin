<?php

use Illuminate\Support\Facades\Route;
use Kazuha\BreezeAdmin\Http\Controllers\UserController;
use Kazuha\BreezeAdmin\Http\Controllers\DashboardController;

Route::middleware(['web', 'auth'])
    ->prefix('admin')
    ->group(function () {

        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])
            ->name('breezeadmin.dashboard');

        // Users
        Route::get('/users', [UserController::class, 'index'])
            ->name('breezeadmin.users.index');

        Route::post('/users', [UserController::class, 'store'])
            ->name('breezeadmin.users.store');
    });
