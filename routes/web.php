<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\UserController;
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



Route::get('/show/login/form/',[LoginController::class,'ShowLoginform'])->name('show.login.form');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/',[UserController::class,'Index'])->name('index');