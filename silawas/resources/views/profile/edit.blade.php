@extends('layouts.app')

@section('title', 'Edit Profile')
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
            <div class="row">
                <!-- Edit Profil -->
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Data Pribadi</h3>
                        </div>
                        <form action='{{"/silawas/profile/".$user->id."/update"}}' enctype="multipart/form-data" method="POST">
                            @csrf 
                            <div class="card-body">
                                <div class="form-group mb-5">
                                    <label for="NamaLengkap">Nama Lengkap</label>
                                    @foreach ($orang as $orang) 
                                        <input type="text" class="form-control @error('NamaLengkap') is-invalid @enderror" id="NamaLengkap" name="NamaLengkap" value="{{ $orang->NamaLengkap }}">
                                    @endforeach
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}" disabled>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="TempatLahir">Tempat Lahir</label>
                                    <input type="text" class="form-control @error('TempatLahir') is-invalid @enderror" id="TempatLahir" name="TempatLahir" value="{{ $orang->TempatLahir }}">
                                    @error('TempatLahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label>Tanggal Lahir</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="TanggalLahir" name="TanggalLahir" value="">
                                    </div>
                                    @error('TanggalLahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    @push('scripts')
                                        <script>
                                            $(function() {
                                                var date = new Date("{{ date('m/d/Y', strtotime($orang->TanggalLahir)) }}");
                                                $('#TanggalLahir').val(fancy_date(date));
                                                function addZero(i) {
                                                    if (i < 10) { i = "0" + i };
                                                    return i;
                                                }
                                                function fancy_date(dateObj) {
                                                    return addZero(dateObj.getMonth()+1) + 
                                                    '/' + addZero(dateObj.getDate()) + 
                                                    '/' + dateObj.getFullYear();
                                                }
                                                $('input[name="TanggalLahir"]').daterangepicker({
                                                    singleDatePicker: true,
                                                    showDropdowns: true,
                                                    minYear: 1901,
                                                    maxYear: parseInt(moment().format('YYYY'), 10),
                                                });
                                            });
                                        </script>
                                    @endpush
                                </div>
                                <div class="form-group mb-5">
                                    <label for="NomorHandphone">Nomor HP</label>
                                    <input type="text" class="form-control @error('NomorHandphone') is-invalid @enderror" id="NomorHandphone" name="NomorHandphone" value="{{ $orang->NomorHandphone }}">
                                    @error('NomorHandphone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="NomorKTP">Nomor KTP</label>
                                    <input type="text" class="form-control @error('NomorKTP') is-invalid @enderror" id="NomorKTP" name="NomorKTP" value="{{ $orang->NomorKTP }}">
                                    @error('NomorKTP')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="NPWP">NPWP</label>
                                    <input type="text" class="form-control @error('NPWP') is-invalid @enderror" id="NPWP" name="NPWP" value="{{ $orang->NPWP }}">
                                    @error('NomorHandphone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-kesmavet float-right mb-5">Simpan</button>
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