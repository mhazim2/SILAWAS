@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Tempat Budidaya Unggas Petelur dan Produksi Telur Konsumsi')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Tempat Budidaya Unggas Petelur dan Produksi Telur Konsumsi</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist3.umum') }}">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist3.survey') }}">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#catatan" data-toggle="tab">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="catatan">
                                <form action="{{ route('checklist3.catatan') }}" method="POST">
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
                                        <div class="col-lg-12">
                                            <label for="catatan">1. Catatan</label>
                                            <textarea class="form-control" rows="3" name="catatan"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="rekomendasi">2. Rekomendasi/Tindak Lanjut</label>
                                            <textarea class="form-control" rows="3" name="rekomendasi"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label for="idPengawas">3. Dokter Hewan Pengawas <font color="red">*</font></label>
                                            <select class="form-control select2" id="idPengawas" name="idPengawas">
                                                <option value="" selected>-- Pilih --</option>
                                                @foreach($list_dokter as $pengawas)
                                                    <option value="{{ $pengawas->idPengawasKesmavet }}">{{ $pengawas->user->orang->NamaLengkap }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label for="idPengawas2">4. Dokter Hewan Pengawas/Asisten 1</label>
                                            <select class="form-control select2" id="idPengawas2" name="idPengawas2">
                                                <option value="" selected>Tidak Ada</option>
                                                @foreach($list_pengawas as $pengawas)
                                                    <option value="{{ $pengawas->idPengawasKesmavet }}">{{ $pengawas->user->orang->NamaLengkap }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label for="idPengawas3">5. Dokter Hewan Pengawas/Asisten 2</label>
                                            <select class="form-control select2" id="idPengawas3" name="idPengawas3">
                                                <option value="" selected>Tidak Ada</option>
                                                @foreach($list_pengawas as $pengawas)
                                                    <option value="{{ $pengawas->idPengawasKesmavet }}">{{ $pengawas->user->orang->NamaLengkap }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label for="pjUnitUsaha">6. Penangung Jawab Unit Usaha</label>
                                            <input type="text" class="form-control" id="pjUnitUsaha" name="pjUnitUsaha">
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
        <script src="{{ asset('js/checklist3.js') }}"></script>
    @endpush
@endsection