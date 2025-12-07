<?php

use Illuminate\Support\Facades\Route;
use Kazuha\BreezeAdmin\Http\Controllers\DashboardController;
use Kazuha\BreezeAdmin\Http\Controllers\UserController;

Route::middleware(['web', 'auth', 'isadmin'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/', [DashboardController::class, 'index'])
            ->name('breezeadmin.dashboard');

        Route::get('/users', [UserController::class, 'index'])
            ->name('breezeadmin.users.index');

        Route::post('/users', [UserController::class, 'store'])
            ->name('breezeadmin.users.store');
    });
