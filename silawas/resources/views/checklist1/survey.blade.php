@extends('layouts.app')

@section('title', 'Ceklis Tempat Budidaya Hewan Perah dan Pemerahan Susu')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Tempat Budidaya Hewan Perah dan Pemerahan Susu</h1>
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
                                            <label>1. Apakah memiliki:</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_b1_niu()">
                                                    <input id="check_b1_niu" type="checkbox" name="check_b1_niu" value="1">
                                                    <label class="font-weight-normal" for="check_b1_niu">Nomor Izin Usaha</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="hidden_b1_niu" class="bg-kesmavet p-2 mb-5" style="display:none">
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
                                                <div class="icheck-wisteria d-block" onclick="check_b1_npwp()">
                                                    <input id="check_b1_npwp" type="checkbox" name="check_b1_npwp" value="1">
                                                    <label class="font-weight-normal" for="check_b1_npwp">NPWP</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="hidden_b1_npwp" class="bg-kesmavet p-2 mb-5" style="display:none">
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
                                                <div class="icheck-wisteria d-block" onclick="check_b1_siup()">
                                                    <input id="check_b1_siup" type="checkbox" name="check_b1_siup" value="1">
                                                    <label class="font-weight-normal" for="check_b1_siup">SIUP</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="hidden_b1_siup" class="bg-kesmavet p-2 mb-5" style="display:none">
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
                                                <div class="icheck-wisteria d-block" onclick="check_b1_nib()">
                                                    <input id="check_b1_nib" type="checkbox" name="check_b1_nib" value="1">
                                                    <label class="font-weight-normal" for="check_b1_nib">NIB</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="hidden_b1_nib" class="bg-kesmavet p-2 mb-5" style="display:none">
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
                                            <label>2. Apakah lalu lintas hewan (masuk dan keluar peternakan) dilengkapi dengan Sertifikat Veteriner?</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_b2()">
                                                    <input id="b2_1" type="radio" name="check_b2" value="1">
                                                    <label class="font-weight-normal" for="b2_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_b2()">
                                                    <input id="b2_2" type="radio" name="check_b2" value="0">
                                                    <label class="font-weight-normal" for="b2_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="hidden_b2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mb-0">
                                                            <label>Scan Sertifikat Veteriner</label>
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" id="b2_file" name="file" class="custom-file-input">
                                                                    <label id="b2_label" class="custom-file-label" for="file">Pilih file...</label>
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