<?php

Route::middleware(['auth', 'role:admin'])->group(function () {});
Route::middleware(['auth', 'role:employee'])->group(function () {});
