<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    Route::get('/users','index');
});

Route::controller(UserController::class)->group(fn() => [
    Route::post('/users', 'register'),
    Route::post('/users/signin', 'login'),
    Route::post('/users/signout', 'logout'),
]);

Route::controller(ProductController::class)->group(fn() => [
    Route::get('/products','index'),
    Route::post('/products','index'),
    Route::post('/products/add','addProduct'),
    Route::get('/products/{id}','show'),
]);