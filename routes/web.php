<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/frontend', function(){
    return view('FrontEnd');
});

Route::get('/backend', function(){
    return view('BackEnd');
});

Route::get('/fullstack', function(){
    return view('FullStack');
});