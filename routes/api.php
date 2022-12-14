<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::get('/additem', [App\Http\Controllers\API\HomeController::class, 'addItem']);
//Route::get('/cart', [\App\Http\Controllers\HomeController::class, 'cart']);
//Route::get('/details/{id}', [\App\Http\Controllers\HomeController::class, 'details']);
//Route::get('/p3', [\App\Http\Controllers\HomeController::class, 'p3']);
//Route::get('/p4', [\App\Http\Controllers\HomeController::class, 'p4']);
//Route::get('/p5', [\App\Http\Controllers\HomeController::class, 'p5']);
//Route::post('/addToCart', [\App\Http\Controllers\HomeController::class, 'addToCart']);

Route::group(['prefix' => 'product', 'middleware'=>['auth:api', 'admin']], function () {
    Route::post('/create', [App\Http\Controllers\API\HomeController::class, 'add']);
    Route::post('/save/{product}', [App\Http\Controllers\API\HomeController::class, 'update']);
    Route::post('/delete/{product}', [App\Http\Controllers\API\HomeController::class, 'delete']);
});
//Auth::routes();
Route::get('/all', [App\Http\Controllers\API\HomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
    Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);
});
