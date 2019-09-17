@extends('layouts.app')

@section('title', 'Ceklis Rumah Potong Hewan Unggas')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Rumah Potong Hewan Unggas</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist6.umum') }}">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#survey" data-toggle="tab">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist6.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="survey">
                                <form action="{{ route('checklist6.survey') }}" method="POST" enctype="multipart/form-data" onkeypress="return event.keyCode != 13;">
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
                                                <div class="icheck-wisteria d-block" onclick="check_b1_niu()">
                                                    <input id="check_b1_niu" type="checkbox" name="check_b1_niu" value="1">
                                                    <label class="font-weight-normal" for="check_b1_niu">Nomor Izin Usaha</label>
                                                </div>
                                                <div id="hidden_b1_niu" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nomor</label>
                                                                <input type="text" class="form-control" name="b1_niu_id">
                                                                <small class="form-text"><b>Contoh:</b> 999/XXX/9999</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tanggal Penerbitan</label>
                                                                <input type="text" class="form-control" name="b1_niu_date">
                                                                <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_b1_npwp()">
                                                    <input id="check_b1_npwp" type="checkbox" name="check_b1_npwp" value="1">
                                                    <label class="font-weight-normal" for="check_b1_npwp">NPWP</label>
                                                </div>
                                                <div id="hidden_b1_npwp" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nomor</label>
                                                                <input type="text" class="form-control" name="b1_npwp_id">
                                                                <small class="form-text"><b>Contoh:</b> 99.999.999.9-999.999</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tanggal Penerbitan</label>
                                                                <input type="text" class="form-control" name="b1_npwp_date">
                                                                <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_b1_siup()">
                                                    <input id="check_b1_siup" type="checkbox" name="check_b1_siup" value="1">
                                                    <label class="font-weight-normal" for="check_b1_siup">SIUP</label>
                                                </div>
                                                <div id="hidden_b1_siup" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nomor</label>
                                                                <input type="text" class="form-control" name="b1_siup_id">
                                                                <small class="form-text"><b>Contoh:</b> 999/XXX/9999</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tanggal Penerbitan</label>
                                                                <input type="text" class="form-control" name="b1_siup_date">
                                                                <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_b1_nib()">
                                                    <input id="check_b1_nib" type="checkbox" name="check_b1_nib" value="1">
                                                    <label class="font-weight-normal" for="check_b1_nib">NIB</label>
                                                </div>
                                                <div id="hidden_b1_nib" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nomor</label>
                                                                <input type="text" class="form-control" name="b1_nib_id">
                                                                <small class="form-text"><b>Contoh:</b> 9999999999999</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tanggal Penerbitan</label>
                                                                <input type="text" class="form-control" name="b1_nib_date">
                                                                <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_b1_pks()">
                                                    <input id="check_b1_pks" type="checkbox" name="check_b1_pks" value="1">
                                                    <label class="font-weight-normal" for="check_b1_pks">Perjanjian Kerja Sama (jika Sewa RPH-U)</label>
                                                </div>
                                                <div id="hidden_b1_pks" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nama Perjanjian</label>
                                                                <input type="text" class="form-control" name="b1_pks_id">
                                                                <small class="form-text"><b>Contoh:</b> Perjanjian Sewa</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Tanggal Perjanjian</label>
                                                                <input type="text" class="form-control" name="b1_pks_date">
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
                                            <label>2. Apakah ada dokter hewan penanggung jawab teknis?</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b2()">
                                                    <input id="b2_1" type="radio" name="check_b2" value="1">
                                                    <label class="font-weight-normal" for="b2_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b2()">
                                                    <input id="b2_2" type="radio" name="check_b2" value="0">
                                                    <label class="font-weight-normal" for="b2_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label>Berapa jumlahnya?</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend" onclick="b2_minus()">
                                                                        <span class="input-group-text"><i class="fas fa-minus"></i></span>
                                                                    </div>
                                                                    <input type="text" 
                                                                        class="form-control text-center"
                                                                        id="b2_count"
                                                                        name="b2_count"
                                                                        value="0">
                                                                    <div class="input-group-append" onclick="b2_plus()">
                                                                        <span class="input-group-text"><i class="fas fa-plus"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="hidden_b2_detail" class="px-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>3. Apakah RPH-U memiliki sertifikat halal?</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b3()">
                                                    <input id="b3_1" type="radio" name="check_b3" value="1">
                                                    <label class="font-weight-normal" for="b3_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b3()">
                                                    <input id="b3_2" type="radio" name="check_b3" value="0">
                                                    <label class="font-weight-normal" for="b3_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b3" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Nomor Sertifikat</label>
                                                                <input type="text" class="form-control" name="b3_1">
                                                                <small class="form-text"><b>Contoh:</b> 99999999999999</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Tanggal Sertifikat</label>
                                                                <input type="text" class="form-control" name="b3_2">
                                                                <small class="form-text"><b>Contoh:</b> 12 Juli 2018</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Masa Berlaku</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" class="form-control" name="b3_3">
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
                                            <label>4. Apakah unggas yang akan dipotong dilengkapi dengan Sertifikat Veteriner?</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b4()">
                                                    <input id="b4_1" type="radio" name="check_b4" value="1">
                                                    <label class="font-weight-normal" for="b4_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b4()">
                                                    <input id="b4_2" type="radio" name="check_b4" value="0">
                                                    <label class="font-weight-normal" for="b4_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b4" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Scan Sertifikat Veteriner Terakhir</label>
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input type="file" id="b4_file" name="file" class="custom-file-input">
                                                                        <label id="b4_label" class="custom-file-label" for="file">Pilih file...</label>
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
                                                                <input type="text" class="form-control" name="b4_id">
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
                                            <label>5. Apakah ada pendataan sumber unggas?</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_b5_1()">
                                                    <input id="check_b5_1" type="checkbox" name="check_b5_1" value="1">
                                                    <label class="font-weight-normal" for="check_b5_1">Dari Perusahaan Sendiri</label>
                                                </div>
                                                <div id="hidden_b5_1" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nama</label>
                                                                <input type="text" class="form-control" name="b5_1_nama">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 order-md-2">
                                                            <div class="form-group">
                                                                <label>Alamat</label>
                                                                <textarea class="form-control" rows="3" name="b5_1_alamat"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 order-md-1">
                                                            <div class="form-group">
                                                                <label>Sertifikat Kompartemen</label>
                                                                <input type="text" class="form-control" name="b5_1_sertifikat">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_b5_2()">
                                                    <input id="check_b5_2" type="checkbox" name="check_b5_2" value="1">
                                                    <label class="font-weight-normal" for="check_b5_2">Dari Anak Perusahaan</label>
                                                </div>
                                                <div id="hidden_b5_2" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nama</label>
                                                                <input type="text" class="form-control" name="b5_2_nama">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 order-md-2">
                                                            <div class="form-group">
                                                                <label>Alamat</label>
                                                                <textarea class="form-control" rows="3" name="b5_2_alamat"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 order-md-1">
                                                            <div class="form-group">
                                                                <label>No. Sertifikat Kompartemen</label>
                                                                <input type="text" class="form-control" name="b5_2_sertifikat">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_b5_3()">
                                                    <input id="check_b5_3" type="checkbox" name="check_b5_3" value="1">
                                                    <label class="font-weight-normal" for="check_b5_3">Dari Kemitraan Peternakan Mandiri</label>
                                                </div>
                                                <div id="hidden_b5_3" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nama</label>
                                                                <input type="text" class="form-control" name="b5_3_nama">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 order-md-2">
                                                            <div class="form-group">
                                                                <label>Alamat</label>
                                                                <textarea class="form-control" rows="3" name="b5_3_alamat"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 order-md-1">
                                                            <div class="form-group">
                                                                <label>No. Sertifikat Kompartemen</label>
                                                                <input type="text" class="form-control" name="b5_3_sertifikat">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>6. Apakah sudah memiliki sertifikat NKV?</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b6()">
                                                    <input id="b6_1" type="radio" name="check_b6" value="1">
                                                    <label class="font-weight-normal" for="b6_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b6()">
                                                    <input id="b6_2" type="radio" name="check_b6" value="0">
                                                    <label class="font-weight-normal" for="b6_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b6" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Nomor</label>
                                                                <input type="text" class="form-control" name="b6_1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Tanggal Penerbitan</label>
                                                                <input type="text" class="form-control" name="b6_2">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Tanggal Surveilans Terakhir</label>
                                                                <input type="text" class="form-control" name="b6_3">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Tindak Lanjut Temuan</label>
                                                                <textarea class="form-control" rows="3" name="b6_4"></textarea>
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
                                                7. Jika unit usaha telah menerapkan sistem jaminan keamanan pangan (HACCP, ISO 22000), 
                                                apakah ada pemeriksaan/pengujian laboratorium terakreditasi secara berkala terhadap 
                                                daging unggas?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b7()">
                                                    <input id="b7_1" type="radio" name="check_b7" value="1">
                                                    <label class="font-weight-normal" for="b7_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b7()">
                                                    <input id="b7_2" type="radio" name="check_b7" value="0">
                                                    <label class="font-weight-normal" for="b7_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b7" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <textarea class="form-control" rows="3" name="b7"></textarea>
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
                                                8. Apakah dilakukan pemingsanan terhadap unggas sebelum dipotong? 
                                                Apakah pemingsanan dilakukan oleh petugas yang kompeten?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b8()">
                                                    <input id="b8_1" type="radio" name="check_b8" value="1">
                                                    <label class="font-weight-normal" for="b8_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b8()">
                                                    <input id="b8_2" type="radio" name="check_b8" value="0">
                                                    <label class="font-weight-normal" for="b8_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b8" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Sebutkan metode pemingsanan?</label>
                                                                <input type="text" class="form-control" name="b8_1">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Berapa lama waktu pemingsanan sampai ke penyembelihan?</label>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" class="form-control" name="b8_2">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text">detik</span>
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
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                9. Apakah penyembelihan dilakukan oleh juru sembelih halal yang kompeten?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b9()">
                                                    <input id="b9_1" type="radio" name="check_b9" value="1">
                                                    <label class="font-weight-normal" for="b9_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b9()">
                                                    <input id="b9_2" type="radio" name="check_b9" value="0">
                                                    <label class="font-weight-normal" for="b9_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b9" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <textarea class="form-control" rows="3" name="b9"></textarea>
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
                                                10. Apakah ada petugas yang bertanggung jawab dalam penerapan kesejahteraan hewan?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b10()">
                                                    <input id="b10_1" type="radio" name="check_b10" value="1">
                                                    <label class="font-weight-normal" for="b10_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b10()">
                                                    <input id="b10_2" type="radio" name="check_b10" value="0">
                                                    <label class="font-weight-normal" for="b10_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b10" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <textarea class="form-control" rows="3" name="b10"></textarea>
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
                                                11.	Apakah dilakukan pemeriksaan karkas dan jeroan setelah dipotong?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b11()">
                                                    <input id="b11_1" type="radio" name="check_b11" value="1">
                                                    <label class="font-weight-normal" for="b11_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b11()">
                                                    <input id="b11_2" type="radio" name="check_b11" value="0">
                                                    <label class="font-weight-normal" for="b11_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b11" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <textarea class="form-control" rows="3" name="b11"></textarea>
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
                                                12. Apakah ada pemeriksaan/pengujian terhadap produk secara berkala?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b12()">
                                                    <input id="b12_1" type="radio" name="check_b12" value="1">
                                                    <label class="font-weight-normal" for="b12_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b12()">
                                                    <input id="b12_2" type="radio" name="check_b12" value="0">
                                                    <label class="font-weight-normal" for="b12_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b12" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <textarea class="form-control" rows="3" name="b12"></textarea>
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
                                                13. Apakah karkas unggas memiliki label/informasi?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b13()">
                                                    <input id="b13_1" type="radio" name="check_b13" value="1">
                                                    <label class="font-weight-normal" for="b13_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b13()">
                                                    <input id="b13_2" type="radio" name="check_b13" value="0">
                                                    <label class="font-weight-normal" for="b13_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b13" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <textarea class="form-control" rows="3" name="b13"></textarea>
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
                                                14. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b14()">
                                                    <input id="b14_1" type="radio" name="check_b14" value="1">
                                                    <label class="font-weight-normal" for="b14_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b14()">
                                                    <input id="b14_2" type="radio" name="check_b14" value="0">
                                                    <label class="font-weight-normal" for="b14_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b14" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <textarea class="form-control" rows="3" name="b14"></textarea>
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
                                                15. Apakah dilakukan program pengendalian hama dan serangga?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b15()">
                                                    <input id="b15_1" type="radio" name="check_b15" value="1">
                                                    <label class="font-weight-normal" for="b15_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b15()">
                                                    <input id="b15_2" type="radio" name="check_b15" value="0">
                                                    <label class="font-weight-normal" for="b15_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b15" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <textarea class="form-control" rows="3" name="b15"></textarea>
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
                                                16. Apakah ada prosedur penanganan terhadap unggas yang mati sebelum dipotong (bangkai)?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b16()">
                                                    <input id="b16_1" type="radio" name="check_b16" value="1">
                                                    <label class="font-weight-normal" for="b16_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b16()">
                                                    <input id="b16_2" type="radio" name="check_b16" value="0">
                                                    <label class="font-weight-normal" for="b16_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b16" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <textarea class="form-control" rows="3" name="b16"></textarea>
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
                                                17. Apakah dilakukan pengolahan limbah?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b17()">
                                                    <input id="b17_1" type="radio" name="check_b17" value="1">
                                                    <label class="font-weight-normal" for="b17_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b17()">
                                                    <input id="b17_2" type="radio" name="check_b17" value="0">
                                                    <label class="font-weight-normal" for="b17_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b17" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <textarea class="form-control" rows="3" name="b17"></textarea>
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
                                                18. Apakah ada penanganan terhadap bulu dan jeroan usus dari unggas yang dipotong?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b18()">
                                                    <input id="b18_1" type="radio" name="check_b18" value="1">
                                                    <label class="font-weight-normal" for="b18_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b18()">
                                                    <input id="b18_2" type="radio" name="check_b18" value="0">
                                                    <label class="font-weight-normal" for="b18_2">Tidak</label>
                                                </div>
                                                <div id="hidden_b18" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Keterangan (Jika dilakukan penanganan, untuk apa pemanfaatannya dan tujuan distribusinya)</label>
                                                                <textarea class="form-control" rows="3" name="b18"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label for="b19">
                                                19. Berapa lama waktu antara penyembelihan sampai perebusan?
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="b19">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">menit</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                20. Berasal dari manakah sumber air bersih yang digunakan?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block">
                                                    <input id="b20_1" type="checkbox" name="b20[]" value="PDAM">
                                                    <label class="font-weight-normal" for="b20_1">PDAM</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="b20_2" type="checkbox" name="b20[]" value="Air Tanah">
                                                    <label class="font-weight-normal" for="b20_2">Air Tanah</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="b20_3" type="checkbox" name="b20[]" value="Air Sungai">
                                                    <label class="font-weight-normal" for="b20_3">Air Sungai</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                21. Berasal dari manakah sumber es yang digunakan?
                                                Berapa kebutuhan es rata-rata per hari?
                                            </label>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <input type="text" class="form-control" name="b21_1" placeholder="Sumber">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="b21_2" placeholder="Kebutuhan">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">ton/hari</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                22. Berasal dari manakah sumber listrik yang digunakan?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block">
                                                    <input id="b22_1" type="checkbox" name="b22[]" value="Listrik PLN">
                                                    <label class="font-weight-normal" for="b22_1">Listrik PLN</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="b22_2" type="checkbox" name="b22[]" value="Genset">
                                                    <label class="font-weight-normal" for="b22_2">Genset</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                23. Berapakah kapasitas pemotongan unggas?
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="b23_1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">ekor/jam</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="b23_2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">ekor/hari</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                24. Berapakah persentase pemotongan unggas jantan?
                                            </label>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="b24">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                25. Berapakah jumlah jam operasional pemotongan RPH-U?
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="b25_1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">jam/hari</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="b25_2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">hari/minggu</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                26. Berapakah realisasi pemotongan unggas?
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="b26_1">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">ekor/hari</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="b26_2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">ekor/minggu</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                27. Berapakah rata-rata berat hidup unggas yang dipotong per hari?
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="b27_1" placeholder="Ukuran kecil (<1kg)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="b27_2" placeholder="Ukuran Sedang (1-1,5 kg)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="b27_3" placeholder="Ukuran Besar (> 1,5 kg)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                28. Apakah sarana pembekuan cepat yang digunakan?
                                            </label>
                                            <div class="d-block mb-3">
                                                <div class="icheck-wisteria d-block" onclick="check_b28()">
                                                    <input id="b28_1" type="radio" name="check_b28" value="Air Blast Freezer">
                                                    <label class="font-weight-normal" for="b28_1">Air Blast Freezer</label>
                                                </div>
                                                <div id="hidden_b28_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none"></div>
                                                <div class="icheck-wisteria d-block" onclick="check_b28()">
                                                    <input id="b28_2" type="radio" name="check_b28" value="Contact Plate Freezer">
                                                    <label class="font-weight-normal" for="b28_2">Contact Plate Freezer</label>
                                                </div>
                                                <div id="hidden_b28_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none"></div>
                                                <div class="icheck-wisteria d-block" onclick="check_b28()">
                                                    <input id="b28_3" type="radio" name="check_b28" value="Brine Freezer">
                                                    <label class="font-weight-normal" for="b28_3">Brine Freezer</label>
                                                </div>
                                                <div id="hidden_b28_3" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none"></div>
                                                <div class="icheck-wisteria d-block" onclick="check_b28()">
                                                    <input id="b28_4" type="radio" name="check_b28" value="Cryogenic Freezer">
                                                    <label class="font-weight-normal" for="b28_4">Cryogenic Freezer</label>
                                                </div>
                                                <div id="hidden_b28_4" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none"></div>
                                                <div class="icheck-wisteria d-block" onclick="check_b28()">
                                                    <input id="b28_5" type="radio" name="check_b28" value="Individual Quick Freezer">
                                                    <label class="font-weight-normal" for="b28_5">Individual Quick Freezer</label>
                                                </div>
                                                <div id="hidden_b28_5" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                29. Jika produk akhir karkas dingin, apakah memiliki sarana penyimpanan dingin (Chiller)?
                                            </label>
                                            <div class="d-block mb-3">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b29()">
                                                    <input id="b29_1" type="radio" name="check_b29" value="1">
                                                    <label class="font-weight-normal" for="b29_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b29()">
                                                    <input id="b29_2" type="radio" name="check_b29" value="0">
                                                    <label class="font-weight-normal" for="b29_2">Terpisah</label>
                                                </div>
                                            </div>
                                            <div id="hidden_b29_1" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Jumlah Unit</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="b29_unit">
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
                                                                <input type="text" class="form-control" name="b29_kapasitas">
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
                                                                <input type="text" class="form-control" name="b29_realisasi">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">ton</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_b29_2" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Metode yang digunakan untuk mendinginkan karkas</label>
                                                            <input type="text" class="form-control" name="b29_metode">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                30. Jika produk akhir karkas beku, apakah memiliki sarana penyimpanan dingin (Cold Storage)?
                                            </label>
                                            <div class="d-block mb-3">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b30()">
                                                    <input id="b30_1" type="radio" name="check_b30" value="1">
                                                    <label class="font-weight-normal" for="b30_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b30()">
                                                    <input id="b30_2" type="radio" name="check_b30" value="0">
                                                    <label class="font-weight-normal" for="b30_2">Terpisah</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="hidden_b30_1" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Jumlah Unit</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="b30_unit">
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
                                                                <input type="text" class="form-control" name="b30_kapasitas">
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
                                                            <label>Rata-Rata Jumlah Produk Unggas yang Disimpan</label>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" class="form-control" name="b30_realisasi">
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
                                                                        <input type="text" class="form-control" name="b30_waktu">
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
                                            <div id="hidden_b30_2" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <textarea class="form-control" rows="3" name="b30_alamat"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>31. Kemanakah tujuan distribusi karkas?</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_b31()">
                                                    <input id="b31_1" type="radio" name="check_b31" value="Dalam Kabupaten/Kota">
                                                    <label class="font-weight-normal" for="b31_1">Dalam Kabupaten/Kota</label>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_b31()">
                                                    <input id="b31_2" type="radio" name="check_b31" value="Antar Kabupaten/Kota">
                                                    <label class="font-weight-normal" for="b31_2">Antar Kabupaten/Kota</label>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_b31()">
                                                    <input id="b31_3" type="radio" name="check_b31" value="Dalam Provinsi">
                                                    <label class="font-weight-normal" for="b31_3">Dalam Provinsi</label>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_b31()">
                                                    <input id="b31_4" type="radio" name="check_b31" value="Antar Provinsi">
                                                    <label class="font-weight-normal" for="b31_4">Antar Provinsi</label>
                                                </div>
                                                <div id="hidden_b31" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <label>Lengkapi data Produk yang didistribusikan</label>
                                                            <input type="hidden" id="b31_count" name="b31_count" value="0">
                                                            <div id="hidden_b31_detail" class="px-2"></div>
                                                            <button type="button" class="btn btn-primary my-2 mr-1" onclick="b31_plus()">Tambah</button>
                                                            <button type="button" class="btn btn-danger my-2" onclick="b31_minus()">Kurangi</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>32. Apakah jenis sarana/alat angkut untuk distribusi karkas?</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_b32()">
                                                    <input id="b32_1" type="radio" name="check_b32" value="Berpendingin">
                                                    <label class="font-weight-normal" for="b32_1">Berpendingin</label>
                                                </div>
                                                <div id="hidden_b32_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none"></div>
                                                <div class="icheck-wisteria d-block" onclick="check_b32()">
                                                    <input id="b32_2" type="radio" name="check_b32" value="Tidak Berpendingin">
                                                    <label class="font-weight-normal" for="b32_2">Tidak Berpendingin</label>
                                                </div>
                                                <div id="hidden_b32_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none"></div>
                                                <div class="icheck-wisteria d-block" onclick="check_b32()">
                                                    <input id="b32_3" type="radio" name="check_b32" value="Lainnya">
                                                    <label class="font-weight-normal" for="b32_3">Lainnya</label>
                                                </div>
                                                <div id="hidden_b32_3" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>
                                                33. Jika memiliki unit pengolahan produk unggas, berapa persentase produksi RPH-U 
                                                yang digunakan sebagai bahan baku produk olahan unggas?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b33()">
                                                    <input id="b33_1" type="radio" name="check_b33" value="1">
                                                    <label class="font-weight-normal" for="b33_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b33()">
                                                    <input id="b33_2" type="radio" name="check_b33" value="0">
                                                    <label class="font-weight-normal" for="b33_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div id="hidden_b33" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Kebutuhan Produksi</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="b33">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">%</span>
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
        <script src="{{ asset('js/checklist6.js') }}"></script>
    @endpush
@endsection