<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function () {

    Route::view('/rice', 'rice.index')->name('rice.index');
    
    Route::view('/rice/create', 'rice.create')->name('rice.create');
    Route::view('/rice/edit', 'rice.edit')->name('rice.edit');

    Route::view('/orders', 'orders.index')->name('orders.index');
    Route::view('/orders/create', 'orders.create')->name('orders.create');

    Route::view('/payments', 'payments.index')->name('payments.index');
});

require __DIR__.'/auth.php';
