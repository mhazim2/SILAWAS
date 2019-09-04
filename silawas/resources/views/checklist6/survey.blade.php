@extends('layouts.app')

@section('title', 'Checklis Rumah Potong Hewan Unggas')
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
                                <form action="{{ route('checklist6.survey') }}" method="POST">
                                    @csrf
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label>1. Apakah memiliki:</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_niu()">
                                                    <input id="check_niu" type="checkbox" name="check_niu">
                                                    <label class="font-weight-normal" for="check_niu">Nomor Izin Usaha</label>
                                                </div>
                                                <div id="hidden_niu" class="bg-kesmavet p-2 mb-4" style="display:none">
                                                    <div class="form-group mb-0">
                                                        <label>Nomor dan Tanggal Penerbitan</label>
                                                        <input type="text" class="form-control" name="niu">
                                                        <small class="form-text"><b>Contoh:</b> 123/JKT/2017 Tanggal 12 Juli 2018</small>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_npwp()">
                                                    <input id="check_npwp" type="checkbox" name="check_npwp">
                                                    <label class="font-weight-normal" for="check_npwp">NPWP</label>
                                                </div>
                                                <div id="hidden_npwp" class="bg-kesmavet p-2 mb-4" style="display:none">
                                                    <div class="form-group mb-0">
                                                        <label>Nomor</label>
                                                        <input type="text" class="form-control" name="npwp">
                                                        <small class="form-text"><b>Contoh:</b> 47.222.555.1-017.000</small>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_siup()">
                                                    <input id="check_siup" type="checkbox" name="check_siup">
                                                    <label class="font-weight-normal" for="check_siup">SIUP</label>
                                                </div>
                                                <div id="hidden_siup" class="bg-kesmavet p-2 mb-4" style="display:none">
                                                    <div class="form-group mb-0">
                                                        <label>Nomor dan Tanggal Penerbitan</label>
                                                        <input type="text" class="form-control" name="siup">
                                                        <small class="form-text"><b>Contoh:</b> 124/SIUP/2017 Tanggal 12 Juli 2018</small>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_nib()">
                                                    <input id="check_nib" type="checkbox" name="check_nib">
                                                    <label class="font-weight-normal" for="check_nib">NIB</label>
                                                </div>
                                                <div id="hidden_nib" class="bg-kesmavet p-2 mb-4" style="display:none">
                                                    <div class="form-group mb-0">
                                                        <label>Nomor dan Tanggal Penerbitan</label>
                                                        <input type="text" class="form-control" name="nib">
                                                        <small class="form-text"><b>Contoh:</b> 321/JSEL/2017 Tanggal 12 Juli 2018</small>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_pks()">
                                                    <input id="check_pks" type="checkbox" name="check_pks">
                                                    <label class="font-weight-normal" for="check_pks">Perjanjian Kerja Sama (jika Sewa RPH-U)</label>
                                                </div>
                                                <div id="hidden_pks" class="bg-kesmavet p-2 mb-4" style="display:none">
                                                    <div class="form-group mb-0">
                                                        <label>Tanggal Perjanjian</label>
                                                        <input type="text" class="form-control" name="pks">
                                                        <small class="form-text"><b>Contoh:</b> Perjanjian Sewa Tanggal 5 Januari 2018</small>
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
                                                    <div class="form-group mb-0">
                                                        <label>Tuliskan Nama, Status Kepegawaian, dan Telepon</label>
                                                        <input type="text" class="form-control" name="b2">
                                                        <small class="form-text"><b>Contoh:</b> Drh. Asep (Swasta) 082222222</small>
                                                    </div>
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
                                                    <div class="form-group">
                                                        <label>Nomor dan Tanggal Sertifikat Halal</label>
                                                        <input type="text" class="form-control" name="b3_1">
                                                        <small class="form-text"><b>Contoh:</b> 0987654788906072017</small>
                                                    </div>
                                                    <div class="form-group mb-0">
                                                        <label>Masa Berlaku</label>
                                                        <input type="text" class="form-control" name="b3_2">
                                                        <small class="form-text"><b>Contoh:</b> 2 Tahun (06072019)</small>
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