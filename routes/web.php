<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('greeting');
});

Route::get('/greeting', function () {
    return view('greeting');
});

