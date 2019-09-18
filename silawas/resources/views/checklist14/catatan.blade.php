@extends('layouts.app')

@section('title', 'Ceklis Pengangkutan Produk Hewan')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengangkutan Produk Hewan</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist14.umum') }}">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist14.survey') }}">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#catatan" data-toggle="tab">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="catatan">
                                <form action="{{ route('checklist14.store') }}" method="POST">
                                    @csrf
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
                                            <label for="idPengawas">3. Dokter Hewan Pengawas</label>
                                            <select class="form-control select2" id="idPengawas" name="idPengawas">
                                                <option disabled selected>-- Pilih --</option>
                                                @foreach($list_dokter as $pengawas1)
                                                    <option value="{{ $pengawas1->idPengawasKesmavet }}">{{ $pengawas1->user->orang->NamaLengkap }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-6">
                                            <label for="idPengawas2">4. Dokter Hewan Pengawas/Asisten 1</label>
                                            <select class="form-control select2" id="idPengawas2" name="idPengawas2">
                                                <option value="">Tidak Ada</option>
                                                @foreach($list_pengawas as $pengawas2)
                                                    <option value="{{ $pengawas2->idPengawasKesmavet }}">{{ $pengawas2->user->orang->NamaLengkap }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-6">
                                            <label for="idPengawas3">5. Dokter Hewan Pengawas/Asisten 2</label>
                                            <select class="form-control select2" id="idPengawas3" name="idPengawas3">
                                                <option value="">Tidak Ada</option>
                                                @foreach($list_pengawas as $pengawas3)
                                                    <option value="{{ $pengawas3->idPengawasKesmavet }}">{{ $pengawas3->user->orang->NamaLengkap }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-6">
                                            <label for="pjAlatAngkut">6. Penangung Jawab Alat Angkut/Pengemudi</label>
                                            <input type="text" class="form-control" id="pjAlatAngkut" name="pjAlatAngkut">
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
        <script src="{{ asset('js/checklist14.js') }}"></script>
    @endpush
@endsection