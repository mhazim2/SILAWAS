@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Gudang Penyimpanan Dingin/Beku')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Gudang Penyimpanan Dingin/Beku</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist10.umum') }}">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist10.survey') }}">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#catatan" data-toggle="tab">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="catatan">
                                <form action="{{ route('checklist10.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        @if(count($errors)>0)
                                            @foreach($errors->all() as $error)
                                                <div class="alert alert-dismissible alert-danger">
                                                    {{$error}}
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label for="tanggalPengawasan">1. Tanggal Dilakukan Pengawasan <font color="red">*</font></label>
                                            <input type="text" class="form-control" id="tanggalPengawasan" name="tanggalPengawasan">
                                            <input type="hidden" name="tanggalPengawasan_date" id="tanggalPengawasan_date" value="{{ date('Y-m-d') }}">
                                        </div>
                                        @push('scripts')
                                            <script>
                                                $(function () {
                                                    $('#tanggalPengawasan').daterangepicker({
                                                        singleDatePicker: true,
                                                    }, function(start, end, label) {
                                                        $('#tanggalPengawasan_date').val(start.format('YYYY-MM-DD'));
                                                    });
                                                });
                                            </script>
                                        @endpush
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="catatan">2. Catatan</label>
                                            <textarea class="form-control" rows="3" name="catatan"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="rekomendasi">3. Rekomendasi/Tindak Lanjut</label>
                                            <textarea class="form-control" rows="3" name="rekomendasi"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-6">
                                            <label for="pengawas1">4. Dokter Hewan Pengawas <font color="red">*</font></label>
                                            <select class="form-control select2" id="pengawas1" name="pengawas1">
                                                    <option value="" selected>-- Pilih --</option>
                                                @foreach($list_dokter as $pengawas1)
                                                    <option value="{{ $pengawas1->idPengawasKesmavet }}">{{ $pengawas1->NamaLengkap }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-md-6">
                                            <label for="pengawas2">5. Dokter Hewan Pengawas/Asisten 1</label>
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
                                            <label for="pengawas3">6. Dokter Hewan Pengawas/Asisten 2</label>
                                            <select class="form-control select2" id="pengawas3" name="pengawas3">
                                                <option value="">Tidak Ada</option>
                                                @foreach($list_pengawas as $pengawas3)
                                                    <option value="{{ $pengawas3->idPengawasKesmavet }}">{{ $pengawas3->NamaLengkap }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label for="pjUnitUsaha">7. Penangung Jawab Unit Usaha</label>
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
        <script src="{{ asset('js/checklist10.js') }}"></script>
    @endpush
@endsection