@extends('layouts.app')

@section('title', 'Daftar Formulir')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Daftar Formulir</h1>
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
                            <table id="formulir-datatable" class="table table-sm table-bordered table-striped">
                                <thead>
                                    <td>No</td>
                                    <td>Jenis Form</td>
                                    <td>Nama Unit Usaha</td>
                                    <td>Pemilik Unit Usaha</td>
                                    <td>Tahun Operasional</td>
                                    <td>Tanggal Dibuat</td>
                                    <td>Action</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Form 9</td>
                                        <td>CV Jaya Abadi</td>
                                        <td>Super Farm</td>
                                        <td>2019</td>
                                        <td>17 Agustus 2019</td>
                                        <td class="text-center">
                                            <a href="/pengajuan/detail/1">
                                                <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                    <small><i class="fas fa-eye"></i></small>
                                                </button>
                                            </a>
                                            <a href="/pengajuan/hapus/1" onclick="return confirm('Apakah Anda yakin ingin menghapus pengajuan ini?')">
                                                <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus Formulir">
                                                    <small><i class="fas fa-trash"></i></small>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Form 10</td>
                                        <td>PT Tani Nasional</td>
                                        <td>Countryside Farm</td>
                                        <td>2019</td>
                                        <td>23 Agustus 2019</td>
                                        <td class="text-center">
                                            <a href="/pengajuan/detail/2">
                                                <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                    <small><i class="fas fa-eye"></i></small>
                                                </button>
                                            </a>
                                            <a href="/pengajuan/hapus/2" onclick="return confirm('Apakah Anda yakin ingin menghapus pengajuan ini?')">
                                                <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus Formulir">
                                                    <small><i class="fas fa-trash"></i></small>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>Form 11</td>
                                        <td>Vero Tani tbk</td>
                                        <td>Private Farm</td>
                                        <td>2019</td>
                                        <td>20 Agustus 2019</td>
                                        <td class="text-center">
                                            <a href="/pengajuan/detail/3">
                                                <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                    <small><i class="fas fa-eye"></i></small>
                                                </button>
                                            </a>
                                            <a href="/pengajuan/hapus/3" onclick="return confirm('Apakah Anda yakin ingin menghapus pengajuan ini?')">
                                                <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus Formulir">
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
                                        $('#formulir-datatable').DataTable({
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