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
                                    <label for="NamaUnitUsaha"></label>
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
                                    <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: PT.xxxx/CV.xxxx</small>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="AlamatUnitUsaha">Alamat Unit Usaha</label>
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
                                <div class="form-group mb-5">
                                    <label for="combobox_example">Pemilik Unit Usaha/Nama Kantor Pusat</label>
                                    <select class="form-control select2" id="PelakuUsaha_idPemilikUsaha" name="PelakuUsaha_idPemilikUsaha">
                                        @foreach($listPemilikUsaha as $pemilikusaha)
                                            <option value="{{$pemilikusaha->idPemilikUsaha}}">{{$pemilikusaha->Nama}} </option>
                                        @endforeach
                                    </select>
                                    @error('combobox_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                        <label for="koordinat">koordinat</label>
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
                                </div>

                                <div class="form-group mb-5">
                                        <label for="StatusKepemilikan">Status Kepemilikan</label>
                                        <input type="text" 
                                               class="form-control @error('StatusKepemilikan') is-invalid @enderror" 
                                               id="StatusKepemilikan" 
                                               name="StatusKepemilikan" 
                                               value="{{ old('StatusKepemilikan') }}">
                                        @error('StatusKepemilikan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label for="AlamatKantorPusat">Alamat Kantor Pusat</label>
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
                                <div class="form-group mb-5">
                                    <label for="Telepon">No. Telp Kantor Pusat</label>
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
                                    <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 08xxxxxxx</small>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="Fax">Fax Kantor Pusat</label>
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
                                    <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 08xxxxxxx</small>
                                </div>
                                <div class="form-group mb-5">
                                    <label for="Email">Email Kantor Pusat</label>
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
                                <div class="form-group mb-5">
                                    <label for="PenangungJawabTeknis">Penangung Jawab Teknis</label>
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
                                <div class="form-group mb-5">
                                    <label for="KontakPJ">No. Telp Penangung Jawab Teknis</label>
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
                                    <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 08xxxxxxx</small>
                                </div>
                                <div class="form-group mb-5">
                                        <label for="pjUnitUsaha">Penanggung Jawab Unit Usaha</label>
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
                                <div class="form-group mb-5">
                                        <label for="pjUnitUsahaKontak">No. Telp Penangung Jawab  Unit Usaha</label>
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
                                        <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 08xxxxxxx</small>
                                    </div>
                                
                                <div class="form-group mb-5">
                                        <label for="pjProduksi">Penanggung Jawab Produksi</label>
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
                                <div class="form-group mb-5">
                                        <label for="pjProduksiKontak">No. Telp Penangung Jawab  Produksi</label>
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
                                        <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 08xxxxxxx</small>
                                    </div>

                                
                                <div class="form-group mb-5">
                                        <label for="pjMutu">Penanggung Jawab Mutu</label>
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

                                <div class="form-group mb-5">
                                        <label for="pjMutuKontak">No. Telp Penangung Jawab  Mutu</label>
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
                                        <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 08xxxxxxx</small>
                                    </div>
                                
                                    <div class="form-group mb-5">
                                            <label for="pjHigiene">Penanggung Jawab Higiene Sanitasi</label>
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

                                    <div class="form-group mb-5">
                                            <label for="pjHigieneKontak">No. Telp Penangung Jawab  Higiene Sanitasi</label>
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
                                            <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 08xxxxxxx</small>
                                        </div>

                                <div class="form-group mb-5">
                                    <label for="TahunOperasional">Tahun Operasional</label>
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
                                <div class="form-group mb-5">
                                        <label for="TahunBerdiri">Tahun Berdiri</label>
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