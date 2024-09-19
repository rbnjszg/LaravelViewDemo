<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CarController::class, "index"])->name("home");
Route::get('/autok/{id}', [CarController::class, "show"])
    ->whereNumber("id")
    ->name("show");