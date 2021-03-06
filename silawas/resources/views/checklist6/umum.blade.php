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
                            <li class="nav-item"><a class="nav-link active" href="#umum" data-toggle="tab">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist6.survey') }}">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist6.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="umum">
                                <form action="{{ route('checklist6.umum') }}" method="POST">
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
                                        <div class="col-md-6">
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
                                        <div class="col-md-6">
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
                                        <div class="col-md-6">
                                            <label for="JenisProduk">3. Jenis Produk (Daging Unggas)</label>
                                            <select class="form-control select2" id="JenisProduk" name="JenisProduk">
                                                <option disabled selected>-- Pilih --</option>
                                                <option value="Hangat/Segar">Hangat/Segar</option>
                                                <option value="Dingin/Beku">Dingin/Beku</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label>4. Jumlah Karyawan</label>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12 mb-3">
                                            <label class="font-weight-normal">Produksi</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control @error('KaryawanProdL') is-invalid @enderror" name="KaryawanProdL">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">laki-laki</span>
                                                        </div>
                                                        @error('KaryawanProdL')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control @error('KaryawanProdP') is-invalid @enderror " name="KaryawanProdP">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">perempuan</span>
                                                        </div>
                                                        @error('KaryawanProdP')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                         @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="font-weight-normal">Administrasi</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control @error('KaryawanAdminL') is-invalid @enderror " name="KaryawanAdminL">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">laki-laki</span>
                                                        </div>
                                                        @error('KaryawanAdminL')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                         @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control @error('KaryawanAdminP') is-invalid @enderror" name="KaryawanAdminP">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">perempuan</span>
                                                        </div>
                                                        @error('KaryawanAdminP')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                         @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="font-weight-normal">Petugas AMPM</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control @error('KaryawanAMPM') is-invalid @enderror" name="KaryawanAMPM">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">orang</span>
                                                        </div>
                                                        @error('KaryawanAMPM')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                         @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="font-weight-normal">Petugas AWO</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control @error('KaryawanAWO') is-invalid @enderror" name="KaryawanAWO">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">orang</span>
                                                        </div>
                                                        @error('KaryawanAWO')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                         @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="font-weight-normal">Juru Sembelih Halal</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control  @error('KaryawanHalal') is-invalid @enderror" name="KaryawanHalal">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">orang</span>
                                                        </div>
                                                        @error('KaryawanHalal')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                         @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label class="font-weight-normal">Operator Stunning</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control @error('KaryawanStunning') is-invalid @enderror" name="KaryawanStunning">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">orang</span>
                                                        </div>
                                                        @error('KaryawanStunning')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                        </span>
                                                         @enderror
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