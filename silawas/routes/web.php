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
Route::get('/{name}', 'HomeController@index')->name('home')->where('name', '|home');

// Halaman Profile
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{id}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::post('/profile/{id}/editsubmit', 'ProfilesController@updateProfile');

// Halaman Petugas
Route::get('/petugas', 'PetugassController@index')->name('petugas.show');
Route::get('/petugas/create', 'PetugassController@create')->name('petugas.create');
Route::get('/petugas/detail/{petugas_id}', 'PetugassController@detail')->name('petugas.detail');
Route::get('/petugas/hapus/{petugas_id}', 'PetugassController@delete')->name('petugas.delete');
Route::post('/petugas/store','RegisterPetugasController@create');
Route::get('/petugas/listpetugas', 'PetugassController@show');

// Halaman Unit Usaha
Route::get('/unit-usaha', 'UnitUsahasController@index')->name('unitusaha.show');
Route::get('/unit-usaha/create', 'UnitUsahasController@create')->name('unitusaha.create');
Route::post('/unit-usaha/store','UnitUsahasController@create');

// Halaman Pengajuan
Route::get('/pengajuan', 'PengajuansController@index')->name('pengajuan.show');
Route::get('/pengajuan/detail/{pengajuan_id}', 'PengajuansController@detail')->name('pengajuan.detail');
Route::get('/pengajuan/hapus/{pengajuan_id}', 'PengajuansController@delete')->name('pengajuan.delete');

// Halaman Pengajuan
Route::get('/pengajuan/formulir', 'PengajuansController@formulir')->name('pengajuan.formulir');
Route::resource('unitusaha', 'UnitUsahasController');

// Halaman Formulir
Route::get('/pengajuan/formulir/1', 'FormsController@form1')->name('form1.show');
Route::get('/pengajuan/formulir/2', 'FormsController@form2')->name('form2.show');
Route::get('/pengajuan/formulir/3', 'FormsController@form3')->name('form3.show');
Route::get('/pengajuan/formulir/4', 'FormsController@form4')->name('form4.show');
Route::get('/pengajuan/formulir/5', 'FormsController@form5')->name('form5.show');
Route::get('/pengajuan/formulir/6', 'FormsController@form6')->name('form6.show');
Route::get('/pengajuan/formulir/7', 'FormsController@form7')->name('form7.show');
Route::get('/pengajuan/formulir/8', 'FormsController@form8')->name('form8.show');
Route::get('/pengajuan/formulir/9', 'FormsController@form9')->name('form9.show');
Route::get('/pengajuan/formulir/10', 'FormsController@form10')->name('form10.show');
Route::get('/pengajuan/formulir/11', 'FormsController@form11')->name('form11.show');
Route::get('/pengajuan/formulir/12', 'FormsController@form12')->name('form12.show');
Route::get('/pengajuan/formulir/13', 'FormsController@form13')->name('form13.show');
Route::get('/pengajuan/formulir/14', 'FormsController@form14')->name('form14.show');
Route::get('/pengajuan/formulir/15', 'FormsController@form15')->name('form15.show');