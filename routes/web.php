<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', fn () => view('home'));

Route::get('/dashboard', fn () => view('dashboard.index'))->middleware('admin');
Route::get('/dashboard/home', fn () => view('dashboard.home'));
Route::get('/dashboard/users', fn () => view('dashboard.users'));
Route::get('/dashboard/orders', fn () => view('dashboard.orders'));

Route::get('/contact', fn () => view('contact'));

Route::resource('/products', ProductController::class);
Route::resource('/cart', CartController::class)->except('store');
Route::resource('/orders', OrderController::class);

Route::controller('/cart', CartController::class)->group(fn() => [
    Route::post('/cart/{id}', [CartController::class, 'store']),
    Route::post('/cart/{id}/update-product-up', [CartController::class, 'updateProductUp']),
    Route::post('/cart/{id}/update-product-down', [CartController::class, 'updateProductDown']),
]);

Route::controller(UserController::class)->group(fn()=>[
    Route::get('/login', 'loginPage'),
    Route::post('/login', 'authenticate'),

    Route::get('/register', 'registerPage'),
    Route::post('/register', 'register'),

    Route::post('/logout', 'logout'),
]);





