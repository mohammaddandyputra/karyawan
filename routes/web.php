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

Route::get('/', 'KaryawanController@home');

Route::get('/karyawans', 'KaryawanController@viewKaryawans');

Route::get('/edit/{$nik}', 'KaryawanController@edit');

Route::post('/store', 'KaryawanController@store');

Route::patch('/update/{nik}', 'KaryawanController@update');

Route::delete('/delete/{nik}', 'KaryawanController@delete');