<div class="card card-primary card-outline">
    <div class="card-header text-md-right">
        <a href="/silawas/laporan/download/excel/{{$start_date}}/{{$end_date}}" class="btn btn-primary">
            <i class="fas fa-file-download mr-1"></i> Ekspor
        </a>
        <!-- <div class="btn-group" role="group">
            <button id="btnGroupExport" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-file-download mr-1"></i> Ekspor
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#"><i class="far fa-file-pdf text-red mr-1"></i> PDF</a>
                <a class="dropdown-item" href="#"><i class="far fa-file-excel text-green mr-1"></i> Excel</a>
            </div>
        </div> -->
    </div>
    <div class="card-body">
        <div class="laporan-header">
            <div class="font-weight-bold text-center mb-3">
                <div>FORMULIR LAPORAN REKAPITULASI</div>
                <div>HASIL PENGAWASAN KESMAVET</div>
                <div>PERIODE ... TAHUN ...</div>
            </div>
            <table class="mb-3">
                @foreach ($data as $data)
                <tr>
                    <td>No. Registrasi Pengawas</td><td class="px-1">:</td>
                <td>{{ $data->NoRegistrasi ? $data->NoRegistrasi : '-'  }}</td>
                </tr>
                <tr>
                    <td>Nama Petugas</td><td class="px-1">:</td>
                    <td>{{ $data->NamaLengkap ? $data->NamaLengkap : '-'  }}</td>
                </tr>
                <tr>
                    <td>Nama Instansi</td><td class="px-1">:</td>
                    <td>{{ $data->unitKerja ? $data->unitKerja : '-'  }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="table-responsive mb-3">
            <table id="laporan-table" class="table table-sm table-bordered table-striped">
                <thead class="font-weight-bold">
                    <td class="text-center">No</td>
                    <td>Tanggal Pelaksanaan</td>
                    <td>Nama Unit Usaha</td>
                    <td>Jenis Unit Usaha</td>
                    <td>Hasil Temuan</td>
                    <td>Rekomendasi Tindak Lanjut</td>
                    <td>Hasil Tindak Lanjut</td>
                    <td>&nbsp;</td>
                </thead>
                <tbody>
                    @foreach ($listForms as $key=>$form)
                        <tr>
                            <td class="text-center">{{ ++$key }}</td>
                            <td>{{ date('Y-m-d', strtotime($form->created_at)) }}</td>
                            <td> 
                                @if ($form->idForm14)
                                    {{ $form->namaPemilik ?  $form->namaPemilik : '-' }}
                                @else
                                    {{ $form->unitUsaha ? $form->unitUsaha->NamaUnitUsaha : '-' }}
                                @endif
                            </td>
                            <td>{{ $form->tipeForm }}</td>
                            <td>{{ $form->catatan }}</td>
                            <td>{{ $form->rekomendasi ?: '-' }}</td>
                            <td>-</td>
                            <td class="text-center">
                                @if ($form->idForm1)
                                    <a href="/silawas/pengawasan/checklist/1/detail/{{ $form->id }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                            <small><i class="fas fa-eye"></i></small>
                                        </button>
                                    </a>
                                @elseif ($form->idForm2)
                                    <a href="/silawas/pengawasan/checklist/2/detail/{{ $form->id }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                            <small><i class="fas fa-eye"></i></small>
                                        </button>
                                    </a>
                                @elseif ($form->idForm3)
                                    <a href="/silawas/pengawasan/checklist/3/detail/{{ $form->id }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                            <small><i class="fas fa-eye"></i></small>
                                        </button>
                                    </a>
                                @elseif ($form->idForm4)
                                    <a href="/silawas/pengawasan/checklist/4/detail/{{ $form->id }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                            <small><i class="fas fa-eye"></i></small>
                                        </button>
                                    </a>
                                @elseif ($form->idForm5)
                                    <a href="/silawas/pengawasan/checklist/5/detail/{{ $form->id }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                            <small><i class="fas fa-eye"></i></small>
                                        </button>
                                    </a>
                                @elseif ($form->idForm6)
                                    <a href="/silawas/pengawasan/checklist/6/detail/{{ $form->id }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                            <small><i class="fas fa-eye"></i></small>
                                        </button>
                                    </a>
                                @elseif ($form->idForm7)
                                    <a href="/silawas/pengawasan/checklist/7/detail/{{ $form->id }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                            <small><i class="fas fa-eye"></i></small>
                                        </button>
                                    </a>
                                @elseif ($form->idForm8)
                                    <a href="/silawas/pengawasan/checklist/8/detail/{{ $form->id }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                            <small><i class="fas fa-eye"></i></small>
                                        </button>
                                    </a>
                                @elseif ($form->idForm9)
                                    <a href="/silawas/pengawasan/checklist/9/detail/{{ $form->id }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                            <small><i class="fas fa-eye"></i></small>
                                        </button>
                                    </a>
                                @elseif ($form->idForm10)
                                    <a href="/silawas/pengawasan/checklist/10/detail/{{ $form->id }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                            <small><i class="fas fa-eye"></i></small>
                                        </button>
                                    </a>
                                @elseif ($form->idForm11)
                                    <a href="/silawas/pengawasan/checklist/11/detail/{{ $form->id }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                            <small><i class="fas fa-eye"></i></small>
                                        </button>
                                    </a>
                                @elseif ($form->idForm12)
                                    <a href="/silawas/pengawasan/checklist/12/detail/{{ $form->id }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                            <small><i class="fas fa-eye"></i></small>
                                        </button>
                                    </a>
                                @elseif ($form->idForm13)
                                    <a href="/silawas/pengawasan/checklist/13/detail/{{ $form->id }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                            <small><i class="fas fa-eye"></i></small>
                                        </button>
                                    </a>
                                @elseif ($form->idForm14)
                                    <a href="/silawas/pengawasan/checklist/14/detail/{{ $form->id }}" target="_blank">
                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                            <small><i class="fas fa-eye"></i></small>
                                        </button>
                                    </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="laporan-footer mb-3">
            <div class="row">
                <div class="col-4 offset-8 text-center">
                    <div class="mb-4">......, ....................</div>
                    <div>ttd</div>
                    <div class="mt-4">{{ $data->NamaLengkap ? "(". $data->NamaLengkap .")" : '-' }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div>Catatan :</div>
                    <div>...</div>
                </div>
            </div>
        </div>
    </div>
</div>