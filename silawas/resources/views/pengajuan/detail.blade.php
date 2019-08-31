@extends('layouts.app')

@section('title', 'Detal Formulir')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Formulir 1 - CV Maju Abadi</h1>
                        <small>Formulir dan Panduan Pengisian Ceklis Tempat Budidaya Hewan Perah dan Pemerahan Susu</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#unit" data-toggle="tab">Informasi Unit Usaha</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tambahan" data-toggle="tab">Informasi Tambahan</a></li>
                            <li class="nav-item"><a class="nav-link" href="#survey" data-toggle="tab">Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="#catatan" data-toggle="tab">Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="unit">
                                <table class="detail-view2">
                                    <tr>
                                        <td class="detail-label">Nama Unit Usaha</td>
                                        <td>:</td>
                                        <td>CV Maju Abadi</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Alamat Unit Usaha</td>
                                        <td>:</td>
                                        <td>JL.Harsono RM Ragunan</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Pemilik Unit Usaha/Nama Kantor Pusat</td>
                                        <td>:</td>
                                        <td>Super Farm Abadi Jaya</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Alamat Kantor Pusat</td>
                                        <td>:</td>
                                        <td>JL. Harsono RM Ragunan Jakarya Selatan</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">No. Telp Kantor Pusat</td>
                                        <td>:</td>
                                        <td>021332112341</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Fax Kantor Pusat</td>
                                        <td>:</td>
                                        <td>027555561234</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Email Kantor Pusat</td>
                                        <td>:</td>
                                        <td>official@superfarm.com</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Penanungung Jawab Teknis</td>
                                        <td>:</td>
                                        <td>Kamal</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">No. Telp Penanung Jawab Teknis</td>
                                        <td>:</td>
                                        <td>081987678646</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Tahun Operasional</td>
                                        <td>:</td>
                                        <td>2019</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane" id="tambahan">
                                <table class="detail-view2">
                                    <tr>
                                        <td class="detail-label">Kapasitas Pemeliharaan</td>
                                        <td>:</td>
                                        <td>Besar</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Jumlah Populasi Ternak</td>
                                        <td>:</td>
                                        <td>1200</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Kategori Usaha</td>
                                        <td>:</td>
                                        <td>Besar ( > 100 ekor )</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Total Produksi Susu</td>
                                        <td>:</td>
                                        <td>1000 liter</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Wilayah Peredaran</td>
                                        <td>:</td>
                                        <td>Ekspor</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Jumlah Karyawan</td>
                                        <td>:</td>
                                        <td>110</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane" id="survey">
                                <table class="detail-view2">
                                    <tr>
                                        <td class="detail-label">Nomor Izin Usaha</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">123456789</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">NPWP</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">645328176123467</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">SIUP</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">4325684</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">NIB</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">1234654325</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Fotocopy Sertifikat Veteriner</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><img src="{{ asset('dist/img/user.png') }}" height="200" alt="Example Image"></td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Nama Dokter Hewan Penanungung Jawab Teknis</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Amir</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Apakah pemberian pengobatan di bawah pengawasan dokter hewan?</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Ya</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Nomor dan tanggal NKV</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">9876543212345</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Surveilans terkahir</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">20 Agustus 2019</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Tindak lanjut temuan hasil surveilans</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Dibiarkan</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Apakah area peternakan dirancang untuk mencegah/membatasi akses masuk hewan atau manusia dari luar?</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Ya</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Apakah area peternakan memiliki pagar untuk membatasi akses?</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Ya</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Apakah dilakukan pemisahan hewan baru dan hewan lama?</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Ya</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Apakah ada kandang isolasi untuk hewan yang sakit?</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Ya</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Apakah sarana dan prasarana memenuhi/memdai (pemerahan,penyimpanan,pengangukan dan pengiriman susu)</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Ya</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Apakah prosedur pemeliharaan hewan menerapkan prinsip-prinsip kesejahteraan hewan?</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Ya</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Apakah metode pemerahan memperhatikan kebersihan ambing?</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Ya</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Apakah ada penanganan terhadap susu yang berasal dari hewan yang sedang dalam pengobatan dengan menggunakan antibiotik (masitis dan penyakit lainnya)?</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Ya</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi): (unit usaha budidaya perah dan unit pemerahan susu)</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Ya</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Apakah sarana dan prasarana untuk kebersihan personal memadai?</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Ya</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Apakah dilakukan program pengendalian hama dan serangga?</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Ya</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Apakah ada prosedur penanganan terhadap hewan yang sakit/mati?</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Ya</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Apakah dilakukan pengolahan limbah?</td>
                                        <td>:</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Ya</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane" id="catatan">
                                <table class="detail-view2">
                                    <tr>
                                        <td class="detail-label">Catatan</td>
                                        <td>:</td>
                                        <td>Tidak Ada</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Rekomendasi Tindak Lanjut</td>
                                        <td>:</td>
                                        <td>Tidak Ada</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Pengawas 1</td>
                                        <td>:</td>
                                        <td>Feby</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Pengawas 2</td>
                                        <td>:</td>
                                        <td>Alifka</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Pengawas 3</td>
                                        <td>:</td>
                                        <td>Hakim</td>
                                    </tr>
                                    <tr>
                                        <td class="detail-label">Penangung Jawab Unit Usaha</td>
                                        <td>:</td>
                                        <td>Kamal</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection