@extends('layouts.app')

@section('title', 'Dashboard')
@section('Home', 'active')

@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $jumlah }}</h3>
                                <p>Jumlah Aduan</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <a href="/kolam/aduan" class="small-box-footer">
                                Lihat semua <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>5</h3>
                                <p>Jumlah Pengawas</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="/kolam/pengawas" class="small-box-footer">
                                Lihat semua <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
    </div>
@endsection