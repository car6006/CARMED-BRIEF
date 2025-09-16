<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DashboardController;

Route::get('/greeting', function () {
    return view('greeting');
});

Route::get('/doctors', [DoctorController::class, 'index'])
    ->name('doctors.index');

Route::get('/dashboard', [DashboardController::class, 'index']);

