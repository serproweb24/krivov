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

Route::get('add', 'HomeController@show')->name('add-row');
Route::post('add', 'HomeController@store')->name('store');
Route::get('show', 'HomeController@showInfo');
Route::get('table', 'HomeController@table');