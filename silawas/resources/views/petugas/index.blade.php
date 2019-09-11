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
                                    <td>Nama Petugas</td>
                                    <td>NIP</td>
                                    <td>Nomor Registrasi</td>
                                    <td>Jabatan</td>
                                    <td>Unit Kerja</td>
                                    <td>Alamat Kantor</td>
                                    <td>No. Telp</td>
                                    <td>Email</td>
                                    <td>Operasi</td>
                                </thead>
                                <tbody>
                                    @foreach ($listpetugas as $key=>$petugas)
                                        <tr>
                                            <td class="text-center">{{ ++$key }}</td>
                                            <td>{{ $petugas->NamaLengkap ? $petugas->NamaLengkap : '-' }}</td>
                                            <td>{{ $petugas->PNS_idPegawai ? $petugas->PNS_idPegawai : '-' }}</td>
                                            <td>{{ $petugas->NoRegistrasi ? $petugas->NoRegistrasi : '-' }}</td>
                                            <td>{{ $petugas->jabatan ? $petugas->jabatan : '-' }}</td>
                                            <td>{{ $petugas->unitKerja ? $petugas->unitKerja : '-' }}</td>
                                            <td>{{ $petugas->alamatKantor ? $petugas->alamatKantor : '-' }}</td>
                                            <td>{{ $petugas->NomorHandphone ? $petugas->NomorHandphone : '-' }}</td>
                                            <td>{{ $petugas->email ? $petugas->email : '-' }}</td>
                                            <td class="text-center text-nowrap">
                                                <a href="#" data-toggle="modal" data-target="#detailPetugas-{{ $key }}">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Petugas">
                                                        <small><i class="fas fa-eye"></i></small>
                                                    </button>
                                                </a>
                                                <div class="modal fade" id="detailPetugas-{{ $key }}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Detail Unit Usaha</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="detail-petugas text-left text-wrap">
                                                                    <tr>
                                                                        <td>Nama Petugas</td><td>:</td>
                                                                        <td>{{ $petugas->NamaLengkap ? $petugas->NamaLengkap : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Nomor SK</td><td>:</td>
                                                                        <td>{{ $petugas->NoSK ? $petugas->NoSK : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>NIP</td><td>:</td>
                                                                        <td>{{ $petugas->PNS_idPegawai ? $petugas->PNS_idPegawai : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Nomor Registrasi</td><td>:</td>
                                                                        <td>{{ $petugas->NoRegistrasi ? $petugas->NoRegistrasi : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Jabatan</td><td>:</td>
                                                                        <td>{{ $petugas->jabatan ? $petugas->jabatan : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Unit Kerja</td><td>:</td>
                                                                        <td>{{ $petugas->unitKerja ? $petugas->unitKerja : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Alamat Kantor</td><td>:</td>
                                                                        <td>{{ $petugas->alamatKantor ? $petugas->alamatKantor : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>No. Telp Petugas</td><td>:</td>
                                                                        <td>{{ $petugas->NomorHandphone ? $petugas->NomorHandphone : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Email Petugas</td><td>:</td>
                                                                        <td>{{ $petugas->email ? $petugas->email : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Status Petugas</td><td>:</td>
                                                                        <td>{{ $petugas->isDokter ? 'Dokter Hewan' : 'Asisten' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Wilayah Kerja / Kewenangan</td><td>:</td>
                                                                        <td>{{ $petugas->Nama ? $petugas->Nama : '-' }}</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" data-toggle="modal" data-target="#editPetugas-{{ $key }}">
                                                    <button type="button" class="btn btn-sm btn-outline-warning" title="Edit Petugas">
                                                        <small><i class="fas fa-pencil-alt"></i></small>
                                                    </button>
                                                </a>
                                                <div class="modal fade" id="editPetugas-{{ $key }}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <form class="mb-3" action="/petugas/update/{{ $petugas->idPengawasKesmavet }}" enctype="multipart/form-data" method="POST">
                                                                @csrf
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit Petugas</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body text-left">
                                                                    <div class="form-group mb-5">
                                                                        <label for="NamaLengkap">Nama Petugas</label>
                                                                        <input type="text" class="form-control" id="NamaLengkap" name="NamaLengkap" value="{{ $petugas->NamaLengkap }}" disabled>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label for="NoSK">Nomor SK</label>
                                                                        <input type="text" class="form-control" id="NoSK" name="NoSK" value="{{ $petugas->NoSK }}">
                                                                        <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 0xxx/xxxx/xxxxx</small>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label for="NIP">NIP</label>
                                                                        <input type="text" class="form-control" id="NIP" name="NIP" value="{{ $petugas->PNS_idPegawai }}">
                                                                        <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 20xxxxxxxxxxx</small>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label for="NoRegistrasi">Nomor Registrasi</label>
                                                                        <input type="text" class="form-control" id="NoRegistrasi" name="NoRegistrasi" value="{{ $petugas->NoRegistrasi }}">
                                                                        <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 0xxx/xxxx/xxxxx</small>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label for="jabatan">Jabatan</label>
                                                                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $petugas->jabatan }}">
                                                                        <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: Kepala Sub Direktorat Pengawasan Keamanan Produk Hewan</small>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label for="unitKerja">Unit Kerja</label>
                                                                        <input type="text" class="form-control" id="unitKerja" name="unitKerja" value="{{ $petugas->unitKerja }}">
                                                                        <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: Kementerian Pertanian, Direktorat Jenderal Peternakan dan Kesehatan Hewan</small>
                                                                    </div>
                                                                    <div class=" form-group mb-5">
                                                                        <label for="alamatKantor">Alamat Kantor</label>
                                                                        <textarea class="form-control" rows="3" name="alamatKantor">{{ $petugas->alamatKantor }}</textarea>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label for="NomorHandphone">No. Telp Petugas</label>
                                                                        <input type="text" class="form-control" id="NomorHandphone" name="NomorHandphone" value="{{ $petugas->NomorHandphone }}" disabled>
                                                                        <small id="idinputHelp" class="form-text text-muted">Contoh Pengisian: 0xxxxxxxxx</small>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label for="email">Email Petugas</label>
                                                                        <input type="email" class="form-control" id="email" name="email" value="{{ $petugas->email }}" disabled>
                                                                    </div>
                                                                    <div class=" form-group mb-5">
                                                                        <label>Status Petugas</label>
                                                                        <div class="d-block">
                                                                            <div class="icheck-wisteria d-inline mr-3" >
                                                                                <input id="isDokter_1" type="radio" name="isDokter" value="1" {{ $petugas->isDokter ? 'checked' : '' }}>
                                                                                <label class="font-weight-normal" for="isDokter_1">Dokter Hewan</label>
                                                                            </div>
                                                                            <div class="icheck-wisteria d-inline" >
                                                                                <input id="isDokter_2" type="radio" name="isDokter" value="0" {{ $petugas->isDokter ? '' : 'checked' }}>
                                                                                <label class="font-weight-normal" for="isDokter_2">Asisten</label>
                                                                            </div>                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label for="WilayahKerja">Wilayah Kerja / Kewenangan</label>
                                                                        <select class="form-control select2" id="WilayahKerja" name="WilayahKerja">
                                                                            @foreach($listwilayahkerja as $wilayahkerja)
                                                                                <option value="{{ $wilayahkerja->idWilayahKerja }}" {{ $petugas->idWilayahKerja == $wilayahkerja->idWilayahKerja ? 'selected' : '' }}>{{ $wilayahkerja->Nama }} </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-kesmavet">Simpan Perubahan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
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