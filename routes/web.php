<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/meja', function () {
    return view('kategori/meja');
});

Route::get('/rak', function () {
    return view('kategori/rak');
});

Route::get('/lemari', function () {
    return view('kategori/lemari');
});

Route::get('/kostum', function () {
    return view('kostum');
});

Route::get('mejap', function () {
    return view('meja/mejap');
});

Route::get('mejab', function () {
    return view('meja/mejab');
});

Route::get('mejas', function () {
    return view('meja/mejas');
});