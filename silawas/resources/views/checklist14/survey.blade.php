@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Pengangkutan Produk Hewan')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Pengangkutan Produk Hewan</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist14.umum') }}">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#survey" data-toggle="tab">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist14.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="survey">
                                <form action="{{ route('checklist14.survey') }}" method="POST" enctype="multipart/form-data" onkeypress="return event.keyCode != 13;">
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
                                                1. Apakah pangan segar asal hewan berasal dari unit usaha yang bersertifikat NKV?
                                            </label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-inline mr-3" onclick="check_p1()">
                                                    <input id="p1_1" type="radio" name="check_p1" value="1">
                                                    <label class="font-weight-normal" for="p1_1">Ya</label>
                                                </div>
                                                <div class="icheck-wisteria d-inline" onclick="check_p1()">
                                                    <input id="p1_2" type="radio" name="check_p1" value="0">
                                                    <label class="font-weight-normal" for="p1_2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div id="hidden_p1_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label>Catatan NKV</label>
                                                        <input type="hidden" id="p1_count" name="P1_1" value="0">
                                                        <div id="hidden_p1_1_detail" class="px-2"></div>
                                                        <button type="button" class="btn btn-primary my-2 mr-1" onclick="p1_plus()">Tambah</button>
                                                        <button type="button" class="btn btn-danger my-2" onclick="p1_minus()">Kurangi</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p1_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P1_2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                2. Apakah pangan segar asal hewan berasal dari unit usaha yang memiliki sertifikat 
                                                halal (bagi yang dipersyaratkan)?
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
                                                    <div class="col-lg-12">
                                                        <label>Catatan Sertifikat</label>
                                                        <input type="hidden" id="p2_count" name="P2_1" value="0">
                                                        <div id="hidden_p2_1_detail" class="px-2"></div>
                                                        <button type="button" class="btn btn-primary my-2 mr-1" onclick="p2_plus()">Tambah</button>
                                                        <button type="button" class="btn btn-danger my-2" onclick="p2_minus()">Kurangi</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p2_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P2_2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                3. Apakah produk hewan disertai Sertifikat Veteriner?
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
                                        <div class="col-lg-12">
                                            <div id="hidden_p3_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label>Catatan Sertifikat</label>
                                                        <input type="hidden" id="p3_count" name="P3_1" value="0">
                                                        <div id="hidden_p3_1_detail" class="px-2"></div>
                                                        <button type="button" class="btn btn-primary my-2 mr-1" onclick="p3_plus()">Tambah</button>
                                                        <button type="button" class="btn btn-danger my-2" onclick="p3_minus()">Kurangi</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="hidden_p3_2" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-2">
                                                            <label>Keterangan</label>
                                                            <textarea class="form-control" rows="2" name="P3_2"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>
                                                4. Apakah produk hewan disertai dengan rekomendasi pengeluaran dari Dinas yang 
                                                membidangi fungsi Kesmavet Provinsi asal?
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
                                        <div class="col-lg-12">
                                            <div id="hidden_p4_1" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label>Catatan Rekomendasi</label>
                                                        <input type="hidden" id="p4_count" name="P4_1" value="0">
                                                        <div id="hidden_p4_1_detail" class="px-2"></div>
                                                        <button type="button" class="btn btn-primary my-2 mr-1" onclick="p4_plus()">Tambah</button>
                                                        <button type="button" class="btn btn-danger my-2" onclick="p4_minus()">Kurangi</button>
                                                    </div>
                                                </div>
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
                                                5. Apakah produk hewan di dalam alat angkut disusun dengan baik?
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
                                                6. Apakah suhu box penyimpanan pada alat angkut telah sesuai dengan persyaratan teknis?
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
                                            <div id="hidden_p6" class="bg-kesmavet p-2 mt-2 mb-4" style="display:none">
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
                                                7. Apakah ada pemisahan produk hewan halal dengan non halal atau produk lainnya?
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
                                                8. Apakah produk hewan yang diangkut sesuai dengan kapasitas alat angkut?
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
                                                9. Apakah dilakukan program pemeliharaan kebersihan alat angkut?
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
        <script src="{{ asset('js/checklist14.js') }}"></script>
    @endpush
@endsection