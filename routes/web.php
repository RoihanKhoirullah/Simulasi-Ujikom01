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

// Route::get('/daftar-siswa', function () {
//     return view('frontend.registrasi_siswa.index');
// });

Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('/siswa' , 'SiswaController@index')->name('siswa');
Route::get('/daftar-siswa' , 'SiswaController@create')->name('daftar-siswa');
Route::post('/simpan-siswa' , 'SiswaController@store')->name('simpan-siswa');
Route::get('/edit-siswa/{id}' , 'SiswaController@edit')->name('edit-siswa');
Route::post('/update-siswa/{id}' , 'SiswaController@update')->name('update-siswa');
Route::get('/delete-siswa/{id}' , 'SiswaController@destroy')->name('delete-siswa');

Route::get('/print-siswa/{id}' , 'SiswaController@PrintSiswa')->name('print-siswa');
Route::get('/print-semua-siswa' , 'SiswaController@PrintSemuaSiswa')->name('print-semua-siswa');

Route::get('/datasiswa' , 'DatasiswaController@index')->name('datasiswa');

// Login
Route::get('/login', function () {
    return view('pengguna.login');
});
Route::post('/postlogin' , 'LoginController@postlogin')->name('postlogin');
Route::get('/logout' , 'LoginController@logout')->name('logout');

// Registrasi
Route::get('/registrasi' , 'LoginController@registrasi')->name('registrasi');
Route::post('/simpanregistrasi' , 'LoginController@simpanregistrasi')->name('simpanregistrasi');