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
    return view('home');
});

Route::get('/tampildata', 'HomestayController@readdata');
Route::get('/tambahdata', 'HomestayController@input');
Route::post('/informations/store', 'HomestayController@store');

Route::get('/informations/edit/{ID}', 'HomestayController@edit');
Route::post('/informations/update', 'HomestayController@update');
Route::get('/informations/hapus/{ID}', 'HomestayController@hapus');
