@extends('layouts.app')

@section('title', 'Detail Formulir')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row justify-content-between mb-2">
                    <div class="col-md-8">
                        <h1 class="m-0 text-dark">{{ $data->NamaUnitUsaha }}</h1>
                        <small>Ceklis Pengawasan Hotel, Restoran dan Katering</small>
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
                                <a class="dropdown-item" href="/export/formulir13/{{ $surveyID }}">Ceklis Hasil Survey</a>
                                <a class="dropdown-item" href="#">Ceklis yang Sudah Dicap</a>
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