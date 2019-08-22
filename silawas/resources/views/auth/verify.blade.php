@extends('layouts.auth')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Verifikasi</b> Email</a>
    </div>
    
    <div class="card">
        <div class="card-body login-card-body">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    Link verifikasi baru telah dikirim ke email Anda
                </div>
            @endif

            <div class="text-center">
                Silahkan cek email Anda untuk link verifikasi.<br>
                Jika Anda tidak menerima email,<br>
                <a class="btn btn-kesmavet btn-block btn-flat mt-4" href="{{ route('verification.resend') }}">klik disini untuk mengirim ulang</a>
            </div>
        </div>
    </div>
</div>
@endsection
