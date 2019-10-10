@extends('layouts.app')

@section('title', 'Laporan')
@section('Laporan', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Laporan</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card laporan mb-5">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#jangkawaktu" data-toggle="tab">Jangka Waktu</a></li>
                            <li class="nav-item"><a class="nav-link" href="#periode" data-toggle="tab">Periode</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="jangkawaktu">
                                <form action="/laporan" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control" name="input_jangkawaktu" id="input_jangkawaktu">
                                                    <input type="hidden" name="start_date" id="start_date" value="{{ date('Y-m-d') }}">
                                                    <input type="hidden" name="end_date" id="end_date" value="{{ date('Y-m-d') }}">
                                                </div>
                                                @push('scripts')
                                                    <script>
                                                        $(function () {
                                                            $('#input_jangkawaktu').daterangepicker({}, function(start, end, label) {
                                                                $('#start_date').val(start.format('YYYY-MM-DD')); 
                                                                $('#end_date').val(end.format('YYYY-MM-DD')); 
                                                            });
                                                        });
                                                    </script>
                                                @endpush
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-kesmavet">Tampilkan Laporan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="periode">
                                <form action="/laporan" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <select class="form-control select2" name="input_periode" id="input_periode">
                                                    <option value="1">Hari Ini</option>
                                                    <option value="2">1 Minggu Terakhir</option>
                                                    <option value="3">1 Bulan Terakhir</option>
                                                    <option value="4">3 Bulan Terakhir</option>
                                                    <option value="5">1 Tahun Terakhir</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-kesmavet">Tampilkan Laporan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($content)
                    @include('laporan.content')
                @endif
            </div>
        </section>
    </div>
@endsection