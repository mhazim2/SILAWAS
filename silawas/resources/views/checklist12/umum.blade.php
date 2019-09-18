@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Tempat Penjualan')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Tempat Penjualan</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist12.survey') }}">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist12.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="umum">
                                <form action="{{ route('checklist12.umum') }}" method="POST">
                                    @csrf
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label for="NamaUnitUsaha">1. Nama Unit Usaha</label>
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
                                                <option value="Daging Unggas">Daging Unggas</option>
                                                <option value="Daging Sapi">Daging Sapi</option>
                                                <option value="Daging Kerbau">Daging Kerbau</option>
                                                <option value="Daging Kambing">Daging Kambing</option>
                                                <option value="Daging Domba">Daging Domba</option>
                                                <option value="Daging Babi">Daging Babi</option>
                                                <option value="Susu">Susu</option>
                                                <option value="Telur">Telur</option>
                                                <option value="Bulu">Bulu</option>
                                                <option value="Kulit">Kulit</option>
                                                <option value="Madu">Madu</option>
                                                <option id="option_komoditas_lainnya" value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_komoditas_lainnya" class="mt-3 mt-md-0" style="display:none">
                                                <label for="komoditas_lainnya">Jenis Komoditas Lainnya</label>
                                                <input id="komoditas_lainnya" type="text" class="form-control" name="komoditas_lainnya">
                                                <small class="form-text text-muted"><b>Hint:</b> Jika lebih dari satu pisahkan dengan tanda koma (, )</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label for="kapasitasTempat">3. Kapasitas Tempat Penjajaan</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="kapasitasTempat">
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
                                            <label for="realisasi">4. Realisasi</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="realisasi">
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
                                            <label for="jumlahKaryawan">5. Jumlah Karyawan</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="jumlahKaryawan">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Orang</span>
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
        <script src="{{ asset('js/checklist12.js') }}"></script>
    @endpush
@endsection