<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[\App\Http\Controllers\PostController::class,'index'])->name('home');



Route::get('/register',[\App\Http\Controllers\UserController::class,'create'])->name('register.create');
Route::post('/register',[\App\Http\Controllers\UserController::class,'store'])->name('register.store');

Route::get('/login',[\App\Http\Controllers\UserController::class,'loginForm'])->name('login');
Route::post('/login',[\App\Http\Controllers\UserController::class,'loginAuth'])->name('login.auth');
Route::get('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('logout');



