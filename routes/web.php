<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MenuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\DetailCharacterController;

// Route::get('/character', function () {
//     return view('character');
// });

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/about',[AboutController::class, 'index'])->name('about.index');
Route::get('/character',[CharacterController::class, 'index'])->name('character.index');

Route::get('/detailCharacter',[DetailCharacterController::class, 'index'])->name('detailCharacter.index');
