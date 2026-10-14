<?php

use App\Http\Controllers\SkinsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about');
Route::resource('skins', SkinsController::class);

