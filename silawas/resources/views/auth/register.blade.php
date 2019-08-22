@extends('layouts.auth')

@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="#">Register <b>Silawas</b></a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Daftar akun baru</p>

            <form class="mb-4" action="{{ route('register') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nama lengkap" required autocomplete="name" autofocus>
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
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="icheck-wisteria">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                Saya menyetujui <a href="#">persyaratan</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-kesmavet btn-block btn-flat">Daftar</button>
                    </div>
                </div>
            </form>

            <a href="{{ route('login') }}">Sudah punya akun?</a>
        </div>
    </div>
</div>
@endsection
