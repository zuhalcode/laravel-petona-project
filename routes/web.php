<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', fn () => view('home'));
Route::get('/dashboard', fn () => view('dashboard.index'))->middleware('admin');

Route::get('/contact', fn () => view('contact'));

Route::resource('/products', ProductController::class);

Route::controller(UserController::class)->group(fn()=>[
    Route::get('/login', 'loginPage'),
    Route::post('/login', 'authenticate'),

    Route::get('/register', 'registerPage'),
    Route::post('/register', 'register'),

    Route::post('/logout', 'logout'),
]);





