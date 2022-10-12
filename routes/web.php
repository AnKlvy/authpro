<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/p2', [\App\Http\Controllers\HomeController::class, 'p2']);
Route::get('/p3', [\App\Http\Controllers\HomeController::class, 'p3']);
Route::get('/p4', [\App\Http\Controllers\HomeController::class, 'p4']);
Route::get('/p5', [\App\Http\Controllers\HomeController::class, 'p5']);
Route::post('/product/create', [\App\Http\Controllers\HomeController::class, 'create']);
Route::get('/product/save/{product}', [\App\Http\Controllers\HomeController::class, 'save']);
Route::get('/product/delete/{product}', [\App\Http\Controllers\HomeController::class, 'delete']);



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
