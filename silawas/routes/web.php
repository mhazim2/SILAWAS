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
// Auth::routes();
 // Authentication Routes...
 Route::get('/silawas/login', 'Auth\LoginController@showLoginForm')->name('login');
 Route::post('/silawas/login', 'Auth\LoginController@login');
 Route::post('/silawas/logout', 'Auth\LoginController@logout')->name('logout');

 // Registration Routes...
 Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
 Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Halaman Utama
Route::get('/', function () {
    return redirect('/silawas');
});
Route::get('/silawas', 'HomeController@index')->name('home');

// Halaman Profile
Route::get('/silawas/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/silawas/profile/{id}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::post('/silawas/profile/{id}/update', 'ProfilesController@update')->name('profile.update');

// Halaman Petugas
Route::get('/silawas/petugas', 'PetugassController@index')->name('petugas.show');
Route::get('/silawas/petugas/create', 'PetugassController@create')->name('petugas.create');
Route::post('/silawas/petugas/store','PetugassController@store')->name('petugas.store');
Route::post('/silawas/petugas/update/{idUser}', 'PetugassController@update')->name('petugas.update');
Route::get('/silawas/petugas/hapus/{idUser}', 'PetugassController@deletePetugas')->name('petugas.delete');

// Halaman Unit Usaha
Route::get('/silawas/unit-usaha', 'UnitUsahasController@index')->name('unitusaha.show');
Route::get('/silawas/unit-usaha/create', 'UnitUsahasController@create')->name('unitusaha.create');
Route::post('/silawas/unit-usaha/store', 'UnitUsahasController@store')->name('unitusaha.store');
Route::post('/silawas/unit-usaha/update/{idUnitUsaha}', 'UnitUsahasController@updateUnitUsaha')->name('unitusaha.update');
Route::get('/silawas/unit-usaha/hapus/{idUnitUsaha}', 'UnitUsahasController@deleteUnitUsaha')->name('unitusaha.delete');

// Halaman Pengajuan
Route::get('/silawas/pengajuan', 'FormsController@getAllForm')->name('pengajuan.show');
Route::get('/silawas/pengajuan/detail/{pengajuan_id}', 'PengajuansController@detail')->name('pengajuan.detail');
Route::get('/silawas/pengajuan/hapus/{pengajuan_id}', 'FormsController@deleteForm')->name('pengajuan.delete');

// Halaman Pengajuan
Route::get('/silawas/pengajuan/formulir', 'PengajuansController@formulir')->name('pengajuan.formulir');
Route::resource('unitusaha', 'UnitUsahasController');

// Halaman Formulir
Route::get('/silawas/pengajuan/formulir/1', 'FormsController@form1')->name('form1.show');
Route::get('/silawas/pengajuan/formulir/2', 'FormsController@form2')->name('form2.show');
Route::get('/silawas/pengajuan/formulir/3', 'FormsController@form3')->name('form3.show');
Route::get('/silawas/pengajuan/formulir/4', 'FormsController@form4')->name('form4.show');
Route::get('/silawas/pengajuan/formulir/5', 'FormsController@form5')->name('form5.show');
Route::get('/silawas/silawas/pengajuan/formulir/7', 'FormsController@form7')->name('form7.show');
Route::get('/silawas/pengajuan/formulir/8', 'FormsController@form8')->name('form8.show');
Route::get('/silawas/pengajuan/formulir/9', 'FormsController@form9')->name('form9.show');
Route::get('/silawas/silawas/pengajuan/formulir/10', 'FormsController@form10')->name('form10.show');
Route::get('/silawas/pengajuan/formulir/11', 'FormsController@form11')->name('form11.show');
Route::get('/silawas/pengajuan/formulir/12', 'FormsController@form12')->name('form12.show');
Route::get('/silawas/pengajuan/formulir/13', 'FormsController@form13')->name('form13.show');
Route::get('/silawas/pengajuan/formulir/14', 'FormsController@form14')->name('form14.show');
Route::post('/pengajuan/formulir/1/utama', 'FormsController@storeUtamaForm1');
Route::post('/pengajuan/formulir/1/survey', 'FormsController@storeSurveyForm1');
Route::post('/pengajuan/formulir/1/tambahan', 'FormsController@storeTambahanForm1');

// Halaman Pengawasan
Route::get('/silawas/pengawasan', 'PengawasansController@index')->name('pengawasan.show');
Route::get('/silawas/pengawasan/ceklis', 'PengawasansController@checklists')->name('pengawasan.ceklis');
Route::get('/silawas/pengawasan/hapus/{pengawasan_id}', 'PengawasansController@delete')->name('pengawasan.delete');
Route::post('/silawas/uploadBukti/{survey_id}', 'FormsController@uploadBukti');
Route::get('/silawas/downloadBukti/{survey_id}', 'FormsController@downloadBukti');

// Halaman Checklist 1
Route::redirect('/silawas/pengawasan/checklist/1', '/silawas/pengawasan/checklist/1/umum')->name('checklist1.show');
Route::get('/silawas/pengawasan/checklist/1/umum', 'Checklists1Controller@umum')->name('checklist1.umum');
Route::get('/silawas/pengawasan/checklist/1/survey', 'Checklists1Controller@survey')->name('checklist1.survey');
Route::get('/silawas/pengawasan/checklist/1/catatan', 'Checklists1Controller@catatan')->name('checklist1.catatan');
Route::post('/silawas/pengawasan/checklist/1/umum', 'Checklists1Controller@umum')->name('checklist1.umum');
Route::post('/silawas/pengawasan/checklist/1/survey', 'Checklists1Controller@survey')->name('checklist1.survey');
Route::post('/silawas/pengawasan/checklist/1/catatan', 'Checklists1Controller@catatan')->name('checklist1.catatan');
Route::get('/silawas/pengawasan/checklist/1/store', 'Checklists1Controller@store')->name('checklist1.store');
Route::get('/silawas/pengawasan/checklist/1/detail/{id}', 'Checklists1Controller@detail')->name('checklist1.detail');

// Halaman Checklist 2
Route::redirect('/silawas/pengawasan/checklist/2', '/silawas/pengawasan/checklist/2/umum')->name('checklist2.show');
Route::get('/silawas/pengawasan/checklist/2/umum', 'Checklists2Controller@umum')->name('checklist2.umum');
Route::get('/silawas/pengawasan/checklist/2/survey', 'Checklists2Controller@survey')->name('checklist2.survey');
Route::get('/silawas/pengawasan/checklist/2/catatan', 'Checklists2Controller@catatan')->name('checklist2.catatan');
Route::post('/silawas/pengawasan/checklist/2/umum', 'Checklists2Controller@umum')->name('checklist2.umum');
Route::post('/silawas/pengawasan/checklist/2/survey', 'Checklists2Controller@survey')->name('checklist2.survey');
Route::post('/silawas/pengawasan/checklist/2/catatan', 'Checklists2Controller@catatan')->name('checklist2.catatan');
Route::get('/silawas/pengawasan/checklist/2/store', 'Checklists2Controller@store')->name('checklist2.store');
Route::get('/silawas/pengawasan/checklist/2/detail/{id}', 'Checklists2Controller@detail')->name('checklist2.detail');

// Halaman Checklist 3
Route::redirect('/silawas/pengawasan/checklist/3', '/silawas/pengawasan/checklist/3/umum')->name('checklist3.show');
Route::get('/silawas/pengawasan/checklist/3/umum', 'Checklists3Controller@umum')->name('checklist3.umum');
Route::get('/silawas/pengawasan/checklist/3/survey', 'Checklists3Controller@survey')->name('checklist3.survey');
Route::get('/silawas/pengawasan/checklist/3/catatan', 'Checklists3Controller@catatan')->name('checklist3.catatan');
Route::post('/silawas/pengawasan/checklist/3/umum', 'Checklists3Controller@umum')->name('checklist3.umum');
Route::post('/silawas/pengawasan/checklist/3/survey', 'Checklists3Controller@survey')->name('checklist3.survey');
Route::post('/silawas/pengawasan/checklist/3/catatan', 'Checklists3Controller@catatan')->name('checklist3.catatan');
Route::get('/silawas/pengawasan/checklist/3/store', 'Checklists3Controller@store')->name('checklist3.store');
Route::get('/silawas/pengawasan/checklist/3/detail/{id}', 'Checklists3Controller@detail')->name('checklist3.detail');

// Halaman Checklist 4
Route::redirect('/silawas/pengawasan/checklist/4', '/silawas/pengawasan/checklist/4/umum')->name('checklist4.show');
Route::get('/silawas/pengawasan/checklist/4/umum', 'Checklists4Controller@umum')->name('checklist4.umum');
Route::get('/silawas/pengawasan/checklist/4/survey', 'Checklists4Controller@survey')->name('checklist4.survey');
Route::get('/silawas/pengawasan/checklist/4/catatan', 'Checklists4Controller@catatan')->name('checklist4.catatan');
Route::post('/silawas/pengawasan/checklist/4/umum', 'Checklists4Controller@umum')->name('checklist4.umum');
Route::post('/silawas/pengawasan/checklist/4/survey', 'Checklists4Controller@survey')->name('checklist4.survey');
Route::post('/silawas/pengawasan/checklist/4/catatan', 'Checklists4Controller@catatan')->name('checklist4.catatan');
Route::get('/silawas/pengawasan/checklist/4/store', 'Checklists4Controller@store')->name('checklist4.store');
Route::get('/silawas/pengawasan/checklist/4/detail/{id}', 'Checklists4Controller@detail')->name('checklist4.detail');

// Halaman Checklist 5
Route::redirect('/silawas/pengawasan/checklist/5', '/silawas/pengawasan/checklist/5/umum')->name('checklist5.show');
Route::get('/silawas/pengawasan/checklist/5/umum', 'Checklists5Controller@umum')->name('checklist5.umum');
Route::get('/silawas/pengawasan/checklist/5/survey', 'Checklists5Controller@survey')->name('checklist5.survey');
Route::get('/silawas/pengawasan/checklist/5/catatan', 'Checklists5Controller@catatan')->name('checklist5.catatan');
Route::post('/silawas/pengawasan/checklist/5/umum', 'Checklists5Controller@umum')->name('checklist5.umum');
Route::post('/silawas/pengawasan/checklist/5/survey', 'Checklists5Controller@survey')->name('checklist5.survey');
Route::post('/silawas/pengawasan/checklist/5/catatan', 'Checklists5Controller@catatan')->name('checklist5.catatan');
Route::get('/silawas/pengawasan/checklist/5/store', 'Checklists5Controller@store')->name('checklist5.store');
Route::get('/silawas/pengawasan/checklist/5/detail/{id}', 'Checklists5Controller@detail')->name('checklist5.detail');

// Halaman Checklist 6
Route::redirect('/silawas/pengawasan/checklist/6', '/silawas/pengawasan/checklist/6/umum')->name('checklist6.show');
Route::get('/silawas/pengawasan/checklist/6/umum', 'Checklists6Controller@umum')->name('checklist6.umum');
Route::get('/silawas/pengawasan/checklist/6/survey', 'Checklists6Controller@survey')->name('checklist6.survey');
Route::get('/silawas/pengawasan/checklist/6/catatan', 'Checklists6Controller@catatan')->name('checklist6.catatan');
Route::post('/silawas/pengawasan/checklist/6/umum', 'Checklists6Controller@umum')->name('checklist6.umum');
Route::post('/silawas/pengawasan/checklist/6/survey', 'Checklists6Controller@survey')->name('checklist6.survey');
Route::post('/silawas/pengawasan/checklist/6/catatan', 'Checklists6Controller@catatan')->name('checklist6.catatan');
Route::post('/silawas/pengawasan/checklist/6/store', 'Checklists6Controller@store')->name('checklist6.store');
Route::get('/silawas/pengawasan/checklist/6/detail/{id}', 'Checklists6Controller@detail')->name('checklist6.detail');

// Halaman Checklist 7
Route::redirect('/silawas/pengawasan/checklist/7', '/silawas/pengawasan/checklist/7/umum')->name('checklist7.show');
Route::get('/silawas/pengawasan/checklist/7/umum', 'Checklists7Controller@umum')->name('checklist7.umum');
Route::get('/silawas/pengawasan/checklist/7/survey', 'Checklists7Controller@survey')->name('checklist7.survey');
Route::get('/silawas/pengawasan/checklist/7/catatan', 'Checklists7Controller@catatan')->name('checklist7.catatan');
Route::post('/silawas/pengawasan/checklist/7/umum', 'Checklists7Controller@umum')->name('checklist7.umum');
Route::post('/silawas/pengawasan/checklist/7/survey', 'Checklists7Controller@survey')->name('checklist7.survey');
Route::post('/silawas/pengawasan/checklist/7/catatan', 'Checklists7Controller@catatan')->name('checklist7.catatan');
Route::post('/silawas/pengawasan/checklist/7/store', 'Checklists7Controller@store')->name('checklist7.store');
Route::get('/silawas/pengawasan/checklist/7/detail/{id}', 'Checklists7Controller@detail')->name('checklist7.detail');

// Halaman Checklist 8
Route::redirect('/silawas/pengawasan/checklist/8', '/silawas/pengawasan/checklist/8/umum')->name('checklist8.show');
Route::get('/silawas/pengawasan/checklist/8/umum', 'Checklists8Controller@umum')->name('checklist8.umum');
Route::get('/silawas/pengawasan/checklist/8/survey', 'Checklists8Controller@survey')->name('checklist8.survey');
Route::get('/silawas/pengawasan/checklist/8/catatan', 'Checklists8Controller@catatan')->name('checklist8.catatan');
Route::post('/silawas/pengawasan/checklist/8/umum', 'Checklists8Controller@umum')->name('checklist8.umum');
Route::post('/silawas/pengawasan/checklist/8/survey', 'Checklists8Controller@survey')->name('checklist8.survey');
Route::post('/silawas/pengawasan/checklist/8/catatan', 'Checklists8Controller@catatan')->name('checklist8.catatan');
Route::get('/silawas/pengawasan/checklist/8/store', 'Checklists8Controller@store')->name('checklist8.store');
Route::get('/silawas/pengawasan/checklist/8/detail/{id}', 'Checklists8Controller@detail')->name('checklist8.detail');

// Halaman Checklist 9
Route::redirect('/silawas/pengawasan/checklist/9', '/silawas/pengawasan/checklist/9/umum')->name('checklist9.show');
Route::get('/silawas/pengawasan/checklist/9/umum', 'Checklists9Controller@umum')->name('checklist9.umum');
Route::get('/silawas/pengawasan/checklist/9/survey', 'Checklists9Controller@survey')->name('checklist9.survey');
Route::get('/silawas/pengawasan/checklist/9/catatan', 'Checklists9Controller@catatan')->name('checklist9.catatan');
Route::post('/silawas/pengawasan/checklist/9/umum', 'Checklists9Controller@umum')->name('checklist9.umum');
Route::post('/silawas/pengawasan/checklist/9/survey', 'Checklists9Controller@survey')->name('checklist9.survey');
Route::post('/silawas/pengawasan/checklist/9/catatan', 'Checklists9Controller@catatan')->name('checklist9.catatan');
Route::get('/silawas/pengawasan/checklist/9/store', 'Checklists9Controller@store')->name('checklist9.store');
Route::get('/silawas/pengawasan/checklist/9/detail/{id}', 'Checklists9Controller@detail')->name('checklist9.detail');

// Halaman Checklist 10
Route::redirect('/silawas/pengawasan/checklist/10', '/silawas/pengawasan/checklist/10/umum')->name('checklist10.show');
Route::get('/silawas/pengawasan/checklist/10/umum', 'Checklists10Controller@umum')->name('checklist10.umum');
Route::get('/silawas/pengawasan/checklist/10/survey', 'Checklists10Controller@survey')->name('checklist10.survey');
Route::get('/silawas/pengawasan/checklist/10/catatan', 'Checklists10Controller@catatan')->name('checklist10.catatan');
Route::post('/silawas/pengawasan/checklist/10/store', 'Checklists10Controller@store')->name('checklist10.store');
Route::post('/silawas/pengawasan/checklist/10/umum', 'Checklists10Controller@umum')->name('checklist10.umum');
Route::post('/silawas/pengawasan/checklist/10/survey', 'Checklists10Controller@survey')->name('checklist10.survey');
Route::post('/silawas/pengawasan/checklist/10/catatan', 'Checklists10Controller@catatan')->name('checklist10.catatan');
Route::get('/silawas/pengawasan/checklist/10/detail/{id}', 'Checklists10Controller@detail')->name('checklist10.detail');

// Halaman Checklist 11
Route::redirect('/silawas/pengawasan/checklist/11', '/silawas/pengawasan/checklist/11/umum')->name('checklist11.show');
Route::get('/silawas/pengawasan/checklist/11/umum', 'Checklists11Controller@umum')->name('checklist11.umum');
Route::get('/silawas/pengawasan/checklist/11/survey', 'Checklists11Controller@survey')->name('checklist11.survey');
Route::get('/silawas/pengawasan/checklist/11/catatan', 'Checklists11Controller@catatan')->name('checklist11.catatan');
Route::post('/silawas/pengawasan/checklist/11/store', 'Checklists11Controller@store')->name('checklist11.store');
Route::post('/silawas/pengawasan/checklist/11/umum', 'Checklists11Controller@umum')->name('checklist11.umum');
Route::post('/silawas/pengawasan/checklist/11/survey', 'Checklists11Controller@survey')->name('checklist11.survey');
Route::post('/silawas/pengawasan/checklist/11/catatan', 'Checklists11Controller@catatan')->name('checklist11.catatan');
Route::get('/silawas/pengawasan/checklist/11/detail/{id}', 'Checklists11Controller@detail')->name('checklist11.detail');

// Halaman Checklist 12
Route::redirect('/silawas/pengawasan/checklist/12', '/silawas/pengawasan/checklist/12/umum')->name('checklist12.show');
Route::get('/silawas/pengawasan/checklist/12/umum', 'Checklists12Controller@umum')->name('checklist12.umum');
Route::get('/silawas/pengawasan/checklist/12/survey', 'Checklists12Controller@survey')->name('checklist12.survey');
Route::get('/silawas/pengawasan/checklist/12/catatan', 'Checklists12Controller@catatan')->name('checklist12.catatan');
Route::post('/silawas/pengawasan/checklist/12/store', 'Checklists12Controller@store')->name('checklist12.store');
Route::post('/silawas/pengawasan/checklist/12/umum', 'Checklists12Controller@umum')->name('checklist12.umum');
Route::post('/silawas/pengawasan/checklist/12/survey', 'Checklists12Controller@survey')->name('checklist12.survey');
Route::post('/silawas/pengawasan/checklist/12/catatan', 'Checklists12Controller@catatan')->name('checklist12.catatan');
Route::get('/silawas/pengawasan/checklist/12/detail/{id}', 'Checklists12Controller@detail')->name('checklist12.detail');

// Halaman Checklist 13
Route::redirect('/silawas/pengawasan/checklist/13', '/silawas/pengawasan/checklist/13/umum')->name('checklist13.show');
Route::get('/silawas/pengawasan/checklist/13/umum', 'Checklists13Controller@umum')->name('checklist13.umum');
Route::get('/silawas/pengawasan/checklist/13/survey', 'Checklists13Controller@survey')->name('checklist13.survey');
Route::get('/silawas/pengawasan/checklist/13/catatan', 'Checklists13Controller@catatan')->name('checklist13.catatan');
Route::post('/silawas/pengawasan/checklist/13/store', 'Checklists13Controller@store')->name('checklist13.store');
Route::post('/silawas/pengawasan/checklist/13/umum', 'Checklists13Controller@umum')->name('checklist13.umum');
Route::post('/silawas/pengawasan/checklist/13/survey', 'Checklists13Controller@survey')->name('checklist13.survey');
Route::post('/silawas/pengawasan/checklist/13/catatan', 'Checklists13Controller@catatan')->name('checklist13.catatan');
Route::get('/silawas/pengawasan/checklist/13/detail/{id}', 'Checklists13Controller@detail')->name('checklist13.detail');

// Halaman Checklist 14
Route::redirect('/silawas/pengawasan/checklist/14', '/silawas/pengawasan/checklist/14/umum')->name('checklist14.show');
Route::get('/silawas/pengawasan/checklist/14/umum', 'Checklists14Controller@umum')->name('checklist14.umum');
Route::get('/silawas/pengawasan/checklist/14/survey', 'Checklists14Controller@survey')->name('checklist14.survey');
Route::get('/silawas/pengawasan/checklist/14/catatan', 'Checklists14Controller@catatan')->name('checklist14.catatan');
Route::post('/silawas/pengawasan/checklist/14/store', 'Checklists14Controller@store')->name('checklist14.store');
Route::post('/silawas/pengawasan/checklist/14/umum', 'Checklists14Controller@umum')->name('checklist14.umum');
Route::post('/silawas/pengawasan/checklist/14/survey', 'Checklists14Controller@survey')->name('checklist14.survey');
Route::post('/silawas/pengawasan/checklist/14/catatan', 'Checklists14Controller@catatan')->name('checklist14.catatan');
Route::get('/silawas/pengawasan/checklist/14/detail/{id}', 'Checklists14Controller@detail')->name('checklist14.detail');

// Halaman Laporan
Route::get('/silawas/laporan', 'LaporansController@index')->name('laporan.show');
Route::post('/silawas/laporan', 'LaporansController@content')->name('laporan.content');
Route::get('/silawas/laporan/download/excel/{start_date}/{end_date}', 'LaporansController@downloadExcel')->name('laporan.downloadexcel');

// Halaman Export
Route::get('/export/checklist6/{unitusaha_id}', 'ExportsController@checklist6')->name('export.checklist6');

//detailForm
Route::get('/detail/formulir1/{id}', 'FormsController@getDetailForm1');
Route::get('/detail/formulir6/{id}', 'FormsController@getDetailForm6');
Route::get('/detail/formulir10/{id}', 'FormsController@getDetailForm10');

//export
Route::get('/export/formulir1/{id}', 'ExportController@cetakForm1');
Route::get('/export/formulir2/{id}', 'ExportController@cetakForm2');
Route::get('/export/formulir3/{id}', 'ExportController@cetakForm3');
Route::get('/export/formulir4/{id}', 'ExportController@cetakForm4');
Route::get('/export/formulir5/{id}', 'ExportController@cetakForm5');
Route::get('/export/formulir6/{id}', 'ExportController@cetakForm6');
Route::get('/export/formulir7/{id}', 'ExportController@cetakForm7');
Route::get('/export/formulir8/{id}', 'ExportController@cetakForm8');
Route::get('/export/formulir9/{id}', 'ExportController@cetakForm9');
Route::get('/export/formulir10/{id}', 'ExportController@cetakForm10');
Route::get('/export/formulir11/{id}', 'ExportController@cetakForm11');
Route::get('/export/formulir12/{id}', 'ExportController@cetakForm12');
Route::get('/export/formulir13/{id}', 'ExportController@cetakForm13');
Route::get('/export/formulir14/{id}', 'ExportController@cetakForm14');
Route::get('/export/excel', 'ExportController@export_excel');

//export blank
Route::get('/export/blank/formulir1', 'ExportController@cetakBlank1');
Route::get('/export/blank/formulir2', 'ExportController@cetakBlank2');
Route::get('/export/blank/formulir3', 'ExportController@cetakBlank3');
Route::get('/export/blank/formulir4', 'ExportController@cetakBlank4');
Route::get('/export/blank/formulir5', 'ExportController@cetakBlank5');
Route::get('/export/blank/formulir6', 'ExportController@cetakBlank6');
Route::get('/export/blank/formulir7', 'ExportController@cetakBlank7');
Route::get('/export/blank/formulir8', 'ExportController@cetakBlank8');
Route::get('/export/blank/formulir9', 'ExportController@cetakBlank9');
Route::get('/export/blank/formulir10', 'ExportController@cetakBlank10');
Route::get('/export/blank/formulir11', 'ExportController@cetakBlank11');
Route::get('/export/blank/formulir12', 'ExportController@cetakBlank12');
Route::get('/export/blank/formulir13', 'ExportController@cetakBlank13');
Route::get('/export/blank/formulir14', 'ExportController@cetakBlank14');


// SIKOLAM
Route::get('/kolam', 'SikolamController@index')->name('sikolam.show');
Route::get('/kolam/laporan', 'SikolamController@laporan')->name('sikolam.laporan');
Route::get('/kolam/login', 'SikolamController@login')->name('sikolam.login');
Route::get('/kolam/dashboard', 'SikolamController@dashboard')->name('sikolam.dashboard');
Route::get('/kolam/pengawas', 'SikolamController@pengawas')->name('sikolam.pengawas');
Route::get('/kolam/aduan', 'SikolamController@aduan')->name('sikolam.aduan');
Route::get('/kolam/aduan/detail/{id}', 'SikolamController@detailAduan')->name('sikolam.detailaduan');
Route::post('/kolam/laporan/store', 'SikolamController@storeLaporan')->name('sikolam.storeLaporan');


// Cuma Test
Route::get('/testexcel', 'LaporansController@testExcel')->name('testexcel.show');