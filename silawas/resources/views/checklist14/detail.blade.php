@extends('layouts.app')

@section('title', 'Detail Formulir')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row justify-content-between mb-2">
                    <div class="col-md-8">
                        
                        <small>Ceklis Pengawasan Pengangkutan Produk Hewan</small>
                    </div>
                    <div class="col-md-4 text-md-right pt-3 pt-md-2">
                        <a href="#" class="d-inline-block" data-toggle="modal" data-target="#upload-pengesahan">
                            <button type="button" class="btn btn-danger">
                                <i class="fas fa-file-upload mr-1"></i> Unggah
                            </button>
                        </a>
                        {{-- <a href="#" class="d-inline-block">
                            <button type="button" class="btn btn-warning">
                                <i class="fas fa-edit mr-1"></i> Edit
                            </button>
                        </a> --}}
                        <div class="btn-group" role="group">
                            <button id="btnGroupExport" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-file-download mr-1"></i> Ekspor
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="/export/blank/formulir14">Ceklis Kosong</a>
                                <a class="dropdown-item" href="/export/formulir14/{{ $data->id }}">Ceklis Hasil Survey</a>
                                <a class="dropdown-item" href="/downloadBukti/{{ $data->id }}">Ceklis yang Sudah Dicap</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="upload-pengesahan" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="/uploadBukti/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title">Unggah Bukti Pengesahan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="file" id="file" name="file">
                                            <small class="form-text"><b>Hint:</b> Maksimum 2MB (*.jpg, *.jpeg, *.png, *.pdf)</small>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-kesmavet">Unggah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card checklist">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#umum" data-toggle="tab">A. Informasi Umum</a></li>
                            <li class="nav-item"><a class="nav-link" href="#survey" data-toggle="tab">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="#catatan" data-toggle="tab">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="umum">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-sm umum">
                                        <tr>
                                            <td>Nama Pemilik Produk Hewan</td><td>:</td>
                                            <td>{{ $data->form14->namaPemilikProduk ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Pemilik Produk Hewan</td><td>:</td>
                                            <td>{{ $data->form14->alamatPemilikProduk ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>No. Telp / Fax / Email Pusat</td><td>:</td>
                                            <td>
                                                <table class="table-inner">
                                                    <tr><td>No. Telp</td><td>=</td><td>{{ $data->form14->telpPusat ?: '-' }}</td></tr>
                                                    <tr><td>Fax</td><td>=</td><td>{{ $data->form14->faxPusat ?: '-' }}</td></tr>
                                                    <tr><td>Email</td><td>=</td><td>{{ $data->form14->emailPusat ?: '-' }}</td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Alat Angkut</td><td>:</td>
                                            <td>{{ $data->form14->jenisAlatAngkut ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status Kepemilikan Alat Angkut</td><td>:</td>
                                            <td>{{ $data->form14->statusKepemilikan ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Polisi Kendaraan</td><td>:</td>
                                            <td>{{ $data->form14->nomorPolisi ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Pengemudi</td><td>:</td>
                                            <td>{{ $data->form14->namaPengemudi ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>No. Telp Pengemudi</td><td>:</td>
                                            <td>{{ $data->form14->telpPengemudi ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kapasitas Alat Angkut</td><td>:</td>
                                            <td>{{ $data->form14->kapasitasAlatAngkut ? $data->form14->kapasitasAlatAngkut.' Kg' : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Produk Hewan Yang Diangkut</td><td>:</td>
                                            <td>{{ $data->form14->jumlahProdukAngkut ? $data->form14->jumlahProdukAngkut.' Kg' : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Produk Hewan Yang Diangkut</td><td>:</td>
                                            <td>{{ $data->form14->jenisProduk ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Asal Produk Hewan</td><td>:</td>
                                            <td>
                                                @if ($data->form14->check_sumber_lokal || $data->form14->check_sumber_impor)
                                                    @if ($data->form14->check_sumber_lokal)
                                                        <div>Lokal {{ $data->form14->sumber_lokal ? '( '.$data->form14->sumber_lokal.' )' : '' }}</div>
                                                    @endif
                                                    @if ($data->form14->check_sumber_impor)
                                                        <div>Ex-impor {{ $data->form14->sumber_impor ? '( '.$data->form14->sumber_impor.' )' : '' }}</div>
                                                    @endif
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tujuan Pengiriman</td><td>:</td>
                                            <td>{{ $data->form14->tujuanPengiriman ?: '-' }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="survey">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-sm survey">
                                        <thead class="table-active text-center font-weight-bold">
                                            <tr>
                                                <td>Aspek parameter</td>
                                                <td>Ya</td>
                                                <td>Tidak</td>
                                                <td>Keterangan</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1. Apakah pangan segar asal hewan berasal dari unit usaha yang bersertifikat NKV?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form14->check_p1 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form14->check_p1 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form14->check_p1)
                                                        <ul>
                                                            @foreach($nkv as $nkv)
                                                            <li>
                                                                {{ $nkv->namaUnitUsaha ? $nkv->namaUnitUsaha.', ' : '' }}
                                                                {{ $nkv->NKV ? $nkv->NKV.', ' : '' }}
                                                                {{ $nkv->tanggal ? $nkv->tanggal.', ' : '' }}
                                                            </li>
                                                        @endforeach
                                                        </ul>
                                                    @else
                                                        {{ $data->form14->P1_2 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2. Apakah pangan segar asal hewan berasal dari unit usaha yang memiliki sertifikat 
                                                    halal (bagi yang dipersyaratkan)?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form14->check_p2 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form14->check_p2 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form14->check_p2)
                                                        <ul>
                                                            @foreach($halal as $halal)
                                                            <li>
                                                                {{ $halal->namaUnitUsaha ? $halal->namaUnitUsaha.', ' : '' }}
                                                                {{ $halal->nomorSerti ? $halal->nomorSerti.', ' : '' }}
                                                                {{ $halal->tanggalSerti ? $halal->tanggalSerti.', ' : '' }}
                                                                {{ $halal->masaBerlaku ? $halal->masaBerlaku.', ' : '' }}
                                                            </li>
                                                        @endforeach
                                                        </ul>
                                                    @else
                                                        {{ $data->form14->P2_2 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3. Apakah produk hewan disertai Sertifikat Veteriner?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! ($data->form14->check_p3) ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! ($data->form14->check_p3) ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form14->check_p3)
                                                        <ul>
                                                            @foreach($vet as $vet)
                                                            <li>
                                                                {{ $vet->nomorSerti ? $vet->nomorSerti.', ' : '' }}
                                                                {{ $vet->namaInstansi ? $vet->namaInstansi.', ' : '' }}
                                                                {{ $vet->tanggalSerti ? $vet->tanggalSerti.', ' : '' }}
                                                                {{ $vet->tanggalSerti ? $vet->tanggalSerti.', ' : '' }}
                                                            </li>
                                                        @endforeach
                                                        </ul>
                                                    @else
                                                        {{ $data->form14->P3_2 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4. Apakah produk hewan disertai dengan rekomendasi pengeluaran dari Dinas yang 
                                                    membidangi fungsi Kesmavet Provinsi asal?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form14->check_p4 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form14->check_p4 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form14->check_p4)
                                                        <ul>
                                                            @foreach($rekomendasi as $rekomendasi)
                                                            <li>
                                                                {{ $rekomendasi->nomorRekomendasi ? $rekomendasi->nomorRekomendasi.', ' : '' }}
                                                                {{ $rekomendasi->tanggalRekomendasi ? $rekomendasi->tanggalRekomendasi.', ' : '' }}
                                                                {{ $rekomendasi->namaInstansi ? $rekomendasi->namaInstansi.', ' : '' }}
                                                            </li>
                                                        @endforeach
                                                        </ul>
                                                    @else
                                                        {{ $data->form14->P4_2 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5. Apakah produk hewan di dalam alat angkut disusun dengan baik?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form14->check_p5 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form14->check_p5 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form14->P5 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6. Apakah suhu box penyimpanan pada alat angkut telah sesuai dengan persyaratan teknis?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form14->check_p6 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form14->check_p6 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form14->P6 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    7. Apakah ada pemisahan produk hewan halal dengan non halal atau produk lainnya?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form14->check_p7 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form14->check_p7 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form14->P7 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    8. Apakah produk hewan yang diangkut sesuai dengan kapasitas alat angkut?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form14->check_p8 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form14->check_p8 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form14->P8 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    9. Apakah dilakukan program pemeliharaan kebersihan alat angkut?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form14->check_p9 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form14->check_p9 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form14->P9 ?: '-' }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="catatan">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-sm catatan">
                                        <tr>
                                            <td>Catatan</td>
                                            <td>:</td>
                                            <td>{{ $data->catatan ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Rekomendasi/Tindak Lanjut</td>
                                            <td>:</td>
                                            <td>{{ $data->rekomendasi ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pengawas 1</td>
                                            <td>:</td>
                                            <td>{{ $pengawas['1'] ? $pengawas['1']->user->orang->NamaLengkap ?: '-' : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pengawas 2</td>
                                            <td>:</td>
                                            <td>{{ $pengawas['2'] ? $pengawas['2']->user->orang->NamaLengkap ?: '-' : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pengawas 3</td>
                                            <td>:</td>
                                            <td>{{ $pengawas['3'] ? $pengawas['3']->user->orang->NamaLengkap ?: '-' : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab Unit Usaha</td>
                                            <td>:</td>
                                            <td>{{ $data->pjUnitUsaha ?: '-' }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection