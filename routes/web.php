<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; //including the TestController file

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class, 'index']) -> name('posts.index');//short cut for the route name that solve the problem of changing the route name in all the views and passing the variables to views
Route::get('/posts/{post}',[PostController::class, 'Show']) -> name('posts.show');


// for learning 
// Route::get('/test',[TestController::class, 'firstAction']);
// Route::get('/greet',[TestController::class, 'greet']);