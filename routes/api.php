<?php

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
    return $request->user();
});

Route::get('/additem', [App\Http\Controllers\API\HomeController::class, 'addItem']);
//Route::get('/cart', [\App\Http\Controllers\HomeController::class, 'cart']);
//Route::get('/details/{id}', [\App\Http\Controllers\HomeController::class, 'details']);
//Route::get('/p3', [\App\Http\Controllers\HomeController::class, 'p3']);
//Route::get('/p4', [\App\Http\Controllers\HomeController::class, 'p4']);
//Route::get('/p5', [\App\Http\Controllers\HomeController::class, 'p5']);
Route::post('/product/create', [App\Http\Controllers\API\HomeController::class, 'add']);
Route::post('/product/save/{product}', [App\Http\Controllers\API\HomeController::class, 'update']);
//Route::post('/addToCart', [\App\Http\Controllers\HomeController::class, 'addToCart']);
Route::get('/product/delete/{product}', [App\Http\Controllers\API\HomeController::class, 'delete']);
//Auth::routes();
Route::get('/', [App\Http\Controllers\API\HomeController::class, 'index'])->name('home');
