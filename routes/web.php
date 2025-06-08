<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:manager'])->group(function () {
    Route::resource('/rooms', RoomController::class)->names('rooms');
    Route::resource('/reservations', ReservationController::class)->names('reservations');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
require __DIR__.'/auth.php';
