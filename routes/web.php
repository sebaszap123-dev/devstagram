<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Conocida como closure function
Route::get('/', function () {
    return view('main');
});
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

// ROUTE MODEL BINDING {Al usar entre llaves un modelo y se modifica el metodo post index}
Route::get('/{user:username}', [PostController::class, 'index'])->name('posts.index');
