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
                            <li class="nav-item"><a class="nav-link active" href="#umum" data-toggle="tab">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist7.survey') }}">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist7.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="umum">
                                <form action="{{ route('checklist7.umum') }}" method="POST">
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
                                        <div class="col-lg-6">
                                            <label for="NamaUnitUsaha">1. Nama Unit Usaha <font color="red">*</font></label>
                                            <select class="form-control select2" id="NamaUnitUsaha" name="NamaUnitUsaha">
                                                <option disabled selected>-- Pilih --</option>
                                                @foreach($list_uu as $uu)
                                                    <option value="{{ $uu->id }}">{{$uu->NamaUnitUsaha}} </option>
                                                @endforeach
                                            </select>
                                            <small class="form-text text-muted">
                                                Jika tidak ditemukan, silahkan 
                                                <a href="{{ route('unitusaha.create') }}"><u>tambah unit usaha</u></a> 
                                                terlebih dahulu.
                                            </small>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label for="TipeUnitUsaha">2. Tipe Unit Usaha</label>
                                            <select class="form-control select2" id="TipeUnitUsaha" name="TipeUnitUsaha">
                                                <option disabled selected>-- Pilih --</option>
                                                <option value="Modern">Modern</option>
                                                <option value="Menengah">Menengah</option>
                                                <option value="Tradisional">Tradisional</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label for="kapasitasPemotongan">3. Kapasitas Pemotongan</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="kapasitasPemotongan">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">ekor/hari</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label for="realisasiPemotongan">4. Realisasi Pemotongan Saat Ini</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="realisasiPemotongan">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">ekor/hari</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label for="operasionalPemotongan">5. Operasional Pemotongan</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="operasionalPemotongan">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">hari/minggu</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label>6. Asal Sumber Ternak</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_sumber_lokal()">
                                                    <input id="check_sumber_lokal" type="checkbox" name="check_sumber_lokal" value="1">
                                                    <label class="font-weight-normal" for="check_sumber_lokal">Lokal</label>
                                                </div>
                                                <div id="hidden_sumber_lokal" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="form-group">
                                                        <label>Sumber</label>
                                                        <input type="text" class="form-control" name="sumber_lokal">
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_sumber_impor()">
                                                    <input id="check_sumber_impor" type="checkbox" name="check_sumber_impor" value="1">
                                                    <label class="font-weight-normal" for="check_sumber_impor">Ex-impor</label>
                                                </div>
                                                <div id="hidden_sumber_impor" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="form-group">
                                                        <label>Sumber</label>
                                                        <input type="text" class="form-control" name="sumber_impor">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label>7. Distribusi Karkas/Daging</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block">
                                                    <input id="distribusiDaging_1" type="checkbox" name="distribusiDaging[]" value="Lokal">
                                                    <label class="font-weight-normal" for="distribusiDaging_1">Lokal</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="distribusiDaging_2" type="checkbox" name="distribusiDaging[]" value="Lintas Kab-kota">
                                                    <label class="font-weight-normal" for="distribusiDaging_2">Lintas Kab-Kota</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="distribusiDaging_3" type="checkbox" name="distribusiDaging[]" value="Lintas Provinsi">
                                                    <label class="font-weight-normal" for="distribusiDaging_3">Lintas Provinsi</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="distribusiDaging_4" type="checkbox" name="distribusiDaging[]" value="Ekspor">
                                                    <label class="font-weight-normal" for="distribusiDaging_4">Ekspor</label>
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