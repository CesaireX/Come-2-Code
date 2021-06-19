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
    return view('index');
});


Route::get('/acceuil', function () {
    return view('layouts.acceuil');
});



Route::get('/login', function () {
    return view('layouts.login');
});


Route::get('/inscription', function () {
    return view('layouts.inscription');
});
