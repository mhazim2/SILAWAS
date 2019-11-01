@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Gudang Penyimpanan Kering')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Gudang Penyimpanan Kering</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist11.survey') }}">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist11.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="umum">
                                <form action="{{ route('checklist11.umum') }}" method="POST">
                                    @csrf
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label for="NamaUnitUsaha">1. Nama Unit Usaha *</label>
                                            <select class="form-control select2" id="NamaUnitUsaha" name="idUnitUsaha">
                                                <option disabled selected>-- Pilih --</option>
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
                                            <label for="komoditas">2. Komoditas</label>
                                            <select class="form-control select2" id="komoditas" name="komoditas[]" multiple="multiple" data-placeholder="Pilih Komoditas" onchange="check_komoditas()">
                                                <option value="Pet Food">Pet Food</option>
                                                <option value="Susu Bubuk">Susu Bubuk</option>
                                                <option value="Bulu">Bulu</option>
                                                <option value="Kulit">Kulit</option>
                                                <option id="option_komoditas_lainnya" value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_komoditas_lainnya" class="mt-3 mt-lg-0" style="display:none">
                                                <label for="komoditas_lainnya">Jenis Komoditas Lainnya</label>
                                                <input id="komoditas_lainnya" type="text" class="form-control" name="komoditas_lainnya">
                                                <small class="form-text text-muted"><b>Hint:</b> Jika lebih dari satu pisahkan dengan tanda koma (, )</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label for="kapasitasGudang">3. Kapasitas Gudang</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="kapasitasGudang">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Kg</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label for="realisasiPenyimpanan">4. Realisasi Penyimpanan</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="realisasiPenyimpanan">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Kg</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label>5. Wilayah Peredaran</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block">
                                                    <input id="wilayahPeredaran_1" type="checkbox" name="wilayahPeredaran[]" value="Lokal">
                                                    <label class="font-weight-normal" for="wilayahPeredaran_1">Lokal</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="wilayahPeredaran_2" type="checkbox" name="wilayahPeredaran[]" value="Lintas Kab-kota">
                                                    <label class="font-weight-normal" for="wilayahPeredaran_2">Lintas Kab-Kota</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="wilayahPeredaran_3" type="checkbox" name="wilayahPeredaran[]" value="Lintas Provinsi">
                                                    <label class="font-weight-normal" for="wilayahPeredaran_3">Lintas Provinsi</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="wilayahPeredaran_4" type="checkbox" name="wilayahPeredaran[]" value="Ekspor">
                                                    <label class="font-weight-normal" for="wilayahPeredaran_4">Ekspor</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label for="jumlahKaryawan">6. Jumlah Karyawan</label>
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
        <script src="{{ asset('js/checklist11.js') }}"></script>
    @endpush
@endsection