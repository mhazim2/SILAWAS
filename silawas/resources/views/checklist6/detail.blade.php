@extends('layouts.app')

@section('title', 'Detail Formulir')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row justify-content-between mb-2">
                    <div class="col-md-8">
                        <h1 class="m-0 text-dark">{{ $data->NamaUnitUsaha ?: '-'}}</h1>
                        <small>Ceklis Rumah Potong Hewan Unggas</small>
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
                                <a class="dropdown-item" href="/export/blank/formulir6/{{ $data->id }}">Ceklis Kosong</a>
                                <a class="dropdown-item" href="/export/formulir6/{{$surveyID}}">Ceklis Hasil Survey</a>
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
                                            <td>Titik Koordinat Lokasi</td><td>:</td>
                                            
                                            <td>{{ $data->koordinat ? $data->koordinat : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>No. Telp / Fax / Email Unit Usaha</td><td>:</td>
                                            <td>{{ $data->telpUU ? $data->telpUU : '-' }}/ {{ $data->faxUU ? $data->faxUU : '-' }} /{{ $data->emailUU ? $data->emailUU : '-' }} </td>
                                        </tr>
                                        <tr>
                                            <td>Pemilik Unit Usaha / Nama Kantor Pusat</td><td>:</td>
                                            <td>{{ $data->PelakuUsaha_idPemilikUsaha ? $data->PelakuUsaha_idPemilikUsaha : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat Kantor Pusat</td><td>:</td>
                                            <td>{{ $data->AlamatKantorPusat ? $data->AlamatKantorPusat : '-'}}</td>
                                        </tr>
                                        <tr>
                                            <td>No. Telp / Fax / Email Kantor Pusat</td><td>:</td>
                                            <td>{{ $data->Telepon ? $data->Telepon : '-'}} / {{ $data->Fax ? $data->Fax : '-'}} / {{ $data->Email ? $data->Email : '-'}}</td>
                                        </tr>
                                        <tr>
                                            <td>Status Kepemilikan</td><td>:</td>
                                            <td>{{ $data->StatusKepemilikan ? $data->StatusKepemilikan : '-'}}</td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab Unit Usaha / No.Telp</td><td>:</td>
                                            <td>{{ $data->pjUnitUsaha ? $data->pjUnitUsaha : '-' }} / {{ $data->pjUnitUsahaKontak ? $data->pjUnitUsahaKontak : '-'}}</td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab Teknis / No.Telp</td><td>:</td>
                                            <td>{{ $data->PenangungJawabTeknis ? $data->PenangungJawabTeknis : '-' }} / {{ $data->KontakPJ? $data->KontakPJ : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab Produksi / No.Telp</td><td>:</td>
                                            <td>{{ $data->pjProduksi ? $data->pjProduksi : '-' }} / {{ $data->pjProduksiKontak ? $data->pjProduksiKontak : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab Mutu / No.Telp</td><td>:</td>
                                            <td>{{ $data->pjMutu ? $data->pjMutu : '-'}} / {{ $data->pjMutuKontak? $data->pjMutuKontak : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab Higiene Sanitasi / No.Telp</td><td>:</td>
                                            <td>{{ $data->pjHigiene ? $data->pjHigiene : '-'}} / {{ $data->pjHigieneKontak ? $data->pjHigieneKontak : '-'}}</td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Berdiri dan Tahun Operasional</td><td>:</td>
                                            <td>{{ $data->TahunBerdiri ? $data->TahunBerdiri : '-' }}, {{ $data->TahunOperasional ? $data->TahunOperasional : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tipe Unit Usaha</td><td>:</td>
                                            <td>{{ $data->tipeUnitUsaha ? $data->tipeUnitUsaha : '-'}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Produk (Daging Unggas)</td><td>:</td>
                                            <td>{{ $data->jenisProduk ? $data->jenisProduk : '-'}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Karyawan</td><td>:</td>
                                            <td>
                                                <table class="table-inner">
                                                    <tr><td>Produksi</td><td>=</td><td>{{ $data->karyawanProduksi_L ? $data->karyawanProduksi_L : '-' }} Laki-laki, {{ $data->karyawanProduksi_P  ? $data->karyawanProduksi_P : '-'}} Perempuan</td></tr>
                                                    <tr><td>Administrasi</td><td>=</td><td>{{ $data->karyawanAdm_L ? $data->karyawanAdm_L : '-' }} Laki-laki, {{ $data->karyawanAdm_P ? $data->karyawanAdm_P : '-' }} Perempuan</td></tr>
                                                    <tr><td>Petugas AMPM</td><td>=</td><td>{{ $data->karyawanAMPM ? $data->karyawanAMPM : '-' }}</td></tr>
                                                    <tr><td>Petugas AWO</td><td>=</td><td>{{ $data->karyawanAWO ? $data->karyawanAWO : '-' }}</td></tr>
                                                    <tr><td>Juru Sembelih Halal</td><td>=</td><td>{{ $data->juruSembelih ? $data->juruSembelih : '-' }}</td></tr>
                                                    <tr><td>Operator Stunning</td><td>=</td><td>{{ $data->operatorStunning ? $data->operatorStunning : '-'}}</td></tr>
                                                </table>
                                            </td>
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
                                                        <tr><td>{!! $data->b1_niu_id ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->b1_npwp_id ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->b1_siup_id ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->b1_nib_date ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->b1_pks_date ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                    </table>
                                                </td>
                                                <td class="text-center text-danger">
                                                    <br>
                                                    <table class="table table-inner table-borderless table-sm mb-0">
                                                        <tr><td>{!! $data->b1_niu_id ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->b1_npwp_id ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->b1_siup_id ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->b1_nib_date ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->b1_pks_date ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <br>
                                                    <table class="table table-inner table-borderless table-sm mb-0">
                                                        <tr>{!! $data->b1_niu_id ? '<td><b>No:</b> '.$data->b1_niu_id.', <b>Tanggal:</b> '.$data->b1_niu_date.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->b1_npwp_id ? '<td><b>No:</b> '.$data->b1_npwp_id.', <b>Tanggal:</b> '.$data->b1_npwp_date.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->b1_siup_id ? '<td><b>No:</b> '.$data->b1_siup_id.', <b>Tanggal:</b> '.$data->b1_siup_date.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->b1_nib_date ? '<td><b>No:</b> '.$data->b1_nib_date.', <b>Tanggal:</b> '.$data->b1_nib_date.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->b1_pks_date ? '<td><b>No:</b> '.$data->b1_pks_date.', <b>Tanggal:</b> '.$data->b1_pks_date.'</td>' : '<td>-</td>' !!}</tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2. Apakah ada dokter hewan penanggung jawab teknis?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b2 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b2 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->check_b2)
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
                                                    3. Apakah RPH-U memiliki sertifikat halal?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b3 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b3 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->check_b3)
                                                        <div><b>No:</b> {{ $data->b3_1 ? $data->b3_1 : '-' }}</div>
                                                        <div><b>Tanggal Penerbitan:</b> {{ $data->b3_2 ? $data->b3_2 : '-' }}</div>
                                                        <div><b>Masa berlaku:</b> {{ $data->b3_3 ? $data->b3_3.' tahun' : '-' }}</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4. Apakah unggas yang akan dipotong dilengkapi dengan Sertifikat Veteriner?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b4 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b4 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->check_b4)
                                                        <div><b>No:</b> {{ $data->b4_id ? $data->b4_id : '-' }}</div>
                                                        <div>
                                                            <a href="{{ asset($data->b4_file) }}">
                                                                <img src="{{ asset($data->b4_file) }}" alt="Scan Sertifikat Veteriner">
                                                            </a>
                                                        </div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5. Apakah ada pendataan sumber unggas?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! ($data->check_b5_1 || $data->check_b5_2 || $data->check_b5_3) ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! ($data->check_b5_1 || $data->check_b5_2 || $data->check_b5_3) ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->check_b5_1 || $data->check_b5_2 || $data->check_b5_3)
                                                        <ul>
                                                            @if ($data->check_b5_1)
                                                                <li>
                                                                    Perusahaan Sendiri
                                                                </li>
                                                            @endif
                                                            @if ($data->check_b5_2)
                                                                <li>
                                                                    Anak Perusahaan<br>
                                                                    <b>Nama:</b> {{ $data->b5_2_nama ? $data->b5_2_nama : '-' }}<br>
                                                                    <b>Alamat:</b> {{ $data->b5_2_alamat ? $data->b5_2_alamat : '-' }}
                                                                </li>
                                                            @endif
                                                            @if ($data->check_b5_3)
                                                                <li>
                                                                    Kemitraan Peternakan Mandiri<br>
                                                                    <b>Nama:</b> {{ $data->b5_3_nama ? $data->b5_3_nama : '-' }}<br>
                                                                    <b>Alamat:</b> {{ $data->b5_3_alamat ? $data->b5_3_alamat : '-' }}
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6. Apakah sudah memiliki sertifikat NKV?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b6 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b6 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->check_b6)
                                                        <div><b>No:</b> {{ $data->b6_1 ? $data->b6_1 : '-' }}</div>
                                                        <div><b>Tanggal Penerbitan:</b> {{ $data->b6_2 ? $data->b6_2 : '-' }}</div>
                                                        <div><b>Surveilans terakhir:</b> {{ $data->b6_3 ? $data->b6_3 : '-' }}</div>
                                                        <div><b>Tindak lanjut temuan:</b> {{ $data->b6_4 ? $data->b6_4 : '-' }}</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    7. Jika unit usaha telah menerapkan sistem jaminan keamanan pangan (HACCP, ISO 22000), 
                                                    apakah ada pemeriksaan/pengujian laboratorium terakreditasi secara berkala terhadap daging unggas?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b7 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b7 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->check_b7 ? $data->b7 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    8. Apakah dilakukan pemingsanan terhadap unggas sebelum dipotong? Apakah pemingsanan dilakukan oleh petugas yang kompeten?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b8 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b8 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->check_b8)
                                                        <div><b>Metode pemingsanan:</b><br>{{ $data->b8_1 ? $data->b8_1 : '-' }}</div><br>
                                                        <div><b>Waktu pemingsanan sampai ke penyembelihan:</b><br>{{ $data->b8_2 ? $data->b8_2 : '-' }} detik</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    9. Apakah penyembelihan dilakukan oleh juru sembelih halal yang kompeten?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b9 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b9 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->check_b9 ? $data->b9 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    10. Apakah ada petugas yang bertanggung jawab dalam penerapan kesejahteraan hewan?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b10 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b10 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->check_b10 ? $data->b10 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11. Apakah dilakukan pemeriksaan karkas dan jeroan setelah dipotong?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b11 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b11 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->check_b11 ? $data->b11 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    12. Apakah ada pemeriksaan/pengujian terhadap produk secara berkala?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b12 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b12 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->check_b12 ? $data->b12 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    13. Apakah karkas unggas memiliki label/informasi?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b13 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b13 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->check_b13 ? $data->b13 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    14. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b14 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b14 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->check_b14 ? $data->b14 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    15. Apakah dilakukan program pengendalian hama dan serangga?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b15 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b15 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->check_b15 ? $data->b15 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    16. Apakah ada prosedur penanganan terhadap unggas yang mati sebelum dipotong (bangkai)?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b16 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b16 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->check_b16 ? $data->b16 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    17. Apakah dilakukan pengolahan limbah?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b17 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b17 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->check_b17 ? $data->b17 : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    18. Apakah ada penanganan terhadap bulu dan jeroan usus dari unggas yang dipotong?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->check_b18 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->check_b18 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->check_b18 ? $data->b18 : '-' }}
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
                                                    19. Berapa lama waktu antara penyembelihan sampai perebusan?
                                                </td>
                                                <td>
                                                    @if ($data->b19)
                                                        {{ $data->b19 }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    20. Berasal dari manakah sumber air bersih yang digunakan?
                                                </td>
                                                <td>
                                                    @if ($data->b20)
                                                        {{ $data->b20 }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    21. Berasal dari manakah sumber es yang digunakan? Berapa kebutuhan es rata-rata per/hari?
                                                </td>
                                                <td>
                                                    @if ($data->b21_1 || $data->b21_2)
                                                        <div>{{ $data->b21_1 }}</div>
                                                        <div>{{ $data->b21_2 }} ton/hari</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    22. Berasal dari manakah sumber listrik yang digunakan?
                                                </td>
                                                <td>
                                                    @if ($data->b22)
                                                        {{ $data->b22 }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    23. Berapakah kapasitas pemotongan unggas?<br>
                                                    <ul class="ml-4">
                                                        <li>kapasitas pemotongan per jam</li>
                                                        <li>kapasitas pemotongan per hari</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <br>
                                                    @if ($data->b23_1 || $data->b23_2)
                                                        <ul>
                                                            <li>{{ $data->b23_1 ? $data->b23_1.' ekor/jam' : '-' }}</li>
                                                            <li>{{ $data->b23_2 ? $data->b23_2.' ekor/hari' : '-' }}</li>
                                                        </ul>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    24. Berapakah persentase pemotongan unggas jantan?
                                                </td>
                                                <td>
                                                    @if ($data->b24)
                                                        {{ $data->b24 }}%
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    25. Berapakah jumlah jam operasional pemotongan RPH-U:<br>
                                                    <ul class="ml-4">
                                                        <li>jumlah jam operasional RPH-U per hari</li>
                                                        <li>jumlah jam operasional RPH-U per minggu</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <br>
                                                    @if ($data->b25_1 || $data->b25_2)
                                                        <ul>
                                                            <li>{{ $data->b25_1 ? $data->b25_1.' jam/hari' : '-' }}</li>
                                                            <li>{{ $data->b25_2 ? $data->b25_2.' hari/minggu' : '-' }}</li>
                                                        </ul>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    26. Berapakah realisasi pemotongan unggas?<br>
                                                    <ul class="ml-4">
                                                        <li>realisasi pemotongan per hari</li>
                                                        <li>realisasi pemotongan per minggu</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <br>
                                                    @if ($data->b26_1 || $data->b26_2)
                                                        <ul>
                                                            <li>{{ $data->b26_1 ? $data->b26_1.' jam/hari' : '-' }}</li>
                                                            <li>{{ $data->b26_2 ? $data->b26_2.' hari/minggu' : '-' }}</li>
                                                        </ul>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    27. Berapakah rata-rata berat hidup unggas yang dipotong per hari?
                                                </td>
                                                <td>
                                                    @if ($data->b27_1 || $data->b27_2 || $data->b27_3)
                                                        @if ($data->b27_1)
                                                            <div>Ukuran Kecil (< 1kg): {{ $data->b27_1 }}%</div>
                                                        @endif
                                                        @if ($data->b27_2)
                                                            <div>Ukuran Sedang (1 - 1,5kg): {{ $data->b27_2 }}%</div>
                                                        @endif
                                                        @if ($data->b27_3)
                                                            <div>Ukuran Besar (> 1,5kg): {{ $data->b27_3 }}%</div>
                                                        @endif
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    28. Apakah sarana pembekuan cepat yang digunakan?
                                                </td>
                                                <td>
                                                    @if ($data->check_b28)
                                                        <div><b>Unit:</b> {{ $data->check_b28 ? $data->check_b28 : '-' }}</div>
                                                        <div><b>Jumlah:</b> {{ $data->b28_1 ? $data->b28_1 : '-' }}</div>
                                                        <div><b>Kapasitas:</b> {{ $data->b28_2 ? $data->b28_2 : '-' }}</div>
                                                        <div><b>Total realisasi saat ini:</b> {{ $data->b28_3 ? $data->b28_3 : '-' }}</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    29. Jika produk akhir karkas dingin, apakah memiliki sarana penyimpanan dingin (Chiller)?
                                                </td>
                                                <td>
                                                    @if ($data->check_b29)
                                                        Chiller
                                                        <div><b>Jumlah:</b> {{ $data->b29_unit ? $data->b29_unit.' unit' : '-' }}</div>
                                                        <div><b>Kapasitas:</b> {{ $data->b29_kapasitas ? $data->b29_kapasitas.' ton' : '-' }}</div>
                                                        <div><b>Realisasi:</b> {{ $data->b29_realisasi ? $data->b29_realisasi.' ton' : '-' }}</div>
                                                    @else
                                                        <div><b>Metode:</b> {{ $data->b29_metode ? $data->b29_metode : '-' }}</div>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    30. Jika produk akhir karkas beku, apakah memiliki sarana penyimpanan dingin (Cold Storage)?
                                                </td>
                                                <td>
                                                    @if ($data->check_b30)
                                                        Cold Storage
                                                        <div><b>Jumlah:</b> {{ $data->b30_unit ? $data->b30_unit.' unit' : '-' }}</div>
                                                        <div><b>Kapasitas:</b> {{ $data->b30_kapasitas ? $data->b30_kapasitas.' ton' : '-' }}</div>
                                                        <div><b>Realisasi:</b> {{ $data->b30_realisasi ? $data->b30_realisasi.' ton' : '-' }}</div>
                                                        <div><b>Rata-rata penyimpanan:</b> {{ $data->b30_waktu ? $data->b30_waktu.' bulan' : '-' }}</div>
                                                    @else
                                                        <div><b>Alamat:</b> {{ $data->b30_alamat ? $data->b30_alamat : '-' }}</div>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    31. Kemanakah tujuan distribusi karkas?
                                                </td>
                                                <td>
                                                    @if ($data->b31)
                                                        <b>Tujuan distribusi:</b> {{ $data->b31 }}
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
                                                    32. Apakah jenis sarana/alat angkut untuk distribusi karkas?
                                                </td>
                                                <td>
                                                    @if ($data->check_b32)
                                                        {{ $data->check_b32 }}
                                                        <div><b>Jenis:</b> {{ $data->b32_jenisAlat ? $data->b32_jenisAlat : '-' }}</div>
                                                        <div><b>Jumlah:</b> {{ $data->b32_jumlahAlat ? $data->b32_jumlahAlat.' unit' : '-' }}</div>
                                                        <div><b>Kapasitas:</b> {{ $data->b32_kapasitas ? $data->b32_kapasitas.' ton' : '-' }}</div>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    33. Jika memiliki unit pengolahan produk unggas, berapa persentase produksi RPH-U yang digunakan sebagai bahan baku produk olahan unggas?
                                                </td>
                                                <td>
                                                    @if ($data->check_b33)
                                                        {{ $data->b33 }}%
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