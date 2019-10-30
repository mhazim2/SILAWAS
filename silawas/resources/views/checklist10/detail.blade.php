@extends('layouts.app')

@section('title', 'Detail Formulir')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row justify-content-between mb-2">
                    <div class="col-md-8">
                        <h1 class="m-0 text-dark">{{ $data->NamaUnitUsaha ?: '-' }}</h1>
                        <small>Ceklis Pengawasan Gudang Penyimpanan Dingin/Beku</small>
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
                                <a class="dropdown-item" href="/export/blank/formulir10">Ceklis Kosong</a>
                                <a class="dropdown-item" href="/export/formulir10/{{ $surveyID->id }}">Ceklis Hasil Survey</a>
                                <a class="dropdown-item" href="/downloadBukti/{{ $surveyID->id }}">Ceklis yang Sudah Dicap</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="upload-pengesahan" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="/uploadBukti/{{$surveyID}}" method="POST" enctype="multipart/form-data">
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
                                            <td>{{ $data->NamaUnitUsaha ? $data->NamaUnitUsaha : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Unit Usaha</td><td>:</td>
                                            <td>{{ $data->AlamatUnitUsaha ? $data->AlamatUnitUsaha : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pemilik Unit Usaha / Nama Kantor Pusat</td><td>:</td>
                                            <td>{{ $data->PelakuUsaha_idPemilikUsaha ? $data->PelakuUsaha_idPemilikUsaha : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Kantor Pusat</td><td>:</td>
                                            <td>{{ $data->AlamatKantorPusat ? $data->AlamatKantorPusat : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>No. Telp / Fax / Email Kantor Pusat</td><td>:</td>
                                            <td>
                                                <table class="table-inner">
                                                    <tr><td>No. Telp</td><td>=</td><td>{{ $data->Telepon ? $data->Telepon : '-' }}</td></tr>
                                                    <tr><td>Fax</td><td>=</td><td>{{ $data->Fax ? $data->Fax : '-' }}</td></tr>
                                                    <tr><td>Email</td><td>=</td><td>{{ $data->Email ? $data->Email : '-' }}</td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab Teknis</td><td>:</td>
                                            <td>{{ $data->PenangungJawabTeknis ? $data->PenangungJawabTeknis : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>No. Telp Penanggung Jawab Teknis</td><td>:</td>
                                            <td>{{ $data->KontakPJ ? $data->KontakPJ : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Operasional</td><td>:</td>
                                            <td>{{ $data->TahunOperasional ? $data->TahunOperasional : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Unit Usaha</td><td>:</td>
                                            <td>{{ $data->jenisUnitUsaha ? $data->jenisUnitUsaha : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Komoditas</td><td>:</td>
                                            <td>{{ $data->komoditas ? $data->komoditas : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kapasitas Gudang</td><td>:</td>
                                            <td>{{ $data->kapasitasGudang ? $data->kapasitasGudang.' Kg' : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Realisasi Penyimpanan</td><td>:</td>
                                            <td>{{ $data->realisasiPenyimpanan ? $data->realisasiPenyimpanan.' Kg' : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Wilayah Peredaran</td><td>:</td>
                                            <td>{{ $data->wilayahPeredaran ? $data->wilayahPeredaran : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Karyawan</td><td>:</td>
                                            <td>{{ $data->jumlahKaryawan ? $data->jumlahKaryawan.' Orang' : '-' }}</td>
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
                                                        <li>Perjanjian Kerja sama (jika Sewa RPH-U)</li>
                                                    </ul>
                                                </td>
                                                <td class="text-center text-success">
                                                    <br>
                                                    <table class="table table-inner table-borderless table-sm mb-0">
                                                        <tr><td>{!! $data->P1_1 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->P1_2 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->P1_3 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->P1_4 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->P1_5 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                    </table>
                                                </td>
                                                <td class="text-center text-danger">
                                                    <br>
                                                    <table class="table table-inner table-borderless table-sm mb-0">
                                                        <tr><td>{!! $data->P1_1 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->P1_2 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->P1_3 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->P1_4 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->P1_5 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <br>
                                                    <table class="table table-inner table-borderless table-sm mb-0">
                                                        <tr>{!! $data->P1_1 ? '<td><b>No:</b> '.$data->P1_1.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->P1_2 ? '<td><b>No:</b> '.$data->P1_2.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->P1_3 ? '<td><b>No:</b> '.$data->P1_3.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->P1_4 ? '<td><b>No:</b> '.$data->P1_4.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->P1_5 ? '<td><b>No:</b> '.$data->P1_5.'</td>' : '<td>-</td>' !!}</tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2. Apakah sudah memiliki sertifikat NKV?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p2 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p2 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->check_p2)
                                                        <div><b>No:</b> {{ $data->P2_1 ? $data->P2_1 : '-' }}</div>
                                                        <div><b>Tanggal Penerbitan:</b> {{ $data->P2_2 ? $data->P2_2 : '-' }}</div>
                                                        <div><b>Surveilans terakhir:</b> {{ $data->P2_3 ? $data->P2_3 : '-' }}</div>
                                                        <div><b>Tindak lanjut temuan:</b> {{ $data->P2_4 ? $data->P2_4 : '-' }}</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3. Apakah ada pendataan sumber produk?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! ($data->check_p3) ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! ($data->check_p3) ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->check_p3)
                                                        <ul>
                                                            @foreach($supliers as $suplier)
                                                                <li>
                                                                    {{ $suplier->namaSuplier ? $suplier->namaSuplier.', ' : '' }}
                                                                    {{ $suplier->negara ? $suplier->negara.', ' : '' }}
                                                                    {{ $suplier->tanggal ? $suplier->tanggal.', ' : '' }}
                                                                    {{ $suplier->jumlah ? $suplier->jumlah.' MT' : '' }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4. Apakah dilengkapi dengan sertifikat halal? (Khusus Gelatine Pangan)
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p4 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p4 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->check_p4)
                                                        <div><b>No:</b> {{ $data->P4_1 ? $data->P4_1 : '-' }}</div>
                                                        <div><b>Tanggal:</b> {{ $data->P4_2 ? $data->P4_2 : '-' }}</div>
                                                        <div><b>Masa berlaku:</b> {{ $data->P4_3 ? $data->P4_3.' Tahun' : '-' }}</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5. Apakah area khusus penyimpanan didesain untuk mencegah/membatasi akses masuk hewan atau manusia dari luar?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->P5 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->P5 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P5_ket ? $data->P5_ket : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6. Apakah sarana dan prasarana penyimpanan memenuhi/memadai?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->P6 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->P6 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->P6)
                                                        <div><b>Jumlah:</b> {{ $data->P6_1 ? $data->P6_1.' Unit' : '-' }}</div>
                                                        <div><b>Kapasitas:</b> {{ $data->P6_2 ? $data->P6_2.' Ton/unit' : '-' }}</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    7. Apakah sarana penyimpanan dingin dikelola dengan baik? 
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->P7 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->P7 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->P7)
                                                        <div><b>Pencatatan Suhu:</b> {{ $data->P7_1 ? $data->P7_1 : '-' }}</div>
                                                        <div><b>Kalibrasi:</b> {{ $data->P7_2 ? $data->P7_2 : '-' }}</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    8. Apakah terdapat pemisahan ruangan antar produk?  
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->P8 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->P8 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->P8)
                                                        <div><b>Pemisahan ruangan antar produk:</b> {{ $data->P8_1 ? 'Ya' : 'Tidak' }}</div>
                                                        <div><b>Lokasi antar produk terpisah:</b> {{ $data->P8_2 ? 'Ya' : 'Tidak' }}</div>
                                                        <div><b>Partisi antar produk:</b> {{ $data->P8_3 ? 'Ya' : 'Tidak' }}</div>
                                                        <div><b>Perlatan terpisah:</b> {{ $data->P8_4 ? 'Ya' : 'Tidak' }}</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    9. Apakah terdapat pemisahan ruangan antar produk halal dan non-halal?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->P9 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->P9 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P9_ket ? $data->P9_ket : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    10. Apakah penanganan produk dilakukan dengan baik?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->P10 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->P10 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->P10)
                                                        <div><b>SOP pennanganan produk:</b> {{ $data->P10_1 ? 'Ada' : 'Tidak ada' }}</div>
                                                        <div><b>FIFO:</b> {{ $data->P10_2 ? 'Ya' : 'Tidak' }}</div>
                                                        <div><b>Rak palet:</b> {{ $data->P10_3 ? 'Ada' : 'Tidak ada' }}</div>
                                                        <div><b>Jenis palet:</b> {{ $data->P10_4 ? $data->P10_4 : '-' }}</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11. Apakah produk hewan memiliki label/informasi? 
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->P11 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->P11 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->P11)
                                                        <div><b>Jenis produk:</b> {{ $data->P11_1 ? $data->P11_1 : '-' }}</div>
                                                        <div><b>Berat produk:</b> {{ $data->P11_2 ? $data->P11_2.' Kg' : '-' }}</div>
                                                        <div><b>Est no:</b> {{ $data->P11_3 ? $data->P11_3 : '-' }}</div>
                                                        <div><b>Tanggal produksi:</b> {{ $data->P11_4 ? $data->P11_4 : '-' }}</div>
                                                        <div><b>Expired:</b> {{ $data->P11_5 ? $data->P11_5 : '-' }}</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    12. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->P12 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->P12 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->P12)
                                                        <div><b>SOP pemeliharaan kebersihan:</b> {{ $data->P12_1 ? 'Ada' : 'Tidak ada' }}</div>
                                                        <div><b>Frekuensi pemeliharaan kebersihan:</b> {{ $data->P12_2 ? $data->P12_2 : '-' }}</div>
                                                        <div><b>Metode:</b> {{ $data->P12_3 ? $data->P12_3 : '-' }}</div>
                                                        <div><b>Catatan pemeliharaan kebersihan:</b> {{ $data->P12_4 ? 'Ada' : 'Tidak ada' }}</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    13. Apakah sarana dan prasarana kebersihan personal (higiene) memadai? 
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->P13 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->P13 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P13_ket ? $data->P13_ket : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    14. Apakah dilakukan program pengendalian hama dan serangga?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->P14 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->P14 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->P14)
                                                        <div><b>SOP pengendalian serangga:</b> {{ $data->P14_1 ? 'Ada' : 'Tidak ada' }}</div>
                                                        <div><b>Dilakukan subkontrak:</b> {{ $data->P14_2 ? 'Ya' : 'Tidak' }}</div>
                                                        <div><b>Jenis pengendalian serangga:</b> {{ $data->P14_3 ? $data->P14_3 : '-' }}</div>
                                                        <div><b>Jadwal pengecekan:</b> {{ $data->P14_4 ? $data->P14_4 : '-' }}</div>
                                                        <div><b>Bukti kontrak:</b> {{ $data->P14_5 ? 'Ada' : 'Tidak ada' }}</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    15. Apakah dilakukan pengolahan limbah? 
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->P15 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->P15 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->P15)
                                                        <div><b>SOP pengolahan limbah:</b> {{ $data->P15_1 ? 'Ada' : 'Tidak ada' }}</div>
                                                        <div><b>Metode pelaksanaan:</b> {{ $data->P15_2 ? $data->P15_2 : '-' }}</div>
                                                    @else
                                                        -
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
                                            <td>{{ $data->catatan ? $data->catatan : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Rekomendasi/Tindak Lanjut</td>
                                            <td>:</td>
                                            <td>{{ $data->rekomendasi ? $data->rekomendasi : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pengawas 1</td>
                                            <td>:</td>
                                            <td>{{ $data->idPengawas ? $pengawas1->NamaLengkap : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pengawas 2</td>
                                            <td>:</td>
                                            <td>{{ $data->idPengawas2 ? $pengawas2->NamaLengkap : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pengawas 3</td>
                                            <td>:</td>
                                            <td>{{ $data->idPengawas3 ? $pengawas3->NamaLengkap : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab Unit Usaha</td>
                                            <td>:</td>
                                            <td>{{ $data->pjUnitUsaha ? $data->pjUnitUsaha : '-' }}</td>
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