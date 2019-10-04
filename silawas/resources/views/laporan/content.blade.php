<div class="card card-primary card-outline">
    <div class="card-header text-md-right">
        <div class="btn-group" role="group">
            <button id="btnGroupExport" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-file-download mr-1"></i> Ekspor
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#"><i class="far fa-file-pdf text-red mr-1"></i> PDF</a>
                <a class="dropdown-item" href="#"><i class="far fa-file-excel text-green mr-1"></i> Excel</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="laporan-header">
            <div class="font-weight-bold text-center mb-3">
                <div>FORMULIR LAPORAN REKAPITULASI</div>
                <div>HASIL PENGAWASAN KESMAVET</div>
                <div>PERIODE ... TAHUN ...</div>
            </div>
            <table class="mb-3">
                <tr>
                    <td>No. Registrasi Pengawas</td><td class="px-1">:</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td>Nama Petugas</td><td class="px-1">:</td>
                    <td>...</td>
                </tr>
                <tr>
                    <td>Nama Instansi</td><td class="px-1">:</td>
                    <td>...</td>
                </tr>
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
                    <td>Rekomendasi/Tindak Lanjut</td>
                    <td>Hasil Tindak Lanjut</td>
                    <td>&nbsp;</td>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>{{ date('Y-m-d') }}</td>
                        <td>Unit Usaha</td>
                        <td>RPH</td>
                        <td>Tidak Ada</td>
                        <td>Tidak Ada</td>
                        <td>Tidak Ada</td>
                        <td class="text-center">
                            <a href="#" target="_blank" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="laporan-footer mb-3">
            <div class="row">
                <div class="col-4 offset-8 text-center">
                    <div class="mb-4">......, ....................</div>
                    <div>ttd</div>
                    <div class="mt-4">(Nama Petugas)</div>
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