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
                        <small>Ceklis Pengawasan Rumah Potong Hewan Ruminansia</small>
                    </div>
                    <div class="col-md-4 text-md-right pt-3 pt-md-2">
                        <a href="#" class="d-inline-block" data-toggle="modal" data-target="#upload-pengesahan">
                            <button type="button" class="btn btn-danger">
                                <i class="fas fa-file-upload mr-1"></i> Unggah
                            </button>
                        </a>
                        <a href="#" class="d-inline-block">
                            <button type="button" class="btn btn-warning">
                                <i class="fas fa-edit mr-1"></i> Edit
                            </button>
                        </a>
                        <div class="btn-group" role="group">
                            <button id="btnGroupExport" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-file-download mr-1"></i> Ekspor
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="/export/blank/formulir5/{{ $data->id }}">Ceklis Kosong</a>
                                <a class="dropdown-item" href="/export/formulir5/{{ $data->id }}">Ceklis Hasil Survey</a>
                                <a class="dropdown-item" href="#">Ceklis yang Sudah Dicap</a>
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
                                            <td>Titik Koordinat Lokasi</td><td>:</td>
                                            <td>{{ $data->unitUsaha->koordinat ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>No. Telp / Fax / Email Unit Usaha</td><td>:</td>
                                            <td>
                                                <table class="table-inner">
                                                    <tr><td>No. Telp</td><td>=</td><td>{{ $data->unitUsaha->telpUU ?: '-' }}</td></tr>
                                                    <tr><td>Fax</td><td>=</td><td>{{ $data->unitUsaha->faxUU ?: '-' }}</td></tr>
                                                    <tr><td>Email</td><td>=</td><td>{{ $data->unitUsaha->faxUU ?: '-' }}</td></tr>
                                                </table>
                                            </td>
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
                                            <td>Status Kepemilikan</td><td>:</td>
                                            <td>{{ $data->unitUsaha->StatusKepemilikan ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab Unit Usaha / No.Telp</td><td>:</td>
                                            <td>{{ $data->unitUsaha->pjUnitUsaha ?: '-' }} / {{ $data->unitUsaha->pjUnitUsahaKontak ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab Teknis / No.Telp</td><td>:</td>
                                            <td>{{ $data->unitUsaha->PenangungJawabTeknis ?: '-' }} / {{ $data->unitUsaha->KontakPJ ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab Produksi / No.Telp</td><td>:</td>
                                            <td>{{ $data->unitUsaha->pjProduksi ?: '-' }} / {{ $data->unitUsaha->pjProduksiKontak ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab Mutu / No.Telp</td><td>:</td>
                                            <td>{{ $data->unitUsaha->pjMutu ?: '-' }} / {{ $data->unitUsaha->pjMutuKontak ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Penanggung Jawab Higiene Sanitasi / No.Telp</td><td>:</td>
                                            <td>{{ $data->unitUsaha->pjHigiene ?: '-' }} / {{ $data->unitUsaha->pjHigieneKontak ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Berdiri</td><td>:</td>
                                            <td>{{ $data->unitUsaha->TahunBerdiri ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tahun Operasional</td><td>:</td>
                                            <td>{{ $data->unitUsaha->TahunOperasional ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kategori RPH-R</td><td>:</td>
                                            <td>
                                                @if ($data->form5->kategoriRPHR == '1')
                                                    Kategori I (Memproduksi karkas/daging hangat)
                                                @elseif ($data->form5->kategoriRPHR == '2')
                                                    Kategori II (Memproduksi karkas/daging dingin/beku)
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Karyawan</td><td>:</td>
                                            <td>
                                                <table class="table-inner">
                                                    <tr><td>Produksi</td><td>=</td><td>{{ $data->form5->karyawanProdL ?: '-' }} Laki-laki, {{ $data->form5->karyawanProdP ?: '-'}} Perempuan</td></tr>
                                                    <tr><td>Administrasi</td><td>=</td><td>{{ $data->form5->karyawanAdmL ?: '-' }} Laki-laki, {{ $data->form5->karyawanAdmP ?: '-'}} Perempuan</td></tr>
                                                    <tr><td>Petugas AMPM</td><td>=</td><td>{{ $data->form5->karyawanAMPM ?: '-' }}</td></tr>
                                                    <tr><td>Petugas AWO</td><td>=</td><td>{{ $data->form5->karyawanAWO ?: '-' }}</td></tr>
                                                    <tr><td>Juru Sembelih Halal</td><td>=</td><td>{{ $data->form5->karyawanHalal ?: '-' }}</td></tr>
                                                    <tr><td>Butcher</td><td>=</td><td>{{ $data->form5->karyawanButcher ?: '-'}}</td></tr>
                                                    <tr><td>Operator Stunning</td><td>=</td><td>{{ $data->form5->karyawanStunning ?: '-'}}</td></tr>
                                                </table>
                                            </td>
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
                                                        <tr><td>{!! $data->form5->check_p1_1 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->form5->check_p1_2 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->form5->check_p1_3 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->form5->check_p1_4 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->form5->check_p1_5 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                    </table>
                                                </td>
                                                <td class="text-center text-danger">
                                                    <br>
                                                    <table class="table table-inner table-borderless table-sm mb-0">
                                                        <tr><td>{!! $data->form5->check_p1_1 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->form5->check_p1_2 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->form5->check_p1_3 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->form5->check_p1_4 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->form5->check_p1_5 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <br>
                                                    <table class="table table-inner table-borderless table-sm mb-0">
                                                        <tr>{!! $data->form5->P1_1 ? '<td><b>No:</b> '.$data->form5->P1_1.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->form5->P1_2 ? '<td><b>No:</b> '.$data->form5->P1_2.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->form5->P1_3 ? '<td><b>No:</b> '.$data->form5->P1_3.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->form5->P1_4 ? '<td><b>No:</b> '.$data->form5->P1_4.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->form5->P1_5 ? '<td><b>No:</b> '.$data->form5->P1_5.'</td>' : '<td>-</td>' !!}</tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2. Apakah sudah memiliki sertifikat NKV?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p2 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p2 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form5->check_p2)
                                                        <div><b>No:</b> {{ $data->form5->P2_1 ?: '-' }}</div>
                                                        <div><b>Tanggal Penerbitan:</b> {{ $data->form5->P2_2 ?: '-' }}</div>
                                                        <div><b>Surveilans terakhir:</b> {{ $data->form5->P2_3 ?: '-' }}</div>
                                                        <div><b>Tindak lanjut temuan:</b> {{ $data->form5->P2_4 ?: '-' }}</div>
                                                    @else
                                                        {{ $data->form5->P2_5 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3. Apakah RPH-R memiliki sertifikat halal?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p3 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p3 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form5->check_p3)
                                                        <div><b>No:</b> {{ $data->form5->P3_1 ?: '-' }}</div>
                                                        <div><b>Tanggal Penerbitan:</b> {{ $data->form5->P3_2 ?: '-' }}</div>
                                                        <div><b>Masa Berlaku:</b> {{ $data->form5->P3_3 ? $data->form5->P3_3.' tahun' : '-' }}</div>
                                                    @else
                                                        {{ $data->form5->P3_4 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4. Apakah ada dokter hewan penanggung jawab teknis?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p4 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p4 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P4 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5. Apakah ada pendataan sumber ternak?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p5 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p5 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P5 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6. Apakah ternak yang akan dipotong dilengkapi dengan Sertifikat Veteriner?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p6 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p6 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form5->check_p6)
                                                        <div>
                                                            <a href="{{ asset($data->form5->P6) }}">
                                                                <img src="{{ asset($data->form5->P6) }}" alt="Scan Sertifikat Veteriner">
                                                            </a>
                                                        </div>
                                                    @else
                                                        {{ $data->form5->P6 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    7. Apakah ternak betina yang akan dipotong dilengkapi dengan Surat Keterangan 
                                                    Status Reproduksi?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p7 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p7 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form5->check_p7)
                                                        <div>
                                                            <a href="{{ asset($data->form5->P7) }}">
                                                                <img src="{{ asset($data->form5->P7) }}" alt="Scan SKRS">
                                                            </a>
                                                        </div>
                                                    @else
                                                        {{ $data->form5->P7 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    8. Apakah bangunan/ruangan di desain untuk mencegah akses masuk hewan atau 
                                                    manusia dari luar?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p8 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p8 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P8 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    9. Apakah terdapat tempat penampungan sementara?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p9 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p9 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P9 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    10. Apakah sarana dan prasarana memenuhi/memadai sesuai kapasitas produksi?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p10 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p10 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P10 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11. Apakah terdapat pemisahan yang jelas antara area bersih dan area kotor?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p11 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p11 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P11 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    12. Apakah dilakukan pemeriksaan ternak sebelum dipotong?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p12 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p12 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P12 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    13. Apakah dilakukan pemingsanan terhadap ternak sebelum dipotong?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p13 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p13 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P13 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    14. Apakah penyembelihan dilakukan oleh juru sembelih halal yang kompeten?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p14 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p14 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P14 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    15. Apakah dipastikan hewan telah mati sempurna sebelum ditangani lebih lanjut?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p15 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p15 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P15 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    16. Apakah ada prosedur tertulis pemotongan terhadap hewan sakit yang diizinkan 
                                                    dipotong? (<i>Brucellosis, cysticercosis</i>)
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p16 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p16 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P16 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    17. Apakah ada prosedur tertulis penanganan terhadap hewan yang mati sebelum 
                                                    dipotong (bangkai)?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p17 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p17 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P17 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    18. Apakah ada petugas yang bertanggung jawab dalam penerapan kesejahteraan hewan?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p18 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p18 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P18 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    19. Apakah karkas ruminansia dicap/stempel sebagai hasil pemeriksaan postmortem?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p19 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p19 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P19 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    20. Apakah karkas didinginkan sebelum didistribusikan?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p20 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p20 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P20 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    21. Apakah sudah dilakukan penerapan <i>butcher system</i>?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p21 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p21 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P21 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    22. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p22 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p22 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P22 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    23. Apakah sarana dan prasarana higiene personal yang memadai?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p23 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p23 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P23 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    24. Apakah dilakukan program pengendalian hama dan serangga?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p24 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p24 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P24 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    25. Apakah dilakukan pengolahan limbah?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p25 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p25 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P25 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    26. Apakah karkas/daging yang dilalulintaskan antar Kabupaten/Kota dilengkapi 
                                                    dengan sertifikat veteriner
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p26 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p26 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form5->check_p26)
                                                        <div>
                                                            <a href="{{ asset($data->form5->P26) }}">
                                                                <img src="{{ asset($data->form5->P26) }}" alt="Scan Sertifikat Veteriner">
                                                            </a>
                                                        </div>
                                                    @else
                                                        {{ $data->form5->P26 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    27. Jika unit usaha telah menerapkan sistem jaminan keamanan pangan 
                                                    (HACCP, ISO 22000), apakah ada pemeriksaan/pengujian laboratorium 
                                                    terakreditasi secara berkala terhadap daging?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p27 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p27 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form5->P27 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    28. Apakah memasok daging ke horeka?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form5->check_p28 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form5->check_p28 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form5->check_p28)
                                                        <div><b>Bukti Kontrak:</b></div>
                                                        {{ $data->form5->P28_1 ?: '-' }}
                                                    @else
                                                        {{ $data->form5->P28_2 ?: '-' }}
                                                    @endif
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
                                                    29. Jika produk akhir karkas dingin, apakah memiliki sarana penyimpanan dingin
                                                    (Chiller)?
                                                </td>
                                                <td>
                                                    @if ($data->form5->check_p29)
                                                        Chiller
                                                        <div><b>Jumlah:</b> {{ $data->form5->P29_1 ? $data->form5->P29_1.' unit' : '-' }}</div>
                                                        <div><b>Kapasitas:</b> {{ $data->form5->P29_2 ? $data->form5->P29_2.' ton' : '-' }}</div>
                                                        <div><b>Realisasi Pemakaian Saat Ini:</b> {{ $data->form5->P29_3 ? $data->form5->P29_3.' ton' : '-' }}</div>
                                                    @else
                                                        <div><b>Metode Pendinginan Karkas:</b> {{ $data->P29_4 ? $data->P29_4 : '-' }}</div>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    30. Jika produk akhir karkas beku, apakah memiliki sarana penyimpanan dingin 
                                                    (Cold Storage)?
                                                </td>
                                                <td>
                                                    @if ($data->form5->check_p30)
                                                        Cold Storage
                                                        <div><b>Jumlah:</b> {{ $data->form5->P30_1 ? $data->form5->P30_1.' unit' : '-' }}</div>
                                                        <div><b>Kapasitas:</b> {{ $data->form5->P30_2 ? $data->form5->P30_2.' ton' : '-' }}</div>
                                                        <div><b>Rata-Rata Jumlah Produk Yang Disimpan:</b> {{ $data->form5->P30_3 ? $data->form5->P30_3.' ton' : '-' }}</div>
                                                        <div><b>Rata-Rata Waktu Penyimpanan:</b> {{ $data->form5->P30_4 ? $data->form5->P30_4.' bulan' : '-' }}</div>
                                                    @else
                                                        <div><b>Alamat:</b> {{ $data->form5->P30_5 ? $data->form5->P30_5 : '-' }}</div>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    31. Apakah sarana/alat angkut untuk distribusi karkas?
                                                </td>
                                                <td>
                                                    {{ $data->form5->P31 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    32. Kemanakah tujuan distribusi karkas?
                                                </td>
                                                <td>
                                                    @if ($data->form5->check_p26)
                                                    <B>Tujuan distribusi:</b> {{ $data->form5->check_p32 }}
                                                    <ol>
                                                        @foreach($distribusi as $penerima)
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
                                                    33. Berasal dari manakah sumber air bersih yang digunakan?
                                                </td>
                                                <td>
                                                    {{ $data->form5->P33 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    34. Berasal dari manakah sumber listrik yang digunakan?
                                                </td>
                                                <td>
                                                    {{ $data->form5->P34 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    35. Berapakah kapasitas pemotongan ternak per hari?
                                                </td>
                                                <td>
                                                    {{ $data->form5->P35 ? $data->form5->P35.' ekor/hari' : '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    36. Berapakah jumlah jam operasional pemotongan RPH-R?<br>
                                                    <ul class="ml-4">
                                                        <li>Jumlah jam operasional RPH-R per hari</li>
                                                        <li>Jumlah jam operasional RPH-R per minggu</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <br>
                                                    <ul>
                                                        <li>{{ $data->form5->P36_1 ? $data->form5->P36_1.' jam/hari' : '' }}</li>
                                                        <li>{{ $data->form5->P36_2 ? $data->form5->P36_2.' jam/minggu' : '' }}</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    37. Berapakah realisasi pemotongan ternak?<br>
                                                    <ul class="ml-4">
                                                        <li>Realisasi pemotongan per hari</li>
                                                        <li>Realisasi pemotongan per minggu</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <br>
                                                    <ul>
                                                       <li>{{ $data->form5->P37_1 ? $data->form5->P37_1.' ekor/hari' : '' }}</li>
                                                        <li>{{ $data->form5->P37_2 ? $data->form5->P37_2.' ekor/minggu' : '' }}</li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    38. Apa jenis ternak yang dipotong?
                                                </td>
                                                <td>
                                                    <div>Jumlah ternak yang dipotong (ekor/minggu):</div>
                                                    <div>a) Lokal: {{ $data->form5->P38_1 ?: '0' }}</div>
                                                    <div>b) Eks Impor: {{ $data->form5->P38_2 ?: '0' }}</div>
                                                    <div>c) Jantan: {{ $data->form5->P38_3 ?: '0' }}</div>
                                                    <div>d) Betina: {{ $data->form5->P38_4 ?: '0' }}</div>
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