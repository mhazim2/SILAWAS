@extends('layouts.app')

@section('title', 'Detail Formulir')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row justify-content-between mb-2">
                    <div class="col-md-8">
                        <h1 class="m-0 text-dark">{{ $data->unitUsaha->NamaUnitUsaha ?: '-'}}</h1>
                        <small>Ceklis Pengawasan Tempat Pengepul Telur</small>
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
                                <a class="dropdown-item" href="/export/blank/formulir4">Ceklis Kosong</a>
                                <a class="dropdown-item" href="/export/formulir4/{{ $data->id }}">Ceklis Hasil Survey</a>
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
                                            <td>Nama Unit Usaha</td><td>:</td>
                                            <td>{{ $data->unitUsaha->NamaUnitUsaha ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Unit Usaha</td><td>:</td>
                                            <td>{{ $data->unitUsaha->AlamatUnitUsaha ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pemilik Unit Usaha/Nama Kantor Pusat</td><td>:</td>
                                            <td>{{ $data->unitUsaha->namaPemilikUsaha ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Kantor Pusat</td><td>:</td>
                                            <td>{{ $data->unitUsaha->AlamatKantorPusat ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>No. Telp / Fax / Email Kantor Pusat</td><td>:</td>
                                            <td>
                                                <table class="table-inner">
                                                    <tr><td>No. Telp</td><td>=</td><td>{{ $data->unitUsaha->Telepon ?: '-' }}</td></tr>
                                                    <tr><td>Fax</td><td>=</td><td>{{ $data->unitUsaha->Fax ?: '-' }}</td></tr>
                                                    <tr><td>Email</td><td>=</td><td>{{ $data->unitUsaha->Email ?: '-' }}</td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab Teknis</td><td>:</td>
                                            <td>{{ $data->unitUsaha->PenangungJawabTeknis ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>No. Telp Penanggung Jawab Teknis</td><td>:</td>
                                            <td>{{ $data->unitUsaha->KontakPJ ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Operasional</td><td>:</td>
                                            <td>{{ $data->unitUsaha->TahunOperasional ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Skala Usaha</td><td>:</td>
                                            <td>{{ $data->form4->skalaUsaha ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kapasitas Gudang</td><td>:</td>
                                            <td>{{ $data->form4->kapasitasGudang ? $data->form4->kapasitasGudang.' MT' : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Realisasi Pemanfaatan Gudang</td><td>:</td>
                                            <td>{{ $data->form4->realisasiPemanfaatan ? $data->form4->realisasiPemanfaatan.' MT' : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Asal Sumber Produk</td><td>:</td>
                                            <td>
                                                @if ($data->form4->check_sumber_lokal || $data->form4->check_sumber_impor)
                                                    @if ($data->form4->check_sumber_lokal)
                                                        <div>Lokal {{ $data->form4->sumber_lokal ? '( '.$data->form4->sumber_lokal.' )' : '' }}</div>
                                                    @endif
                                                    @if ($data->form4->check_sumber_impor)
                                                        <div>Ex-impor {{ $data->form4->sumber_impor ? '( '.$data->form4->sumber_impor.' )' : '' }}</div>
                                                    @endif
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Wilayah Peredaran</td><td>:</td>
                                            <td>
                                                @if ($data->form4->check_wilayahPeredaran_1)
                                                    <div>Lokal {{ $data->form4->wilayahPeredaran_1 ? '('.$data->form4->wilayahPeredaran_1.')' : '' }}</div>
                                                @endif
                                                @if ($data->form4->check_wilayahPeredaran_2)
                                                    <div>Lokal {{ $data->form4->wilayahPeredaran_2 ? '('.$data->form4->wilayahPeredaran_2.')' : '' }}</div>
                                                @endif
                                                @if ($data->form4->check_wilayahPeredaran_3)
                                                    <div>Lokal {{ $data->form4->wilayahPeredaran_3 ? '('.$data->form4->wilayahPeredaran_3.')' : '' }}</div>
                                                @endif
                                                @if ($data->form4->check_wilayahPeredaran_4)
                                                    <div>Lokal {{ $data->form4->wilayahPeredaran_4 ? '('.$data->form4->wilayahPeredaran_4.')' : '' }}</div>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Karyawan</td><td>:</td>
                                            <td>{{ $data->form4->jumlahKaryawan ? $data->form4->jumlahKaryawan.' orang' : '-' }}</td>
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
                                                    1. Apakah memiliki:<br>
                                                    <ul class="ml-3">
                                                        <li>Nomor izin usaha</li>
                                                        <li>NPWP</li>
                                                        <li>SIUP</li>
                                                        <li>NIB</li>
                                                    </ul>
                                                </td>
                                                <td class="text-center text-success">
                                                    <br>
                                                    <table class="table table-inner table-borderless table-sm mb-0">
                                                        <tr><td>{!! $data->form4->check_p1_1 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->form4->check_p1_2 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->form4->check_p1_3 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->form4->check_p1_4 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                    </table>
                                                </td>
                                                <td class="text-center text-danger">
                                                    <br>
                                                    <table class="table table-inner table-borderless table-sm mb-0">
                                                        <tr><td>{!! $data->form4->check_p1_1 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->form4->check_p1_2 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->form4->check_p1_3 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->form4->check_p1_4 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <br>
                                                    <table class="table table-inner table-borderless table-sm mb-0">
                                                        <tr>{!! $data->form4->P1_1_1 ? '<td><b>No:</b> '.$data->form4->P1_1_1.'&nbsp <b>Tanggal Sertifikat:</b>'.$data->form4->P1_1_2.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->form4->P1_2_1 ? '<td><b>No:</b> '.$data->form4->P1_2_1.'&nbsp <b>Tanggal Sertifikat:</b>'.$data->form4->P1_2_2.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->form4->P1_3_1 ? '<td><b>No:</b> '.$data->form4->P1_3_1.'&nbsp <b>Tanggal Sertifikat:</b>'.$data->form4->P1_3_2.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->form4->P1_4_1 ? '<td><b>No:</b> '.$data->form4->P1_4_1.'&nbsp <b>Tanggal Sertifikat:</b>'.$data->form4->P1_4_2.'</td>' : '<td>-</td>' !!}</tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2. Apakah sudah memiliki sertifikat NKV?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form4->check_p2 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form4->check_p2 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form4->check_p2)
                                                        <div><b>No:</b> {{ $data->form4->P2_1 ?: '-' }}</div>
                                                        <div><b>Tanggal Penerbitan:</b> {{ $data->form4->P2_2 ?: '-' }}</div>
                                                        <div><b>Surveilans Terakhir:</b> {{ $data->form4->P2_3 ?: '-' }}</div>
                                                        <div><b>Tindak Lanjut Temuan:</b></div>
                                                        <div>{{ $data->form4->P2_4 ?: '-' }}</div>
                                                        <div><b>Scan Sertifikat NKV:</b></div>
                                                        <div>
                                                            <a href="{{ asset($data->form4->P2_5) }}">
                                                                <img src="{{ asset($data->form4->P2_5) }}" alt="Scan Sertifikat NKV">
                                                            </a>
                                                        </div>
                                                    @else
                                                        {{ $data->form4->P2_6 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3. Jika telur berasal dari kabupaten/kota/provinsi lain, apakah disertai 
                                                    Sertifikat Veteriner?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form4->check_p3 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form4->check_p3 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form4->check_p3)
                                                        <div>
                                                            <a href="{{ asset($data->form4->P3) }}">
                                                                <img src="{{ asset($data->form4->P3) }}" alt="Scan Sertifikat Veteriner">
                                                            </a>
                                                        </div>
                                                    @else
                                                        {{ $data->form4->P3 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4. Jika telur dilalu lintaskan antar provinsi, apakah disertai izin 
                                                    pengeluaran/pemasukan?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form4->check_p4 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form4->check_p4 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form4->check_p4)
                                                        <div><b>Kesesuaian Asal:</b> {{ $data->form4->P4_1 ?: '-' }}</div>
                                                        <div><b>Jumlah Produk:</b> {{ $data->form4->P4_2 ? $data->form4->P4_2.' Ton' : '-' }}</div>
                                                        <div><b>Tujuan:</b> {{ $data->form4->P4_3 ?: '-' }}</div>
                                                    @else
                                                        {{ $data->form4->P4_4 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5. Apakah ada pendataan sumber telur?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form4->check_p5 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form4->check_p5 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form4->check_p5)
                                                        <ul>
                                                            @foreach($supliers as $suplier)
                                                                <li>
                                                                    {{ $suplier->namaSuplier ? $suplier->namaSuplier.', ' : '' }}
                                                                    {{ $suplier->negara ? $suplier->negara.', ' : '' }}
                                                                    {{ $suplier->tanggal ? $suplier->tanggal.', ' : '' }}
                                                                    {{ $suplier->jumlah ? $suplier->jumlah.' Liter' : '' }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @else
                                                        {{ $data->form4->P5_2 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6. Apakah bangunan didesain untuk mencegah/membatasi akses masuk hewan 
                                                    atau manusia dari luar?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form4->check_p6 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form4->check_p6 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form4->check_p6)
                                                        <div><b>Pagar Atau Fasilitas Pembatas Lain:</b> {{ $data->form4->P6_1 ?: '-' }}</div>
                                                        <div><b>Jenis:</b> {{ $data->form4->P6_2 ?: '-' }}</div>
                                                        <div><b>Berhasil Dibatasi:</b> {{ $data->form4->P6_3 ?: '-' }}</div>
                                                    @else
                                                        {{ $data->form4->P6_4 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    7. Apakah sarana dan prasarana memenuhi/memadai sesuai kapasitas penampungan telur?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form4->check_p7 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form4->check_p7 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    <div><b>Sarana Yang Digunakan:</b></div>
                                                    <div>{{ $data->form4->P7_1 ?: '-' }}</div>
                                                    <div><b>Rata-Rata Jumlah Susu yang Masuk dan Keluar:</b> {{ $data->form4->P7_2.' Liter/hari' ?: '-' }}</div>
                                                    <div><b>Kesesuaian Jumlah dan Kapasitas Penampungan:</b> {{ $data->form4->P7_3 ?: '-' }}</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    8. Apakah penanganan telur dilakukan dengan baik?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form4->check_p8 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form4->check_p8 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form4->check_p8)
                                                        <div><b>Telur Dalam Kondisi Baik:</b> {{ $data->form4->P8_1 ?: '-' }}</div>
                                                        <div><b>SOP Penanganan Produk Hewan:</b> {{ $data->form4->P8_2 ?: '-' }}</div>
                                                        <div><b>Sorting telur:</b> {{ $data->form4->P8_3 ?: '-' }}</div>
                                                        <div><b>Pembersihan telur:</b> {{ $data->form4->P8_4 ?: '-' }}</div>
                                                        <div><b>Penerapan FIFO:</b> {{ $data->form4->P8_5 ?: '-' }}</div>
                                                        <div><b>Terdapat rak/pallet/sejenisnya:</b> {{ $data->form4->P8_6 ?: '-' }}</div>
                                                    @else
                                                        {{ $data->form4->P8_7 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    9. Apakah ada pemisahan telur utuh dengan telur retak/pecah?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form4->check_p9 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form4->check_p9 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form4->P9 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    10. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form4->check_p10 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form4->check_p10 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form4->check_p10)
                                                        <div><b>SOP Pemeliharaan Kebersihan Sarana dan Prasarana:</b> {{ $data->form4->P10_1 ?: '-' }}</div>
                                                        <div><b>Frekuensi Pemeliharaan Kebersihan:</b> {{ $data->form4->P10_2 ?: '-' }}</div>
                                                        <div><b>Metode:</b> {{ $data->form4->P10_3 ?: '-' }}</div>
                                                        <div><b>Laporan hasil sanitasi (<i>QC Record</i>):</b> {{ $data->form4->P10_4 ?: '-' }}</div>
                                                    @else
                                                        <div><b>Kondisi Kebersihan Unit Usaha:</b></div>
                                                        <div>{{ $data->form4->P10_5 ?: '-' }}</div>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11. Apakah sarana dan prasarana higiene personal memadai?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form4->check_p11 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form4->check_p11 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form4->check_p11)
                                                        <div><b>Terdapat Sarpras Untuk Cuci Tangan:</b> {{ $data->form4->P11_1 ?: '-' }}</div>
                                                        <div><b>Dilengkapi Sabun:</b> {{ $data->form4->P11_2 ?: '-' }}</div>
                                                        <div><b>Dilengkapi Pelindung Diri (APD):</b> {{ $data->form4->P11_3 ?: '-' }}</div>
                                                    @else
                                                        {{ $data->form4->P11_4 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    12. Apakah dilakukan program pengendalian hama dan serangga?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form4->check_p12 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form4->check_p12 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form4->check_p12)
                                                        <div><b>Dilakukan Secara Subkontrak:</b> {{ $data->form4->P12_1 ?: '-' }}</div>
                                                        <div><b>SOP Pengendalian Hama dan Seranga:</b> {{ $data->form4->P12_2 ?: '-' }}</div>
                                                        <div><b>Bukti Kontrak:</b> {{ $data->form4->P12_3 ?: '-' }}</div>
                                                        <div><b>Jadwal Inspeksi:</b> {{ $data->form4->P12_4 ?: '-' }}</div>
                                                        <div><b>Jenis Hama dan Metode:</b> {{ $data->form4->P12_5 ?: '-' }}</div>
                                                        <div><b>Jadwal dan Catatan Pelaksanaan Pengendalian Hama:</b> {{ $data->form4->P12_6 ?: '-' }}</div>
                                                    @else
                                                        {{ $data->form4->P12_7 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    13. Apakah dilakukan pengolahan limbah?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form4->check_p13 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form4->check_p13 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form4->check_p13)
                                                        <div><b>SOP Pengolahan Limbah:</b> {{ $data->form4->P13_1 ?: '-' }}</div>
                                                        <div><b>Metode:</b> {{ $data->form4->P13_2 ?: '-' }}</div>
                                                    @else
                                                        {{ $data->form4->P13_3 ?: '-' }}
                                                    @endif
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