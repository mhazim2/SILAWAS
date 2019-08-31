@extends('layouts.app')

@section('title', 'Profile')
@section('Profile', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Profile</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline">
                    <div class="row">
                        <!-- Informasi Akun -->
                        <div class="col-md-3">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('dist/img/user.png') }}" alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center">{{ $user->username }}</h3>
                                <p class="text-muted text-center">Admin</p>
                                <a href= '{{"/profile/".$user->id."/edit"}}'class="btn btn-kesmavet btn-block mt-4">
                                    <b>Edit Profil</b>
                                </a>
                            </div>
                        </div>
                        <!-- Informasi Profil -->
                        <div class="col-md-9">
                            <div class="card-header">
                                <h3 class="card-title">Data Pribadi</h3>
                            </div>
                            <div class="card-body">
                                <table class="detail-view">
                                    <tr>
                                        <td class="text-nowrap">Nama Lengkap</td>
                                        <td>:</td>
                                        <td>
                                            @foreach ($orang as $orang)
                                            {{ $orang->NamaLengkap }}
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">Email</td>
                                        <td>:</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">Tempat Lahir</td>
                                        <td>:</td>
                                        <td>{{ $orang->TempatLahir }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">Tanggal Lahir</td>
                                        <td>:</td>
                                        <td>{{ date('d F Y', strtotime($orang->TanggalLahir)) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">Nomor HP</td>
                                        <td>:</td>
                                        <td>{{ $orang->NomorHandphone }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">Nomor KTP</td>
                                        <td>:</td>
                                        <td>{{ $orang->NomorKTP }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap">NPWP</td>
                                        <td>:</td>
                                        <td>{{ $orang->NPWP }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection