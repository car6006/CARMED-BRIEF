<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;

Route::get('/greeting', function () {
    return view('greeting');
});

Route::get('/doctors', [DoctorController::class, 'index'])
    ->name('doctors.index');

