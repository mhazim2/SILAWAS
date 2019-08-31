@extends('layouts.app')

@section('title', 'Daftar Petugas')
@section('Daftar Petugas', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Daftar Petugas</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="petugas-datatable" class="table table-sm table-bordered table-striped">
                                <thead>
                                    <td>No</td>
                                    <td>Foto</td>
                                    <td>Nama Petugas</td>
                                    <td>Email</td>
                                    <td>Nomor Telepon</td>
                                    <td>Operasi</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center"><img src="{{ asset('dist/img/user.png') }}" height="50" alt="Example Image"></td>
                                        <td>Feby</td>
                                        <td>feby@gmail.com</td>
                                        <td>0819876543</td>
                                        <td class="text-center">
                                            <a href="/petugas/detail/1">
                                                <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Petugas">
                                                    <small><i class="fas fa-eye"></i></small>
                                                </button>
                                            </a>
                                            <a href="/petugas/hapus/1" onclick="return confirm('Apakah Anda yakin ingin menghapus petugas ini?')">
                                                <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus Petugas">
                                                    <small><i class="fas fa-trash"></i></small>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center"><img src="{{ asset('dist/img/user.png') }}" height="50" alt="Example Image"></td>
                                        <td>Wiradani</td>
                                        <td>wira@superfarm.com</td>
                                        <td>08123456789</td>
                                        <td class="text-center">
                                            <a href="/petugas/detail/2">
                                                <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Petugas">
                                                    <small><i class="fas fa-eye"></i></small>
                                                </button>
                                            </a>
                                            <a href="/petugas/hapus/2" onclick="return confirm('Apakah Anda yakin ingin menghapus petugas ini?')">
                                                <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus Petugas">
                                                    <small><i class="fas fa-trash"></i></small>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center"><img src="{{ asset('dist/img/user.png') }}" height="50" alt="Example Image"></td>
                                        <td>Wawan</td>
                                        <td>wawan@apps.ipb.ac.id</td>
                                        <td>08183126190</td>
                                        <td class="text-center">
                                            <a href="/petugas/detail/3">
                                                <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Petugas">
                                                    <small><i class="fas fa-eye"></i></small>
                                                </button>
                                            </a>
                                            <a href="/petugas/hapus/3" onclick="return confirm('Apakah Anda yakin ingin menghapus petugas ini?')">
                                                <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus Petugas">
                                                    <small><i class="fas fa-trash"></i></small>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            @push('scripts')
                                <script>
                                    $(function () {
                                        $('#petugas-datatable').DataTable({
                                            "paging": true,
                                            "lengthChange": true,
                                            "searching": true,
                                            "ordering": true,
                                            "info": true,
                                            "autoWidth": false,
                                        });
                                    });
                                </script>
                            @endpush
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection