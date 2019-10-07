@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Tempat Budidaya Unggas Petelur dan Produksi Telur Konsumsi')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Tempat Budidaya Unggas Petelur dan Produksi Telur Konsumsi</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist3.survey') }}">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist3.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="umum">
                                <form action="{{ route('checklist3.umum') }}" method="POST">
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
                                            <label for="NamaUnitUsaha">1. Nama Unit Usaha</label>
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
                                        <div class="col-lg-12">
                                            <label for="kapasitasPemeliharaan">2. Kapasitas Pemeliharaan</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="kapasitasPemeliharaan">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">ekor</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="jumlahPopulasi">3. Jumlah Populasi</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="jumlahPopulasi">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">ekor</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-4">
                                            <label for="skalaUsaha">4. Skala Usaha Peternakan</label>
                                            <select class="form-control select2" id="skalaUsaha" name="skalaUsaha">
                                                <option value="" selected>-- Pilih --</option>
                                                <option value="Mikro">Mikro</option>
                                                <option value="Kecil">Kecil</option>
                                                <option value="Menengah">Menengah</option>
                                                <option value="Besar">Besar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>5. Produksi Telur</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="produksiTelurPerHari">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Ton/hari</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="produksiTelurPerBulan">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Ton/bulan</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="kapasitasGudangTelur">6. Kapasitas Gudang Telur</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="kapasitasGudangTelur">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">MT</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="realisasiPemanfaatan">7. Realisasi Pemanfaatan Saat Ini</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="realisasiPemanfaatan">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">MT</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label>8. Wilayah Peredaran</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_wilayahPeredaran_1()">
                                                    <input id="wilayahPeredaran_1" type="checkbox" name="check_wilayahPeredaran_1" value="Lokal">
                                                    <label class="font-weight-normal" for="wilayahPeredaran_1">Lokal</label>
                                                </div>
                                                <div id="hidden_wilayahPeredaran_1" class="bg-kesmavet p-2 mt-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <input type="text" class="form-control" name="wilayahPeredaran_1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_wilayahPeredaran_2()">
                                                    <input id="wilayahPeredaran_2" type="checkbox" name="check_wilayahPeredaran_2" value="Lintas Kab-kota">
                                                    <label class="font-weight-normal" for="wilayahPeredaran_2">Lintas Kab-Kota</label>
                                                </div>
                                                <div id="hidden_wilayahPeredaran_2" class="bg-kesmavet p-2 mt-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <input type="text" class="form-control" name="wilayahPeredaran_2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_wilayahPeredaran_3()">
                                                    <input id="wilayahPeredaran_3" type="checkbox" name="check_wilayahPeredaran_3" value="Lintas Provinsi">
                                                    <label class="font-weight-normal" for="wilayahPeredaran_3">Lintas Provinsi</label>
                                                </div>
                                                <div id="hidden_wilayahPeredaran_3" class="bg-kesmavet p-2 mt-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <input type="text" class="form-control" name="wilayahPeredaran_3">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_wilayahPeredaran_4()">
                                                    <input id="wilayahPeredaran_4" type="checkbox" name="check_wilayahPeredaran_4" value="Ekspor">
                                                    <label class="font-weight-normal" for="wilayahPeredaran_4">Ekspor</label>
                                                </div>
                                                <div id="hidden_wilayahPeredaran_4" class="bg-kesmavet p-2 mt-2 mb-5" style="display:none">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Keterangan</label>
                                                                <input type="text" class="form-control" name="wilayahPeredaran_4">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="jumlahSDM">9. Jumlah SDM</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="jumlahSDM">
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
        <script src="{{ asset('js/checklist3.js') }}"></script>
    @endpush
@endsection