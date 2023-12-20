<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// evamedia
Route::get('/tabel-form', function () {
    return view('tabel_form');
});

Route::get('/home-eva', function () {
    return view('evamedia-frontend.home');
});
Route::get('/home-berita', function () {
    return view('evamedia.evamedia-detail-berita');
});
