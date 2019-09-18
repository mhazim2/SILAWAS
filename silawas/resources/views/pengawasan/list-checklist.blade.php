@extends('layouts.app')

@section('title', 'Ceklis Pengawasan')
@section('Ceklis Pengawasan', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Formulir dan Panduan Pengisian Ceklis</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="accordion pb-5" id="checklistAccordion">
                    <div class="card">
                        <div class="accordion-switch card-header px-2 py-1" id="headingOne" data-toggle="collapse" data-target="#collapseOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left mr-1" type="button">
                                    <i class="fas fa-angle-down mr-1"></i> Budidaya Hewan Perah dan Pemerahan Susu
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#checklistAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="{{ route('checklist1.show') }}">
                                            <div class="info-box bg-fuchsia">
                                                <span class="info-box-icon bg-light">
                                                    <i class="fab fa-wpforms"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Tempat Budidaya Hewan Perah dan Pemerahan Susu</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/2">
                                            <div class="info-box bg-fuchsia">
                                                <span class="info-box-icon bg-light">
                                                    <i class="fab fa-wpforms"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Tempat Penampungan Susu</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="accordion-switch card-header px-2 py-1" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left mr-1" type="button">
                                    <i class="fas fa-angle-down mr-1"></i> Budidaya Unggas Petelur dan Produksi Telur Konsumsi
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#checklistAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/3">
                                            <div class="info-box bg-fuchsia">
                                                <span class="info-box-icon bg-light">
                                                    <i class="fab fa-wpforms"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Tempat Budidaya Unggas Petelur dan Produksi Telur Konsumsi</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/4">
                                            <div class="info-box bg-fuchsia">
                                                <span class="info-box-icon bg-light">
                                                    <i class="fab fa-wpforms"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Tempat Pengepul Telur</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="accordion-switch card-header px-2 py-1" id="headingThree" data-toggle="collapse" data-target="#collapseThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left mr-1" type="button">
                                    <i class="fas fa-angle-down mr-1"></i> Rumah Potong Hewan
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#checklistAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/5">
                                            <div class="info-box bg-fuchsia">
                                                <span class="info-box-icon bg-light">
                                                    <i class="fab fa-wpforms"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Rumah Potong Hewan Ruminansia</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{ route('checklist6.show') }}">
                                            <div class="info-box bg-fuchsia">
                                                <span class="info-box-icon bg-light">
                                                    <i class="fab fa-wpforms"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Rumah Potong Hewan Unggas</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{ route('checklist7.show') }}">
                                            <div class="info-box bg-fuchsia">
                                                <span class="info-box-icon bg-light">
                                                    <i class="fab fa-wpforms"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Rumah Potong Hewan Babi</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="accordion-switch card-header px-2 py-1" id="headingFour" data-toggle="collapse" data-target="#collapseFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left mr-1" type="button">
                                    <i class="fas fa-angle-down mr-1"></i> Tempat Pengolahan/Pasca Panen Pangan Asal Hewan
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#checklistAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/8">
                                            <div class="info-box bg-fuchsia">
                                                <span class="info-box-icon bg-light">
                                                    <i class="fab fa-wpforms"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Tempat Pengolahan Pangan Asal Hewan</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="accordion-switch card-header px-2 py-1" id="headingFive" data-toggle="collapse" data-target="#collapseFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left mr-1" type="button">
                                    <i class="fas fa-angle-down mr-1"></i> Tempat Produksi Produk Hewan Non Pangan
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#checklistAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/9">
                                            <div class="info-box bg-fuchsia">
                                                <span class="info-box-icon bg-light">
                                                    <i class="fab fa-wpforms"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Tempat Pengolahan Produk Hewan Non Pangan</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="accordion-switch card-header px-2 py-1" id="headingSix" data-toggle="collapse" data-target="#collapseSix">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left mr-1" type="button">
                                    <i class="fas fa-angle-down mr-1"></i> Tempat Pengumpulan Hewan, Pengumpulan Produk Hewan, dan Tempat Penjualan
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#checklistAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="{{ route('checklist10.show') }}">
                                            <div class="info-box bg-fuchsia">
                                                <span class="info-box-icon bg-light">
                                                    <i class="fab fa-wpforms"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Gudang Penyimpanan Dingin/Beku</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{ route('checklist11.show') }}">
                                            <div class="info-box bg-fuchsia">
                                                <span class="info-box-icon bg-light">
                                                    <i class="fab fa-wpforms"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Gudang Penyimpanan Kering</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="{{ route('checklist12.show') }}">
                                            <div class="info-box bg-fuchsia">
                                                <span class="info-box-icon bg-light">
                                                    <i class="fab fa-wpforms"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Tempat Penjualan</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="accordion-switch card-header px-2 py-1" id="headingSeven" data-toggle="collapse" data-target="#collapseSeven">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left mr-1" type="button">
                                    <i class="fas fa-angle-down mr-1"></i> Tempat Pengolahan Pangan Segar Asal Hewan Lainnya
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSeven" class="collapse" data-parent="#checklistAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="{{ route('checklist13.show') }}">
                                            <div class="info-box bg-fuchsia">
                                                <span class="info-box-icon bg-light">
                                                    <i class="fab fa-wpforms"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Hotel, Restoran dan Katering</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="accordion-switch card-header px-2 py-1" id="headingEight" data-toggle="collapse" data-target="#collapseEight">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left mr-1" type="button">
                                    <i class="fas fa-angle-down mr-1"></i> Pengangkutan Produk
                                </button>
                            </h2>
                        </div>
                        <div id="collapseEight" class="collapse" data-parent="#checklistAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="{{ route('checklist14.show') }}">
                                            <div class="info-box bg-fuchsia">
                                                <span class="info-box-icon bg-light">
                                                    <i class="fab fa-wpforms"></i>
                                                </span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Pengangkutan Produk Hewan</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @push('scripts')
        <script>
            $(".accordion-switch").click(function(){
                $(".accordion-switch").not(this).each(function(){
                    $(this).find("i").removeClass("fa-rotate-180");
                });
                $(this).find("i").toggleClass("fa-rotate-180");    
            });
        </script>
    @endpush
@endsection