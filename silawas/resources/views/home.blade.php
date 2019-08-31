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
                <div class="row resources-list">
                    <div class="col-md-3">
                        <div class="card" title="Buku Pedoman Pengawasan Kesehatan Masyarakat Veteriner v4" data-toggle="tooltip" data-placement="bottom">
                            <div class="card-img-container">
                                <img src="{{ asset('file/Buku_Pedoman_VTRNR_V4.png') }}" class="card-img-top">
                            </div>
                            <div class="card-body p-2">
                                <a href="{{ asset('file/Buku_Pedoman_VTRNR_V4.pdf') }}" target="_blank">
                                    <button class="btn btn-kesmavet btn-block btn-flat">
                                        Download <i class="fas fa-external-link-alt ml-1"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
