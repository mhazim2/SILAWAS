@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Tempat Pengolahan Pangan Asal Hewan')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Tempat Pengolahan Pangan Asal Hewan</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist8.umum') }}">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#survey" data-toggle="tab">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist8.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="survey">
                                <form action="{{ route('checklist8.survey') }}" method="POST" enctype="multipart/form-data" onkeypress="return event.keyCode != 13;">
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p1_1" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1_1">
                                                            <small class="form-text"><b>Contoh:</b> 999/XXX/9999</small>
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p1_2" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1_2">
                                                            <small class="form-text"><b>Contoh:</b> 99.999.999.9-999.999</small>
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p1_3" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1_3">
                                                            <small class="form-text"><b>Contoh:</b> 999/XXX/9999</small>
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p1_4" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-0">
                                                            <label>Nomor</label>
                                                            <input type="text" class="form-control" name="P1_4">
                                                            <small class="form-text"><b>Contoh:</b> 9999999999999</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_p1_5()">
                                                    <input id="check_p1_5" type="checkbox" name="check_p1_5" value="1">
                                                    <label class="font-weight-normal" for="check_p1_5">Perjanjian Kerja Sama (jika Sewa Unit Usaha)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_p1_5" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
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
                                            <div id="hidden_p2_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P2_5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                3. Apakah sudah memiliki sertifikat halal (bagi yang dipersyaratkan)?
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
                                                        <div class="form-group">
                                                            <label>Nomor Sertifikat</label>
                                                            <input type="text" class="form-control" name="P3_1">
                                                            <small class="form-text"><b>Contoh:</b> 99999999999999</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Tanggal Sertifikat</label>
                                                            <input type="text" class="form-control" name="P3_2">
                                                            <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Masa Berlaku</label>
                                                            <div class="input-group mb-3">
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
                                                4. Apakah ada dokter hewan penanggung jawab teknis?
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
                                                    <div class="col-lg-12">
                                                        <label>Berapa jumlahnya?</label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend" onclick="p4_minus()">
                                                                    <span class="input-group-text"><i class="fas fa-minus"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control text-center" id="p4_count" name="P4_1" value="0">
                                                                <div class="input-group-append" onclick="p4_plus()">
                                                                    <span class="input-group-text"><i class="fas fa-plus"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="hidden_p4_1_detail" class="px-2"></div>
                                            </div>
                                            <div id="hidden_p4_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P4_2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                5. Apakah ada pendataan sumber bahan baku produk hewan?
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
                                                        <div class="form-group">
                                                            <label>Nama Olahan Daging Sapi/Kerbau</label>
                                                            <input type="text" class="form-control" name="P5_1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Nama Olahan Daging Unggas</label>
                                                            <input type="text" class="form-control" name="P5_2">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Nama Olahan Telur</label>
                                                            <input type="text" class="form-control" name="P5_3">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Nama Olahan Susu</label>
                                                            <input type="text" class="form-control" name="P5_4">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>RPH Sertifikat NKV</label>
                                                            <input type="text" class="form-control" name="P5_5">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>RPH Sertifikat Halal</label>
                                                            <input type="text" class="form-control" name="P5_6">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Status Peternakan Unggas (Kompartemen)</label>
                                                            <input type="text" class="form-control" name="P5_7">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>NKV Unit Usaha Budidaya Telur dan Sapi Perah</label>
                                                            <input type="text" class="form-control" name="P5_8">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p5_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P5_9"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                6. Jika menggunakan bahan baku impor, apakah bahan baku produk hewan dilengkapi 
                                                sertifikat halal bagi yang dipersyaratkan dan COA?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p6_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Negara Asal</label>
                                                            <input type="text" class="form-control" name="P6_1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Unit Usaha/No.EST</label>
                                                            <input type="text" class="form-control" name="P6_2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p6_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P6_3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                7. Jika menggunakan bahan baku lokal, apakah bahan baku produk hewan dilengkapi 
                                                dengan Sertifikat Veteriner?
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
                                            <div id="hidden_p7_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Daerah Asal</label>
                                                            <input type="text" class="form-control" name="P7_1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p7_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P7_2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                8. Apakah bangunan/ruangan di desain untuk mencegah akses masuk hewan atau 
                                                manusia dari luar?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p8" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P8"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                9. Apakah sarana dan prasarana penyimpanan bahan dan produk sesuai kapasitas?
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
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P9"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                10. Apakah unit memiliki sarana penyimpanan dingin?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p10" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P10"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                11. Apakah dilakukan program pengendalian <i>Critical Control Point</i> (CCP)?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p11" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
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
                                        <div class="col-lg-12">
                                            <label>
                                                12. Apakah terdapat pemisahan yang jelas antara area bersih dan area kotor?
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
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P12"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                13. Apakah produk hewan memiliki label/informasi?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p13" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P13"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                14. Apakah ada pemeriksaan/pengujian terhadap produk secara berkala?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p14_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Internal</label>
                                                            <input type="text" class="form-control" name="P14_1">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Eksternal</label>
                                                            <input type="text" class="form-control" name="P14_2">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Terakreditasi</label>
                                                            <div class="d-block">
                                                                <div class="icheck-white d-inline mr-3">
                                                                    <input id="p14_3_1" type="radio" name="P14_3" value="Ya">
                                                                    <label class="font-weight-normal" for="p14_3_1">Ya</label>
                                                                </div>
                                                                <div class="icheck-white d-inline">
                                                                    <input id="p14_3_2" type="radio" name="P14_3" value="Tidak">
                                                                    <label class="font-weight-normal" for="p14_3_2">Tidak</label>
                                                                </div>
                                                            </div>
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
                                                15. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana 
                                                penyimpanan dan produksi (sanitasi)?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p15" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P15"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                16. Apakah sarana dan prasarana untuk kebersihan personal (higiene) memadai?
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
                                                            <label>Keterangan</label>
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
                                                17. Apakah ada prosedur tertulis pemeriksaan kesehatan bagi personel?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p17" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P17"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                18. Apakah ada pemeriksaan kesehatan bagi personel?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p18_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Jangka Waktu</label>
                                                            <input type="text" class="form-control" name="P18_1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p18_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P18_2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                19. Apakah dilakukan program pengendalian hama dan serangga?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p19" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P19"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                20. Apakah ada prosedur penanganan terhadap bahan pangan asal hewan afkir/rusak?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p20" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P20"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                21. Apakah dilakukan pengolahan limbah?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p21" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P21"></textarea>
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
        <script src="{{ asset('js/checklist8.js') }}"></script>
    @endpush
@endsection