<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController; //including the TestController file

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index',[IndexController::class, 'testAction']);



// for learning 
// Route::get('/test',[TestController::class, 'firstAction']);
// Route::get('/greet',[TestController::class, 'greet']);