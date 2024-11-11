<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/about',[AboutController::class, 'index'])->name('about.index');
Route::get('/character',[AboutController::class, 'index'])->name('character.index');

