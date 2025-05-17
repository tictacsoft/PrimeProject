<?php

use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\api\ClientsController;
use App\Http\Controllers\Api\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/forgot-password', [HomeController::class, 'forgotpassword']);
Route::get('/register/{url?}', [HomeController::class, 'register']);
Route::post('/signin', [AuthController::class, 'signin']);
Route::post('/signup', [AuthController::class, 'signup']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/job-request', [ClientsController::class, 'index'])->name('job-request');
    Route::post('/job-request', [ClientsController::class, 'store'])->name('job-request.store');
});

// Admin
Route::get('/admin/login', [AuthenticationController::class, 'login']);
Route::post('/admin/authlogin', [AuthenticationController::class, 'authlogin']);

Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);

    Route::resource('/admin/roles', RolesController::class);
    Route::resource('/admin/permissions', PermissionController::class);
    Route::resource('/admin/users', UsersController::class);

    Route::get('/admin/logout', [AuthenticationController::class, 'authlogout']);
});
