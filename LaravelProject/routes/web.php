<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ServiceController;
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


Route::get('/home', [HelloController::class, 'home']);
Route::get('/about', [HelloController::class, 'about']);
Route::get('/service', [ServiceController::class, 'index']);
Route::post('/service', [ServiceController::class, 'store']);


Route::get('/customers', [\App\Http\Controllers\CustomerController::class, 'index']);
Route::get('/customers/create', [\App\Http\Controllers\CustomerController::class, 'create']);
Route::post('/customers', [\App\Http\Controllers\CustomerController::class, 'store']);
Route::get('/customers/{customer}', [\App\Http\Controllers\CustomerController::class, 'show']);
Route::get('/customers/{customer}/edit', [\App\Http\Controllers\CustomerController::class, 'edit']);
Route::patch('/customers/{customer}', [\App\Http\Controllers\CustomerController::class, 'update']);
Route::patch('/customers/{customer}', [\App\Http\Controllers\CustomerController::class, 'update']);
Route::delete('/customers/{customer}', [\App\Http\Controllers\CustomerController::class, 'destroy']);

