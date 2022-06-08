<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PlaceController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing',[PlaceController::class,'landingpage'])->name('landing');
Route::post('/createplace/post',[PlaceController::class,'createplace'])->name('createplace.post');

Route::get('/signin',[UserController::class,'signinpage'])->name('signin');
Route::get('/signup',[UserController::class,'signuppage'])->name('signup');
Route::post('/signin/post',[UserController::class,'signin'])->name('signin.post');
Route::post('/signup/post',[UserController::class,'signup'])->name('signup.post');

Route::get('/createorder/${placeid}',[PlaceController::class,'createorderpage'])->name('createorder');
Route::post('/createorder/post',[OrderController::class,'createorder'])->name('createorder.post');

