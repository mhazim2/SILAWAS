@extends('layouts.app')

@section('title', 'Daftar Pengawas')
@section('Pengawas', 'active')

@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <div class="page-title">
                        <h1 class="m-0 text-dark">Daftar Pengawas</h1>
                    </div>
                    <div class="page-tools">
                        <button class="btn btn-kesmavet" data-toggle="modal" data-target="#tambahPengawas">
                            Tambah Pengawas
                        </button>
                        <div class="modal fade" id="tambahPengawas" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Pengawas</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="#" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="namaPengawas">Nama Pengawas</label>
                                                <input type="text" class="form-control @error('namaPengawas') is-invalid @enderror" id="namaPengawas" name="namaPengawas" value="{{ old('namaPengawas') }}">
                                                @error('namaPengawas')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="instansi">Instansi</label>
                                                <input type="text" class="form-control @error('instansi') is-invalid @enderror" id="instansi" name="instansi" value="{{ old('instansi') }}">
                                                @error('instansi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class=" form-group">
                                                <label for="alamatKantor">Alamat Kantor</label>
                                                <textarea class="form-control" rows="2" name="alamatKantor"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="noHandphone">No. Telp</label>
                                                <input type="text" class="form-control @error('noHandphone') is-invalid @enderror" id="noHandphone" name="noHandphone" value="{{ old('noHandphone') }}">
                                                @error('noHandphone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class=" form-group">
                                                <label>Status</label>
                                                <div class="d-block">
                                                    <div class="icheck-wisteria d-inline mr-3" >
                                                        <input id="status_aktif" type="radio" name="status" value="1">
                                                        <label class="font-weight-normal" for="status_aktif">Aktif</label>
                                                    </div>
                                                    <div class="icheck-wisteria d-inline" >
                                                        <input id="status_nonaktif" type="radio" name="status" value="0">
                                                        <label class="font-weight-normal" for="status_nonaktif">Nonaktif</label>
                                                    </div>                                            
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-kesmavet float-right">Simpan</button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
                            <table id="pengawas-datatable" class="table table-sm table-bordered table-striped">
                                <thead>
                                    <td>No</td>
                                    <td>Nama Pengawas</td>
                                    <td>Instansi</td>
                                    <td>Alamat Kantor</td>
                                    <td>No. Telp</td>
                                    <td>Email</td>
                                    <td>Status</td>
                                    <td>Operasi</td>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Wiradani</td>
                                        <td>Kesmavet</td>
                                        <td>DKI Jakarta</td>
                                        <td>08123456789</td>
                                        <td>wiradani@kesmavet.com</td>
                                        <td class="text-center">
                                            <span class="badge badge-success">Aktif</span>
                                            <!-- <span class="badge badge-secondary">Nonaktif</span> -->
                                        </td>
                                        <td class="text-center text-nowrap">
                                            <a href="#" data-toggle="modal" data-target="#detailPengawas-1">
                                                <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Pengawas">
                                                    <small><i class="fas fa-eye"></i></small>
                                                </button>
                                            </a>
                                            <div class="modal fade" id="detailPengawas-1" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Detail Pengawas</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="detail-petugas text-left text-wrap">
                                                                <tr>
                                                                    <td>Nama Pengawas</td><td>:</td>
                                                                    <td>Wiradani</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Instansi</td><td>:</td>
                                                                    <td>Kesmavet</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Alamat Kantor</td><td>:</td>
                                                                    <td>DKI Jakarta</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>No. Telp</td><td>:</td>
                                                                    <td>08123456789</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Email</td><td>:</td>
                                                                    <td>wiradani@kesmavet.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status</td><td>:</td>
                                                                    <td>
                                                                        <span class="badge badge-success">Aktif</span>
                                                                        <!-- <span class="badge badge-secondary">Nonaktif</span> -->
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" data-toggle="modal" data-target="#editPengawas-1">
                                                <button type="button" class="btn btn-sm btn-outline-warning" title="Edit Pengawas">
                                                    <small><i class="fas fa-pencil-alt"></i></small>
                                                </button>
                                            </a>
                                            <div class="modal fade" id="editPengawas-1" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content text-left">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Pengawas</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="#" method="POST">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="namaPengawas">Nama Pengawas</label>
                                                                    <input type="text" class="form-control" id="namaPengawas" name="namaPengawas" value="Wiradani">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="instansi">Instansi</label>
                                                                    <input type="text" class="form-control" id="instansi" name="instansi" value="Kesmavet">
                                                                </div>
                                                                <div class=" form-group">
                                                                    <label for="alamatKantor">Alamat Kantor</label>
                                                                    <textarea class="form-control" rows="2" name="alamatKantor">DKI Jakarta</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="noHandphone">No. Telp</label>
                                                                    <input type="text" class="form-control" id="noHandphone" name="noHandphone" value="08123456789">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="text" class="form-control" id="email" name="email" value="wiradani@kesmavet.com">
                                                                </div>
                                                                <div class=" form-group">
                                                                    <label>Status</label>
                                                                    <div class="d-block">
                                                                        <div class="icheck-wisteria d-inline mr-3" >
                                                                            <input id="status_aktif" type="radio" name="status" value="1" checked>
                                                                            <label class="font-weight-normal" for="status_aktif">Aktif</label>
                                                                        </div>
                                                                        <div class="icheck-wisteria d-inline" >
                                                                            <input id="status_nonaktif" type="radio" name="status" value="0">
                                                                            <label class="font-weight-normal" for="status_nonaktif">Nonaktif</label>
                                                                        </div>                                            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-kesmavet float-right">Simpan</button>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" onclick="return confirm('Apakah Anda yakin ingin menghapus pengawas ini?')">
                                                <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus Pengawas">
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
                                        $('#pengawas-datatable').DataTable({
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