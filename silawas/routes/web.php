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

// Route Autentifikasi
Auth::routes();

// Halaman Utama
Route::get('/{name}', 'HomeController@index')->name('home')->where('name', 'home|');

// Halaman Profile
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{id}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::post('/profile/{id}/editsubmit', 'ProfilesController@updateProfile');

// Halaman Petugas
Route::get('/petugas', 'PetugassController@index')->name('petugas.show');
Route::get('/petugas/create', 'PetugassController@create')->name('petugas.create');
Route::post('/petugas/store','RegisterPetugasController@create');

// Halaman Pengajuan
Route::get('/pengajuan', 'PengajuansController@index')->name('pengajuan.show');
Route::get('/pengajuan/detail/{pengajuan_id}', 'PengajuansController@detail')->name('pengajuan.detail');
Route::get('/pengajuan/hapus/{pengajuan_id}', 'PengajuansController@delete')->name('pengajuan.delete');

// Halaman Formulir
Route::get('/pengajuan/formulir', 'PengajuansController@formulir')->name('pengajuan.formulir');
Route::get('/pengajuan/formulir/9', 'PengajuansController@form9')->name('form9.show');
Route::resource('unitusaha', 'UnitUsahaController');