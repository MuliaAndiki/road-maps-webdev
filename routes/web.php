<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get("/", [HomeController::class,'index']);
Route::get("/frontend" , [FrontendController::class, 'index']);

Route::get('/backend', function(){
    return view('BackEnd');
});

Route::get('/fullstack', function(){
    return view('FullStack');
});
 
Route::get('/login', function(){
    return view('Login');
});