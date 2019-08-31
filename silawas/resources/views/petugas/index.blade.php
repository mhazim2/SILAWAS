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
                                    <!-- <td>TMT</td> -->
                                    <td>Nama Petugas</td>
                                    <td>No. SK</td>
                                    <!-- <td>NIP</td> -->
                                    <td>Wilayah Kerja</td>
                                    <td>Kota/Kabupaten</td>
                                    <td>Status</td>
                                    <td>No. Telepon</td>
                                    <td>Operasi</td>
                                </thead>
                                <tbody>
                                    @foreach ($listpetugas as $key => $petugas)
                                        <tr>
                                            <td class="text-center">{{ ++$key }}</td>
                                            <!-- <td>{{ date('d F Y', strtotime($petugas->TMT)) }}</td> -->
                                            <td>{{ $petugas->NamaLengkap }}</td>
                                            <td>{{ $petugas->NoSK }}</td>
                                            <!-- <td>{{ $petugas->PNS_idPegawai }}</td> -->
                                            <td>{{ $petugas->Nama }}</td>
                                            <td>{{ $petugas->RegencyCityNameID }}</td>
                                            @if ($petugas->isActive)
                                                <td class="text-center"><span class="btn btn-sm btn-primary">Aktif</span></td>
                                            @else
                                                <td class="text-center"><span class="btn btn-sm btn-danger">Nonaktif</span></td>
                                            @endif
                                            <td>{{ $petugas->NomorHandphone }}</td>
                                            <td class="text-center">
                                                <a href="/petugas/detail/{{ $petugas->idPengawasKesmavet }}">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Petugas">
                                                        <small><i class="fas fa-eye"></i></small>
                                                    </button>
                                                </a>
                                                <a href="/petugas/hapus/{{ $petugas->idPengawasKesmavet }}" onclick="return confirm('Apakah Anda yakin ingin menghapus petugas ini?')">
                                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus Petugas">
                                                        <small><i class="fas fa-trash"></i></small>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
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