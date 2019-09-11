@extends('layouts.app')

@section('title', 'Tambah Petugas')
@section('Tambah Petugas', 'active')
@section('content')
<div class="content-wrapper">
        <!-- Page Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h1 class="m-0 text-dark">Tambah Petugas</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Edit Profil -->
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Data Petugas</h3>
                        </div>
                        <form class="mb-3" action="/petugas/store" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group mb-5">
                                    <label for="NamaLengkap">Nama Petugas</label>
                                    <input type="text" class="form-control @error('NamaLengkap') is-invalid @enderror" id="NamaLengkap" name="NamaLengkap" value="{{ old('NamaLengkap') }}">
                                    @error('NamaLengkap')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="NoSK">Nomor SK</label>
                                    <input type="text" class="form-control @error('NoSK') is-invalid @enderror" id="NoSK" name="NoSK" value="{{ old('NoSK') }}">
                                    @error('NoSK')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 0xxx/xxxx/xxxxx</small>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="NIP">NIP</label>
                                    <input type="text" class="form-control @error('NIP') is-invalid @enderror" id="NIP" name="NIP" value="{{ old('NIP') }}">
                                    @error('NIP')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 20xxxxxxxxxxx</small>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="NoRegistrasi">Nomor Registrasi</label>
                                    <input type="text" class="form-control @error('NoRegistrasi') is-invalid @enderror" id="NoRegistrasi" name="NoRegistrasi" value="{{ old('NoRegistrasi') }}">
                                    @error('NoRegistrasi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 0xxx/xxxx/xxxxx</small>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan') }}">
                                    @error('jabatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: Kepala Sub Direktorat Pengawasan Keamanan Produk Hewan</small>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="unitKerja">Unit Kerja</label>
                                    <input type="text" class="form-control @error('unitKerja') is-invalid @enderror" id="unitKerja" name="unitKerja" value="{{ old('unitKerja') }}">
                                    @error('unitKerja')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: Kementerian Pertanian, Direktorat Jenderal Peternakan dan Kesehatan Hewan</small>
                                </div>
                                <div class=" form-group mb-5">
                                    <label for="alamatKantor">Alamat Kantor</label>
                                    <textarea class="form-control" rows="3" name="alamatKantor"></textarea>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="NomorHandphone">No. Telp Petugas</label>
                                    <input type="text" class="form-control @error('NomorHandphone') is-invalid @enderror" id="NomorHandphone" name="NomorHandphone" value="{{ old('NomorHandphone') }}">
                                    @error('NomorHandphone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 0xxxxxxxxx</small>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="email">Email Petugas</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class=" form-group mb-5">
                                    <label>Status Petugas</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" >
                                            <input id="isDokter_1" type="radio" name="isDokter" value="1">
                                            <label class="font-weight-normal" for="isDokter_1">Dokter Hewan</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" >
                                            <input id="isDokter_2" type="radio" name="isDokter" value="0">
                                            <label class="font-weight-normal" for="isDokter_2">Asisten</label>
                                        </div>                                            
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="WilayahKerja">Wilayah Kerja / Kewenangan</label>
                                    <select class="form-control select2" id="WilayahKerja" name="WilayahKerja">
                                        @foreach($listwilayahkerja as $wilayahkerja)
                                            <option value="{{$wilayahkerja->idWilayahKerja}}">{{$wilayahkerja->Nama}} </option>
                                        @endforeach
                                    </select>
                                    @error('WilayahKerja')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-kesmavet btn-kesmavet-block float-right mb-5">
                                    Simpan
                                </button>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection