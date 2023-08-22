<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'shop'], function () {
    Route::get('products', [\App\Http\Controllers\ProductController::class, 'index']);
    Route::post('products/search', [\App\Http\Controllers\ProductController::class, 'search']);
    Route::get('products/{id}', [\App\Http\Controllers\ProductController::class, 'show']);
});
