@extends('layouts.app')

@section('title', 'Ceklis Rumah Potong Hewan Babi')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Rumah Potong Hewan Babi</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist7.umum') }}">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#survey" data-toggle="tab">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist7.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="survey">
                                <form action="{{ route('checklist7.survey') }}" method="POST" enctype="multipart/form-data" onkeypress="return event.keyCode != 13;">
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
                                        <div class="col-md-12">
                                            <label>1. Apakah memiliki:</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_p1_niu()">
                                                    <input id="check_p1_niu" type="checkbox" name="check_p1_niu" value="1">
                                                    <label class="font-weight-normal" for="check_p1_niu">Nomor Izin Usaha</label>
                                                </div>
                                                <div id="hidden_p1_niu" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nomor</label>
                                                                <input type="text" class="form-control" name="p1_niu_id">
                                                                <small class="form-text"><b>Contoh:</b> 999/XXX/9999</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tanggal Penerbitan</label>
                                                                <input type="text" class="form-control" name="p1_niu_date">
                                                                <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_p1_npwp()">
                                                    <input id="check_p1_npwp" type="checkbox" name="check_p1_npwp" value="1">
                                                    <label class="font-weight-normal" for="check_p1_npwp">NPWP</label>
                                                </div>
                                                <div id="hidden_p1_npwp" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nomor</label>
                                                                <input type="text" class="form-control" name="p1_npwp_id">
                                                                <small class="form-text"><b>Contoh:</b> 99.999.999.9-999.999</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tanggal Penerbitan</label>
                                                                <input type="text" class="form-control" name="p1_npwp_date">
                                                                <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_p1_siup()">
                                                    <input id="check_p1_siup" type="checkbox" name="check_p1_siup" value="1">
                                                    <label class="font-weight-normal" for="check_p1_siup">SIUP</label>
                                                </div>
                                                <div id="hidden_p1_siup" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nomor</label>
                                                                <input type="text" class="form-control" name="p1_siup_id">
                                                                <small class="form-text"><b>Contoh:</b> 999/XXX/9999</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tanggal Penerbitan</label>
                                                                <input type="text" class="form-control" name="p1_siup_date">
                                                                <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_p1_nib()">
                                                    <input id="check_p1_nib" type="checkbox" name="check_p1_nib" value="1">
                                                    <label class="font-weight-normal" for="check_p1_nib">NIB</label>
                                                </div>
                                                <div id="hidden_p1_nib" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nomor</label>
                                                                <input type="text" class="form-control" name="p1_nib_id">
                                                                <small class="form-text"><b>Contoh:</b> 9999999999999</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tanggal Penerbitan</label>
                                                                <input type="text" class="form-control" name="p1_nib_date">
                                                                <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_p1_pks()">
                                                    <input id="check_p1_pks" type="checkbox" name="check_p1_pks" value="1">
                                                    <label class="font-weight-normal" for="check_p1_pks">Perjanjian Kerja Sama (jika Sewa RPH-U)</label>
                                                </div>
                                                <div id="hidden_p1_pks" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nama Perjanjian</label>
                                                                <input type="text" class="form-control" name="p1_pks_id">
                                                                <small class="form-text"><b>Contoh:</b> Perjanjian Sewa</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tanggal Perjanjian</label>
                                                                <input type="text" class="form-control" name="p1_pks_date">
                                                                <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>2. Apakah sudah memiliki sertifikat NKV?</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p2()">
                                                    <input id="p2_1" type="radio" name="check_p2" value="1">
                                                    <label class="font-weight-normal" for="p2_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p2()">
                                                    <input id="p2_2" type="radio" name="check_p2" value="0">
                                                    <label class="font-weight-normal" for="p2_2">Tidak</label>
                                                </div>
                                                <div id="hidden_p2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Nomor</label>
                                                                <input type="text" class="form-control" name="P2_1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Tanggal Penerbitan</label>
                                                                <input type="text" class="form-control" name="P2_2">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Tanggal Surveilans Terakhir</label>
                                                                <input type="text" class="form-control" name="P2_3">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Tindak Lanjut Temuan</label>
                                                                <textarea class="form-control" rows="2" name="P2_4"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>3. Apakah ada dokter hewan penanggung jawab teknis?</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p3()">
                                                    <input id="p3_1" type="radio" name="check_p3" value="1">
                                                    <label class="font-weight-normal" for="p3_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p3()">
                                                    <input id="p3_2" type="radio" name="check_p3" value="0">
                                                    <label class="font-weight-normal" for="p3_2">Tidak</label>
                                                </div>
                                                <div id="hidden_p3" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label>Berapa jumlahnya?</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend" onclick="p3_minus()">
                                                                        <span class="input-group-text"><i class="fas fa-minus"></i></span>
                                                                    </div>
                                                                    <input type="text" 
                                                                        class="form-control text-center"
                                                                        id="p3_count"
                                                                        name="p3_count"
                                                                        value="0">
                                                                    <div class="input-group-append" onclick="p3_plus()">
                                                                        <span class="input-group-text"><i class="fas fa-plus"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="hidden_p3_detail" class="px-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>4. Apakah ada pendataan sumber ternak?</label>
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
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <textarea class="form-control" rows="2" name="P4"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>5. Apakah ternak yang akan dipotong dilengkapi dengan Sertifikat Veteriner?</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p5()">
                                                    <input id="p5_1" type="radio" name="check_p5" value="1">
                                                    <label class="font-weight-normal" for="p5_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p5()">
                                                    <input id="p5_2" type="radio" name="check_p5" value="0">
                                                    <label class="font-weight-normal" for="p5_2">Tidak</label>
                                                </div>
                                                <div id="hidden_p5" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Scan Sertifikat Veteriner Terakhir</label>
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input type="file" id="p5_file" name="file" class="custom-file-input">
                                                                        <label id="p5_label" class="custom-file-label" for="file">Pilih file...</label>
                                                                    </div>
                                                                </div>
                                                                <small class="form-text"><b>Hint:</b> Maksimum 2MB (*.jpg, *.jpeg, *.png, *.pdf)</small>
                                                                @error('file')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nomor Sertifikat</label>
                                                                <input type="text" class="form-control" name="P5_id">
                                                                <small class="form-text"><b>Contoh:</b> XXXX999/XXX/99/99/9999</small>
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
                                                6. Apakah bangunan/ruangan di desain untuk mencegah akses masuk hewan atau manusia dari luar?
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
                                        <div class="col-md-12">
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
                                                7. Apakah terdapat tempat penampungan sementara?
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
                                        <div class="col-md-12">
                                            <div id="hidden_p7" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <label>
                                                8. Apakah dilakukan pemeriksaan hewan sebelum dipotong?
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
                                        <div class="col-md-12">
                                            <div id="hidden_p8" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <label>
                                                9. Apakah sarana dan prasarana memenuhi/memadai sesuai kapasitas produksi?
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
                                        <div class="col-md-12">
                                            <div id="hidden_p9" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <label>
                                                10. Apakah terdapat pemisahan yang jelas antara area bersih dan area kotor?
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
                                        <div class="col-md-12">
                                            <div id="hidden_p10" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <label>
                                                11. Apakah dilakukan pemingsanan terhadap ternak sebelum dipotong?
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
                                        <div class="col-md-12">
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
                                                12. Apakah ada petugas yang bertanggung jawab dalam penerapan kesejahteraan hewan?
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
                                        <div class="col-md-12">
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
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                13. Apakah dilakukan pemeriksaan karkas dan jeroan setelah dipotong?
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
                                        <div class="col-md-12">
                                            <div id="hidden_p13" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <label>
                                                14. Apakah karkas babi dicap/stempel sebagai hasil pemeriksaan postmortem?
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
                                        <div class="col-md-12">
                                            <div id="hidden_p14" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <label>
                                                15. Apakah dilakukan pendinginan terhadap karkas/daging babi?
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
                                        <div class="col-md-12">
                                            <div id="hidden_p15" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <label>
                                                16. Jika unit usaha telah menerapkan sistem jaminan keamanan pangan (HACCP, ISO 22000), 
                                                apakah ada pemeriksaan/pengujian laboratorium terakreditasi secara berkalaterhadap 
                                                daging babi?
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
                                        <div class="col-md-12">
                                            <div id="hidden_p16" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <label>
                                                17. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
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
                                        <div class="col-md-12">
                                            <div id="hidden_p17" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <label>
                                                18. Apakah sarana dan prasarana higiene personal memadai?
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
                                        <div class="col-md-12">
                                            <div id="hidden_p18" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                        <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <div id="hidden_p19" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <label>
                                                20. Apakah ada prosedur tertulis pemotongan terhadap hewan sakit yang diizinkan 
                                                dipotong? (<i>Brucellosis, cysticercosis</i>)
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
                                        <div class="col-md-12">
                                            <div id="hidden_p20" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <label>
                                                21. Apakah ada prosedur tertulis penanganan terhadap hewan yang mati sebelum 
                                                dipotong (bangkai)?
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
                                        <div class="col-md-12">
                                            <div id="hidden_p21" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                        <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <div id="hidden_p22" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <label>
                                                23. Jika produk akhir karkas dingin, apakah memiliki sarana penyimpanan dingin (Chiller)?
                                            </label>
                                            <div class="d-block mb-3">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p23()">
                                                    <input id="p23_1" type="radio" name="check_p23" value="1">
                                                    <label class="font-weight-normal" for="p23_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p23()">
                                                    <input id="p23_2" type="radio" name="check_p23" value="0">
                                                    <label class="font-weight-normal" for="p23_2">Tidak</label>
                                                </div>
                                            </div>
                                            <div id="hidden_p23_1" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Jumlah Unit</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P23_1">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">unit</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Total Kapasitas</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P23_2">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ton</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Total Realisasi</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P23_3">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ton</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p23_2" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Metode yang digunakan untuk mendinginkan karkas</label>
                                                            <input type="text" class="form-control" name="P23_4">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                24. Jika produk akhir karkas beku, apakah memiliki sarana penyimpanan dingin (Cold Storage)?
                                            </label>
                                            <div class="d-block mb-3">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p24()">
                                                    <input id="p24_1" type="radio" name="check_p24" value="1">
                                                    <label class="font-weight-normal" for="p24_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p24()">
                                                    <input id="p24_2" type="radio" name="check_p24" value="0">
                                                    <label class="font-weight-normal" for="p24_2">Terpisah</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="hidden_p24_1" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Jumlah Unit</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P24_1">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">unit</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Total Kapasitas</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="P24_2">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ton</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Rata-Rata Jumlah Produk Ternak yang Disimpan</label>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="P24_3">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">ton</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Rata-Rata Waktu Penyimpanan</label>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="P24_4">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">bulan</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p24_2" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <textarea class="form-control" rows="3" name="P24_5"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>25. Apakah jenis sarana/alat angkut untuk distribusi karkas?</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_p25()">
                                                    <input id="p25_1" type="radio" name="check_p25" value="Berpendingin">
                                                    <label class="font-weight-normal" for="p25_1">Berpendingin</label>
                                                </div>
                                                <div id="hidden_p25_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none"></div>
                                                <div class="icheck-wisteria d-block" onclick="check_p25()">
                                                    <input id="p25_2" type="radio" name="check_p25" value="Tidak Berpendingin">
                                                    <label class="font-weight-normal" for="p25_2">Tidak Berpendingin</label>
                                                </div>
                                                <div id="hidden_p25_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none"></div>
                                                <div class="icheck-wisteria d-block" onclick="check_p25()">
                                                    <input id="p25_3" type="radio" name="check_p25" value="Lainnya">
                                                    <label class="font-weight-normal" for="p25_3">Lainnya</label>
                                                </div>
                                                <div id="hidden_p25_3" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>26. Kemanakah tujuan distribusi karkas?</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_p26()">
                                                    <input id="p26_1" type="radio" name="check_p26" value="Dalam Kabupaten/Kota">
                                                    <label class="font-weight-normal" for="p26_1">Dalam Kabupaten/Kota</label>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_p26()">
                                                    <input id="p26_2" type="radio" name="check_p26" value="Antar Kabupaten/Kota">
                                                    <label class="font-weight-normal" for="p26_2">Antar Kabupaten/Kota</label>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_p26()">
                                                    <input id="p26_3" type="radio" name="check_p26" value="Dalam Provinsi">
                                                    <label class="font-weight-normal" for="p26_3">Dalam Provinsi</label>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_p26()">
                                                    <input id="p26_4" type="radio" name="check_p26" value="Antar Provinsi">
                                                    <label class="font-weight-normal" for="p26_4">Antar Provinsi</label>
                                                </div>
                                                <div id="hidden_p26" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Lengkapi data Produk yang didistribusikan</label>
                                                            <input type="hidden" id="p26_count" name="p26_count" value="0">
                                                            <div id="hidden_p26_detail" class="px-2"></div>
                                                            <button type="button" class="btn btn-primary my-2 mr-1" onclick="p26_plus()">Tambah</button>
                                                            <button type="button" class="btn btn-danger my-2" onclick="p26_minus()">Kurangi</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                27. Berasal dari manakah sumber air bersih yang digunakan?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block">
                                                    <input id="p27_1" type="checkbox" name="P27[]" value="PDAM">
                                                    <label class="font-weight-normal" for="p27_1">PDAM</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="p27_2" type="checkbox" name="P27[]" value="Air Tanah">
                                                    <label class="font-weight-normal" for="p27_2">Air Tanah</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="p27_3" type="checkbox" name="P27[]" value="Air Sungai">
                                                    <label class="font-weight-normal" for="p27_3">Air Sungai</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                28. Berasal dari manakah sumber listrik yang digunakan?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block">
                                                    <input id="p28_1" type="checkbox" name="P28[]" value="Listrik PLN">
                                                    <label class="font-weight-normal" for="p28_1">Listrik PLN</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="p28_2" type="checkbox" name="P28[]" value="Genset">
                                                    <label class="font-weight-normal" for="p28_2">Genset</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                29. Berapakah kapasitas pemotongan ternak per hari?
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="P29">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">ekor/hari</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                30. Berapakah jumlah jam operasional pemotongan RPH-B?
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="P30_1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">jam/hari</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="P30_2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">hari/minggu</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                31. Berapakah realisasi pemotongan ternak?
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="P31_1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">ekor/hari</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="P31_2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">ekor/minggu</span>
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
        <script src="{{ asset('js/checklist7.js') }}"></script>
    @endpush
@endsection