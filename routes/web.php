<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'index'])->name('index');
Route::get('/login',[AuthController::class,'loginForm'])->name('login.form');
Route::get('/register',[AuthController::class,'registerForm'])->name('register.form');
Route::post('/register',[AuthController::class,'register'])->name('register');
