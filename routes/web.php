<?php

use App\Enums\RolesEnum;
use App\Enums\RoomTypes;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomController;
use App\Models\Room;
use Illuminate\Support\Facades\Route;

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('/', function () {

    if (auth()->user() && auth()->user()->role == RolesEnum::MANAGER->value) {
        return redirect(route('dashboard'));
    }

    $rooms = Room::all();
    $roomTypes = RoomTypes::cases();

    return view('home', compact('rooms', 'roomTypes'));
})->name('home');

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
Route::get('/rooms/{room}', [RoomController::class, 'show'])->name('rooms.show');



Route::middleware(['auth', 'role:customer'])->group(function () {
    // Reservation routes
    Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
    Route::get('/my-reservations', [ReservationController::class, 'myReservations'])->name('reservations.my');
    route::get('reservations/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
    route::patch('reservations/{reservation}', [ReservationController::class, 'update'])->name('reservations.update');
    route::delete('reservations/{reservation}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

    // Review
    route::get('/reviews', [ReviewController::class, 'create'])->name('reviews.create');
    route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
});
require __DIR__.'/auth.php';
