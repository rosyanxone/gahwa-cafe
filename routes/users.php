<?php

use App\Http\Controllers\Users\DashboardController;

Route::middleware('auth')->group(function () { 
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

    Route::middleware(['auth', 'role:admin'])->group(function () { });
 });
