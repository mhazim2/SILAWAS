@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Rumah Potong Hewan Ruminansia')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Rumah Potong Hewan Ruminansia</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist5.survey') }}">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist5.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="umum">
                                <form action="{{ route('checklist5.umum') }}" method="POST">
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
                                        <div class="col-lg-6">
                                            <label for="kategoriRPHR">2. Kategori RPH-R</label>
                                            <select class="form-control select2" id="kategoriRPHR" name="kategoriRPHR">
                                                <option value="" selected>-- Pilih --</option>
                                                <option value="1">Kategori I (Memproduksi karkas/daging hangat)</option>
                                                <option value="2">Kategori II (Memproduksi karkas/daging dingin/beku)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>3. Jumlah Karyawan</label>
                                            <div class="row">
                                                <div class="col-lg-8 col-xl-6">
                                                    <label class="font-weight-normal">Produksi</label>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="karyawanProdL">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">laki-laki</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="karyawanProdP">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">perempuan</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-xl-6">
                                                    <label class="font-weight-normal">Administrasi</label>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="karyawanAdmL">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">laki-laki</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="karyawanAdmP">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">perempuan</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-xl-6">
                                                    <label class="font-weight-normal">Petugas AMPM</label>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="karyawanAMPM">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">orang</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-xl-6">
                                                    <label class="font-weight-normal">Petugas AWO</label>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="karyawanAWO">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">orang</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-xl-6">
                                                    <label class="font-weight-normal">Juru Sembelih Halal</label>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="karyawanHalal">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">orang</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-xl-6">
                                                    <label class="font-weight-normal">Butcher</label>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="karyawanButcher">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">orang</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-xl-6">
                                                    <label class="font-weight-normal">Operator Stunning</label>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" name="karyawanStunning">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">orang</span>
                                                                </div>
                                                            </div>
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
        <script src="{{ asset('js/checklist5.js') }}"></script>
    @endpush
@endsection