<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Public routes
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
});

// Login
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'check_login']);

// Register
Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'check_register']);

// List
Route::get('/admin/list', [AdminController::class, 'list'])->name('admin.list');

// Update
Route::get('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::post('/admin/update/{id}', [AdminController::class, 'check_update'])->name('admin.check_update');

// View
Route::get('/admin/view/{id}', [AdminController::class, 'view'])->name('admin.view');

// Admin routes with auth middleware
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/index', [AdminController::class, 'index'])->name('admin.index');
});
