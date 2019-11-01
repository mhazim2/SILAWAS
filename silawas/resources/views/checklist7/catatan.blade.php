@extends('layouts.app')

@section('title', 'Ceklis Rumah Potong Hewan Babi')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Rumah Potong Hewan Babi</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist7.umum') }}">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist7.survey') }}">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#catatan" data-toggle="tab">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="catatan">
                                <form action="{{ route('checklist7.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        @if(count($errors)>0)
                                            @foreach($errors->all() as $error)
                                                <div class="alert alert-dismissible alert-danger">
                                                  {{$error}}
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="form-group">
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label for="catatan">1. Catatan</label>
                                            <textarea class="form-control" rows="3" name="catatan"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-12">
                                            <label for="rekomendasi">2. Rekomendasi/Tindak Lanjut</label>
                                            <textarea class="form-control" rows="3" name="rekomendasi"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-6">
                                            <label for="pengawas1">3. Dokter Hewan Pengawas *</label>
                                            <select class="form-control select2" id="pengawas1" name="pengawas1">
                                                @foreach($list_dokter as $pengawas1)
                                                    <option value="{{ $pengawas1->idPengawasKesmavet }}">{{ $pengawas1->NamaLengkap }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-6">
                                            <label for="pengawas2">4. Dokter Hewan Pengawas/Asisten 1</label>
                                            <select class="form-control select2" id="pengawas2" name="pengawas2">
                                                <option value="">Tidak Ada</option>
                                                @foreach($list_pengawas as $pengawas2)
                                                    <option value="{{ $pengawas2->idPengawasKesmavet }}">{{ $pengawas2->NamaLengkap }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-6">
                                            <label for="pengawas3">5. Dokter Hewan Pengawas/Asisten 2</label>
                                            <select class="form-control select2" id="pengawas3" name="pengawas3">
                                                <option value="">Tidak Ada</option>
                                                @foreach($list_pengawas as $pengawas3)
                                                    <option value="{{ $pengawas3->idPengawasKesmavet }}">{{ $pengawas3->NamaLengkap }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-6">
                                            <label>6. Penangung Jawab Unit Usaha</label>
                                            <input type="text" 
                                                   class="form-control @error('pj_unitusaha') is-invalid @enderror" 
                                                   id="pj_unitusaha" 
                                                   name="pj_unitusaha" 
                                                   value="{{ old('pj_unitusaha') }}">
                                            @error('pj_unitusaha')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-5">
                                        <button type="submit" class="btn btn-kesmavet">
                                            Simpan
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
        <script src="{{ asset('js/checklist7.js') }}"></script>
    @endpush
@endsection