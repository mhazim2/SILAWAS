@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Hotel, Restoran dan Katering')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Hotel, Restoran dan Katering</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist13.umum') }}">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#survey" data-toggle="tab">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist13.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="survey">
                                <form action="{{ route('checklist13.survey') }}" method="POST" enctype="multipart/form-data" onkeypress="return event.keyCode != 13;">
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p1_niu" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1_1">
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p1_npwp" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1_2">
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p1_siup" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1_3">
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p1_nib" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1_4">
                                                            <small class="form-text"><b>Contoh:</b> 9999999999999</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_p1_pks()">
                                                    <input id="check_p1_pks" type="checkbox" name="check_p1_pks" value="1">
                                                    <label class="font-weight-normal" for="check_p1_pks">Perjanjian Kerja Sama (jika Sewa Unit Usaha)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_p1_pks" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Nama Perjanjian</label>
                                                            <input type="text" class="form-control" name="P1_5">
                                                            <small class="form-text"><b>Contoh:</b> Perjanjian Sewa</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                2. Apakah bahan baku yang digunakan berasal dari unit usaha yang bersertifikat NKV?
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
                                        <div class="col-md-12">
                                            <div id="hidden_p2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P2_1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Tanggal Penerbitan</label>
                                                            <input type="text" class="form-control" name="P2_2">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Tanggal Surveilans Terakhir</label>
                                                            <input type="text" class="form-control" name="P2_3">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Tindak Lanjut Temuan</label>
                                                            <textarea class="form-control" rows="2" name="P2_4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                3. Apakah unit usaha memiliki gudang penyimpanan bahan baku?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p3_1()">
                                                    <input id="p3_1_1" type="radio" name="check_p3_1" value="1">
                                                    <label class="font-weight-normal" for="p3_1_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p3_1()">
                                                    <input id="p3_1_2" type="radio" name="check_p3_1" value="0">
                                                    <label class="font-weight-normal" for="p3_1_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div id="hidden_p3_ket_1" class="bg-kesmavet p-2 mt-2" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-2">
                                                            <label>Jenis Gudang Penyimpanan</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p3_1_ket_1" type="radio" name="P3_1" value="Kering">
                                                                    <label class="font-weight-normal" for="p3_1_ket_1">Kering</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p3_1_ket_2" type="radio" name="P3_1" value="Dingin/Beku">
                                                                    <label class="font-weight-normal" for="p3_1_ket_2">Dingin-beku</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="hidden_p3_2" class="row form-group mb-5" style="display:none">
                                        <div class="col-md-12">
                                            <label>
                                                Apakah gudang penyimpanan sudah memiliki sertifikat NKV?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p3_2()">
                                                    <input id="p3_2_1" type="radio" name="check_p3_2" value="1">
                                                    <label class="font-weight-normal" for="p3_2_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p3_2()">
                                                    <input id="p3_2_2" type="radio" name="check_p3_2" value="0">
                                                    <label class="font-weight-normal" for="p3_2_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p3_ket_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P3_2_1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Tanggal Penerbitan</label>
                                                            <input type="text" class="form-control" name="P3_2_2">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Tanggal Surveilans Terakhir</label>
                                                            <input type="text" class="form-control" name="P3_2_3">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Tindak Lanjut Temuan</label>
                                                            <textarea class="form-control" rows="2" name="P3_2_4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                4. Apakah unit usaha memiliki sertifikat halal (bagi yang dipersyaratkan)?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p4()">
                                                    <input id="p4_1" type="radio" name="check_p4" value="1">
                                                    <label class="font-weight-normal" for="p4_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p4()">
                                                    <input id="p4_2" type="radio" name="check_p4" value="0">
                                                    <label class="font-weight-normal" for="p4_2">Tidak</label>
                                                </div>
                                                <div id="hidden_p4" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label>Nomor Sertifikat</label>
                                                                <input type="text" class="form-control" name="P4_1">
                                                                <small class="form-text"><b>Contoh:</b> 99999999999999</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label>Tanggal Sertifikat</label>
                                                                <input type="text" class="form-control" name="P4_2">
                                                                <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label>Masa Berlaku</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control" name="P4_3">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">tahun</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                5. Apakah ada pendataan pemasok pangan asal hewan segar?
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
                                                    <div class="col-md-12">
                                                        <label>Catatan Suplier</label>
                                                        <input type="hidden" id="p5_count" name="p5_count" value="0">
                                                        <div id="hidden_p5_detail" class="px-2"></div>
                                                        <button type="button" class="btn btn-primary my-2 mr-1" onclick="p5_plus()">Tambah</button>
                                                        <button type="button" class="btn btn-danger my-2" onclick="p5_minus()">Kurangi</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                6. Apakah sarana prasarana penyimpanan dan pengolahan pangan asal hewan 
                                                non halal terpisah dengan produk halal?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p6()">
                                                    <input id="p6_1" type="radio" name="check_p6" value="1">
                                                    <label class="font-weight-normal" for="p6_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p6()">
                                                    <input id="p6_2" type="radio" name="check_p6" value="0">
                                                    <label class="font-weight-normal" for="p6_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div id="hidden_p6" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P6"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                7. Apakah sarana dan prasarana penyimpanan dan pengolahan pangan asal hewan 
                                                sesuai kapasitas?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p7()">
                                                    <input id="p7_1" type="radio" name="check_p7" value="1">
                                                    <label class="font-weight-normal" for="p7_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p7()">
                                                    <input id="p7_2" type="radio" name="check_p7" value="0">
                                                    <label class="font-weight-normal" for="p7_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_p7" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="d-block">
                                                            <div class="icheck-white d-block">
                                                                <input id="p7_1_ket" type="checkbox" name="P7_1" value="1">
                                                                <label class="font-weight-normal" for="p7_1_ket">Sarana dan prasarana penyimpanan memadai</label>
                                                            </div>
                                                            <div class="icheck-white d-block">
                                                                <input id="p7_2_ket" type="checkbox" name="P7_2" value="1">
                                                                <label class="font-weight-normal" for="p7_2_ket">Sarpras pengolahan pangan asal hewan sesuai kapasitas</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                8. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana 
                                                prasarana penyimpanan dan produksi (sanitasi)?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p8()">
                                                    <input id="p8_1" type="radio" name="check_p8" value="1">
                                                    <label class="font-weight-normal" for="p8_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p8()">
                                                    <input id="p8_2" type="radio" name="check_p8" value="0">
                                                    <label class="font-weight-normal" for="p8_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div id="hidden_p8" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Frekuensi pemeliharaan kebersihan</label>
                                                            <input id="p8_ket_1" type="text" class="form-control" name="P8_1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Terdapat bukti laporan hasil sanitasi (QC record)</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p8_ket_2_1" type="radio" name="P8_2" value="1">
                                                                    <label class="font-weight-normal" for="p8_ket_2_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p8_ket_2_2" type="radio" name="P8_2" value="0">
                                                                    <label class="font-weight-normal" for="p8_ket_2_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                9. Apakah sarana dan prasarana untuk higiene personal memadai?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p9()">
                                                    <input id="p9_1" type="radio" name="check_p9" value="1">
                                                    <label class="font-weight-normal" for="p9_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p9()">
                                                    <input id="p9_2" type="radio" name="check_p9" value="0">
                                                    <label class="font-weight-normal" for="p9_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_p9" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="d-block">
                                                            <div class="icheck-white d-block">
                                                                <input id="p9_ket_1" type="checkbox" name="P9_1" value="1">
                                                                <label class="font-weight-normal" for="p9_ket_1">Terdapat bak cuci tangan dilengkapi dengan sabun dan air mengalir</label>
                                                            </div>
                                                            <div class="icheck-white d-block">
                                                                <input id="p9_ket_2" type="checkbox" name="P9_2" value="1">
                                                                <label class="font-weight-normal" for="p9_ket_2">Menggunakan alat pelindung diri</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                10. Apakah dilakukan program pengendalian hama dan serangga?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p10()">
                                                    <input id="p10_1" type="radio" name="check_p10" value="1">
                                                    <label class="font-weight-normal" for="p10_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p10()">
                                                    <input id="p10_2" type="radio" name="check_p10" value="0">
                                                    <label class="font-weight-normal" for="p10_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div id="hidden_p10" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Memiliki SOP pengendalian hama dan serangga</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p10_ket_1_1" type="radio" name="P10_1" value="1">
                                                                    <label class="font-weight-normal" for="p10_ket_1_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p10_ket_1_2" type="radio" name="P10_1" value="0">
                                                                    <label class="font-weight-normal" for="p10_ket_1_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Jadwal pelaksanaan kegiatan</label>
                                                            <input id="p10_ket_2" type="text" class="form-control" name="P10_2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Kontrak dengan pihak ketiga</label>
                                                            <input id="p10_ket_3" type="text" class="form-control" name="P10_3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                11. Apakah ada prosedur penanganan terhadap bahan pangan asal hewan afkir/rusak?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p11()">
                                                    <input id="p11_1" type="radio" name="check_p11" value="1">
                                                    <label class="font-weight-normal" for="p11_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p11()">
                                                    <input id="p11_2" type="radio" name="check_p11" value="0">
                                                    <label class="font-weight-normal" for="p11_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div id="hidden_p11" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P11"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                12. Apakah sisa potongan daging sapi/kerbau mentah dijual/diberikan sebagai pakan babi?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p12()">
                                                    <input id="p12_1" type="radio" name="check_p12" value="1">
                                                    <label class="font-weight-normal" for="p12_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p12()">
                                                    <input id="p12_2" type="radio" name="check_p12" value="0">
                                                    <label class="font-weight-normal" for="p12_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div id="hidden_p12" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P12"></textarea>
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
        <script src="{{ asset('js/checklist13.js') }}"></script>
    @endpush
@endsection