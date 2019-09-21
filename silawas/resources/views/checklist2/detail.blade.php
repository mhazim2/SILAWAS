@extends('layouts.app')

@section('title', 'Detail Formulir')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row justify-content-between mb-2">
                    <div class="col-md-8">
                        <h1 class="m-0 text-dark">{{ $data->unitUsaha->NamaUnitUsaha }}</h1>
                        <small>Ceklis Pengawasan Tempat Penampungan Susu</small>
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
                                <a class="dropdown-item" href="#">Ceklis Kosong</a>
                                <a class="dropdown-item" href="/export/formulir2/{{ $data->id }}">Ceklis Hasil Survey</a>
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
                                            <td>Jenis Unit Usaha</td><td>:</td>
                                            <td>{{ $data->form2->jenisUnitUsaha ?: '-' }}</td>
                                        </tr>
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
                                            <td>Kapasitas Penampungan</td><td>:</td>
                                            <td>{{ $data->form2->kapasitasPenampungan ? $data->form2->kapasitasPenampungan.' liter' : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Realisasi Pemanfaatan Saat Ini</td><td>:</td>
                                            <td>{{ $data->form2->realisasiPemanfaatan ? $data->form2->realisasiPemanfaatan.' liter' : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Wilayah Peredaran</td><td>:</td>
                                            <td>{{ $data->form2->wilayahPeredaran ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Karyawan</td><td>:</td>
                                            <td>{{ $data->form2->jumlahKaryawan ? $data->form2->jumlahKaryawan.' orang' : '-' }}</td>
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
                                                        <tr><td>{!! $data->form2->check_p1_1 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->form2->check_p1_2 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->form2->check_p1_3 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->form2->check_p1_4 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                        <tr><td>{!! $data->form2->check_p1_5 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}</td></tr>
                                                    </table>
                                                </td>
                                                <td class="text-center text-danger">
                                                    <br>
                                                    <table class="table table-inner table-borderless table-sm mb-0">
                                                        <tr><td>{!! $data->form2->check_p1_1 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->form2->check_p1_2 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->form2->check_p1_3 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->form2->check_p1_4 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                        <tr><td>{!! $data->form2->check_p1_5 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}</td></tr>
                                                    </table>
                                                </td>
                                                <td>
                                                    <br>
                                                    <table class="table table-inner table-borderless table-sm mb-0">
                                                        <tr>{!! $data->form2->P1_1 ? '<td><b>No:</b> '.$data->form2->P1_1.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->form2->P1_2 ? '<td><b>No:</b> '.$data->form2->P1_2.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->form2->P1_3 ? '<td><b>No:</b> '.$data->form2->P1_3.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->form2->P1_4 ? '<td><b>No:</b> '.$data->form2->P1_4.'</td>' : '<td>-</td>' !!}</tr>
                                                        <tr>{!! $data->form2->P1_5 ? '<td><b>No:</b> '.$data->form2->P1_5.'</td>' : '<td>-</td>' !!}</tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2. Apakah sudah memiliki sertifikat NKV?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form2->check_p2 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form2->check_p2 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form2->check_p2)
                                                        <div><b>No:</b> {{ $data->form2->P2_1 ?: '-' }}</div>
                                                        <div><b>Tanggal Penerbitan:</b> {{ $data->form2->P2_2 ?: '-' }}</div>
                                                        <div><b>Surveilans terakhir:</b> {{ $data->form2->P2_3 ?: '-' }}</div>
                                                        <div><b>Tindak lanjut temuan:</b> {{ $data->form2->P2_4 ?: '-' }}</div>
                                                    @else
                                                        {{ $data->form2->P2_5 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3. Apakah sudah memiliki sertifikat halal?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form2->check_p3 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form2->check_p3 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->form2->check_p3)
                                                        <div><b>No:</b> {{ $data->form2->P3_1 ?: '-' }}</div>
                                                        <div><b>Tanggal Penerbitan:</b> {{ $data->form2->P3_2 ?: '-' }}</div>
                                                        <div><b>Masa Berlaku:</b> {{ $data->form2->P3_3 ? $data->form2->P3_3.' tahun' : '-' }}</div>
                                                    @else
                                                        {{ $data->form2->P3_4 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4. Apakah ada pendataan sumber susu?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! ($data->check_p4) ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! ($data->check_p4) ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    @if ($data->check_p4)
                                                        <ul>
                                                            @foreach($supliers as $suplier)
                                                                <li>
                                                                    {{ $suplier->namaSuplier ? $suplier->namaSuplier.', ' : '' }}
                                                                    {{ $suplier->tanggal ? $suplier->tanggal.', ' : '' }}
                                                                    {{ $suplier->jumlah ? $suplier->jumlah.' liter' : '' }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @else
                                                        {{ $data->form2->P4_2 ?: '-' }}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5. Apakah area penampungan didesain untuk mencegah/membatasi akses masuk hewan 
                                                    atau manusia dari luar?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form2->check_p5 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form2->check_p5 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form2->P5 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6. Apakah sarana dan prasarana memenuhi/memadai sesuai kapasitas penampungan susu?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form2->check_p6 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form2->check_p6 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form2->P6 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    7. Apakah memiliki sarana pendingin untuk penyimpanan susu?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form2->check_p7 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form2->check_p7 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form2->P7 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    8. Apakah ada pemeriksaan/pengujian laboratorium terhadap susu secara berkala?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form2->check_p8 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form2->check_p8 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form2->P8 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    9. Apakah instrumen uji dikalibrasi secara berkala?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form2->check_p9 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form2->check_p9 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form2->P9 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    10. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form2->check_p10 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form2->check_p10 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form2->P10 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    11. Apakah sarana dan prasarana higiene personal memadai?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form2->check_p11 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form2->check_p11 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form2->P11 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    12. Apakah dilakukan program pengendalian hama dan serangga?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form2->check_p12 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form2->check_p12 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form2->P12 ?: '-' }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    13. Apakah dilakukan pengolahan limbah?
                                                </td>
                                                <td class="text-center text-success">
                                                    {!! $data->form2->check_p13 ? '<i class="fas fa-check"></i>' : '&nbsp;' !!}
                                                </td>
                                                <td class="text-center text-danger">
                                                    {!! $data->form2->check_p13 ? '&nbsp;' : '<i class="fas fa-times"></i>' !!}
                                                </td>
                                                <td>
                                                    {{ $data->form2->P13 ?: '-' }}
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
                                            <td>{{ $pengawas['1']->user->orang->NamaLengkap ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pengawas 2</td>
                                            <td>:</td>
                                            <td>{{ $pengawas['2']->user->orang->NamaLengkap ?: '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pengawas 3</td>
                                            <td>:</td>
                                            <td>{{ $pengawas['3']->user->orang->NamaLengkap ?: '-' }}</td>
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