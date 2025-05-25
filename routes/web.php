<?php

use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\api\ClientsController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/forgot-password', [HomeController::class, 'forgotpassword']);
Route::get('/register/{url?}', [HomeController::class, 'register']);
Route::get('/getcompany', [HomeController::class, 'getcompany'])->name('getcompany');
Route::post('/signin', [AuthController::class, 'signin']);
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');

Route::group(['middleware' => ['auth', 'role:client']], function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('/projects', ProjectsController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Admin
Route::get('/admin/login', [AuthenticationController::class, 'login']);
Route::post('/admin/authlogin', [AuthenticationController::class, 'authlogin']);

Route::group(['middleware' => ['auth', 'role:superadmin, role:admin']], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index']);

    Route::resource('/admin/roles', RolesController::class);
    Route::put('/admin/roles/update/{id}', [RolesController::class, 'updateRoles'])->name('update.roles');
    Route::resource('/admin/permissions', PermissionController::class);
    Route::resource('/admin/users', UsersController::class);
    Route::post('/admin/users/approve', [UsersController::class, 'assignRole'])->name('assign.role');
    Route::resource('/admin/company', CompanyController::class);
    // Route::get('/admin/users/{id}/permissions', [UsersController::class, 'getPermission']);
    // Route::put('/admin/users/permissions/update/{id}', [UsersController::class, 'updatePermission']);

    Route::get('/admin/logout', [AuthenticationController::class, 'authlogout']);
});
