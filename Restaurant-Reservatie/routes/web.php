<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'))->name('home');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/menu/{id}', [MenuController::class, 'show'])->name('menu.show');

Route::get('/reserveren', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reserveren', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reserveringen', [ReservationController::class, 'index'])->name('reservations.index')->middleware('auth');
Route::delete('/reserveringen/{id}', [ReservationController::class, 'cancel'])->name('reservations.cancel')->middleware('auth');

Route::get('/customer/dashboard', fn() => redirect()->route('reservations.index'))->name('customer.dashboard')->middleware('auth');
