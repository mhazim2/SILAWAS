@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Tempat Pengolahan Produk Hewan Non Pangan')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Tempat Pengolahan Produk Hewan Non Pangan</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist9.survey') }}">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist9.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="umum">
                                <form action="{{ route('checklist9.umum') }}" method="POST">
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
                                        <div class="col-lg-5">
                                            <label for="NamaUnitUsaha">1. Nama Unit Usaha *</label>
                                            <select class="form-control select2" id="NamaUnitUsaha" name="idUnitUsaha">
                                                <option value="" selected>-- Pilih --</option>
                                                @foreach($list_uu as $uu)
                                                    <option value="{{ $uu->id }}">{{ $uu->NamaUnitUsaha }} </option>
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
                                            <label for="jenisPengolahan">2. Jenis Pengolahan</label>
                                            <select class="form-control select2" id="jenisPengolahan" name="jenisPengolahan[]" multiple="multiple" data-placeholder="Pilih Jenis Pengolahan" onchange="check_jenisPengolahan()">
                                                <option value="Kulit">Kulit</option>
                                                <option value="Bulu">Bulu</option>
                                                <option value="Wol">Wol</option>
                                                <option value="Tanduk">Tanduk</option>
                                                <option id="option_jenisPengolahan_lainnya" value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_jenisPengolahan_lainnya" class="mt-3 mt-lg-0" style="display:none">
                                                <label for="jenisPengolahan_lainnya">Jenis Jenis Pengolahan Lainnya</label>
                                                <input id="jenisPengolahan_lainnya" type="text" class="form-control" name="jenisPengolahan_lainnya">
                                                <small class="form-text text-muted"><b>Hint:</b> Jika lebih dari satu pisahkan dengan tanda koma (, )</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="kapasitasProduksi">3. Kapasitas Produksi</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="kapasitasProduksi">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Kg/hari</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="jumlahProduksi">4. Jumlah Produksi Saat Ini</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="jumlahProduksi">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Kg/hari</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label>5. Asal Sumber Bahan Baku</label>
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
                                            <label>6. Distribusi Produk</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block">
                                                    <input id="distribusiProduk_1" type="checkbox" name="distribusiProduk[]" value="Lokal">
                                                    <label class="font-weight-normal" for="distribusiProduk_1">Lokal</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="distribusiProduk_2" type="checkbox" name="distribusiProduk[]" value="Lintas Kab-kota">
                                                    <label class="font-weight-normal" for="distribusiProduk_2">Lintas Kab-Kota</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="distribusiProduk_3" type="checkbox" name="distribusiProduk[]" value="Lintas Provinsi">
                                                    <label class="font-weight-normal" for="distribusiProduk_3">Lintas Provinsi</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="distribusiProduk_4" type="checkbox" name="distribusiProduk[]" value="Ekspor">
                                                    <label class="font-weight-normal" for="distribusiProduk_4">Ekspor</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="jumlahKaryawan">7. Jumlah Karyawan</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="jumlahKaryawan">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">orang</span>
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
        <script src="{{ asset('js/checklist9.js') }}"></script>
    @endpush
@endsection