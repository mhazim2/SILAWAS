@extends('layouts.app')

@section('title', 'Formulir Pengawasan')
@section('Formulir Pengawasan', 'active')
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
                <div class="accordion mb-5" id="formulirAccordion">
                    <div class="card">
                        <div class="card-header px-2 py-1" id="headingOne" data-toggle="collapse" data-target="#collapseOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left" type="button">
                                    <i class="fab fa-wpforms mr-1"></i> Budidaya Hewan Perah dan Pemerahan Susu
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#formulirAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/1">
                                            <div class="small-box bg-fuchsia">
                                                <div class="inner">
                                                    <h3>Form 1</h3>
                                                    <p class="mb-1">Tempat Budidaya Hewan Perah dan Pemerahan Susu</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fab fa-wpforms"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/2">
                                            <div class="small-box bg-fuchsia">
                                                <div class="inner">
                                                    <h3>Form 2</h3>
                                                    <p class="mb-1">Tempat Penampungan Susu</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fab fa-wpforms"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header px-2 py-1" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left" type="button">
                                    <i class="fab fa-wpforms mr-1"></i> Budidaya Unggas Petelur dan Produksi Telur Konsumsi
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#formulirAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/3">
                                            <div class="small-box bg-fuchsia">
                                                <div class="inner">
                                                    <h3>Form 3</h3>
                                                    <p class="mb-1">Budidaya Unggas Petelur dan Produksi Telur Konsumsi</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fab fa-wpforms"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/4">
                                            <div class="small-box bg-fuchsia">
                                                <div class="inner">
                                                    <h3>Form 4</h3>
                                                    <p class="mb-1">Tempat Pengepul Telur</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fab fa-wpforms"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header px-2 py-1" id="headingThree" data-toggle="collapse" data-target="#collapseThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left" type="button">
                                    <i class="fab fa-wpforms mr-1"></i> Rumah Potong Hewan
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#formulirAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/5">
                                            <div class="small-box bg-fuchsia">
                                                <div class="inner">
                                                    <h3>Form 5</h3>
                                                    <p class="mb-1">Rumah Potong Hewan Ruminansia</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fab fa-wpforms"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/6">
                                            <div class="small-box bg-fuchsia">
                                                <div class="inner">
                                                    <h3>Form 6</h3>
                                                    <p class="mb-1">Rumah Potong Hewan Unggas</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fab fa-wpforms"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/7">
                                            <div class="small-box bg-fuchsia">
                                                <div class="inner">
                                                    <h3>Form 7</h3>
                                                    <p class="mb-1">Rumah Potong Hewan Babi</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fab fa-wpforms"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header px-2 py-1" id="headingFour" data-toggle="collapse" data-target="#collapseFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left" type="button">
                                    <i class="fab fa-wpforms mr-1"></i> Tempat Pengolahan/Pasca Panen Pangan Asal Hewan
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" data-parent="#formulirAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/8">
                                            <div class="small-box bg-fuchsia">
                                                <div class="inner">
                                                    <h3>Form 8</h3>
                                                    <p class="mb-1">Tempat Pengolahan Pangan Asal Hewan</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fab fa-wpforms"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header px-2 py-1" id="headingFive" data-toggle="collapse" data-target="#collapseFive">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left" type="button">
                                    <i class="fab fa-wpforms mr-1"></i> Tempat Produksi Produk Hewan Non Pangan
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" data-parent="#formulirAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/9">
                                            <div class="small-box bg-fuchsia">
                                                <div class="inner">
                                                    <h3>Form 9</h3>
                                                    <p class="mb-1">Tempat Pengolahan Produk Hewan Non Pangan</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fab fa-wpforms"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header px-2 py-1" id="headingSix" data-toggle="collapse" data-target="#collapseSix">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left" type="button">
                                    <i class="fab fa-wpforms mr-1"></i> Tempat Pengumpulan Hewan, Pengumpulan Produk Hewan, dan Tempat Penjualan
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#formulirAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/10">
                                            <div class="small-box bg-fuchsia">
                                                <div class="inner">
                                                    <h3>Form 10</h3>
                                                    <p class="mb-1">Gudang Penyimpanan Dingin/Beku</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fab fa-wpforms"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/11">
                                            <div class="small-box bg-fuchsia">
                                                <div class="inner">
                                                    <h3>Form 11</h3>
                                                    <p class="mb-1">Gudang Penyimpanan Kering</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fab fa-wpforms"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/12">
                                            <div class="small-box bg-fuchsia">
                                                <div class="inner">
                                                    <h3>Form 12</h3>
                                                    <p class="mb-1">Tempat Penjualan</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fab fa-wpforms"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header px-2 py-1" id="headingSeven" data-toggle="collapse" data-target="#collapseSeven">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left" type="button">
                                    <i class="fab fa-wpforms mr-1"></i> Tempat Pengolahan Pangan Segar Asal Hewan Lainnya
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSeven" class="collapse" data-parent="#formulirAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/13">
                                            <div class="small-box bg-fuchsia">
                                                <div class="inner">
                                                    <h3>Form 13</h3>
                                                    <p class="mb-1">Pengawasan Unit Usaha Produk Hewan (Hotel, Restoran dan Katering)</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fab fa-wpforms"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header px-2 py-1" id="headingEight" data-toggle="collapse" data-target="#collapseEight">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-kesmavet text-left" type="button">
                                    <i class="fab fa-wpforms mr-1"></i> Pengangkutan Produk
                                </button>
                            </h2>
                        </div>
                        <div id="collapseEight" class="collapse" data-parent="#formulirAccordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="/pengajuan/formulir/14">
                                            <div class="small-box bg-fuchsia">
                                                <div class="inner">
                                                    <h3>Form 14</h3>
                                                    <p class="mb-1">Pengangkutan Produk Hewan</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fab fa-wpforms"></i>
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
@endsection