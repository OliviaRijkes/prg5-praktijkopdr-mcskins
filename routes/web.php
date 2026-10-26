<?php

use App\Http\Controllers\SkinsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/about', 'about');



Route::get('/skins',[SkinsController::class,'index'])
    ->name('skins.index');

Route::post('/skins',[SkinsController::class, 'store'])
    ->name('skins.store');

Route::get('/skins/create', [SkinsController::class, 'create'])
    ->name('skins.create');

Route::get('/skins/{skin}', [SkinsController::class, 'show'])
    ->name('skins.show');
