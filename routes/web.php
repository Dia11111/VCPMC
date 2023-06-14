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
    return view('auth.login');
})->name('auth.login');

Route::get('/fogot-password', function () {
    return view('auth.forgot');
})->name('auth.forgot');

Route::get('/reset-password', function () {
    return view('auth.reset');
})->name('auth.reset');

Route::get('/cofirm-password', function () {
    return view('auth.confirm');
})->name('auth.confirm');

Route::get('/error-password', function () {
    return view('auth.error');
})->name('auth.error');

