<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TestController; //including the TestController file

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',function (){
    return view('index');
});
// Route::get('/test',[TestController::class, 'firstAction']);

// Route::get('/greet',[TestController::class, 'greet']);