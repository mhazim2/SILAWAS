@extends('layouts.app')

@section('title', 'Tambah Unit Usaha')
@section('Tambah Unit Usaha', 'active')
@section('content')
<div class="content-wrapper">
        <!-- Page Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <h1 class="m-0 text-dark">Tambah Unit Usaha</h1>
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
                            <h3 class="card-title">Data Unit Usaha</h3>
                        </div>
                        <form class="mb-3" action="/unit-usaha/store" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group mb-5">
                                    <label for="NamaUnitUsaha">Nama Unit Usaha</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" 
                                                class="form-control @error('NamaUnitUsaha') is-invalid @enderror" 
                                                id="NamaUnitUsaha" 
                                                name="NamaUnitUsaha" 
                                                value="{{ old('NamaUnitUsaha') }}" autofocus>
                                            @error('NamaUnitUsaha')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="koordinat">Titik Koordinat Lokasi</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" 
                                                    class="form-control @error('koordinat') is-invalid @enderror" 
                                                    id="koordinat" 
                                                    name="koordinat" 
                                                    value="{{ old('koordinat') }}">
                                            @error('koordinat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <small class="form-text text-muted"><b>Contoh:</b> -6.2XXXXX; 106.82XXXX</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <label>Kontak Unit Usaha</label>
                                    <div class="bg-kesmavet p-2 mt-2 mb-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="AlamatUnitUsaha">Alamat</label>
                                                    <textarea class="form-control @error('AlamatUnitUsaha') is-invalid @enderror" 
                                                            rows="3" 
                                                            id="AlamatUnitUsaha" 
                                                            name="AlamatUnitUsaha"></textarea>
                                                    @error('AlamatUnitUsaha')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="telepUU">No. Telp</label>
                                                    <input type="text" 
                                                        class="form-control @error('telepUU') is-invalid @enderror" 
                                                        id="telepUU" 
                                                        name="telepUU" 
                                                        value="{{ old('telepUU') }}">
                                                    @error('telepUU')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="faxUU">Fax</label>
                                                    <input type="text" 
                                                        class="form-control @error('faxUU') is-invalid @enderror" 
                                                        id="faxUU" 
                                                        name="faxUU" 
                                                        value="{{ old('faxUU') }}">
                                                    @error('faxUU')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="emailUU">Email</label>
                                                    <input type="text" 
                                                        class="form-control @error('emailUU') is-invalid @enderror" 
                                                        id="emailUU" 
                                                        name="emailUU" 
                                                        value="{{ old('emailUU') }}">
                                                    @error('emailUU')
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
                                    <label for="TahunBerdiri">Tahun Berdiri</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" 
                                                    class="form-control @error('TahunBerdiri') is-invalid @enderror" 
                                                    id="TahunBerdiri" 
                                                    name="TahunBerdiri" 
                                                    value="{{ old('TahunBerdiri') }}">
                                            @error('TahunBerdiri')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="TahunOperasional">Tahun Operasional</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" 
                                                class="form-control @error('TahunOperasional') is-invalid @enderror" 
                                                id="TahunOperasional" 
                                                name="TahunOperasional" 
                                                value="{{ old('TahunOperasional') }}">
                                            @error('TahunOperasional')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="StatusKepemilikan">Status Kepemilikan</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select class="form-control select2" id="StatusKepemilikan" name="StatusKepemilikan">
                                                <option disabled selected>-- Pilih --</option>
                                                <option value="Pemerintah">Pemerintah</option>
                                                <option value="Sewa">Sewa</option>
                                                <option value="Milik Sendiri">Milik Sendiri</option>
                                                <option value="Milik Grup Perusahaan">Milik Grup Perusahaan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="PelakuUsaha_idPemilikUsaha">Pemilik Unit Usaha/Nama Kantor Pusat</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <select class="form-control select2" id="PelakuUsaha_idPemilikUsaha" name="PelakuUsaha_idPemilikUsaha">
                                                <option disabled selected>-- Pilih --</option>
                                                @foreach($listPemilikUsaha as $pemilikusaha)
                                                    <option value="{{$pemilikusaha->idPemilikUsaha}}">{{$pemilikusaha->Nama}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-5">
                                    <label>Kontak Kantor Pusat</label>
                                    <div class="bg-kesmavet p-2 mt-2 mb-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="AlamatKantorPusat">Alamat</label>
                                                    <textarea class="form-control @error('AlamatKantorPusat') is-invalid @enderror" 
                                                            rows="3" 
                                                            id="AlamatKantorPusat" 
                                                            name="AlamatKantorPusat"></textarea>
                                                    @error('AlamatKantorPusat')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Telepon">No. Telp</label>
                                                    <input type="text" 
                                                        class="form-control @error('Telepon') is-invalid @enderror" 
                                                        id="Telepon" 
                                                        name="Telepon" 
                                                        value="{{ old('Telepon') }}">
                                                    @error('Telepon')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Fax">Fax</label>
                                                    <input type="text" 
                                                        class="form-control @error('Fax') is-invalid @enderror" 
                                                        id="Fax" 
                                                        name="Fax" 
                                                        value="{{ old('Fax') }}">
                                                    @error('Fax')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="Email">Email</label>
                                                    <input type="text" 
                                                        class="form-control @error('Email') is-invalid @enderror" 
                                                        id="Email" 
                                                        name="Email" 
                                                        value="{{ old('Email') }}">
                                                    @error('Email')
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
                                    <label>Penanggung Jawab Unit Usaha</label>
                                    <div class="bg-kesmavet p-2 mt-2 mb-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-weight-normal" for="pjUnitUsaha">Nama</label>
                                                    <input type="text" 
                                                            class="form-control @error('pjUnitUsaha') is-invalid @enderror" 
                                                            id="pjUnitUsaha" 
                                                            name="pjUnitUsaha" 
                                                            value="{{ old('pjUnitUsaha') }}">
                                                    @error('pjUnitUsaha')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-weight-normal" for="pjUnitUsahaKontak">No. Telp</label>
                                                    <input type="text" 
                                                            class="form-control @error('pjUnitUsahaKontak') is-invalid @enderror" 
                                                            id="pjUnitUsahaKontak" 
                                                            name="pjUnitUsahaKontak" 
                                                            value="{{ old('pjUnitUsahaKontak') }}">
                                                    @error('pjUnitUsahaKontak')
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
                                    <label>Penangung Jawab Teknis</label>
                                    <div class="bg-kesmavet p-2 mt-2 mb-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-weight-normal" for="PenangungJawabTeknis">Nama</label>
                                                    <input type="text" 
                                                        class="form-control @error('PenangungJawabTeknis') is-invalid @enderror" 
                                                        id="PenangungJawabTeknis" 
                                                        name="PenangungJawabTeknis" 
                                                        value="{{ old('PenangungJawabTeknis') }}">
                                                    @error('PenangungJawabTeknis')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-weight-normal" for="KontakPJ">No. Telp</label>
                                                    <input type="text" 
                                                        class="form-control @error('KontakPJ') is-invalid @enderror" 
                                                        id="KontakPJ" 
                                                        name="KontakPJ" 
                                                        value="{{ old('KontakPJ') }}">
                                                    @error('KontakPJ')
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
                                    <label>Penanggung Jawab Produksi</label>
                                    <div class="bg-kesmavet p-2 mt-2 mb-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-weight-normal" for="pjProduksi">Nama</label>
                                                    <input type="text" 
                                                            class="form-control @error('pjProduksi') is-invalid @enderror" 
                                                            id="pjProduksi" 
                                                            name="pjProduksi" 
                                                            value="{{ old('pjProduksi') }}">
                                                    @error('pjProduksi')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-weight-normal" for="pjProduksiKontak">No. Telp</label>
                                                    <input type="text" 
                                                            class="form-control @error('pjProduksiKontak') is-invalid @enderror" 
                                                            id="pjProduksiKontak" 
                                                            name="pjProduksiKontak" 
                                                            value="{{ old('pjProduksiKontak') }}">
                                                    @error('pjProduksiKontak')
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
                                    <label>Penanggung Jawab Mutu</label>
                                    <div class="bg-kesmavet p-2 mt-2 mb-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-weight-normal" for="pjMutu">Nama</label>
                                                    <input type="text" 
                                                            class="form-control @error('pjMutu') is-invalid @enderror" 
                                                            id="pjMutu" 
                                                            name="pjMutu" 
                                                            value="{{ old('pjMutu') }}">
                                                    @error('pjMutu')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-weight-normal" for="pjMutuKontak">No. Telp</label>
                                                    <input type="text" 
                                                            class="form-control @error('pjMutuKontak') is-invalid @enderror" 
                                                            id="pjMutuKontak" 
                                                            name="pjMutuKontak" 
                                                            value="{{ old('pjMutuKontak') }}">
                                                    @error('pjMutuKontak')
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
                                    <label>Penanggung Jawab Higiene Sanitasi</label>
                                    <div class="bg-kesmavet p-2 mt-2 mb-4">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-weight-normal" for="pjHigiene">Nama</label>
                                                    <input type="text" 
                                                            class="form-control @error('pjHigiene') is-invalid @enderror" 
                                                            id="pjHigiene" 
                                                            name="pjHigiene" 
                                                            value="{{ old('pjHigiene') }}">
                                                    @error('pjHigiene')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-weight-normal" for="pjHigieneKontak">No. Telp</label>
                                                    <input type="text" 
                                                            class="form-control @error('pjHigieneKontak') is-invalid @enderror" 
                                                            id="pjHigieneKontak" 
                                                            name="pjHigieneKontak" 
                                                            value="{{ old('pjHigieneKontak') }}">
                                                    @error('pjHigieneKontak')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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