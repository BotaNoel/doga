<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiftTypeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\GiftController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/new-gift-type', [GiftTypeController::class, 'create'])->name('gift_types.create');
Route::get('/gift_types', [GiftTypeController::class, 'index'])->name('gift_types.index');

Route::get('/new-user', [PersonController::class, 'create'])->name('users.create');
Route::get('/users', [PersonController::class, 'index'])->name('users.index');

Route::get('/new-gift', [GiftController::class, 'create'])->name('gifts.create');
Route::get('/gifts', [GiftController::class, 'index'])->name('gifts.index');

Route::post('/gift_types', [GiftTypeController::class, 'store'])->name('gift_types.store');
Route::post('/users', [PersonController::class, 'store'])->name('users.store');
Route::post('/gifts', [GiftController::class, 'store'])->name('gifts.store');

require __DIR__.'/auth.php';
