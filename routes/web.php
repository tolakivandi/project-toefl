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

Route::get('/detail_tim', function () {
    return view('about.detail_tim');
});

Route::get('/instructors', function () {
    return view('about.instructors');
});

Route::get('/blog', function () {
    return view('about.blog');
});

Route::get('/blog_detail', function () {
    return view('about.blog_detail');
});

Route::get('/komunitas', function () {
    return view('about.komunitas');
});

Route::get('/forum_detail', function () {
    return view('about.forum_detail');
});

Route::get('/event_detail', function () {
    return view('about.event_detail');
});

Route::get('/courses', function () {
    return view('online_course.courses');
});

Route::get('/course_detail', function () {
    return view('online_course.course_detail');
});