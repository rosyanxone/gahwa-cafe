<?php

use App\Http\Controllers\Users\DashboardController;
use App\Http\Controllers\Users\QuestionController;

Route::middleware('auth')->group(function () { 
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

    Route::controller(QuestionController::class)->name('question.')->prefix('question')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/reorder/{question}', 'reorder')->name('reorder');
        Route::get('/destroy/{question}', 'destroy')->name('destroy');
    });

    Route::middleware(['auth', 'role:admin'])->group(function () { });
 });
