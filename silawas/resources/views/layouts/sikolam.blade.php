<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>
        KOLAM | KESMAVET
    </title>

    <!-- Assets -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="bg-sikolam-body">
    <nav class="navbar navbar-dark bg-kesmavet">
        <div class="container">
            <a class="navbar-brand" href="{{ route('sikolam.show') }}">
                <img src="{{ asset('img/backkesmavet3.png') }}" width="30" height="30" class="d-inline-block align-top" alt="logo kesmavet">
                <b>KOLAM</b>
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('sikolam.login') }}">
                        <button type="button" class="btn btn-sm btn-warning">
                            <b>Login</b>
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-kesmavet py-2">
        <div class="container text-center">
            Copyright 2019. Direktorat Kesehatan Masyarakat Veteriner. Hak cipta dilindungi Undang-Undang. 
        </div>
    </footer>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>$.widget.bridge('uibutton', $.ui.button)</script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <script>
        $(function () { 
            $('.select2').select2(); 
            $('[data-toggle="tooltip"]').tooltip() 
        });
    </script>
    @include('sweetalert::alert')
    @stack('scripts')
</body>
</html>
