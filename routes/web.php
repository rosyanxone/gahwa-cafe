<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/questioner', function () {
    return view('pages.guest.questioner');
})->name('questioner');

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
})->name('dashboard');

Route::get('/question', function () {
    return view('pages.admin.question.index');
})->name('question.index');

Route::get('/question/create', function () {
    return view('pages.admin.question.create');
})->name('question.create');

Route::get('/respondent', function () {
    return view('pages.admin.respondent.index');
})->name('respondent.index');

Route::get('/kritiksaran', function () {
    return view('pages.admin.criticism-suggestion.index');
})->name('criticism-suggestion.index');

require __DIR__ . '/users.php';
