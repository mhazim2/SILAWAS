@extends('layouts.auth')

@section('title', 'Reset Password')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Reset</b> Password</a>
    </div>
    
    <div class="card">
        <div class="card-body login-card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <p class="login-box-msg">Silahkan masukkan email Anda</p>

            <form class="mb-4" action="{{ route('password.email') }}" method="POST">
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
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-kesmavet btn-flat">Kirim link reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
