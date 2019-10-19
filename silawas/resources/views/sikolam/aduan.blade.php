@extends('layouts.app')

@section('title', 'Aduan Masyarakat')
@section('Aduan', 'active')

@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Aduan Masyarakat</h1>
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
                            <table id="aduan-datatable" class="table table-sm table-bordered table-striped">
                                <thead>
                                    <td>No</td>
                                    <td>Nama Lengkap</td>
                                    <td>Kontak</td>
                                    <td>Alamat</td>
                                    <td>Kategori</td>
                                    <td>Deskripsi Aduan</td>
                                    <td>Tanggal</td>
                                    <td>Operasi</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Feby Tri Saputra</td>
                                        <td>08123456789</td>
                                        <td>Bogor</td>
                                        <td>Kategori 1</td>
                                        <td>
                                            {{ substr("
                                                Lorem ipsum dolor sit amet, consectetur adidas adipiscing elit, sed do eiusmod tempor 
                                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
                                                irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                                                deserunt mollit anim id est laborum.
                                            ", 0, 150)."..." }}
                                        </td>
                                        <td>18 Oktober 2019</td>
                                        <td class="text-center text-nowrap">
                                            <a href="/kolam/aduan/detail">
                                                <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Aduan">
                                                    <small><i class="fas fa-eye"></i></small>
                                                </button>
                                            </a>
                                            <a href="#" onclick="return confirm('Apakah Anda yakin ingin menghapus aduan ini?')">
                                                <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus Aduan">
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
                                        $('#aduan-datatable').DataTable({
                                            "paging": true,
                                            "lengthChange": true,
                                            "searching": true,
                                            "ordering": true,
                                            "info": true,
                                            "autoWidth": false,
                                            "language": {
                                                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json"
                                            }
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