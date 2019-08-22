@extends('layouts.app')

@section('title', 'Profile')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
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
                                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('dist/img/user2-160x160.jpg') }}" alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center">{{ $user->username }}</h3>
                                <p class="text-muted text-center">Admin</p>
                                <a href="/profile/{{ $user->id }}/edit" class="btn btn-kesmavet btn-block">
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
                                        <td>Nama Lengkap</td>
                                        <td>:</td>
                                        <td>{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td>:</td>
                                        <td>{{ $user->tempat_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>:</td>
                                        <td>{{ date('d F Y', strtotime($user->tanggal_lahir)) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor HP</td>
                                        <td>:</td>
                                        <td>{{ $user->no_hp }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nomor KTP</td>
                                        <td>:</td>
                                        <td>{{ $user->no_ktp }}</td>
                                    </tr>
                                    <tr>
                                        <td>NPWP</td>
                                        <td>:</td>
                                        <td>{{ $user->npwp }}</td>
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