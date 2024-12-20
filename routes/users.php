<?php

use App\Http\Controllers\Users\DashboardController;
use App\Http\Controllers\Users\EmployeeController;
use App\Http\Controllers\Users\QuestionController;
use App\Http\Controllers\Users\RespondentController;

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

    Route::controller(RespondentController::class)->name('respondent.')->prefix('respondent')->group(function () {
        Route::get('/', 'index')->name('index');
    });

    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::controller(EmployeeController::class)->name('employee.')->prefix('employee')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{user}', 'edit')->name('edit');
            Route::post('/update/{user}', 'update')->name('update');
            Route::get('/destroy/{user}', 'destroy')->name('destroy');
        });
    });
});
