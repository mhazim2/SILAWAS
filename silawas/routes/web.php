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
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');

// Halaman Petugas
Route::get('/petugas', 'PetugassController@index')->name('petugas.show');

// Halaman Pengajuan
Route::get('/pengajuan', 'PengajuansController@index')->name('pengajuan.show');
Route::get('/pengajuan/formulir', 'PengajuansController@formulir')->name('pengajuan.formulir');