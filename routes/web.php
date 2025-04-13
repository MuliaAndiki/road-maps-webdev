<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FullstackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get("/", [HomeController::class, 'index']);
Route::get("/frontend", [FrontendController::class, 'index']);
Route::get("/backend", [BackendController::class, 'index']);
Route::get("/fullstack", [FullstackController::class, 'index']);

Route::get('/login', function () {
  return view('Login');
});

Route::get('/register', function () {
  return view('register');
});
