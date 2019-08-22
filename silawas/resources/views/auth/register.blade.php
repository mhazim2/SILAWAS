@extends('layouts.auth')

@section('title', 'Register')
@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="#">Register <b>Silawas</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Pendaftaran akun baru</p>
            <form class="mb-3" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 order-md-2">
                        <div class="input-group mb-3">
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Username" required autocomplete="username">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Ulangi password" required autocomplete="new-password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 order-md-1">
                        <div class="input-group mb-3">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama lengkap" required autocomplete="name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" placeholder="Tempat Lahir" required autocomplete="tempat_lahir">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-map-marker-alt"></span>
                                </div>
                            </div>
                            @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            @push('scripts')
                                <script>
                                    $(function() {
                                        $('input[name="tanggal_lahir"]').daterangepicker({
                                            singleDatePicker: true,
                                            showDropdowns: true,
                                            minYear: 1901,
                                            maxYear: parseInt(moment().format('YYYY'), 10),
                                        });
                                    });
                                </script>
                            @endpush
                        </div>
                        <div class="input-group mb-3">
                            <input id="tanggal_lahir" type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" placeholder="Tanggal Lahir" required autocomplete="tanggal_lahir">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-calendar-alt"></span>
                                </div>
                            </div>
                            @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" placeholder="Nomor HP" required autocomplete="no_hp">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-mobile-alt"></span>
                                </div>
                            </div>
                            @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="no_ktp" type="text" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" placeholder="Nomor KTP" required autocomplete="no_ktp">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-id-card"></span>
                                </div>
                            </div>
                            @error('no_ktp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="npwp" type="text" class="form-control @error('npwp') is-invalid @enderror" name="npwp" placeholder="NPWP" required autocomplete="npwp">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-id-card-alt"></span>
                                </div>
                            </div>
                            @error('npwp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <div class="icheck-wisteria">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                Saya menyetujui <a href="#">persyaratan</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <button type="submit" class="btn btn-kesmavet btn-kesmavet-block">Daftar</button>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>

            <a href="{{ route('login') }}">Sudah punya akun?</a>
        </div>
    </div>
</div>
@endsection
