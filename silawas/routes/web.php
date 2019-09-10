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
Route::post('/profile/{id}/update', 'ProfilesController@update')->name('profile.update');

// Halaman Petugas
Route::get('/petugas', 'PetugassController@index')->name('petugas.show');
Route::get('/petugas/detail/{petugas_id}', 'PetugassController@detail')->name('petugas.detail');
Route::get('/petugas/hapus/{petugas_id}', 'PetugassController@destroy')->name('petugas.destroy');
Route::get('/petugas/create', 'PetugassController@create')->name('petugas.create');
Route::post('/petugas/store','PetugassController@store')->name('petugas.store');

// Halaman Unit Usaha
Route::get('/unit-usaha', 'UnitUsahasController@index')->name('unitusaha.show');
Route::get('/unit-usaha/create', 'UnitUsahasController@create')->name('unitusaha.create');
Route::post('/unit-usaha/store', 'UnitUsahasController@store')->name('unitusaha.store');

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
Route::get('/pengajuan/formulir/7', 'FormsController@form7')->name('form7.show');
Route::get('/pengajuan/formulir/8', 'FormsController@form8')->name('form8.show');
Route::get('/pengajuan/formulir/9', 'FormsController@form9')->name('form9.show');
Route::get('/pengajuan/formulir/10', 'FormsController@form10')->name('form10.show');
Route::get('/pengajuan/formulir/11', 'FormsController@form11')->name('form11.show');
Route::get('/pengajuan/formulir/12', 'FormsController@form12')->name('form12.show');
Route::get('/pengajuan/formulir/13', 'FormsController@form13')->name('form13.show');
Route::get('/pengajuan/formulir/14', 'FormsController@form14')->name('form14.show');
Route::post('/pengajuan/formulir/1/utama', 'FormsController@storeUtamaForm1');
Route::post('/pengajuan/formulir/1/survey', 'FormsController@storeSurveyForm1');
Route::post('/pengajuan/formulir/1/tambahan', 'FormsController@storeTambahanForm1');

// Halaman Checklist 1
Route::redirect('/pengawasan/checklist/1', '/pengawasan/checklist/1/umum')->name('checklist1.show');
Route::get('/pengawasan/checklist/1/umum', 'Checklists1Controller@umum')->name('checklist1.umum');
Route::get('/pengawasan/checklist/1/survey', 'Checklists1Controller@survey')->name('checklist1.survey');
Route::get('/pengawasan/checklist/1/catatan', 'Checklists1Controller@catatan')->name('checklist1.catatan');
Route::get('/pengawasan/checklist/1/store', 'Checklists1Controller@store')->name('checklist1.store');
Route::post('/pengawasan/checklist/1/umum', 'Checklists1Controller@umum')->name('checklist1.umum');
Route::post('/pengawasan/checklist/1/survey', 'Checklists1Controller@survey')->name('checklist1.survey');
Route::post('/pengawasan/checklist/1/catatan', 'Checklists1Controller@catatan')->name('checklist1.catatan');

// Halaman Checklist 6
Route::redirect('/pengawasan/checklist/6', '/pengawasan/checklist/6/umum')->name('checklist6.show');
Route::get('/pengawasan/checklist/6/umum', 'Checklists6Controller@umum')->name('checklist6.umum');
Route::get('/pengawasan/checklist/6/survey', 'Checklists6Controller@survey')->name('checklist6.survey');
Route::get('/pengawasan/checklist/6/catatan', 'Checklists6Controller@catatan')->name('checklist6.catatan');
Route::post('/pengawasan/checklist/6/umum', 'Checklists6Controller@umum')->name('checklist6.umum');
Route::post('/pengawasan/checklist/6/survey', 'Checklists6Controller@survey')->name('checklist6.survey');
Route::post('/pengawasan/checklist/6/catatan', 'Checklists6Controller@catatan')->name('checklist6.catatan');
Route::post('/pengawasan/checklist/6/store', 'Checklists6Controller@store')->name('checklist6.store');
Route::get('/pengawasan/checklist/6/detail/{id}', 'Checklists6Controller@detail')->name('checklist6.detail');

// Halaman Checklist 10
Route::redirect('/pengawasan/checklist/10', '/pengawasan/checklist/10/umum')->name('checklist10.show');
Route::get('/pengawasan/checklist/10/umum', 'Checklists10Controller@umum')->name('checklist10.umum');
Route::get('/pengawasan/checklist/10/survey', 'Checklists10Controller@survey')->name('checklist10.survey');
Route::get('/pengawasan/checklist/10/catatan', 'Checklists10Controller@catatan')->name('checklist10.catatan');
Route::post('/pengawasan/checklist/10/store', 'Checklists10Controller@store')->name('checklist10.store');
Route::post('/pengawasan/checklist/10/umum', 'Checklists10Controller@umum')->name('checklist10.umum');
Route::post('/pengawasan/checklist/10/survey', 'Checklists10Controller@survey')->name('checklist10.survey');
Route::post('/pengawasan/checklist/10/catatan', 'Checklists10Controller@catatan')->name('checklist10.catatan');

// Halaman Laporan
Route::get('/laporan', 'LaporansController@index')->name('laporan.show');
Route::post('/laporan', 'LaporansController@content')->name('laporan.content');

// Halaman Export
Route::get('/export/checklist6/{unitusaha_id}', 'ExportsController@checklist6')->name('export.checklist6');

//detailForm
Route::get('/detail/formulir1/{id}', 'FormsController@getDetailForm1');
Route::get('/detail/formulir6/{id}', 'FormsController@getDetailForm6');
Route::get('/detail/formulir10/{id}', 'FormsController@getDetailForm10');

//export
Route::get('/export/formulir6/{id}', 'ExportController@cetakForm6');
Route::get('/export/formulir10/{id}', 'ExportController@cetakForm10');