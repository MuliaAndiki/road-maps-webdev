<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get("/", [HomeController::class,'index']);

Route::get('/frontend', function(){
    return view('FrontEnd');
});

Route::get('/backend', function(){
    return view('BackEnd');
});

Route::get('/fullstack', function(){
    return view('FullStack');
});

