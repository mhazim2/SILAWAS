@extends('layouts.app')

@section('title', 'Daftar Unit Usaha')
@section('Daftar Unit Usaha', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Daftar Unit Usaha</h1>
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
                            <table id="unit-usaha-datatable" class="table table-sm table-bordered table-striped">
                                <thead>
                                    <td>No</td>
                                    <td>Nama Unit Usaha</td>
                                    <td>Alamat Unit Usaha</td>
                                    <td>Email</td>
                                    <td>Pemilik</td>
                                    <td>Tahun Operasional</td>
                                    <td>Operasi</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Supefarm</td>
                                        <td>Bogor</td>
                                        <td>cs@superfarm.com</td>
                                        <td>Feby</td>
                                        <td>2019</td>
                                        <td class="text-center">
                                            <a href="/unit-usaha/detail/1">
                                                <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Unit Usaha">
                                                    <small><i class="fas fa-eye"></i></small>
                                                </button>
                                            </a>
                                            <a href="/unit-usaha/hapus/1" onclick="return confirm('Apakah Anda yakin ingin menghapus unit usaha ini?')">
                                                <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus Petugas">
                                                    <small><i class="fas fa-trash"></i></small>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Megalodon</td>
                                        <td>Bandung</td>
                                        <td>wira@megalodon.com</td>
                                        <td>wiradani</td>
                                        <td>2019</td>
                                        <td class="text-center">
                                            <a href="/unit-usaha/detail/2">
                                                <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Unit Usaha">
                                                    <small><i class="fas fa-eye"></i></small>
                                                </button>
                                            </a>
                                            <a href="/unit-usaha/hapus/2" onclick="return confirm('Apakah Anda yakin ingin menghapus unit usaha ini?')">
                                                <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus Petugas">
                                                    <small><i class="fas fa-trash"></i></small>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>Antinite</td>
                                        <td>Jakarta</td>
                                        <td>wawan@antinite.com</td>
                                        <td>Wawan</td>
                                        <td>2019</td>
                                        <td class="text-center">
                                            <a href="/unit-usaha/detail/3">
                                                <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Unit Usaha">
                                                    <small><i class="fas fa-eye"></i></small>
                                                </button>
                                            </a>
                                            <a href="/unit-usaha/hapus/3" onclick="return confirm('Apakah Anda yakin ingin menghapus unit usaha ini?')">
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
                                        $('#unit-usaha-datatable').DataTable({
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