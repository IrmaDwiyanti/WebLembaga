<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/Lembaga', function () {
    return view('Lembaga');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/profile', function () {
    return view('profile');
});