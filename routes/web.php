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
    return view('frontend.index');
});

Route::get('/daftar-siswa', function () {
    return view('frontend.registrasi_siswa.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/siswa' , 'SiswaController@index')->name('siswa');
Route::post('/simpan-siswa' , 'SiswaController@store')->name('simpan-siswa');
Route::get('/edit-siswa/{id}' , 'SiswaController@edit')->name('edit-siswa');
Route::post('/update-siswa/{id}' , 'SiswaController@update')->name('update-siswa');
Route::get('/delete-siswa/{id}' , 'SiswaController@destroy')->name('delete-siswa');

Route::get('/print-siswa/{id}' , 'PrintController@index')->name('print-siswa');
