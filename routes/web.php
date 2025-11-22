<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/ajukankontrak', function () {
    return view('ajukankontrak');
});

Route::get('/pelanggan', function () {
    return view('dftrpelanggan');
});

Route::get('/pengingat', function () {
    return view('pengigatbyr');
});
Route::get('/ajuansaya', function () {
    return view('ajuansaya');
});
