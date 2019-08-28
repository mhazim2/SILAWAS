@extends('layouts.app')

@section('title', 'Edit Profile')
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
            <div class="row">
                <!-- Edit Profil -->
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Data Pribadi</h3>
                        </div>
                        <form action='{{"/profile/".$user->id."/editsubmit"}}' enctype="multipart/form-data" method="POST">
                            @csrf 
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('NamaLengkap') }}" autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="tanggallahir" name="tanggallahir" value="">
                                    </div>
                                    @error('tanggallahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    @push('scripts')
                                        <script>
                                            $(function() {
                                                $('input[name="tanggallahir"]').daterangepicker({
                                                    singleDatePicker: true,
                                                    showDropdowns: true,
                                                    minYear: 1901,
                                                    maxYear: parseInt(moment().format('YYYY'), 10),
                                                });
                                            });
                                        </script>
                                    @endpush
                                </div>
                                <div class="form-group">
                                    <label for="name">Tempat Lahir</label>
                                    <input type="text" class="form-control @error('TempatLahir') is-invalid @enderror" id="TempatLahir" name="TempatLahir" value="{{ old('TempatLahir') }}" autocomplete="TempatLahir" autofocus>
                                    @error('TempatLahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Nomor KTP</label>
                                    <input type="text" class="form-control @error('NomorKTP') is-invalid @enderror" id="NomorKTP" name="NomorKTP" value="{{ old('NomorKTP') }}" autocomplete="NomorKTP" autofocus>
                                    @error('NomorKTP')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Nomor HP</label>
                                    <input type="text" class="form-control @error('NomorHandphone') is-invalid @enderror" id="NomorHandphone" name="NomorHandphone" value="{{ old('NomorHandphone') }}" autocomplete="NomorHandphone" autofocus>
                                    @error('NomorHandphone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">NPWP</label>
                                    <input type="text" class="form-control @error('NPWP') is-invalid @enderror" id="NPWP" name="NPWP" value="{{ old('NPWP') }}" autocomplete="NPWP" autofocus>
                                    @error('NomorHandphone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-kesmavet float-right">Simpan</button>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection