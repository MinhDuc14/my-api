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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/12', function () {
    return 123 ;
});

Route::get('/test', function () {
    return "test push aws";
});
Route::get('/test1', function () {
    return "test1";
});
Route::get('/test2', function () {
    return "test22";
});
Route::get('/test3', function () {
    return "test3";
});

