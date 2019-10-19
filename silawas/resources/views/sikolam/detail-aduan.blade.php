@extends('layouts.app')

@section('title', 'Aduan Masyarakat')
@section('Aduan', 'active')

@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Aduan Masyarakat</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="card-title">Detail Aduan</h5>
                    </div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td class="pr-1"><b>Nama Lengkap</b></td>
                                <td>: Feby Tri Saputra</td>
                            </tr>
                            <tr>
                                <td class="pr-1"><b>Kontak</b></td>
                                <td>: 08123456789</td>
                            </tr>
                            <tr>
                                <td class="pr-1"><b>Alamat</b></td>
                                <td>: Bogor</td>
                            </tr>
                            <tr>
                                <td class="pr-1"><b>Kategori</b></td>
                                <td>: Kategori 1</td>
                            </tr>
                            <tr>
                                <td class="pr-1"><b>Tanggal</b></td>
                                <td>: 18 Oktober 2019</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="card-title">Deskripsi Aduan</h5>
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adidas adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                        deserunt mollit anim id est laborum.
                    </div>
                </div>
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="card-title">Bukti Fisik</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('files/panduan/Buku_Pedoman_VTRNR_V4.png') }}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection