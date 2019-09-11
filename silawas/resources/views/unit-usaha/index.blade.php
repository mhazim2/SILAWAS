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
                                    <td class="align-middle">No</td>
                                    <td class="align-middle">Nama Unit Usaha</td>
                                    <td class="align-middle">Alamat</td>
                                    <td class="align-middle">Email</td>
                                    <td class="align-middle">Tahun Operasional</td>
                                    <td class="align-middle">Penanggung Jawab Teknis</td>
                                    <td class="align-middle">Operasi</td>
                                </thead>
                                <tbody>
                                    @foreach ($listunitusaha as $key=>$unitusaha)
                                        <tr>
                                            <td class="text-center">{{ ++$key }}</td>
                                            <td>{{ $unitusaha->NamaUnitUsaha ? $unitusaha->NamaUnitUsaha : '-' }}</td>
                                            <td>{{ $unitusaha->AlamatUnitUsaha ? $unitusaha->AlamatUnitUsaha : '-' }}</td>
                                            <td>{{ $unitusaha->Email ? $unitusaha->Email : '-' }}</td>
                                            <td>{{ $unitusaha->TahunOperasional ? $unitusaha->TahunOperasional : '-' }}</td>
                                            <td>{{ $unitusaha->PenangungJawabTeknis ? $unitusaha->PenangungJawabTeknis : '-' }}</td>
                                            <td class="text-center text-nowrap">
                                                <a href="#" data-toggle="modal" data-target="#detailUU-{{ $key }}">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Unit Usaha">
                                                        <small><i class="fas fa-eye"></i></small>
                                                    </button>
                                                </a>
                                                <div class="modal fade" id="detailUU-{{ $key }}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Detail Unit Usaha</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="detail-uu text-left text-wrap">
                                                                    <tr>
                                                                        <td>Nama Unit Usaha</td><td>:</td>
                                                                        <td>{{ $unitusaha->NamaUnitUsaha ? $unitusaha->NamaUnitUsaha : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Alamat</td><td>:</td>
                                                                        <td>{{ $unitusaha->AlamatUnitUsaha ? $unitusaha->AlamatUnitUsaha : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Titik Koordinat Lokasi</td><td>:</td>
                                                                        <td>{{ $unitusaha->koordinat ? $unitusaha->koordinat : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>No. Telp / Fax / Email</td><td>:</td>
                                                                        <td>
                                                                            {{ $unitusaha->telpUU ? $unitusaha->telpUU : '-' }} /
                                                                            {{ $unitusaha->faxUU ? $unitusaha->faxUU : '-' }} /
                                                                            {{ $unitusaha->emailUU ? $unitusaha->emailUU : '-' }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tahun Berdiri, Tahun Operasional</td><td>:</td>
                                                                        <td>
                                                                            {{ $unitusaha->TahunBerdiri  ? $unitusaha->TahunBerdiri  : '-' }},
                                                                            {{ $unitusaha->TahunOperasional  ? $unitusaha->TahunOperasional  : '-' }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Status Kepemilikan</td><td>:</td>
                                                                        <td>{{ $unitusaha->StatusKepemilikan   ? $unitusaha->StatusKepemilikan   : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Nama Pemilik Usaha / Nama Kantor Pusat</td><td>:</td>
                                                                        <td>{{ $unitusaha->namaPemilikUsaha ? $unitusaha->namaPemilikUsaha : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Alamat Kantor Pusat</td><td>:</td>
                                                                        <td>{{ $unitusaha->AlamatKantorPusat ? $unitusaha->AlamatKantorPusat : '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>No. Telp / Fax / Email Kantor Pusat</td><td>:</td>
                                                                        <td>
                                                                            {{ $unitusaha->Telepon ? $unitusaha->Telepon : '-' }} /
                                                                            {{ $unitusaha->Fax ? $unitusaha->Fax : '-' }} /
                                                                            {{ $unitusaha->Email ? $unitusaha->Email : '-' }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Penanggung Jawab Unit Usaha (No. Telp)</td><td>:</td>
                                                                        <td>
                                                                            {{ $unitusaha->pjUnitUsaha ? $unitusaha->pjUnitUsaha : '-' }} 
                                                                            ({{ $unitusaha->pjUnitUsahaKontak ? $unitusaha->pjUnitUsahaKontak : '-' }})
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Penanggung Jawab Teknis (No. Telp)</td><td>:</td>
                                                                        <td>
                                                                            {{ $unitusaha->PenangungJawabTeknis ? $unitusaha->PenangungJawabTeknis : '-' }} 
                                                                            ({{ $unitusaha->KontakPJ ? $unitusaha->KontakPJ : '-' }})
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Penanggung Jawab Produksi (No. Telp)</td><td>:</td>
                                                                        <td>
                                                                            {{ $unitusaha->pjProduksi ? $unitusaha->pjProduksi : '-' }} 
                                                                            ({{ $unitusaha->pjProduksiKontak ? $unitusaha->pjProduksiKontak : '-' }})
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Penanggung Jawab Mutu (No. Telp)</td><td>:</td>
                                                                        <td>
                                                                            {{ $unitusaha->pjMutu ? $unitusaha->pjMutu : '-' }} 
                                                                            ({{ $unitusaha->pjMutuKontak ? $unitusaha->pjMutuKontak : '-' }})
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Penanggung Jawab Higiene (No. Telp)</td><td>:</td>
                                                                        <td>
                                                                            {{ $unitusaha->pjHigiene ? $unitusaha->pjHigiene : '-' }} 
                                                                            ({{ $unitusaha->pjHigieneKontak ? $unitusaha->pjHigieneKontak : '-' }})
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" data-toggle="modal" data-target="#editUU-{{ $key }}">
                                                    <button type="button" class="btn btn-sm btn-outline-warning" title="Edit Unit Usaha">
                                                        <small><i class="fas fa-pencil-alt"></i></small>
                                                    </button>
                                                </a>
                                                <div class="modal fade" id="editUU-{{ $key }}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <form class="mb-3" action="/unit-usaha/update/{{ $unitusaha->id }}" enctype="multipart/form-data" method="POST">
                                                                @csrf
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit Unit Usaha</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body text-left">
                                                                    <div class="form-group mb-5">
                                                                        <label for="NamaUnitUsaha">Nama Unit Usaha</label>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <input type="text" 
                                                                                    class="form-control @error('NamaUnitUsaha') is-invalid @enderror" 
                                                                                    id="NamaUnitUsaha" 
                                                                                    name="NamaUnitUsaha" 
                                                                                    value="{{ $unitusaha->NamaUnitUsaha }}" autofocus>
                                                                                @error('NamaUnitUsaha')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label for="koordinat">Titik Koordinat Lokasi</label>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <input type="text" 
                                                                                        class="form-control @error('koordinat') is-invalid @enderror" 
                                                                                        id="koordinat" 
                                                                                        name="koordinat" 
                                                                                        value="{{ $unitusaha->koordinat }}">
                                                                                @error('koordinat')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                                <small class="form-text text-muted"><b>Contoh:</b> -6.2XXXXX; 106.82XXXX</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label>Kontak Unit Usaha</label>
                                                                        <div class="bg-kesmavet p-2 mt-2 mb-4">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="AlamatUnitUsaha">Alamat</label>
                                                                                        <textarea class="form-control @error('AlamatUnitUsaha') is-invalid @enderror" 
                                                                                                rows="3" 
                                                                                                id="AlamatUnitUsaha" 
                                                                                                name="AlamatUnitUsaha">{{ $unitusaha->AlamatUnitUsaha }}</textarea>
                                                                                        @error('AlamatUnitUsaha')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="telpUU">No. Telp</label>
                                                                                        <input type="text" 
                                                                                            class="form-control @error('telpUU') is-invalid @enderror" 
                                                                                            id="telpUU" 
                                                                                            name="telpUU" 
                                                                                            value="{{ $unitusaha->telpUU }}">
                                                                                        @error('telpUU')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="faxUU">Fax</label>
                                                                                        <input type="text" 
                                                                                            class="form-control @error('faxUU') is-invalid @enderror" 
                                                                                            id="faxUU" 
                                                                                            name="faxUU" 
                                                                                            value="{{ $unitusaha->faxUU }}">
                                                                                        @error('faxUU')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="emailUU">Email</label>
                                                                                        <input type="text" 
                                                                                            class="form-control @error('emailUU') is-invalid @enderror" 
                                                                                            id="emailUU" 
                                                                                            name="emailUU" 
                                                                                            value="{{ $unitusaha->emailUU }}">
                                                                                        @error('emailUU')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label for="TahunBerdiri">Tahun Berdiri</label>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <input type="text" 
                                                                                        class="form-control @error('TahunBerdiri') is-invalid @enderror" 
                                                                                        id="TahunBerdiri" 
                                                                                        name="TahunBerdiri" 
                                                                                        value="{{ $unitusaha->TahunBerdiri }}">
                                                                                @error('TahunBerdiri')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label for="TahunOperasional">Tahun Operasional</label>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <input type="text" 
                                                                                    class="form-control @error('TahunOperasional') is-invalid @enderror" 
                                                                                    id="TahunOperasional" 
                                                                                    name="TahunOperasional" 
                                                                                    value="{{ $unitusaha->TahunOperasional }}">
                                                                                @error('TahunOperasional')
                                                                                    <span class="invalid-feedback" role="alert">
                                                                                        <strong>{{ $message }}</strong>
                                                                                    </span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label for="StatusKepemilikan">Status Kepemilikan</label>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <select class="form-control select2" id="StatusKepemilikan" name="StatusKepemilikan">
                                                                                    <option disabled>-- Pilih --</option>
                                                                                    <option value="Pemerintah" {{ $unitusaha->StatusKepemilikan == 'Pemerintah' ? 'selected' : ''}}>Pemerintah</option>
                                                                                    <option value="Sewa" {{ $unitusaha->StatusKepemilikan == 'Sewa' ? 'selected' : ''}}>Sewa</option>
                                                                                    <option value="Milik Sendiri" {{ $unitusaha->StatusKepemilikan == 'Milik Sendiri' ? 'selected' : ''}}>Milik Sendiri</option>
                                                                                    <option value="Milik Grup Perusahaan" {{ $unitusaha->StatusKepemilikan == 'Milik Grup Perusahaan' ? 'selected' : ''}}>Milik Grup Perusahaan</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                            <label for="namaPemilikUsaha">Nama Pemilik Usaha/ Nama Kantor Pusat</label>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <input type="text" 
                                                                                        class="form-control @error('namaPemilikUsaha') is-invalid @enderror" 
                                                                                        id="namaPemilikUsaha" 
                                                                                        name="namaPemilikUsaha" 
                                                                                        value="{{ $unitusaha->namaPemilikUsaha }}">
                                                                                    @error('namaPemilikUsaha')
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $message }}</strong>
                                                                                        </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <div class="form-group mb-5">
                                                                        <label>Kontak Kantor Pusat</label>
                                                                        <div class="bg-kesmavet p-2 mt-2 mb-4">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label for="AlamatKantorPusat">Alamat</label>
                                                                                        <textarea class="form-control @error('AlamatKantorPusat') is-invalid @enderror" 
                                                                                                rows="3" 
                                                                                                id="AlamatKantorPusat" 
                                                                                                name="AlamatKantorPusat">{{ $unitusaha->AlamatKantorPusat }}</textarea>
                                                                                        @error('AlamatKantorPusat')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="Telepon">No. Telp</label>
                                                                                        <input type="text" 
                                                                                            class="form-control @error('Telepon') is-invalid @enderror" 
                                                                                            id="Telepon" 
                                                                                            name="Telepon" 
                                                                                            value="{{ $unitusaha->Telepon }}">
                                                                                        @error('Telepon')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="Fax">Fax</label>
                                                                                        <input type="text" 
                                                                                            class="form-control @error('Fax') is-invalid @enderror" 
                                                                                            id="Fax" 
                                                                                            name="Fax" 
                                                                                            value="{{ $unitusaha->Fax }}">
                                                                                        @error('Fax')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="Email">Email</label>
                                                                                        <input type="text" 
                                                                                            class="form-control @error('Email') is-invalid @enderror" 
                                                                                            id="Email" 
                                                                                            name="Email" 
                                                                                            value="{{ $unitusaha->Email }}">
                                                                                        @error('Email')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label>Penanggung Jawab Unit Usaha</label>
                                                                        <div class="bg-kesmavet p-2 mt-2 mb-4">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="pjUnitUsaha">Nama</label>
                                                                                        <input type="text" 
                                                                                                class="form-control @error('pjUnitUsaha') is-invalid @enderror" 
                                                                                                id="pjUnitUsaha" 
                                                                                                name="pjUnitUsaha" 
                                                                                                value="{{ $unitusaha->pjUnitUsaha }}">
                                                                                        @error('pjUnitUsaha')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="pjUnitUsahaKontak">No. Telp</label>
                                                                                        <input type="text" 
                                                                                                class="form-control @error('pjUnitUsahaKontak') is-invalid @enderror" 
                                                                                                id="pjUnitUsahaKontak" 
                                                                                                name="pjUnitUsahaKontak" 
                                                                                                value="{{ $unitusaha->pjUnitUsahaKontak }}">
                                                                                        @error('pjUnitUsahaKontak')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label>Penangung Jawab Teknis</label>
                                                                        <div class="bg-kesmavet p-2 mt-2 mb-4">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="PenangungJawabTeknis">Nama</label>
                                                                                        <input type="text" 
                                                                                            class="form-control @error('PenangungJawabTeknis') is-invalid @enderror" 
                                                                                            id="PenangungJawabTeknis" 
                                                                                            name="PenangungJawabTeknis" 
                                                                                            value="{{ $unitusaha->PenangungJawabTeknis }}">
                                                                                        @error('PenangungJawabTeknis')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="KontakPJ">No. Telp</label>
                                                                                        <input type="text" 
                                                                                            class="form-control @error('KontakPJ') is-invalid @enderror" 
                                                                                            id="KontakPJ" 
                                                                                            name="KontakPJ" 
                                                                                            value="{{ $unitusaha->KontakPJ }}">
                                                                                        @error('KontakPJ')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label>Penanggung Jawab Produksi</label>
                                                                        <div class="bg-kesmavet p-2 mt-2 mb-4">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="pjProduksi">Nama</label>
                                                                                        <input type="text" 
                                                                                                class="form-control @error('pjProduksi') is-invalid @enderror" 
                                                                                                id="pjProduksi" 
                                                                                                name="pjProduksi" 
                                                                                                value="{{ $unitusaha->pjProduksi }}">
                                                                                        @error('pjProduksi')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="pjProduksiKontak">No. Telp</label>
                                                                                        <input type="text" 
                                                                                                class="form-control @error('pjProduksiKontak') is-invalid @enderror" 
                                                                                                id="pjProduksiKontak" 
                                                                                                name="pjProduksiKontak" 
                                                                                                value="{{ $unitusaha->pjProduksiKontak }}">
                                                                                        @error('pjProduksiKontak')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label>Penanggung Jawab Mutu</label>
                                                                        <div class="bg-kesmavet p-2 mt-2 mb-4">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="pjMutu">Nama</label>
                                                                                        <input type="text" 
                                                                                                class="form-control @error('pjMutu') is-invalid @enderror" 
                                                                                                id="pjMutu" 
                                                                                                name="pjMutu" 
                                                                                                value="{{ $unitusaha->pjMutu }}">
                                                                                        @error('pjMutu')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="pjMutuKontak">No. Telp</label>
                                                                                        <input type="text" 
                                                                                                class="form-control @error('pjMutuKontak') is-invalid @enderror" 
                                                                                                id="pjMutuKontak" 
                                                                                                name="pjMutuKontak" 
                                                                                                value="{{ $unitusaha->pjMutuKontak }}">
                                                                                        @error('pjMutuKontak')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label>Penanggung Jawab Higiene Sanitasi</label>
                                                                        <div class="bg-kesmavet p-2 mt-2 mb-4">
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="pjHigiene">Nama</label>
                                                                                        <input type="text" 
                                                                                                class="form-control @error('pjHigiene') is-invalid @enderror" 
                                                                                                id="pjHigiene" 
                                                                                                name="pjHigiene" 
                                                                                                value="{{ $unitusaha->pjHigiene }}">
                                                                                        @error('pjHigiene')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="pjHigieneKontak">No. Telp</label>
                                                                                        <input type="text" 
                                                                                                class="form-control @error('pjHigieneKontak') is-invalid @enderror" 
                                                                                                id="pjHigieneKontak" 
                                                                                                name="pjHigieneKontak" 
                                                                                                value="{{ $unitusaha->pjHigieneKontak }}">
                                                                                        @error('pjHigieneKontak')
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $message }}</strong>
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-kesmavet">Simpan Perubahan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="/unit-usaha/delete/{{ $unitusaha->id }}" onclick="return confirm('Apakah Anda yakin ingin menghapus unit usaha ini?')">
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