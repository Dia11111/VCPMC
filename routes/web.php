<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\RestoreController;
use App\Http\Controllers\SheduleController;

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


Route::get('/', [AuthController::class, 'login'])->name('login');

Route::get('/fogot-password', [AuthController::class, 'forgotPassword'])->name('forgotPassword');

Route::get('/reset-password', [AuthController::class, 'resetPassword'])->name('resetPassword');

Route::get('/cofirm-password', [AuthController::class, 'changePassword'])->name('changePassword');

Route::get('/error-password', function () {
    return view('auth.error');
})->name('auth.error');

Route::get('/profile', function () {
    return view('pages.profile.profile');
})->name('profile');

Route::get('/play-list/chinh-sua-ban-ghi/{id}', [PlaylistController::class, 'editplaylist'])->name('editplaylist');

Route::resource('restore', RestoreController::class);
Route::resource('playlist', PlaylistController::class);
Route::resource('contract', ContractController::class);
Route::resource('shedule', SheduleController::class);