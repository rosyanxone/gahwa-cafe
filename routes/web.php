<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionerController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login/store', 'store')->name('login.store');
    Route::post('/logout', 'destroy')->name('logout');
});

Route::controller(QuestionerController::class)->group(function () {
    Route::get('/questioner', action: 'index')->name('questioner.index');
    Route::post('/questioner/store', 'store')->name('questioner.store');
});

require __DIR__ . '/users.php';
