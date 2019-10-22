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
                        <small>Ceklis Rumah Potong Hewan Babi</small>
                    </div>
                    <div class="col-md-4 text-md-right pt-3 pt-md-2">
                        <a href="#" class="d-inline-block" data-toggle="modal" data-target="#upload-pengesahan">
                            <button type="button" class="btn btn-danger">
                                <i class="fas fa-file-upload mr-1"></i> Upload File
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
                                <a class="dropdown-item" href="/export/blank/formulir7">Ceklis Kosong</a>
                                <a class="dropdown-item" href="/export/formulir7/{{$surveyID}}">Ceklis Hasil Survey</a>
                                <a class="dropdown-item" href="/downloadBukti/{{ $data->id }}">Ceklis yang Sudah Dicap</a>
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
                                            <td>{{ $data->PelakuUsaha_idPemilikUsaha ? $pemilikUsaha->Nama : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Kantor Pusat</td><td>:</td>
                                            <td>{{ $data->AlamatKantorPusat ? $data->AlamatKantorPusat : '-'}}</td>
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
                                            <td>No.Telp Penanggung Jawab Teknis</td><td>:</td>
                                            <td>{{ $data->KontakPJ ? $data->KontakPJ : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Operasional</td><td>:</td>
                                            <td>{{ $data->TahunOperasional ? $data->TahunOperasional : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tipe Unit Usaha</td><td>:</td>
                                            <td>{{ $data->tipeUnitUsaha ? $data->tipeUnitUsaha : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kapasitas Pemotongan</td><td>:</td>
                                            <td>{{ $data->kapasitasPemotongan ? $data->kapasitasPemotongan.' ekor/hari' : '-'}}</td>
                                        </tr>
                                        <tr>
                                            <td>Realisasi Pemotongan Saat Ini</td><td>:</td>
                                            <td>{{ $data->realisasiPemotongan ? $data->realisasiPemotongan.' ekor/hari' : '-'}}</td>
                                        </tr>
                                        <tr>
                                            <td>Operasional Pemotongan</td><td>:</td>
                                            <td>{{ $data->operasionalPemotongan ? $data->operasionalPemotongan.' hari/minggu' : '-'}}</td>
                                        </tr>
                                        <tr>
                                            <td>Asal Sumber Ternak</td><td>:</td>
                                            <td>
                                                @if ($data->check_sumber_lokal || $data->check_sumber_impor)
                                                    @if ($data->check_sumber_lokal)
                                                        <div>Lokal {{ $data->sumber_lokal ? '( '.$data->sumber_lokal.' )' : '' }}</div>
                                                    @endif
                                                    @if ($data->check_sumber_impor)
                                                        <div>Ex-impor {{ $data->sumber_impor ? '( '.$data->sumber_impor.' )' : '' }}</div>
                                                    @endif
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Distribusi Karkas/Daging</td><td>:</td>
                                            <td>{{ $data->distribusiDaging ? $data->distribusiDaging : '-' }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="survey">
                                <div class="table-responsive mb-3">
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
                                                        <tr><td>{!! $data->p1_niu_id ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->p1_npwp_id ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->p1_siup_id ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->p1_nib_date ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->p1_pks_date ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                    </table>
                                                </td>
                                                <td class="text-center text-danger">
                                                    <br>
                                                    <table class="table table-inner table-borderless table-sm mb-0">
                                                        <tr><td>{!! $data->p1_niu_id ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->p1_npwp_id ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->p1_siup_id ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->p1_nib_date ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->p1_pks_date ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <br>
                                                    <table class="table table-inner table-borderless table-sm mb-0">
                                                        <tr>{!! $data->p1_niu_id ? '<td><b>No:</b> '.$data->p1_niu_id.', <b>Tanggal:</b> '.$data->p1_niu_date.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->p1_npwp_id ? '<td><b>No:</b> '.$data->p1_npwp_id.', <b>Tanggal:</b> '.$data->p1_npwp_date.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->p1_siup_id ? '<td><b>No:</b> '.$data->p1_siup_id.', <b>Tanggal:</b> '.$data->p1_siup_date.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->p1_nib_date ? '<td><b>No:</b> '.$data->p1_nib_date.', <b>Tanggal:</b> '.$data->p1_nib_date.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->p1_pks_date ? '<td><b>No:</b> '.$data->p1_pks_date.', <b>Tanggal:</b> '.$data->p1_pks_date.'</td>' : '<td>-</td>' !!}</tr>
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
                                                    3. Apakah ada dokter hewan penanggung jawab teknis?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p3 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p3 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->check_p3)
                                                        <b>Jumlah:</b> {{ $dokter_pj->count() }} Orang
                                                        <ol>
                                                            @foreach($dokter_pj as $dokter)
                                                                <li>{{ $dokter->namaLengkap }} ({{ $dokter->status }}) {{ $dokter->notlp }}</li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4. Apakah ada pendataan sumber ternak?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! ($data->check_p4) ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! ($data->check_p4) ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P4 ? $data->P4 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5. Apakah unggas yang akan dipotong dilengkapi dengan Sertifikat Veteriner?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p5 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p5 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->check_p5)
                                                        <div><b>No:</b> {{ $data->P5_id ? $data->P5_id : '-' }}</div>
                                                        <div>
                                                            <a href="{{ asset($data->P5) }}">
                                                                <img src="{{ asset($data->P5) }}" alt="Scan Sertifikat Veteriner">
                                                            </a>
                                                        </div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                6. Apakah bangunan/ruangan di desain untuk mencegah akses masuk hewan atau manusia dari luar?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! ($data->check_p6) ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! ($data->check_p6) ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P6 ? $data->P6 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    7. Apakah terdapat tempat penampungan sementara?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p7 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p7 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P7 ? $data->P7 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    8. Apakah dilakukan pemeriksaan hewan sebelum dipotong?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p8 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p8 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P8 ? $data->P8 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    9. Apakah sarana dan prasarana memenuhi/memadai sesuai kapasitas produksi?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p9 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p9 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P9 ? $data->P9 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    10. Apakah terdapat pemisahan yang jelas antara area bersih dan area kotor?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p10 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p10 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P10 ? $data->P10 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11. Apakah dilakukan pemingsanan terhadap ternak sebelum dipotong?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p11 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p11 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P11 ? $data->P11 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    12. Apakah ada petugas yang bertanggung jawab dalam penerapan kesejahteraan hewan?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p12 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p12 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P12 ? $data->P12 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    13. Apakah dilakukan pemeriksaan karkas dan jeroan setelah dipotong?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p13 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p13 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P13 ? $data->P13 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    14. Apakah karkas babi dicap/stempel sebagai hasil pemeriksaan postmortem?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p14 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p14 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P14 ? $data->P14 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    15. Apakah dilakukan pendinginan terhadap karkas/daging babi?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p15 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p15 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P15 ? $data->P15 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    16. Jika unit usaha telah menerapkan sistem jaminan keamanan pangan (HACCP, ISO 22000), 
                                                    apakah ada pemeriksaan/pengujian laboratorium terakreditasi secara berkalaterhadap 
                                                    daging babi?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p16 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p16 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P16 ? $data->P16 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    17. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p17 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p17 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P17 ? $data->P17 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    18. Apakah sarana dan prasarana higiene personal memadai?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p18 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p18 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P18 ? $data->P18 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    19. Apakah dilakukan program pengendalian hama dan serangga?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p19 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p19 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P19 ? $data->P19 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    20. Apakah ada prosedur tertulis pemotongan terhadap hewan sakit yang diizinkan 
                                                    dipotong? (<i>Brucellosis, cysticercosis</i>)
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p20 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p20 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P20 ? $data->P20 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    21. Apakah ada prosedur tertulis penanganan terhadap hewan yang mati sebelum 
                                                    dipotong (bangkai)?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p21 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p21 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P21 ? $data->P21 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    22. Apakah dilakukan pengolahan limbah?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_p22 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_p22 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->P22 ? $data->P22 : '-' }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-sm survey2">
                                        <thead class="table-active text-center font-weight-bold">
                                            <tr>
                                                <td>Aspek parameter</td>
                                                <td>Keterangan</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    23. Jika produk akhir karkas dingin, apakah memiliki sarana penyimpanan dingin (Chiller)?
                                                </td>
                                                <td>
                                                    @if ($data->check_p23)
                                                        Chiller
                                                        <div><b>Jumlah:</b> {{ $data->P23_1 ? $data->P23_1.' unit' : '-' }}</div>
                                                        <div><b>Kapasitas:</b> {{ $data->P23_2 ? $data->P23_2.' ton' : '-' }}</div>
                                                        <div><b>Realisasi:</b> {{ $data->P23_3 ? $data->P23_3.' ton' : '-' }}</div>
                                                    @else
                                                        <div><b>Metode:</b> {{ $data->P23_4 ? $data->P23_4 : '-' }}</div>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    24. Jika produk akhir karkas beku, apakah memiliki sarana penyimpanan dingin (Cold Storage)?
                                                </td>
                                                <td>
                                                    @if ($data->check_p24)
                                                        Cold Storage
                                                        <div><b>Jumlah:</b> {{ $data->P24_1 ? $data->P24_1.' unit' : '-' }}</div>
                                                        <div><b>Kapasitas:</b> {{ $data->P24_2 ? $data->P24_2.' ton' : '-' }}</div>
                                                        <div><b>Realisasi:</b> {{ $data->P24_3 ? $data->P24_3.' ton' : '-' }}</div>
                                                        <div><b>Rata-rata penyimpanan:</b> {{ $data->P24_4 ? $data->P24_4.' bulan' : '-' }}</div>
                                                    @else
                                                        <div><b>Alamat:</b> {{ $data->P24_5 ? $data->P24_5 : '-' }}</div>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    25. Apakah jenis sarana/alat angkut untuk distribusi karkas?
                                                </td>
                                                <td>
                                                    @if ($data->check_p25)
                                                        {{ $data->check_p25 }}
                                                        <div><b>Jenis:</b> {{ $data->P25_1 ? $data->P25_1 : '-' }}</div>
                                                        <div><b>Jumlah:</b> {{ $data->P25_2 ? $data->P25_2.' unit' : '-' }}</div>
                                                        <div><b>Kapasitas:</b> {{ $data->P25_3 ? $data->P25_3.' ton' : '-' }}</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    26. Kemanakah tujuan distribusi karkas?
                                                </td>
                                                <td>
                                                    @if ($data->check_p26)
                                                        <B>Tujuan distribusi:</b> {{ $data->check_p26 }}
                                                        <ol>
                                                            @foreach($list_distribusi as $penerima)
                                                                <li>{{ $penerima->JenisProduk }}, {{ $penerima->JumlahProduk }} Ton, distribusi ke {{ $penerima->NamaPenerima }}, {{ $penerima->AlamatPenerima }}</li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    27. Berasal dari manakah sumber air bersih yang digunakan?
                                                </td>
                                                <td>
                                                    {{ $data->P27 ? $data->P27 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    28. Berasal dari manakah sumber listrik yang digunakan?
                                                </td>
                                                <td>
                                                    {{ $data->P28 ? $data->P28 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    29. Berapakah kapasitas pemotongan ternak per hari?
                                                </td>
                                                <td>
                                                    {{ $data->P29 ? $data->P29 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    30. Berapakah jumlah jam operasional pemotongan RPH-B:<br>
                                                    <ul class="ml-4">
                                                        <li>jumlah jam operasional RPH-U per hari</li>
                                                        <li>jumlah jam operasional RPH-U per minggu</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <br>
                                                    @if ($data->P30_1 || $data->P30_2)
                                                        <ul>
                                                            <li>{{ $data->P30_1 ? $data->P30_1.' jam/hari' : '-' }}</li>
                                                            <li>{{ $data->P30_2 ? $data->P30_2.' hari/minggu' : '-' }}</li>
                                                        </ul>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    31. Berapakah realisasi pemotongan ternak?<br>
                                                    <ul class="ml-4">
                                                        <li>realisasi pemotongan per hari</li>
                                                        <li>realisasi pemotongan per minggu</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <br>
                                                    @if ($data->P31_1 || $data->P31_2)
                                                        <ul>
                                                            <li>{{ $data->P31_1 ? $data->P31_1.' jam/hari' : '-' }}</li>
                                                            <li>{{ $data->P31_2 ? $data->P31_2.' hari/minggu' : '-' }}</li>
                                                        </ul>
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