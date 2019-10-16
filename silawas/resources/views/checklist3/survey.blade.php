@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Tempat Budidaya Unggas Petelur dan Produksi Telur Konsumsi')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Tempat Budidaya Unggas Petelur dan Produksi Telur Konsumsi</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist3.umum') }}">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#survey" data-toggle="tab">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist3.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="survey">
                                <form action="{{ route('checklist3.survey') }}" method="POST" enctype="multipart/form-data" onkeypress="return event.keyCode != 13;">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if(count($errors)>0)
                                                @foreach($errors->all() as $error)
                                                    <div class="alert alert-dismissible alert-danger mb-3">
                                                        {{$error}}
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                1. Apakah memiliki:
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_p1_1()">
                                                    <input id="check_p1_1" type="checkbox" name="check_p1_1" value="1">
                                                    <label class="font-weight-normal" for="check_p1_1">Nomor Izin Usaha</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div id="hidden_p1_1" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-lg-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1_1_1">
                                                            <small class="form-text"><b>Contoh:</b> 999/XXX/9999</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-0">
                                                            <label>Tanggal Penerbitan</label>
                                                            <input type="text" class="form-control" name="P1_1_2">
                                                            <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_p1_2()">
                                                    <input id="check_p1_2" type="checkbox" name="check_p1_2" value="1">
                                                    <label class="font-weight-normal" for="check_p1_2">NPWP</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div id="hidden_p1_2" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-lg-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1_2_1">
                                                            <small class="form-text"><b>Contoh:</b> 99.999.999.9-999.999</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-0">
                                                            <label>Tanggal Penerbitan</label>
                                                            <input type="text" class="form-control" name="P1_2_2">
                                                            <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_p1_3()">
                                                    <input id="check_p1_3" type="checkbox" name="check_p1_3" value="1">
                                                    <label class="font-weight-normal" for="check_p1_3">SIUP</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div id="hidden_p1_3" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-lg-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1_3_1">
                                                            <small class="form-text"><b>Contoh:</b> 999/XXX/9999</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-0">
                                                            <label>Tanggal Penerbitan</label>
                                                            <input type="text" class="form-control" name="P1_3_2">
                                                            <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_p1_4()">
                                                    <input id="check_p1_4" type="checkbox" name="check_p1_4" value="1">
                                                    <label class="font-weight-normal" for="check_p1_4">NIB</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div id="hidden_p1_4" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-lg-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1_4_1">
                                                            <small class="form-text"><b>Contoh:</b> 9999999999999</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-0">
                                                            <label>Tanggal Penerbitan</label>
                                                            <input type="text" class="form-control" name="P1_4_2">
                                                            <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
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
                                        <div class="col-lg-12">
                                            <div id="hidden_p2_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group mb-4">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P2_1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group mb-4">
                                                            <label>Tanggal Penerbitan</label>
                                                            <input type="text" class="form-control" name="P2_2">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group mb-4">
                                                            <label>Tanggal Surveilans Terakhir</label>
                                                            <input type="text" class="form-control" name="P2_3">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Tindak Lanjut Temuan</label>
                                                            <textarea class="form-control" rows="2" name="P2_4"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-0">
                                                            <label>Scan Sertifikat NKV</label>
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" id="p2_5_file" name="P2_5" class="custom-file-input">
                                                                    <label id="p2_5_label" class="custom-file-label" for="file">Pilih file...</label>
                                                                </div>
                                                            </div>
                                                            <small class="form-text"><b>Hint:</b> Maksimum 2MB (*.jpg, *.jpeg, *.png, *.pdf)</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div id="hidden_p2_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p2_6_1" type="radio" name="P2_6" value="Dalam Proses">
                                                                    <label class="font-weight-normal" for="p2_6_1">Dalam Proses</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p2_6_2" type="radio" name="P2_6" value="Belum Diproses">
                                                                    <label class="font-weight-normal" for="p2_6_2">Belum Diproses</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                3. Apakah sudah memiliki sertifikat kompartemen?
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
                                        <div class="col-lg-8">
                                            <div id="hidden_p3_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-4">
                                                            <label>Nomor Sertifikat</label>
                                                            <input type="text" class="form-control" name="P3_1">
                                                            <small class="form-text"><b>Contoh:</b> 99999999999999</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-4">
                                                            <label>Tanggal Sertifikat</label>
                                                            <input type="text" class="form-control" name="P3_2">
                                                            <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-2">
                                                            <label>Masa Berlaku</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="P3_3">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">tahun</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p3_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P3_4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                4. Apakah sudah memiliki sertifikat produk telur (bebas salmonella, bebas residu 
                                                antibiotik, dll)?
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
                                        <div class="col-lg-8">
                                            <div id="hidden_p4_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-4">
                                                            <label>Nomor Sertifikat</label>
                                                            <input type="text" class="form-control" name="P4_1">
                                                            <small class="form-text"><b>Contoh:</b> 99999999999999</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-4">
                                                            <label>Tanggal Sertifikat</label>
                                                            <input type="text" class="form-control" name="P4_2">
                                                            <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-4">
                                                            <label>Masa Berlaku</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="P4_3">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">tahun</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group mb-2">
                                                            <label>Lembaga Sertifikasi</label>
                                                            <input type="text" class="form-control" name="P4_4">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p4_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P4_5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                5. Jika perusahaan menyatakan produknya bebas salmonella, residu antibiotik, dll, 
                                                Apakah ada pemeriksaan/pengujian laboratorium terakreditasi secara berkala terhadap 
                                                telur?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p5_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>SOP pengambilan sampel dan pengujian</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p5_1_1" type="radio" name="P5_1" value="Ada">
                                                                    <label class="font-weight-normal" for="p5_1_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p5_1_2" type="radio" name="P5_1" value="Tidak Ada">
                                                                    <label class="font-weight-normal" for="p5_1_2">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Frekuensi pengambilan sampel</label>
                                                            <input type="text" class="form-control" name="P5_2">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Metode pengambilan sampel</label>
                                                            <input type="text" class="form-control" name="P5_3">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Jenis uji</label>
                                                            <input type="text" class="form-control" name="P5_4">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Instansi yang melakukan pengujian</label>
                                                            <input type="text" class="form-control" name="P5_5">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Waktu terakhir pengujian</label>
                                                            <input type="text" class="form-control" name="P5_6">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p5_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P5_7"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                6. Apakah ada dokter hewan penanggung jawab teknis?
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
                                        <div class="col-lg-12">
                                            <div id="hidden_p6_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Berapa jumlahnya?</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend" onclick="p6_minus()">
                                                                    <span class="input-group-text"><i class="fas fa-minus"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control text-center" id="p6_count" name="P6_1" value="0">
                                                                <div class="input-group-append" onclick="p6_plus()">
                                                                    <span class="input-group-text"><i class="fas fa-plus"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="hidden_p6_1_detail" class="px-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div id="hidden_p6_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group mb-2">
                                                                    <label>Siapa yang bertanggung jawab terhadap kesehatan ternak?</label>
                                                                    <input type="text" class="form-control" name="P6_2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                7. Apakah pemberian pengobatan di bawah pengawasan dokter hewan?
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
                                        <div class="col-lg-8">
                                            <div id="hidden_p7_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Pencatatan program pengobatan</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p7_1_1" type="radio" name="P7_1" value="Ada">
                                                                    <label class="font-weight-normal" for="p7_1_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p7_1_2" type="radio" name="P7_1" value="Tidak Ada">
                                                                    <label class="font-weight-normal" for="p7_1_2">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Deskripsi pengobatan yang dilakukan</label>
                                                            <textarea class="form-control" rows="2" name="P7_2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p7_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Siapa yang bertanggung jawab dalam pemberian pengobatan?</label>
                                                            <input type="text" class="form-control" name="P7_3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                8. Apakah area peternakan dirancang untuk mencegah/membatasi akses masuk 
                                                hewan atau manusia dari luar?
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
                                        <div class="col-lg-8">
                                            <div id="hidden_p8_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Adakah pagar atau fasilitas lain pencegah keluar masuknya hewan dan manusia?</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p8_1_1" type="radio" name="P8_1" value="Ya">
                                                                    <label class="font-weight-normal" for="p8_1_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p8_1_2" type="radio" name="P8_1" value="Tidak">
                                                                    <label class="font-weight-normal" for="p8_1_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Jenis pagar atau fasilitas lain yang mendukung pencegahan keluar masuknya hewan dan manusia</label>
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <input type="text" class="form-control" name="P8_2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Apakah akses masuknya hewan atau orang berhasil dibatasi dengan adanya fasilitas tersebut?</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p8_3_1" type="radio" name="P8_3" value="Ya">
                                                                    <label class="font-weight-normal" for="p8_3_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p8_3_2" type="radio" name="P8_3" value="Tidak">
                                                                    <label class="font-weight-normal" for="p8_3_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p8_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P8_4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                9. Apakah dilakukan prosedur biosekuriti terhadap manusia, kendaraan, dan 
                                                ternak yang masuk?
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
                                        <div class="col-lg-8">
                                            <div id="hidden_p9_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>SOP Biosekuriti</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p9_1_1" type="radio" name="P9_1" value="Ada">
                                                                    <label class="font-weight-normal" for="p9_1_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p9_1_2" type="radio" name="P9_1" value="Tidak Ada">
                                                                    <label class="font-weight-normal" for="p9_1_2">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p9_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P9_2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                10. Apakah terdapat pemisahan antara hewan lama dan hewan baru?
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
                                        <div class="col-lg-8">
                                            <div id="hidden_p10_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Apakah terdapat sarana tempat penampungan sementara?</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p10_1_1" type="radio" name="P10_1" value="Ya">
                                                                    <label class="font-weight-normal" for="p10_1_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p10_1_2" type="radio" name="P10_1" value="Tidak">
                                                                    <label class="font-weight-normal" for="p10_1_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Berapa kapasitas penampungan?</label>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" name="P10_2">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">ekor</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p10_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P10_3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                11. Apakah terdapat kandang isolasi untuk unggas sakit?
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
                                            <div id="hidden_p11_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Bagaimana prosedur perawatan hewan pada kandang isolasi?</label>
                                                            <textarea class="form-control" rows="2" name="P11_1"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p11_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P11_2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                12. Apakah sarana dan prasarana pemeliharaan memenuhi/memadai sesuai kapasitas?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p12" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Identifikasi jenis kandang pemeliharaan</label>
                                                            <input type="text" class="form-control" name="P12_1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Jumlah kandang</label>
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" name="P12_2">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">unit</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Jumlah ternak yang dapat dipelihara</label>
                                                            <div class="row">
                                                                <div class="col-lg-8">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" name="P12_3">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">ekor</span>
                                                                        </div>
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
                                        <div class="col-lg-12">
                                            <label>
                                                13. Apakah sarana dan prasarana penyimpanan telur memenuhi/memadai?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p13()">
                                                    <input id="p13_1" type="radio" name="check_p13" value="1">
                                                    <label class="font-weight-normal" for="p13_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p13()">
                                                    <input id="p13_2" type="radio" name="check_p13" value="0">
                                                    <label class="font-weight-normal" for="p13_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div id="hidden_p13" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Apakah memiliki kapasitas yang cukup?</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p13_1_1" type="radio" name="P13_1" value="Ya">
                                                                    <label class="font-weight-normal" for="p13_1_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p13_1_2" type="radio" name="P13_1" value="Tidak">
                                                                    <label class="font-weight-normal" for="p13_1_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Identifikasi kapasitas gudang dan kesesuaian dengan produksi</label>
                                                            <input type="text" class="form-control" name="P13_2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                14. Apakah prosedur pemeliharaan hewan menerapkan prinsip-prinsip kesejahteraan hewan?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p14()">
                                                    <input id="p14_1" type="radio" name="check_p14" value="1">
                                                    <label class="font-weight-normal" for="p14_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p14()">
                                                    <input id="p14_2" type="radio" name="check_p14" value="0">
                                                    <label class="font-weight-normal" for="p14_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div id="hidden_p14_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Kepadatan hewan unggas</label>
                                                            <input type="text" class="form-control" name="P14_1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Pemberian makan minum sesuai kebutuhan</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p14_2_1" type="radio" name="P14_2" value="Ya">
                                                                    <label class="font-weight-normal" for="p14_2_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p14_2_2" type="radio" name="P14_2" value="Tidak">
                                                                    <label class="font-weight-normal" for="p14_2_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Ketersediaan pakan dan kondisi ternak</label>
                                                            <input type="text" class="form-control" name="P14_3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p14_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P14_4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                15. Apakah penanganan telur dilakukan dengan baik?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p15()">
                                                    <input id="p15_1" type="radio" name="check_p15" value="1">
                                                    <label class="font-weight-normal" for="p15_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p15()">
                                                    <input id="p15_2" type="radio" name="check_p15" value="0">
                                                    <label class="font-weight-normal" for="p15_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div id="hidden_p15" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Apakah telur dalam kondisi baik?</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p15_1_1" type="radio" name="P15_1" value="Ya">
                                                                    <label class="font-weight-normal" for="p15_1_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p15_1_2" type="radio" name="P15_1" value="Tidak">
                                                                    <label class="font-weight-normal" for="p15_1_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>SOP penanganan produk hewan</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p15_2_1" type="radio" name="P15_2" value="Ada">
                                                                    <label class="font-weight-normal" for="p15_2_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p15_2_2" type="radio" name="P15_2" value="Tidak Ada">
                                                                    <label class="font-weight-normal" for="p15_2_2">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Sorting telur</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p15_3_1" type="radio" name="P15_3" value="Ada">
                                                                    <label class="font-weight-normal" for="p15_3_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p15_3_2" type="radio" name="P15_3" value="Tidak Ada">
                                                                    <label class="font-weight-normal" for="p15_3_2">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Pembersihan telur</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p15_4_1" type="radio" name="P15_4" value="Ada">
                                                                    <label class="font-weight-normal" for="p15_4_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p15_4_2" type="radio" name="P15_4" value="Tidak Ada">
                                                                    <label class="font-weight-normal" for="p15_4_2">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Penerapan FIFO</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p15_5_1" type="radio" name="P15_5" value="Ada">
                                                                    <label class="font-weight-normal" for="p15_5_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p15_5_2" type="radio" name="P15_5" value="Tidak Ada">
                                                                    <label class="font-weight-normal" for="p15_5_2">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Terdapat rak/pallet/sejenisnya sehingga tidak bersentuhan dengan lantai</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p15_6_1" type="radio" name="P15_6" value="Ya">
                                                                    <label class="font-weight-normal" for="p15_6_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p15_6_2" type="radio" name="P15_6" value="Tidak">
                                                                    <label class="font-weight-normal" for="p15_6_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                16. Apakah ada penanganan telur afkir/rusak?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p16()">
                                                    <input id="p16_1" type="radio" name="check_p16" value="1">
                                                    <label class="font-weight-normal" for="p16_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p16()">
                                                    <input id="p16_2" type="radio" name="check_p16" value="0">
                                                    <label class="font-weight-normal" for="p16_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_p16" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Bagaimana perlakuan terhadap telur yang afkir/rusak?</label>
                                                            <textarea class="form-control" rows="2" name="P16"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                17. Apakah telur dicap atau memiliki label/informasi?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p17()">
                                                    <input id="p17_1" type="radio" name="check_p17" value="1">
                                                    <label class="font-weight-normal" for="p17_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p17()">
                                                    <input id="p17_2" type="radio" name="check_p17" value="0">
                                                    <label class="font-weight-normal" for="p17_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div id="hidden_p17_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Apakah telur dicap?</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p17_1_1" type="radio" name="P17_1" value="Ya">
                                                                    <label class="font-weight-normal" for="p17_1_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p17_1_2" type="radio" name="P17_1" value="Tidak">
                                                                    <label class="font-weight-normal" for="p17_1_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Informasi apa saja yang terdapat dalam label?</label>
                                                            <input type="text" class="form-control" name="P17_2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p17_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P17_3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                18. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p18()">
                                                    <input id="p18_1" type="radio" name="check_p18" value="1">
                                                    <label class="font-weight-normal" for="p18_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p18()">
                                                    <input id="p18_2" type="radio" name="check_p18" value="0">
                                                    <label class="font-weight-normal" for="p18_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div id="hidden_p18_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>SOP pemeliharaan kebersihan sarana dan prasarana?</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p18_1_1" type="radio" name="P18_1" value="Ada">
                                                                    <label class="font-weight-normal" for="p18_1_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p18_1_2" type="radio" name="P18_1" value="Tidak Ada">
                                                                    <label class="font-weight-normal" for="p18_1_2">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Frekuensi pemeliharaan kebersihan</label>
                                                            <input type="text" class="form-control" name="P18_2">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Metode yang digunakan</label>
                                                            <input type="text" class="form-control" name="P18_3">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Laporan hasil sanitasi (<i>QC Record</i>)</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p18_4_1" type="radio" name="P18_4" value="Ada">
                                                                    <label class="font-weight-normal" for="p18_4_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p18_4_2" type="radio" name="P18_4" value="Tidak Ada">
                                                                    <label class="font-weight-normal" for="p18_4_2">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p18_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Kondisi kebersihan unit usaha</label>
                                                            <textarea class="form-control" rows="2" name="P18_5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                19. Apakah sarana dan prasarana untuk higiene personal memadai?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p19()">
                                                    <input id="p19_1" type="radio" name="check_p19" value="1">
                                                    <label class="font-weight-normal" for="p19_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p19()">
                                                    <input id="p19_2" type="radio" name="check_p19" value="0">
                                                    <label class="font-weight-normal" for="p19_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div id="hidden_p19_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Apakah ada sarpras untuk cuci tangan yang mudah diakses?</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p19_1_1" type="radio" name="P19_1" value="Ya">
                                                                    <label class="font-weight-normal" for="p19_1_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p19_1_2" type="radio" name="P19_1" value="Tidak">
                                                                    <label class="font-weight-normal" for="p19_1_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Apakah dilengkapi dengan sabun?</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p19_2_1" type="radio" name="P19_2" value="Ya">
                                                                    <label class="font-weight-normal" for="p19_2_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p19_2_2" type="radio" name="P19_2" value="Tidak">
                                                                    <label class="font-weight-normal" for="p19_2_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Apakah dilengkapi dengan pelindung Diri (APD)?</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p19_3_1" type="radio" name="P19_3" value="Ya">
                                                                    <label class="font-weight-normal" for="p19_3_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p19_3_2" type="radio" name="P19_3" value="Tidak">
                                                                    <label class="font-weight-normal" for="p19_3_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p19_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P19_4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                20. Apakah dilakukan program pengendalian hama dan serangga?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p20()">
                                                    <input id="p20_1" type="radio" name="check_p20" value="1">
                                                    <label class="font-weight-normal" for="p20_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p20()">
                                                    <input id="p20_2" type="radio" name="check_p20" value="0">
                                                    <label class="font-weight-normal" for="p20_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div id="hidden_p20_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Apakah program pengendalian hama dan serangga dilakukan secara subkontrak dengan perusahaan lain?</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p20_1_1" type="radio" name="P20_1" value="Ya">
                                                                    <label class="font-weight-normal" for="p20_1_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p20_1_2" type="radio" name="P20_1" value="Tidak">
                                                                    <label class="font-weight-normal" for="p20_1_2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>SOP pengendalian hama dan seranga</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p20_2_1" type="radio" name="P20_2" value="Ada">
                                                                    <label class="font-weight-normal" for="p20_2_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p20_2_2" type="radio" name="P20_2" value="Tidak Ada">
                                                                    <label class="font-weight-normal" for="p20_2_2">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Bukti kontrak</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p20_3_1" type="radio" name="P20_3" value="Ada">
                                                                    <label class="font-weight-normal" for="p20_3_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p20_3_2" type="radio" name="P20_3" value="Tidak Ada">
                                                                    <label class="font-weight-normal" for="p20_3_2">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Jadwal inspeksi</label>
                                                            <input type="text" class="form-control" name="P20_4">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>Jenis hama dan Metode</label>
                                                            <input type="text" class="form-control" name="P20_5">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Jadwal dan catatan pelaksanaan pengendalian hama</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p20_6_1" type="radio" name="P20_6" value="Ada">
                                                                    <label class="font-weight-normal" for="p20_6_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p20_6_2" type="radio" name="P20_6" value="Tidak Ada">
                                                                    <label class="font-weight-normal" for="p20_6_2">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p20_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P20_7"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                21. Apakah ada prosedur penanganan terhadap unggas yang mati?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p21()">
                                                    <input id="p21_1" type="radio" name="check_p21" value="1">
                                                    <label class="font-weight-normal" for="p21_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p21()">
                                                    <input id="p21_2" type="radio" name="check_p21" value="0">
                                                    <label class="font-weight-normal" for="p21_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div id="hidden_p21_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>SOP penanganan hewan yang mati?</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p21_1_1" type="radio" name="P21_1" value="Ada">
                                                                    <label class="font-weight-normal" for="p21_1_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p21_1_2" type="radio" name="P21_1" value="Tidak Ada">
                                                                    <label class="font-weight-normal" for="p21_1_2">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p21_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P21_2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                22. Apakah dilakukan pengolahan limbah?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p22()">
                                                    <input id="p22_1" type="radio" name="check_p22" value="1">
                                                    <label class="font-weight-normal" for="p22_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p22()">
                                                    <input id="p22_2" type="radio" name="check_p22" value="0">
                                                    <label class="font-weight-normal" for="p22_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div id="hidden_p22_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-4">
                                                            <label>SOP pengolahan limbah?</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p22_1_1" type="radio" name="P22_1" value="Ada">
                                                                    <label class="font-weight-normal" for="p22_1_1">Ada</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p22_1_2" type="radio" name="P22_1" value="Tidak Ada">
                                                                    <label class="font-weight-normal" for="p22_1_2">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Metode pelaksanaan pengolahan limbah</label>
                                                            <input type="text" class="form-control" name="P22_2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p22_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P22_3"></textarea>
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
        <script src="{{ asset('js/checklist3.js') }}"></script>
    @endpush
@endsection