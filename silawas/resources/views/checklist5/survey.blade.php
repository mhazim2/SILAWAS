@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Rumah Potong Hewan Ruminansia')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Rumah Potong Hewan Ruminansia</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist5.umum') }}">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#survey" data-toggle="tab">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist5.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="survey">
                                <form action="{{ route('checklist5.survey') }}" method="POST" enctype="multipart/form-data" onkeypress="return event.keyCode != 13;">
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
                                                    <label class="font-weight-normal" for="check_p1_5">Perjanjian Kerja Sama (jika Sewa RPH-R)</label>
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
                                                3. Apakah RPH-R memiliki sertifikat halal?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p4" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P4"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                5. Apakah ada pendataan sumber ternak?
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
                                            <div id="hidden_p5" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                6. Apakah ternak yang akan dipotong dilengkapi dengan Sertifikat Veteriner?
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
                                                        <div class="form-group mb-0">
                                                            <label>Scan Sertifikat Veteriner</label>
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" id="p6_1_file" name="P6" class="custom-file-input">
                                                                    <label id="p6_1_label" class="custom-file-label" for="file">Pilih file...</label>
                                                                </div>
                                                            </div>
                                                            <small class="form-text"><b>Hint:</b> Maksimum 2MB (*.jpg, *.jpeg, *.png, *.pdf)</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p6_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
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
                                        <div class="col-lg-12">
                                            <label>
                                                7. Apakah ternak betina yang akan dipotong dilengkapi dengan Surat Keterangan 
                                                Status Reproduksi?
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
                                                        <div class="form-group mb-0">
                                                            <label>Scan SKRS</label>
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" id="p7_1_file" name="P7" class="custom-file-input">
                                                                    <label id="p7_1_label" class="custom-file-label" for="file">Pilih file...</label>
                                                                </div>
                                                            </div>
                                                            <small class="form-text"><b>Hint:</b> Maksimum 2MB (*.jpg, *.jpeg, *.png, *.pdf)</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p7_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P7"></textarea>
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
                                                9. Apakah terdapat tempat penampungan sementara?
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
                                                10. Apakah sarana dan prasarana memenuhi/memadai sesuai kapasitas produksi?
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
                                                11. Apakah terdapat pemisahan yang jelas antara area bersih dan area kotor?
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
                                                12. Apakah dilakukan pemeriksaan ternak sebelum dipotong?
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
                                                13. Apakah dilakukan pemingsanan terhadap ternak sebelum dipotong?
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
                                                14. Apakah penyembelihan dilakukan oleh juru sembelih halal yang kompeten?
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
                                            <div id="hidden_p14" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P14"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                15. Apakah dipastikan hewan telah mati sempurna sebelum ditangani lebih lanjut?
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
                                                16. Apakah ada prosedur tertulis pemotongan terhadap hewan sakit yang diizinkan 
                                                dipotong? (<i>Brucellosis, cysticercosis</i>)
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
                                                17. Apakah ada prosedur tertulis penanganan terhadap hewan yang mati sebelum 
                                                dipotong (bangkai)?
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
                                                18. Apakah ada petugas yang bertanggung jawab dalam penerapan kesejahteraan hewan?
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
                                            <div id="hidden_p18" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P18"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                19. Apakah karkas ruminansia dicap/stempel sebagai hasil pemeriksaan postmortem?
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
                                                20. Apakah karkas didinginkan sebelum didistribusikan?
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
                                                21. Apakah sudah dilakukan penerapan <i>butcher system</i>?
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
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                22. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
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
                                        <div class="col-lg-6">
                                            <div id="hidden_p22" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P22"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                23. Apakah sarana dan prasarana higiene personal yang memadai?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p23()">
                                                    <input id="p23_1" type="radio" name="check_p23" value="1">
                                                    <label class="font-weight-normal" for="p23_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p23()">
                                                    <input id="p23_2" type="radio" name="check_p23" value="0">
                                                    <label class="font-weight-normal" for="p23_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_p23" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P23"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                24. Apakah dilakukan program pengendalian hama dan serangga?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p24()">
                                                    <input id="p24_1" type="radio" name="check_p24" value="1">
                                                    <label class="font-weight-normal" for="p24_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p24()">
                                                    <input id="p24_2" type="radio" name="check_p24" value="0">
                                                    <label class="font-weight-normal" for="p24_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_p24" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P24"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                25. Apakah dilakukan pengolahan limbah?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p25()">
                                                    <input id="p25_1" type="radio" name="check_p25" value="1">
                                                    <label class="font-weight-normal" for="p25_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p25()">
                                                    <input id="p25_2" type="radio" name="check_p25" value="0">
                                                    <label class="font-weight-normal" for="p25_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_p25" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P25"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                26. Apakah karkas/daging yang dilalulintaskan antar Kabupaten/Kota dilengkapi 
                                                dengan sertifikat veteriner
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p26()">
                                                    <input id="p26_1" type="radio" name="check_p26" value="1">
                                                    <label class="font-weight-normal" for="p26_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p26()">
                                                    <input id="p26_2" type="radio" name="check_p26" value="0">
                                                    <label class="font-weight-normal" for="p26_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_p26_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-0">
                                                            <label>Scan Sertifikat Veteriner</label>
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" id="p26_1_file" name="P26" class="custom-file-input">
                                                                    <label id="p26_1_label" class="custom-file-label" for="file">Pilih file...</label>
                                                                </div>
                                                            </div>
                                                            <small class="form-text"><b>Hint:</b> Maksimum 2MB (*.jpg, *.jpeg, *.png, *.pdf)</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p26_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P26"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                27. Jika unit usaha telah menerapkan sistem jaminan keamanan pangan 
                                                (HACCP, ISO 22000), apakah ada pemeriksaan/pengujian laboratorium 
                                                terakreditasi secara berkala terhadap daging?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p27()">
                                                    <input id="p27_1" type="radio" name="check_p27" value="1">
                                                    <label class="font-weight-normal" for="p27_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p27()">
                                                    <input id="p27_2" type="radio" name="check_p27" value="0">
                                                    <label class="font-weight-normal" for="p27_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_p27" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P27"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                28. Apakah memasok daging ke horeka?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p28()">
                                                    <input id="p28_1" type="radio" name="check_p28" value="1">
                                                    <label class="font-weight-normal" for="p28_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p28()">
                                                    <input id="p28_2" type="radio" name="check_p28" value="0">
                                                    <label class="font-weight-normal" for="p28_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_p28_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Apakah ada bukti kontrak?</label>
                                                            <textarea class="form-control" rows="2" name="P28_1"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p28_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P28_2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                29. Jika produk akhir karkas dingin, apakah memiliki sarana penyimpanan dingin
                                                (Chiller)?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p29()">
                                                    <input id="p29_1" type="radio" name="check_p29" value="1">
                                                    <label class="font-weight-normal" for="p29_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p29()">
                                                    <input id="p29_2" type="radio" name="check_p29" value="0">
                                                    <label class="font-weight-normal" for="p29_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div id="hidden_p29_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Jumlah Unit</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P29_1">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">unit</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Total Kapasitas</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P29_2">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ton</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label>Total Realisasi</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P29_3">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ton</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p29_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Metode yang digunakan untuk mendinginkan karkas</label>
                                                            <input type="text" class="form-control" name="P29_4">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                30. Jika produk akhir karkas beku, apakah memiliki sarana penyimpanan dingin 
                                                (Cold Storage)?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p30()">
                                                    <input id="p30_1" type="radio" name="check_p30" value="1">
                                                    <label class="font-weight-normal" for="p30_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p30()">
                                                    <input id="p30_2" type="radio" name="check_p30" value="0">
                                                    <label class="font-weight-normal" for="p30_2">Terpisah</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div id="hidden_p30_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Jumlah Unit</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P30_1">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">unit</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Total Kapasitas</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P30_2">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ton</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Rata-Rata Jumlah Produk yang Disimpan</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P30_3">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ton</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Rata-Rata Waktu Penyimpanan</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P30_4">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">bulan</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p30_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Alamat</label>
                                                            <textarea class="form-control" rows="2" name="P30_5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                31. Apakah sarana/alat angkut untuk distribusi karkas?
                                            </label>
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-8">
                                                    <textarea class="form-control" rows="2" name="P31"></textarea>
                                                    <small class="form-text">
                                                        Tuliskan jenis alat angkut yang digunakan beserta jumlah unit 
                                                        dan kapasitasnya
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                32. Kemanakah tujuan distribusi karkas?
                                            </label>
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-8">
                                                    <div class="icheck-wisteria d-block" onclick="check_p32()">
                                                        <input id="p32_1" type="checkbox" name="check_p32[]" value="Dalam Kabupaten/Kota">
                                                        <label class="font-weight-normal" for="p32_1">Dalam Kabupaten/Kota</label>
                                                    </div>
                                                    <div class="icheck-wisteria d-block" onclick="check_p32()">
                                                        <input id="p32_2" type="checkbox" name="check_p32[]" value="Antar Kabupaten/Kota">
                                                        <label class="font-weight-normal" for="p32_2">Antar Kabupaten/Kota</label>
                                                    </div>
                                                    <div class="icheck-wisteria d-block" onclick="check_p32()">
                                                        <input id="p32_3" type="checkbox" name="check_p32[]" value="Dalam Provinsi">
                                                        <label class="font-weight-normal" for="p32_3">Dalam Provinsi</label>
                                                    </div>
                                                    <div class="icheck-wisteria d-block" onclick="check_p32()">
                                                        <input id="p32_4" type="checkbox" name="check_p32[]" value="Antar Provinsi">
                                                        <label class="font-weight-normal" for="p32_4">Antar Provinsi</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div id="hidden_p32" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label>Lengkapi data Produk yang didistribusikan</label>
                                                        <input type="hidden" id="p32_count" name="P32" value="0">
                                                        <div id="hidden_p32_detail" class="px-2"></div>
                                                        <button type="button" class="btn btn-primary my-2 mr-1" onclick="p32_plus()">Tambah</button>
                                                        <button type="button" class="btn btn-danger my-2" onclick="p32_minus()">Kurangi</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                33. Berasal dari manakah sumber air bersih yang digunakan?
                                            </label>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="P33">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                34. Berasal dari manakah sumber listrik yang digunakan?
                                            </label>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="P34">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                35. Berapakah kapasitas pemotongan ternak per hari?
                                            </label>
                                            <div class="row">
                                                <div class="col-lg-4 col-xl-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="P35">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">ekor/hari</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-8 col-xl-6">
                                            <label>
                                                36. Berapakah jumlah jam operasional pemotongan RPH-R?
                                            </label>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="P36_1">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">jam/hari</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="P36_2">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">jam/minggu</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-8 col-xl-6">
                                            <label>
                                                37. Berapakah realisasi pemotongan ternak?
                                            </label>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="P37_1">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">ekor/hari</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="P37_2">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">ekor/minggu</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                38. Apa jenis ternak yang dipotong?
                                            </label>
                                            <div class="row">
                                                <div class="col-lg-8 col-xl-6">
                                                    <label class="font-weight-normal">Lokal</label>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P38_1">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ekor/minggu</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-xl-6">
                                                    <label class="font-weight-normal">Eks Impor</label>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P38_2">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ekor/minggu</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-xl-6">
                                                    <label class="font-weight-normal">Jantan</label>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P38_3">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ekor/minggu</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-xl-6">
                                                    <label class="font-weight-normal">Betina</label>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P38_4">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ekor/minggu</span>
                                                                </div>
                                                            </div>
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
        <script src="{{ asset('js/checklist5.js') }}"></script>
    @endpush
@endsection