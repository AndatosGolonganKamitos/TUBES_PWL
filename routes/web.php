<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/users', function () {
    return view('dashboard');
});

Route::get('/reports', function () {
    return view('dashboard');
});

Route::get('/settings', function () {
    return view('dashboard');
});
