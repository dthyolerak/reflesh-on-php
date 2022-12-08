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
Route::get('/order', 'App\Http\Controllers\OrderController@index');
Route::get('/order/create', 'App\Http\Controllers\OrderController@create');
Route::get('/order/{id}', 'App\Http\Controllers\OrderController@show');