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
                        <form class="mb-3" action="/unitusaha" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group mb-5">
                                    <label for="NamaUnitUsaha">Nama Unit Usaha</label>
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
                                <div class="form-group mb-5">
                                    <label for="AlamatUnitUsaha">Alamat Unit Usaha</label>
                                    <textarea class="form-control @error('AlamatUnitUsaha') is-invalid @enderror" 
                                              rows="3" 
                                              id="AlamatUnitUsaha" 
                                              name="AlamatUnitUsaha">
                                              {{ old('AlamatUnitUsaha') }}
                                    </textarea>
                                    @error('AlamatUnitUsaha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="NamaKantorPusat">Pemilik Unit Usaha/Nama Kantor Pusat</label>
                                    <input type="text" 
                                           class="form-control @error('NamaKantorPusat') is-invalid @enderror" 
                                           id="NamaKantorPusat" 
                                           name="NamaKantorPusat" 
                                           value="{{ old('NamaKantorPusat') }}">
                                    @error('NamaKantorPusat')
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
                                              name="AlamatKantorPusat">
                                              {{ old('AlamatKantorPusat') }}
                                    </textarea>
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