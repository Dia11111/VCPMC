<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\RestoreController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SheduleController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\SystemtController;
use App\Http\Controllers\TypecontractController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkinfoController;

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
    return view('pages.profile.index');
})->name('profile');

Route::get('/play-list/edit-restore/{id}', [PlaylistController::class, 'editplaylist'])->name('editplaylist');
Route::get('/contract/create-restore', [ContractController::class, 'createstore'])->name('createstore');
Route::get('/edit-warn', [SystemtController::class, 'editwarn'])->name('editwarn');
Route::get('/install-system', [SystemtController::class, 'installsystem'])->name('installsystem');
Route::get('/config', [SystemtController::class, 'config'])->name('config');

Route::resource('restore', RestoreController::class);
Route::resource('playlist', PlaylistController::class);
Route::resource('contract', ContractController::class);
Route::resource('shedule', SheduleController::class);
Route::resource('device', DeviceController::class);
Route::resource('typecontract', TypecontractController::class);
Route::resource('workinfo', WorkinfoController::class);
Route::resource('user', UserController::class);
Route::resource('role', RoleController::class);

Route::get("locale/{lange}", [LocalizationController::class, 'setlang'])->name('setlang');

Route::get('/download', [SupportController::class, 'download'])->name('download');

Route::get('/feedback', [SupportController::class, 'feedback'])->name('feedback');

Route::get('/user-manual', [SupportController::class, 'usermanual'])->name('user-manual');