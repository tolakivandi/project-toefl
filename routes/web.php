<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.welcome');
});

Route::get('/online-course', function () {
    return view('online_course.online_course');
});

Route::get('/contact', function () {
    return view('dashboard.contact');
});

Route::get('/log', function () {
    return view('login.login');
});

Route::get('/regis', function () {
    return view('login.register');
});

Route::get('/about', function () {
    return view('about.about_us');
});

Route::get('/kls', function () {
    return view('kelas.class');
});

Route::get('/detail', function () {
    return view('kelas.detail_class');
});
