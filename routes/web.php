<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/reports', function () {
    return view('reports');
});

Route::get('/settings', function () {
    return view('settings');
});
