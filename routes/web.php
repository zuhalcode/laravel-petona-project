<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', fn () => view('home'));
Route::get('/contact', fn () => view('contact'));

Route::get('/register', fn () => view('home', ['route' => 'register']));

Route::controller(LoginController::class)->group(fn()=>[
    Route::get('/login', 'index'),
    Route::post('/login', 'authenticate'),
    Route::post('/logout', 'logout'),
]);

Route::resource('/users', UserController::class);

Route::get('/guest', fn () => view('guest.home'));

Route::resource('users', UserController::class);


