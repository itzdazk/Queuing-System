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
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\RegistrationNumberController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/verify-email', [AuthController::class, 'showVerifyEmail'])->name('auth.verify-email');
Route::post('/verify-email', [AuthController::class, 'verifyEmail'])->name('verify-email.post');
Route::get('/reset-password', [AuthController::class, 'showResetPassword'])->name('auth.reset-password');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('reset-password.post');

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/user-info', [AuthController::class, 'showUserInfo'])->name('auth.user-info');
    Route::get('/users-log', [AuthController::class, 'userLog'])->name('users.user-log');
    Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
    Route::put('/roles/{role}', [RoleController::class, 'update'])->name('roles.update');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{service}/detail', [ServiceController::class, 'detail'])->name('services.detail');
    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');

    Route::get('/devices', [DeviceController::class, 'index'])->name('devices.index');
    Route::get('/devices/create', [DeviceController::class, 'create'])->name('devices.create');
    Route::post('/devices', [DeviceController::class, 'store'])->name('devices.store');
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard.index');
    Route::get('/devices/{device}/detail', [DeviceController::class, 'detail'])->name('devices.detail');
    Route::get('/devices/{device}/edit', [DeviceController::class, 'edit'])->name('devices.edit');
    Route::put('/devices/{device}', [DeviceController::class, 'update'])->name('devices.update');

    Route::get('/regisnumber', [RegistrationNumberController::class, 'index'])->name('regisnumber.index');
    Route::get('/report', [RegistrationNumberController::class, 'report'])->name('regisnumber.report');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/regisnumber/create', [RegistrationNumberController::class, 'create'])->name('regisnumber.create');
Route::post('/regisnumber', [RegistrationNumberController::class, 'store'])->name('regisnumber.store');
Route::get('/regisnumber/{regisnumber}/detail', [RegistrationNumberController::class, 'detail'])->name('regisnumber.detail');
