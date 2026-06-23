<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard routes (placeholders for now)
Route::get('/admin/dashboard', function () {
    return 'Admin Dashboard - Coming Soon';
})->name('admin.dashboard')->middleware('auth');

Route::get('/employee/dashboard', function () {
    return 'Employee Dashboard - Coming Soon';
})->name('employee.dashboard')->middleware('auth');

Route::get('/customer/dashboard', function () {
    return 'Customer Dashboard - Coming Soon';
})->name('customer.dashboard')->middleware('auth');
