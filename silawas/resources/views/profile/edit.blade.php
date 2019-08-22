@extends('layouts.app')

@section('title', 'Edit Profile')
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
                        <li class="breadcrumb-item">Profile</li>
                        <li class="breadcrumb-item active">Edit Profile</li>
                    </ol>
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
                        <form action="/profile" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="jk_1" type="radio" name="jeniskelamin" checked>
                                            <label class="font-weight-normal" for="jk_1">Laki-laki</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="jk_2" type="radio" name="jeniskelamin">
                                            <label class="font-weight-normal" for="jk_2">Perempuan</label>
                                        </div>
                                    </div>
                                    @error('jeniskelamin')
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
                                    <label for="website">Website</label>
                                    <input type="text" class="form-control @error('website') is-invalid @enderror" id="website" name="website" value="{{ old('website') }}" autocomplete="website">
                                    @error('website')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="lainnya">Informasi Lainnya</label>
                                    <textarea class="form-control @error('lainnya') is-invalid @enderror" rows="3" id="lainnya" name="lainnya">{{ old('lainnya') }}</textarea>
                                    @error('lainnya')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Unggah Foto</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="user_img" name="user_img">
                                            <label class="custom-file-label" for="user_img">Choose file</label>
                                        </div>
                                    </div>
                                    @error('user_img')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
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