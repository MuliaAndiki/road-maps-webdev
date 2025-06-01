<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FullstackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;




Route::get("/", [LoginController::class, 'showLoginForm']);
Route::get("/frontend", [FrontendController::class, 'index']);
Route::get("/backend", [BackendController::class, 'index']);
Route::get("/fullstack", [FullstackController::class, 'index']);
Route::get('/home', [HomeController::class, "index"]);


// Rute Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.store');

//Rote Profile
// Route::get('/profile', [])
