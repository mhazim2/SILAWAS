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
                                    <td class="align-middle">Nama Pemilik</td>
                                    <td class="align-middle">Tahun Operasional</td>
                                    <td class="align-middle">No. Telp</td>
                                    <td class="align-middle">Email</td>
                                    <td class="align-middle">Penanggung Jawab</td>
                                    <td class="align-middle">Operasi</td>
                                </thead>
                                <tbody>
                                    @foreach ($listunitusaha as $key=>$unitusaha)
                                        <tr>
                                            <td class="text-center">{{ ++$key }}</td>
                                            <td>{{ $unitusaha->NamaUnitUsaha ?: '-' }}</td>
                                            <td>{{ $unitusaha->namaPemilikUsaha ?: '-' }}</td>
                                            <td>{{ $unitusaha->TahunOperasional ?: '-' }}</td>
                                            <td>{{ $unitusaha->Telepon ?: '-' }}</td>
                                            <td>{{ $unitusaha->Email ?: '-' }}</td>
                                            <td>
                                                @if ($unitusaha->PenangungJawabTeknis)
                                                    {{ $unitusaha->PenangungJawabTeknis }}
                                                @elseif ($unitusaha->pjUnitUsaha)
                                                    {{ $unitusaha->pjUnitUsaha }}
                                                @else
                                                    -
                                                @endif
                                            </td>
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
                                                                        <td>{{ $unitusaha->NamaUnitUsaha ?: '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Alamat</td><td>:</td>
                                                                        <td>{{ $unitusaha->AlamatUnitUsaha ?: '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Titik Koordinat Lokasi</td><td>:</td>
                                                                        <td>{{ $unitusaha->koordinat ?: '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>No. Telp / Fax / Email</td><td>:</td>
                                                                        <td>
                                                                            @if ($unitusaha->telpUU && !$unitusaha->faxUU && !$unitusaha->emailUU)
                                                                                {{ $unitusaha->telpUU.' (Telp)' }}
                                                                            @elseif (!$unitusaha->telpUU && $unitusaha->faxUU && !$unitusaha->emailUU)
                                                                                {{ $unitusaha->faxUU.' (Fax)' }}
                                                                            @elseif (!$unitusaha->telpUU && !$unitusaha->faxUU && $unitusaha->emailUU)
                                                                                {{ $unitusaha->emailUU.' (Email)' }}
                                                                            @elseif ($unitusaha->telpUU || $unitusaha->faxUU || $unitusaha->emailUU)
                                                                                {!! $unitusaha->telpUU ? '<div>'.$unitusaha->Telepon.' (Telp)</div>' : '' !!}
                                                                                {!! $unitusaha->faxUU ? '<div>'.$unitusaha->faxUU.' (Fax)</div>' : '' !!}
                                                                                {!! $unitusaha->emailUU ? '<div>'.$unitusaha->emailUU.' (Email)</div>' : '' !!}
                                                                            @else
                                                                                -
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tahun Berdiri</td><td>:</td>
                                                                        <td>
                                                                            {{ $unitusaha->TahunBerdiri ?: '-' }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tahun Operasional</td><td>:</td>
                                                                        <td>
                                                                            {{ $unitusaha->TahunOperasional ?: '-' }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Status Kepemilikan</td><td>:</td>
                                                                        <td>{{ $unitusaha->StatusKepemilikan ?: '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Nama Pemilik Usaha / Nama Kantor Pusat</td><td>:</td>
                                                                        <td>{{ $unitusaha->namaPemilikUsaha ?: '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Alamat Kantor Pusat</td><td>:</td>
                                                                        <td>{{ $unitusaha->AlamatKantorPusat ?: '-' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>No. Telp / Fax / Email Kantor Pusat</td><td>:</td>
                                                                        <td>
                                                                            @if ($unitusaha->Telepon && !$unitusaha->Fax && !$unitusaha->Email)
                                                                                {{ $unitusaha->Telepon.' (Telp)' }}
                                                                            @elseif (!$unitusaha->Telepon && $unitusaha->Fax && !$unitusaha->Email)
                                                                                {{ $unitusaha->Fax.' (Fax)' }}
                                                                            @elseif (!$unitusaha->Telepon && !$unitusaha->Fax && $unitusaha->Email)
                                                                                {{ $unitusaha->Email.' (Email)' }}
                                                                            @elseif ($unitusaha->Telepon || $unitusaha->Fax || $unitusaha->Email)
                                                                                {!! $unitusaha->Telepon ? '<div>'.$unitusaha->Telepon.' (Telp)</div>' : '' !!}
                                                                                {!! $unitusaha->Fax ? '<div>'.$unitusaha->Fax.' (Fax)</div>' : '' !!}
                                                                                {!! $unitusaha->Email ? '<div>'.$unitusaha->Email.' (Email)</div>' : '' !!}
                                                                            @else
                                                                                -
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Penanggung Jawab Unit Usaha (No. Telp)</td><td>:</td>
                                                                        <td>
                                                                            @if ($unitusaha->pjUnitUsaha)
                                                                                {{ $unitusaha->pjUnitUsaha }}
                                                                                {{ $unitusaha->pjUnitUsahaKontak ? '('.$unitusaha->pjUnitUsahaKontak.')' : '' }}
                                                                            @else
                                                                                -
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Penanggung Jawab Teknis (No. Telp)</td><td>:</td>
                                                                        <td>
                                                                            @if ($unitusaha->PenangungJawabTeknis)
                                                                                {{ $unitusaha->PenangungJawabTeknis }}
                                                                                {{ $unitusaha->KontakPJ ? '('.$unitusaha->KontakPJ.')' : '' }}
                                                                            @else
                                                                                -
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Penanggung Jawab Produksi (No. Telp)</td><td>:</td>
                                                                        <td>
                                                                            @if ($unitusaha->pjProduksi)
                                                                                {{ $unitusaha->pjProduksi }}
                                                                                {{ $unitusaha->pjProduksiKontak ? '('.$unitusaha->pjProduksiKontak.')' : '' }}
                                                                            @else
                                                                                -
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Penanggung Jawab Mutu (No. Telp)</td><td>:</td>
                                                                        <td>
                                                                            @if ($unitusaha->pjMutu)
                                                                                {{ $unitusaha->pjMutu }}
                                                                                {{ $unitusaha->pjMutuKontak ? '('.$unitusaha->pjMutuKontak.')' : '' }}
                                                                            @else
                                                                                -
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Penanggung Jawab Higiene (No. Telp)</td><td>:</td>
                                                                        <td>
                                                                            @if ($unitusaha->pjHigiene)
                                                                                {{ $unitusaha->pjHigiene }}
                                                                                {{ $unitusaha->pjHigieneKontak ? '('.$unitusaha->pjHigieneKontak.')' : '' }}
                                                                            @else
                                                                                -
                                                                            @endif
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
                                                                                    class="form-control" 
                                                                                    id="NamaUnitUsaha" 
                                                                                    name="NamaUnitUsaha" 
                                                                                    value="{{ $unitusaha->NamaUnitUsaha }}" autofocus>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label for="koordinat">Titik Koordinat Lokasi</label>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <input type="text" 
                                                                                        class="form-control" 
                                                                                        id="koordinat" 
                                                                                        name="koordinat" 
                                                                                        value="{{ $unitusaha->koordinat }}">
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
                                                                                        <textarea class="form-control" 
                                                                                                rows="3" 
                                                                                                id="AlamatUnitUsaha" 
                                                                                                name="AlamatUnitUsaha">{{ $unitusaha->AlamatUnitUsaha }}</textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="telpUU">No. Telp</label>
                                                                                        <input type="text" 
                                                                                            class="form-control" 
                                                                                            id="telpUU" 
                                                                                            name="telpUU" 
                                                                                            value="{{ $unitusaha->telpUU }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="faxUU">Fax</label>
                                                                                        <input type="text" 
                                                                                            class="form-control" 
                                                                                            id="faxUU" 
                                                                                            name="faxUU" 
                                                                                            value="{{ $unitusaha->faxUU }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="emailUU">Email</label>
                                                                                        <input type="text" 
                                                                                            class="form-control" 
                                                                                            id="emailUU" 
                                                                                            name="emailUU" 
                                                                                            value="{{ $unitusaha->emailUU }}">
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
                                                                                        class="form-control" 
                                                                                        id="TahunBerdiri" 
                                                                                        name="TahunBerdiri" 
                                                                                        value="{{ $unitusaha->TahunBerdiri }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mb-5">
                                                                        <label for="TahunOperasional">Tahun Operasional</label>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <input type="text" 
                                                                                    class="form-control" 
                                                                                    id="TahunOperasional" 
                                                                                    name="TahunOperasional" 
                                                                                    value="{{ $unitusaha->TahunOperasional }}">
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
                                                                                        class="form-control" 
                                                                                        id="namaPemilikUsaha" 
                                                                                        name="namaPemilikUsaha" 
                                                                                        value="{{ $unitusaha->namaPemilikUsaha }}">
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
                                                                                        <textarea class="form-control" 
                                                                                                rows="3" 
                                                                                                id="AlamatKantorPusat" 
                                                                                                name="AlamatKantorPusat">{{ $unitusaha->AlamatKantorPusat }}</textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="Telepon">No. Telp</label>
                                                                                        <input type="text" 
                                                                                            class="form-control" 
                                                                                            id="Telepon" 
                                                                                            name="Telepon" 
                                                                                            value="{{ $unitusaha->Telepon }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="Fax">Fax</label>
                                                                                        <input type="text" 
                                                                                            class="form-control" 
                                                                                            id="Fax" 
                                                                                            name="Fax" 
                                                                                            value="{{ $unitusaha->Fax }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="Email">Email</label>
                                                                                        <input type="text" 
                                                                                            class="form-control" 
                                                                                            id="Email" 
                                                                                            name="Email" 
                                                                                            value="{{ $unitusaha->Email }}">
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
                                                                                                class="form-control" 
                                                                                                id="pjUnitUsaha" 
                                                                                                name="pjUnitUsaha" 
                                                                                                value="{{ $unitusaha->pjUnitUsaha }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="pjUnitUsahaKontak">No. Telp</label>
                                                                                        <input type="text" 
                                                                                                class="form-control" 
                                                                                                id="pjUnitUsahaKontak" 
                                                                                                name="pjUnitUsahaKontak" 
                                                                                                value="{{ $unitusaha->pjUnitUsahaKontak }}">
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
                                                                                            class="form-control" 
                                                                                            id="PenangungJawabTeknis" 
                                                                                            name="PenangungJawabTeknis" 
                                                                                            value="{{ $unitusaha->PenangungJawabTeknis }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="KontakPJ">No. Telp</label>
                                                                                        <input type="text" 
                                                                                            class="form-control" 
                                                                                            id="KontakPJ" 
                                                                                            name="KontakPJ" 
                                                                                            value="{{ $unitusaha->KontakPJ }}">
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
                                                                                                class="form-control" 
                                                                                                id="pjProduksi" 
                                                                                                name="pjProduksi" 
                                                                                                value="{{ $unitusaha->pjProduksi }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="pjProduksiKontak">No. Telp</label>
                                                                                        <input type="text" 
                                                                                                class="form-control" 
                                                                                                id="pjProduksiKontak" 
                                                                                                name="pjProduksiKontak" 
                                                                                                value="{{ $unitusaha->pjProduksiKontak }}">
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
                                                                                                class="form-control" 
                                                                                                id="pjMutu" 
                                                                                                name="pjMutu" 
                                                                                                value="{{ $unitusaha->pjMutu }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="pjMutuKontak">No. Telp</label>
                                                                                        <input type="text" 
                                                                                                class="form-control" 
                                                                                                id="pjMutuKontak" 
                                                                                                name="pjMutuKontak" 
                                                                                                value="{{ $unitusaha->pjMutuKontak }}">
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
                                                                                                class="form-control" 
                                                                                                id="pjHigiene" 
                                                                                                name="pjHigiene" 
                                                                                                value="{{ $unitusaha->pjHigiene }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label class="font-weight-normal" for="pjHigieneKontak">No. Telp</label>
                                                                                        <input type="text" 
                                                                                                class="form-control" 
                                                                                                id="pjHigieneKontak" 
                                                                                                name="pjHigieneKontak" 
                                                                                                value="{{ $unitusaha->pjHigieneKontak }}">
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
                                                <a href="/unit-usaha/hapus/{{ $unitusaha->id }}" onclick="return confirm('Apakah Anda yakin ingin menghapus unit usaha ini?')">
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