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
Route::get('/', function(){
    $name = request('name');
    return view('welcome',["name"=>$name]);
});
Route::get('/hello', function(){
    $array = ['hello'=>"hello donnex kamsonga", 'price'=>90];
    return view('hello', ["array"=>$array]);
    // return ['hlloe'=>"hello"];
});