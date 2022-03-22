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

Route::get('/festival', function () {
    return view('festival');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/transport', function () {
    return view('transport');
});

Route::get('/food', function () {
    return view('food');
});


Route::get('/travel', function () {
    return view('travel');
});
