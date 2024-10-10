<?php

use App\Http\Controllers\Auth\RegisterDoctor;
use App\Http\Controllers\Auth\RegisterUser;
use App\Http\Controllers\Auth\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SessionController::class , 'home']);

Route::get('/register' ,[RegisterUser::class , 'create'])->name('register');
Route::get('/login' ,[SessionController::class , 'create'])->name('login');
Route::get('/doctor' ,[RegisterDoctor::class , 'create'])->name('doctor');