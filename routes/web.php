<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/pusat', function () {
    return view('pusat');
});

Route::get('/ukm', function () {
    return view('ukm');
});


Route::get('/Lembaga', function () {
    return view('Lembaga');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/struktur2', function () {
    return view('struktur2');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/beritahome', function () {
    return view('beritahome');
});

Route::get('/puslitpen', function () {
    return view('puslitpen');
});

Route::get('/pkm', function () {
    return view('pkm');
});

Route::get('/pgsa', function () {
    return view('pgsa');
});