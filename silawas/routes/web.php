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
Route::get('/petugas/create', 'PetugassController@create')->name('petugas.create');
Route::post('/petugas/store','PetugassController@store')->name('petugas.store');
Route::post('/petugas/update/{idUser}', 'PetugassController@update')->name('petugas.update');
Route::get('/petugas/hapus/{idUser}', 'PetugassController@deletePetugas')->name('petugas.delete');

// Halaman Unit Usaha
Route::get('/unit-usaha', 'UnitUsahasController@index')->name('unitusaha.show');
Route::get('/unit-usaha/create', 'UnitUsahasController@create')->name('unitusaha.create');
Route::post('/unit-usaha/store', 'UnitUsahasController@store')->name('unitusaha.store');
Route::post('/unit-usaha/update/{idUnitUsaha}', 'UnitUsahasController@updateUnitUsaha')->name('unitusaha.update');
Route::get('/unit-usaha/hapus/{idUnitUsaha}', 'UnitUsahasController@deleteUnitUsaha')->name('unitusaha.delete');

// Halaman Pengajuan
Route::get('/pengajuan', 'FormsController@getAllForm')->name('pengajuan.show');
Route::get('/pengajuan/detail/{pengajuan_id}', 'PengajuansController@detail')->name('pengajuan.detail');
Route::get('/pengajuan/hapus/{pengajuan_id}', 'FormsController@deleteForm')->name('pengajuan.delete');

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

// Halaman Pengajuan
Route::get('/pengawasan', 'PengawasansController@index')->name('pengawasan.show');
Route::get('/pengawasan/ceklis', 'PengawasansController@checklists')->name('pengawasan.ceklis');
Route::get('/pengawasan/hapus/{pengajuan_id}', 'PengawasansController@delete')->name('pengajuan.delete');
Route::post('/uploadBukti/{survey_id}', 'FormsController@uploadBukti');

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

// Halaman Checklist 7
Route::redirect('/pengawasan/checklist/7', '/pengawasan/checklist/7/umum')->name('checklist7.show');
Route::get('/pengawasan/checklist/7/umum', 'Checklists7Controller@umum')->name('checklist7.umum');
Route::get('/pengawasan/checklist/7/survey', 'Checklists7Controller@survey')->name('checklist7.survey');
Route::get('/pengawasan/checklist/7/catatan', 'Checklists7Controller@catatan')->name('checklist7.catatan');
Route::post('/pengawasan/checklist/7/umum', 'Checklists7Controller@umum')->name('checklist7.umum');
Route::post('/pengawasan/checklist/7/survey', 'Checklists7Controller@survey')->name('checklist7.survey');
Route::post('/pengawasan/checklist/7/catatan', 'Checklists7Controller@catatan')->name('checklist7.catatan');
Route::post('/pengawasan/checklist/7/store', 'Checklists7Controller@store')->name('checklist7.store');
Route::get('/pengawasan/checklist/7/detail/{id}', 'Checklists7Controller@detail')->name('checklist7.detail');

// Halaman Checklist 10
Route::redirect('/pengawasan/checklist/10', '/pengawasan/checklist/10/umum')->name('checklist10.show');
Route::get('/pengawasan/checklist/10/umum', 'Checklists10Controller@umum')->name('checklist10.umum');
Route::get('/pengawasan/checklist/10/survey', 'Checklists10Controller@survey')->name('checklist10.survey');
Route::get('/pengawasan/checklist/10/catatan', 'Checklists10Controller@catatan')->name('checklist10.catatan');
Route::post('/pengawasan/checklist/10/store', 'Checklists10Controller@store')->name('checklist10.store');
Route::post('/pengawasan/checklist/10/umum', 'Checklists10Controller@umum')->name('checklist10.umum');
Route::post('/pengawasan/checklist/10/survey', 'Checklists10Controller@survey')->name('checklist10.survey');
Route::post('/pengawasan/checklist/10/catatan', 'Checklists10Controller@catatan')->name('checklist10.catatan');
Route::get('/pengawasan/checklist/10/detail/{id}', 'Checklists10Controller@detail')->name('checklist10.detail');

