@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Tempat Budidaya Hewan Perah dan Pemerahan Susu')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Tempat Budidaya Hewan Perah dan Pemerahan Susu</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card checklist">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist1.umum') }}">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#survey" data-toggle="tab">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist1.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="survey">
                                <form action="{{ route('checklist1.survey') }}" method="POST" enctype="multipart/form-data" onkeypress="return event.keyCode != 13;">
                                    @csrf
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                1. Apakah memiliki:
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_p1_niu()">
                                                    <input id="check_p1_niu" type="checkbox" name="check_p1_niu" value="1">
                                                    <label class="font-weight-normal" for="check_p1_niu">Nomor Izin Usaha</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="hidden_p1_niu" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1-1">
                                                            <small class="form-text"><b>Contoh:</b> 999/XXX/9999</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_p1_npwp()">
                                                    <input id="check_p1_npwp" type="checkbox" name="check_p1_npwp" value="1">
                                                    <label class="font-weight-normal" for="check_p1_npwp">NPWP</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="hidden_p1_npwp" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1-2">
                                                            <small class="form-text"><b>Contoh:</b> 99.999.999.9-999.999</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_p1_siup()">
                                                    <input id="check_p1_siup" type="checkbox" name="check_p1_siup" value="1">
                                                    <label class="font-weight-normal" for="check_p1_siup">SIUP</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="hidden_p1_siup" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1-3">
                                                            <small class="form-text"><b>Contoh:</b> 999/XXX/9999</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_p1_nib()">
                                                    <input id="check_p1_nib" type="checkbox" name="check_p1_nib" value="1">
                                                    <label class="font-weight-normal" for="check_p1_nib">NIB</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="hidden_p1_nib" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1-4">
                                                            <small class="form-text"><b>Contoh:</b> 9999999999999</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                2. Apakah lalu lintas hewan (masuk dan keluar peternakan) 
                                                dilengkapi dengan Sertifikat Veteriner?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p2()">
                                                    <input id="p2_1" type="radio" name="check_p2" value="1">
                                                    <label class="font-weight-normal" for="p2_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p2()">
                                                    <input id="p2_2" type="radio" name="check_p2" value="0">
                                                    <label class="font-weight-normal" for="p2_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="hidden_p2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Scan Sertifikat Veteriner</label>
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" id="p2_file" name="P2" class="custom-file-input">
                                                                    <label id="p2_label" class="custom-file-label" for="file">Pilih file...</label>
                                                                </div>
                                                            </div>
                                                            <small class="form-text"><b>Hint:</b> Maksimum 2MB (*.jpg, *.jpeg, *.png, *.pdf)</small>
                                                            @error('P2')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                3. Apakah ada dokter hewan penanggung jawab teknis?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p3()">
                                                    <input id="p3_1" type="radio" name="P3" value="1">
                                                    <label class="font-weight-normal" for="p3_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p3()">
                                                    <input id="p3_2" type="radio" name="P3" value="0">
                                                    <label class="font-weight-normal" for="p3_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p3" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P3_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                4. Apakah pemberian pengobatan di bawah pengawasan dokter hewan?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p4()">
                                                    <input id="p4_1" type="radio" name="P4" value="1">
                                                    <label class="font-weight-normal" for="p4_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p4()">
                                                    <input id="p4_2" type="radio" name="P4" value="0">
                                                    <label class="font-weight-normal" for="p4_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p4" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P4_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                5. Apakah sudah memiliki sertifikat NKV?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p5()">
                                                    <input id="p5_1" type="radio" name="check_p5" value="1">
                                                    <label class="font-weight-normal" for="p5_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p5()">
                                                    <input id="p5_2" type="radio" name="check_p5" value="0">
                                                    <label class="font-weight-normal" for="p5_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p5" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P5-1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Tanggal Penerbitan</label>
                                                            <input type="text" class="form-control" name="P5-1-belumada">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Tanggal Surveilans Terakhir</label>
                                                            <input type="text" class="form-control" name="P5-2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Tindak Lanjut Temuan</label>
                                                            <textarea class="form-control" rows="2" name="P5-3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                6. Apakah area peternakan dirancang untuk mencegah/membatasi 
                                                akses masuk hewan atau manusia dari luar?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p6()">
                                                    <input id="p6_1" type="radio" name="P6" value="1">
                                                    <label class="font-weight-normal" for="p6_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p6()">
                                                    <input id="p6_2" type="radio" name="P6" value="0">
                                                    <label class="font-weight-normal" for="p6_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p6" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P6_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                7. Apakah area peternakan memiliki pagar untuk membatasi akses?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p7()">
                                                    <input id="p7_1" type="radio" name="P7" value="1">
                                                    <label class="font-weight-normal" for="p7_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p7()">
                                                    <input id="p7_2" type="radio" name="P7" value="0">
                                                    <label class="font-weight-normal" for="p7_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p7" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P7_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                8. Apakah dilakukan pemisahan hewan baru dan hewan lama?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p8()">
                                                    <input id="p8_1" type="radio" name="P8" value="1">
                                                    <label class="font-weight-normal" for="p8_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p8()">
                                                    <input id="p8_2" type="radio" name="P8" value="0">
                                                    <label class="font-weight-normal" for="p8_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p8" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P8_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                9. Apakah ada kandang isolasi untuk hewan yang sakit?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p9()">
                                                    <input id="p9_1" type="radio" name="P9" value="1">
                                                    <label class="font-weight-normal" for="p9_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p9()">
                                                    <input id="p9_2" type="radio" name="P9" value="0">
                                                    <label class="font-weight-normal" for="p9_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p9" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P9_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                10. Apakah sarana dan prasarana pemeliharaan memenuhi/memadai sesuai jumlah ternak?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p10()">
                                                    <input id="p10_1" type="radio" name="P10" value="1">
                                                    <label class="font-weight-normal" for="p10_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p10()">
                                                    <input id="p10_2" type="radio" name="P10" value="0">
                                                    <label class="font-weight-normal" for="p10_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p10" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P10_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                11. Apakah sarana dan prasarana memenuhi/memadai: (pemerahan, penyimpanan, 
                                                dan pengangukan/pengiriman susu)
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p11()">
                                                    <input id="p11_1" type="radio" name="P11" value="1">
                                                    <label class="font-weight-normal" for="p11_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p11()">
                                                    <input id="p11_2" type="radio" name="P11" value="0">
                                                    <label class="font-weight-normal" for="p11_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p11" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P11_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                12. Apakah prosedur pemeliharaan hewan menerapkan prinsip-prinsip kesejahteraan hewan?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p12()">
                                                    <input id="p12_1" type="radio" name="P12" value="1">
                                                    <label class="font-weight-normal" for="p12_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p12()">
                                                    <input id="p12_2" type="radio" name="P12" value="0">
                                                    <label class="font-weight-normal" for="p12_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p12" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P12_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                13. Apakah metode pemerahan memperhatikan kebersihan ambing?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p13()">
                                                    <input id="p13_1" type="radio" name="P13" value="1">
                                                    <label class="font-weight-normal" for="p13_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p13()">
                                                    <input id="p13_2" type="radio" name="P13" value="0">
                                                    <label class="font-weight-normal" for="p13_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p13" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P13_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                14. Apakah ada penanganan terhadap susu yang berasal dari hewan yang sedang dalam 
                                                pengobatan dengan menggunakan antibiotik (mastitis dan penyakit lainnya)?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p14()">
                                                    <input id="p14_1" type="radio" name="P14" value="1">
                                                    <label class="font-weight-normal" for="p14_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p14()">
                                                    <input id="p14_2" type="radio" name="P14" value="0">
                                                    <label class="font-weight-normal" for="p14_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p14" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P14_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                15. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi):
                                                (unit usaha budidaya perah dan unit pemerahan susu)
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p15()">
                                                    <input id="p15_1" type="radio" name="P15" value="1">
                                                    <label class="font-weight-normal" for="p15_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p15()">
                                                    <input id="p15_2" type="radio" name="P15" value="0">
                                                    <label class="font-weight-normal" for="p15_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p15" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P15_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                16. Apakah sarana dan prasarana untuk kebersihan personal (higiene) memadai?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p16()">
                                                    <input id="p16_1" type="radio" name="P16" value="1">
                                                    <label class="font-weight-normal" for="p16_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p16()">
                                                    <input id="p16_2" type="radio" name="P16" value="0">
                                                    <label class="font-weight-normal" for="p16_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p16" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P16_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                17. Apakah dilakukan program pengendalian hama dan serangga?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p17()">
                                                    <input id="p17_1" type="radio" name="P17" value="1">
                                                    <label class="font-weight-normal" for="p17_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p17()">
                                                    <input id="p17_2" type="radio" name="P17" value="0">
                                                    <label class="font-weight-normal" for="p17_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p17" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P17_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                18. Apakah ada prosedur penanganan terhadap hewan yang sakit/mati?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p18()">
                                                    <input id="p18_1" type="radio" name="P18" value="1">
                                                    <label class="font-weight-normal" for="p18_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p18()">
                                                    <input id="p18_2" type="radio" name="P18" value="0">
                                                    <label class="font-weight-normal" for="p18_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p18" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P18_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                19. Apakah dilakukan pengolahan limbah?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p19()">
                                                    <input id="p19_1" type="radio" name="P19" value="1">
                                                    <label class="font-weight-normal" for="p19_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p19()">
                                                    <input id="p19_2" type="radio" name="P19" value="0">
                                                    <label class="font-weight-normal" for="p19_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p19" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P19_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-5">
                                        <button type="submit" class="btn btn-kesmavet">
                                            Simpan & Lanjutkan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @push('scripts')
        <script src="{{ asset('js/checklist1.js') }}"></script>
    @endpush
@endsection