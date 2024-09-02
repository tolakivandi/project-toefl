<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.welcome');
});
Route::get('/online-course', function () {
    return view('dashboard.online_course');
});
