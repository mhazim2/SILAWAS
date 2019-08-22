@extends('layouts.auth')

@section('title', 'Login')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="#">Login <b>Silawas</b></a>
    </div>
    
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Silahkan masuk untuk melanjutkan</p>

            <form class="mb-4" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
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
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-wisteria">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-kesmavet btn-block btn-flat">Login</button>
                    </div>
                </div>
            </form>

            <p class="mb-0">
                <a href="{{ route('password.request') }}">Lupa password?</a>
            </p>
            <p class="mb-0">
                <a href="{{ route('register') }}">Belum punya akun?</a>
            </p>
        </div>
    </div>
</div>
@endsection
