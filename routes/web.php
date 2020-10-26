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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'SiswaController@index');
// Route::get('/cari','SiswaController@cari');

Route::get('/create', 'SiswaController@create');
Route::post('/save', 'SiswaController@store');

Route::get('/edit/{id}', 'SiswaController@edit');
Route::post('/edit/{id}', 'SiswaController@update');

Route::get('/destroy/{id}','SiswaController@destroy');