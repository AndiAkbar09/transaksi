<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');
Route::get('/transaksi/tambah', 'TransaksiController@create')->name('tambah.transaksi');
Route::post('/transaksi/upload', 'TransaksiController@store')->name('upload.transaksi');
Route::delete('/transaksi/hapus{transaksi}', 'TransaksiController@destroy')->name('hapus.transaksi');
Route::patch('/transaksi/upload/edit{transaksi}', 'TransaksiController@update')->name('upload.edit.transaksi');
Route::get('/transaksi/edit{transaksi}', 'TransaksiController@edit')->name('edit.transaksi');
