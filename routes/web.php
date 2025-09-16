<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProfileController;

Route::view('/', 'welcome');

Route::resource('doctors', DoctorController::class); // Register doctors resource route first

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::view('/doctors', 'doctors.index')->name('doctors.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
=======
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DashboardController;

Route::get('/greeting', function () {
    return view('greeting');
});

Route::get('/doctors', [DoctorController::class, 'index'])
    ->name('doctors.index');

Route::get('/dashboard', [DashboardController::class, 'index']);

>>>>>>> 2290fb2479c24a1e8f1fa889dc56e48c4c3059d8
