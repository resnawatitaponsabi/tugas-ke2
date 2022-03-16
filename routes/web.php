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

Route::get('/pegawai','PegawaiController@index');
//Route::get('/tambahpegawai','PegawaiController@create');
Route::post('/Pegawai/create','PegawaiController@create');
Route::get('/Pegawai/{id}/edit','PegawaiController@edit');
Route::post('/Pegawai/{id}/update','PegawaiController@update');
Route::get('/Pegawai/{id}/delete','PegawaiController@delete');