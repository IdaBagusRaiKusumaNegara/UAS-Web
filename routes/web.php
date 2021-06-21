<?php

use Illuminate\Routing\RouteGroup;
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
    return view('Pengguna.login');
})->name('login');

route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');


Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    route::get('/pekerjaanAdmin', 'PekerjaanAdminController@index')->name('pekerjaanAdmin');
    Route::post('/simpan-pekerjaan', 'PekerjaanAdminController@store')->name('simpan-pekerjaan');
    Route::get('/edit-pekerjaan/{id}', 'PekerjaanAdminController@edit')->name('edit-pekerjaan');
    Route::post('/update-pekerjaan/{id}', 'PekerjaanAdminController@update')->name('update-pekerjaan');
    Route::get('/delete-pekerjaan/{id}', 'PekerjaanAdminController@destroy')->name('delete-pekerjaan');
    Route::get('/detail-pekerjaan/{id}', 'PekerjaanAdminController@show')->name('detail-pekerjaan');
    Route::get('/cetak-pekerjaan/{id}', 'PekerjaanAdminController@cetakPekerjaan')->name('cetak-pekerjaan');
    route::get('/rekap-pekerjaan', 'PekerjaanAdminController@rekapPekerjaan')->name('rekap-pekerjaan');
    route::get('/rekap-pekerjaan-tgl/{tanggal_awal}/{tanggal_akhir}', 'PekerjaanAdminController@cetakPekerjaanPertanggal')->name('rekap-pekerjaan-tgl');

    route::get('/unit', 'UnitController@index')->name('unit');
    route::get('/create-unit', 'UnitController@create')->name('create-unit');
    Route::post('/simpanUnit', 'UnitController@store')->name('simpanUnit');
    Route::get('/edit-unit/{id}', 'UnitController@edit')->name('edit-unit');
    Route::post('/update-unit/{id}', 'UnitController@update')->name('update-unit');
    Route::get('/delete-unit/{id}', 'UnitController@destroy')->name('delete-unit');

    route::get('/pengguna', 'PenggunaController@index')->name('pengguna');
    route::get('/create-pengguna', 'PenggunaController@create')->name('create-pengguna');
    Route::post('/simpanPengguna', 'PenggunaController@store')->name('simpanPengguna');
    Route::get('/edit-pengguna/{id}', 'PenggunaController@edit')->name('edit-pengguna');
    Route::post('/update-pengguna/{id}', 'PenggunaController@update')->name('update-pengguna');
    Route::get('/delete-pengguna/{id}', 'PenggunaController@destroy')->name('delete-pengguna');
    Route::get('/detail-pengguna/{id}', 'PenggunaController@show')->name('detail-pengguna');

    route::get('/pekerja', 'PekerjaController@index')->name('pekerja');
    route::get('/create-pekerja', 'PekerjaController@create')->name('create-pekerja');
    Route::post('/simpanPekerja', 'PekerjaController@store')->name('simpanPekerja');
    Route::get('/edit-pekerja/{id}', 'PekerjaController@edit')->name('edit-pekerja');
    Route::post('/update-pekerja/{id}', 'PekerjaController@update')->name('update-pekerja');
    Route::get('/delete-pekerja/{id}', 'PekerjaController@destroy')->name('delete-pekerja');
});

Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {
    route::get('/pekerjaan', 'PekerjaanController@index')->name('pekerjaan');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function () {
    route::get('/beranda', 'BerandaController@index')->name('beranda');
    route::get('/logout', 'LoginController@logout')->name('logout');

    route::get('/create-pekerjaan', 'PekerjaanController@create')->name('create-pekerjaan');
    Route::post('/simpanPekerjaan', 'PekerjaanController@store')->name('simpanPekerjaan');
});