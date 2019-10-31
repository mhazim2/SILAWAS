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
        @foreach ($laporan as $laporan)
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
                                <td>{{ $laporan->nama ?  $laporan->nama  : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="pr-1"><b>Kontak</b></td>
                                <td>{{ $laporan->kontak ?  $laporan->kontak  : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="pr-1"><b>Alamat</b></td>
                                <td>{{ $laporan->alamat ?  $laporan->alamat  : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="pr-1"><b>Kategori</b></td>
                                <td>{{ $laporan->kategori ?  $laporan->kategori  : '-' }}</td>
                            </tr>
                            <tr>
                                <td class="pr-1"><b>Tanggal</b></td>
                                <td>{{ $laporan->created_at ?  $laporan->created_at  : '-' }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="card-title">Deskripsi Aduan</h5>
                    </div>
                    <div class="card-body">
                            {{ $laporan->aduan ?  $laporan->aduan  : '-' }}
                    </div>
                </div>
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="card-title">Bukti Fisik</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                                @if ($laporan->bukti_fisik)
                                <div><b>Bukti Fisik:</b></div>
                                <div>
                                    <a href="{{ asset($laporan->bukti_fisik) }}">
                                        <img src="{{ asset($laporan->bukti_fisik) }}" alt="Bukti Fisik">
                                    </a>
                                </div>
                            @else
                               -
                            @endif
                        </div>
                    </div>
                </div>
            
            </div>
        </section>
        @endforeach
    </div>
@endsection