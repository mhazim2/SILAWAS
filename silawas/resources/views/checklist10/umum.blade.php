@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Gudang Penyimpanan Dingin/Beku')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Gudang Penyimpanan Dingin/Beku</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist10.survey') }}">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist10.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="umum">
                                <form action="{{ route('checklist10.umum') }}" method="POST">
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
                                            <label for="jenisUsaha">2. Jenis Unit Usaha</label>
                                            <select class="form-control select2" id="jenisUsaha" name="jenisUsaha">
                                                <option disabled selected>-- Pilih --</option>
                                                <option value="Cold Storage">Cold Storage</option>
                                                <option value="Chilled Room">Chilled Room</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label for="komoditas">3. Komoditas</label>
                                            <select class="form-control select2" id="komoditas" name="komoditas[]" multiple="multiple" data-placeholder="Pilih Komoditas">
                                                <option value="Daging ayam">Daging ayam</option>
                                                <option value="Daging Sapi">Daging Sapi</option>
                                                <option value="Daging Kerbau">Daging Kerbau</option>
                                                <option value="Daging Babi">Daging Babi</option>
                                                <option value="Telur">Telur</option>
                                                <option value="Susu">Susu</option>
                                                <option value="Kulit">Kulit</option>
                                                <option value="Bulu">Bulu</option>
                                                <option value="Wol">Wol</option>
                                                <option value="Tanduk">Tanduk</option>
                                                <option value="Gelatin">Gelatin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label for="kapasitasGudang">4. Kapasitas Gudang</label>
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
                                            <label for="realisasiPenyimpanan">5. Realisasi Penyimpanan</label>
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
                                            <label for="wilayahPeredaran">6. Wilayah Peredaran</label>
                                            <select class="form-control select2" id="wilayahPeredaran" name="wilayahPeredaran">
                                                <option disabled selected>-- Pilih --</option>
                                                <option value="Lokal">Lokal</option>
                                                <option value="Lintas Kab-Kota">Lintas Kab-Kota</option>
                                                <option value="Lintas Provinsi">Lintas Provinsi</option>
                                                <option value="Ekspor">Ekspor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
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
        <script src="{{ asset('js/checklist10.js') }}"></script>
    @endpush
@endsection