// Halaman Checklist 11
Route::redirect('/pengawasan/checklist/11', '/pengawasan/checklist/11/umum')->name('checklist11.show');
Route::get('/pengawasan/checklist/11/umum', 'Checklists11Controller@umum')->name('checklist11.umum');
Route::get('/pengawasan/checklist/11/survey', 'Checklists11Controller@survey')->name('checklist11.survey');
Route::get('/pengawasan/checklist/11/catatan', 'Checklists11Controller@catatan')->name('checklist11.catatan');
Route::post('/pengawasan/checklist/11/store', 'Checklists11Controller@store')->name('checklist11.store');
Route::post('/pengawasan/checklist/11/umum', 'Checklists11Controller@umum')->name('checklist11.umum');
Route::post('/pengawasan/checklist/11/survey', 'Checklists11Controller@survey')->name('checklist11.survey');
Route::post('/pengawasan/checklist/11/catatan', 'Checklists11Controller@catatan')->name('checklist11.catatan');
Route::get('/pengawasan/checklist/11/detail/{id}', 'Checklists11Controller@detail')->name('checklist11.detail');

// Halaman Checklist 12
Route::redirect('/pengawasan/checklist/12', '/pengawasan/checklist/12/umum')->name('checklist12.show');
Route::get('/pengawasan/checklist/12/umum', 'Checklists12Controller@umum')->name('checklist12.umum');
Route::get('/pengawasan/checklist/12/survey', 'Checklists12Controller@survey')->name('checklist12.survey');
Route::get('/pengawasan/checklist/12/catatan', 'Checklists12Controller@catatan')->name('checklist12.catatan');
Route::post('/pengawasan/checklist/12/store', 'Checklists12Controller@store')->name('checklist12.store');
Route::post('/pengawasan/checklist/12/umum', 'Checklists12Controller@umum')->name('checklist12.umum');
Route::post('/pengawasan/checklist/12/survey', 'Checklists12Controller@survey')->name('checklist12.survey');
Route::post('/pengawasan/checklist/12/catatan', 'Checklists12Controller@catatan')->name('checklist12.catatan');
Route::get('/pengawasan/checklist/12/detail/{id}', 'Checklists12Controller@detail')->name('checklist12.detail');

// Halaman Checklist 13
Route::redirect('/pengawasan/checklist/13', '/pengawasan/checklist/13/umum')->name('checklist13.show');
Route::get('/pengawasan/checklist/13/umum', 'Checklists13Controller@umum')->name('checklist13.umum');
Route::get('/pengawasan/checklist/13/survey', 'Checklists13Controller@survey')->name('checklist13.survey');
Route::get('/pengawasan/checklist/13/catatan', 'Checklists13Controller@catatan')->name('checklist13.catatan');
Route::post('/pengawasan/checklist/13/store', 'Checklists13Controller@store')->name('checklist13.store');
Route::post('/pengawasan/checklist/13/umum', 'Checklists13Controller@umum')->name('checklist13.umum');
Route::post('/pengawasan/checklist/13/survey', 'Checklists13Controller@survey')->name('checklist13.survey');
Route::post('/pengawasan/checklist/13/catatan', 'Checklists13Controller@catatan')->name('checklist13.catatan');
Route::get('/pengawasan/checklist/13/detail/{id}', 'Checklists13Controller@detail')->name('checklist13.detail');

// Halaman Checklist 14
Route::redirect('/pengawasan/checklist/14', '/pengawasan/checklist/14/umum')->name('checklist14.show');
Route::get('/pengawasan/checklist/14/umum', 'Checklists14Controller@umum')->name('checklist14.umum');
Route::get('/pengawasan/checklist/14/survey', 'Checklists14Controller@survey')->name('checklist14.survey');
Route::get('/pengawasan/checklist/14/catatan', 'Checklists14Controller@catatan')->name('checklist14.catatan');
Route::post('/pengawasan/checklist/14/store', 'Checklists14Controller@store')->name('checklist14.store');
Route::post('/pengawasan/checklist/14/umum', 'Checklists14Controller@umum')->name('checklist14.umum');
Route::post('/pengawasan/checklist/14/survey', 'Checklists14Controller@survey')->name('checklist14.survey');
Route::post('/pengawasan/checklist/14/catatan', 'Checklists14Controller@catatan')->name('checklist14.catatan');
Route::get('/pengawasan/checklist/14/detail/{id}', 'Checklists14Controller@detail')->name('checklist14.detail');

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
Route::get('/export/formulir11/{id}', 'ExportController@cetakForm11');

//export blank
Route::get('/export/blank/formulir6/{id}', 'ExportController@cetakBlank6');
Route::get('/export/blank/formulir10/{id}', 'ExportController@cetakBlank10');
Route::get('/export/blank/formulir11/{id}', 'ExportController@cetakBlank11');


// SIKOLAM
Route::get('/kolam', 'SikolamController@index')->name('sikolam.show');
Route::get('/kolam/laporan', 'SikolamController@laporan')->name('sikolam.laporan');
Route::get('/kolam/login', 'SikolamController@login')->name('sikolam.login');