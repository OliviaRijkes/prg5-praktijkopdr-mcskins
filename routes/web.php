<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkinsController;
use Illuminate\Support\Facades\Route;

//home
Route::get('/', function () {
    return view('welcome');
});

//breezy
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//simple page
Route::view('/about', 'about')
    ->name('about');

//skin pages
Route::get('/skins', [SkinsController::class, 'index'])
    ->name('skins.index');
Route::post('/skins', [SkinsController::class, 'store'])
    ->name('skins.store');
Route::get('/skins/create', [SkinsController::class, 'create'])
    ->name('skins.create');
Route::get('/skins/{skin}', [SkinsController::class, 'show'])
    ->name('skins.show');


require __DIR__ . '/auth.php';
