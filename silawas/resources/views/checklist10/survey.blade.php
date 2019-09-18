@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Gudang Penyimpanan Dingin/Beku')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Gudang Penyimpanan Dingin/Beku</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist10.umum') }}">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#survey" data-toggle="tab">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist10.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="survey">
                                <form action="{{ route('checklist10.survey') }}" method="POST" enctype="multipart/form-data" onkeypress="return event.keyCode != 13;">
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
                                        <div class="col-lg-6">
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
                                        <div class="col-lg-6">
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
                                        <div class="col-lg-6">
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
                                                            <input type="text" class="form-control" name="P1-5">
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
                                                2. Apakah sudah memiliki sertifikat NKV?
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
                                                            <input type="text" class="form-control" name="P2-1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Tanggal Penerbitan</label>
                                                            <input type="text" class="form-control" name="P2-2">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Tanggal Surveilans Terakhir</label>
                                                            <input type="text" class="form-control" name="P2-3">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Tindak Lanjut Temuan</label>
                                                            <textarea class="form-control" rows="2" name="P2-4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                3. Apakah ada pendataan sumber produk?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p3()">
                                                    <input id="p3_1" type="radio" name="check_p3" value="1">
                                                    <label class="font-weight-normal" for="p3_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p3()">
                                                    <input id="p3_2" type="radio" name="check_p3" value="0">
                                                    <label class="font-weight-normal" for="p3_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p3" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Catatan Suplier</label>
                                                        <input type="hidden" id="p3_count" name="p3_count" value="0">
                                                        <div id="hidden_p3_detail" class="px-2"></div>
                                                        <button type="button" class="btn btn-primary my-2 mr-1" onclick="p3_plus()">Tambah</button>
                                                        <button type="button" class="btn btn-danger my-2" onclick="p3_minus()">Kurangi</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                4. Apakah dilengkapi dengan sertifikat halal? (Khusus Gelatine Pangan)
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
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p4" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Nomor Sertifikat</label>
                                                            <input type="text" class="form-control" name="P4-1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Tanggal Sertifikat</label>
                                                            <input type="text" class="form-control" name="P4-2">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Masa Berlaku</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P4-3">
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
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                5. Apakah area khusus penyimpanan didesain untuk mencegah/membatasi 
                                                akses masuk hewan atau manusia dari luar?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p5()">
                                                    <input id="p5_1" type="radio" name="P5" value="1">
                                                    <label class="font-weight-normal" for="p5_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p5()">
                                                    <input id="p5_2" type="radio" name="P5" value="0">
                                                    <label class="font-weight-normal" for="p5_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div id="hidden_p5" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P5_ket"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                6. Apakah sarana dan prasarana penyimpanan memenuhi/memadai?
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
                                        <div class="col-lg-8">
                                            <div id="hidden_p6" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-0">
                                                            <label>Jumlah Unit/Ruang Penyimpanan</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P6-1">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">unit</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-0">
                                                            <label>Kapasitas</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P6-2">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ton/unit</span>
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
                                                7. Apakah sarana penyimpanan dingin dikelola dengan baik?
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
                                        <div class="col-lg-8">
                                            <div id="hidden_p7" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-2">
                                                            <label>Pencatatan Suhu</label>
                                                            <input type="text" class="form-control" name="P7-1">
                                                            <small class="form-text"><b>Contoh:</b> setiap hari</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-2">
                                                            <label>Kalibrasi</label>
                                                            <input type="text" class="form-control" name="P7-2">
                                                            <small class="form-text"><b>Contoh:</b> 1 tahun sekali</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                8. Apakah terdapat pemisahan ruangan antar produk?
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
                                        <div class="col-lg-4">
                                            <div id="hidden_p8" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="d-block">
                                                            <div class="icheck-white d-block">
                                                                <input id="p8_1_ket" type="checkbox" name="P8-1" value="Pemisahan ruangan antar produk">
                                                                <label class="font-weight-normal" for="p8_1_ket">Pemisahan ruangan antar produk</label>
                                                            </div>
                                                            <div class="icheck-white d-block">
                                                                <input id="p8_2_ket" type="checkbox" name="P8-2" value="Lokasi antar produk terpisah">
                                                                <label class="font-weight-normal" for="p8_2_ket">Lokasi antar produk terpisah</label>
                                                            </div>
                                                            <div class="icheck-white d-block">
                                                                <input id="p8_3_ket" type="checkbox" name="P8-3" value="Partisi antar produk">
                                                                <label class="font-weight-normal" for="p8_3_ket">Partisi antar produk</label>
                                                            </div>
                                                            <div class="icheck-white d-block">
                                                                <input id="p8_4_ket" type="checkbox" name="P8-4" value="Perlatan terpisah">
                                                                <label class="font-weight-normal" for="p8_4_ket">Perlatan terpisah</label>
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
                                                9. Apakah terdapat pemisahan ruangan antar produk halal dan non-halal?
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
                                                        <div class="form-group mb-2">
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
                                                10. Apakah penanganan produk dilakukan dengan baik?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p10" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>SOP pennanganan produk</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p10_ket_1_1" type="radio" name="P10-1" value="1">
                                                                    <label class="font-weight-normal" for="p10_ket_1_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p10_ket_1_2" type="radio" name="P10-1" value="0">
                                                                    <label class="font-weight-normal" for="p10_ket_1_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>FIFO</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p10_ket_2_1" type="radio" name="P10-2" value="1">
                                                                    <label class="font-weight-normal" for="p10_ket_2_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p10_ket_2_2" type="radio" name="P10-2" value="0">
                                                                    <label class="font-weight-normal" for="p10_ket_2_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Rak Palet</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p10_ket_3_1" type="radio" name="P10-3" value="1">
                                                                    <label class="font-weight-normal" for="p10_ket_3_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p10_ket_3_2" type="radio" name="P10-3" value="0">
                                                                    <label class="font-weight-normal" for="p10_ket_3_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Jenis Palet</label>
                                                            <input id="p10_ket_4" type="text" class="form-control" name="P10-4">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                11. Apakah produk hewan memiliki label/informasi?
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
                                        <div class="col-lg-4">
                                            <div id="hidden_p11" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Jenis Produk</label>
                                                            <input type="text" class="form-control" name="P11-1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Berat Produk</label>
                                                            <div class="input-group mb-0">
                                                                <input type="text" class="form-control" name="P11-2">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">Kg</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Est no</label>
                                                            <input type="text" class="form-control" name="P11-3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Tanggal Produksi</label>
                                                            <input type="text" class="form-control" name="P11-4">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Expired</label>
                                                            <input type="text" class="form-control" name="P11-5">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                12. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
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
                                        <div class="col-lg-4">
                                            <div id="hidden_p12" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>SOP pemeliharaan kebersihan</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p12_ket_1_1" type="radio" name="P12-1" value="1">
                                                                    <label class="font-weight-normal" for="p12_ket_1_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p12_ket_1_2" type="radio" name="P12-1" value="0">
                                                                    <label class="font-weight-normal" for="p12_ket_1_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Frekuensi pemeliharaan kebersihan</label>
                                                            <input id="p12_ket_2" type="text" class="form-control" name="P12-2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Metode</label>
                                                            <input id="p12_ket_3" type="text" class="form-control" name="P12-3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Catatan pemeliharaan kebersihan</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p12_ket_4_1" type="radio" name="P12-4" value="1">
                                                                    <label class="font-weight-normal" for="p12_ket_4_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p12_ket_4_2" type="radio" name="P12-4" value="0">
                                                                    <label class="font-weight-normal" for="p12_ket_4_2">Tidak</label>
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
                                                13. Apakah sarana dan prasarana kebersihan personal (higiene) memadai?
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
                                                        <div class="form-group mb-2">
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
                                                14. Apakah dilakukan program pengendalian hama dan serangga?
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
                                        <div class="col-lg-4">
                                            <div id="hidden_p14" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>SOP pengendalian serangga</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p14_ket_1_1" type="radio" name="P14-1" value="1">
                                                                    <label class="font-weight-normal" for="p14_ket_1_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p14_ket_1_2" type="radio" name="P14-1" value="0">
                                                                    <label class="font-weight-normal" for="p14_ket_1_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Dilakukan Subkontrak</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p14_ket_2_1" type="radio" name="P14-2" value="1">
                                                                    <label class="font-weight-normal" for="p14_ket_2_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p14_ket_2_2" type="radio" name="P14-2" value="0">
                                                                    <label class="font-weight-normal" for="p14_ket_2_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Jenis pengendalian serangga</label>
                                                            <input id="p14_ket_3" type="text" class="form-control" name="P14-3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Jadwal Pengecekan</label>
                                                            <input id="p14_ket_4" type="text" class="form-control" name="P14-4">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Bukti Kontrak</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p14_ket_5_1" type="radio" name="P14-5" value="1">
                                                                    <label class="font-weight-normal" for="p14_ket_5_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p14_ket_5_2" type="radio" name="P14-5" value="0">
                                                                    <label class="font-weight-normal" for="p14_ket_5_2">Tidak</label>
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
                                                15. Apakah dilakukan pengolahan limbah?
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
                                        <div class="col-lg-4">
                                            <div id="hidden_p15" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>SOP Pengolahan Limbah</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p15_ket_1_1" type="radio" name="P15-1" value="1">
                                                                    <label class="font-weight-normal" for="p15_ket_1_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p15_ket_1_2" type="radio" name="P15-1" value="0">
                                                                    <label class="font-weight-normal" for="p15_ket_1_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Metode Pelaksanaan</label>
                                                            <input id="p15_ket_2" type="text" class="form-control" name="P15-2">
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
        <script src="{{ asset('js/checklist10.js') }}"></script>
    @endpush
@endsection