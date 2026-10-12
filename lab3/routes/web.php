<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');