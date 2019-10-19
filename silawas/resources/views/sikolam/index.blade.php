@extends('layouts.sikolam')

@section('content')
    <div class="jumbotron jumbotron-fluid bg-kesmavet text-center mb-0">
        <div class="container">
            <h1 class="display-5">Kolom Laporan Masyarakat - Kesmavet</h1>
            <p class="lead">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang.</p>
            <hr class="jumbotron-divider">
        </div>
    </div>
    <div class="jumbotron-extra"></div>

    <section class="page-content mb-5">
        <div class="sikolam-tabs container">
            <ul class="nav nav-tabs nav-fill" id="sikolamTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="aduan-tab" data-toggle="tab" href="#aduan" role="tab" aria-controls="aduan" aria-selected="true">
                        <b>Aduan</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="edukasi-tab" data-toggle="tab" href="#edukasi" role="tab" aria-controls="edukasi" aria-selected="false">
                        <b>Edukasi</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pengawas-tab" data-toggle="tab" href="#pengawas" role="tab" aria-controls="pengawas" aria-selected="false">
                        <b>Pengawas</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="laporan-tab" data-toggle="tab" href="#laporan" role="tab" aria-controls="laporan" aria-selected="false">
                        <b>Laporan</b>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="sikolamTabContent">
                <div class="tab-pane fade show active" id="aduan" role="tabpanel" aria-labelledby="aduan-tab">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="kontak">Kontak</label>
                            <input type="text" class="form-control" id="kontak" name="kontak">
                            <small class="form-text text-muted">Tuliskan alamat email atau nomor telepon yang dapat dihubungi.</small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <option disabled selected>-- Pilih Kategori --</option>
                                <option>Kategori 1</option>
                                <option>Kategori 2</option>
                                <option>Kategori 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="aduan">Deskripsi Aduan</label>
                            <textarea class="form-control" id="aduan" name="aduan" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="bukti_fisik">Upload Bukti Fisik</label>
                            <input type="file" class="form-control-file" id="bukti_fisik" name="bukti_fisik">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-kesmavet float-right">Submit</button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="edukasi" role="tabpanel" aria-labelledby="edukasi-tab">
                    <div class="row edumat-list">
                        <div class="col-12">
                            <div class="text-center">
                                Tidak ada material edukasi.
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            <div class="card" title="Buku Pedoman Pengawasan Kesehatan Masyarakat Veteriner v4" data-toggle="tooltip" data-placement="right">
                                <div class="card-img-container">
                                    <img src="{{ asset('files/panduan/Buku_Pedoman_VTRNR_V4.png') }}" class="card-img-top">
                                </div>
                                <div class="card-body p-2">
                                    <a href="{{ asset('files/panduan/Buku_Pedoman_VTRNR_V4.pdf') }}" target="_blank">
                                        <button class="btn btn-kesmavet btn-block btn-flat">
                                            Download <i class="fas fa-external-link-alt ml-1"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="tab-pane fade" id="pengawas" role="tabpanel" aria-labelledby="pengawas-tab">
                    <div class="table-responsive">
                        <table id="pengawas-datatable" class="table table-sm table-bordered table-striped">
                            <thead class="font-weight-bold">
                                <td class="text-center">No</td>
                                <td>Nama Pengawas</td>
                                <td>Instansi</td>
                                <td>Alamat Kantor</td>
                                <td>No. Telp</td>
                                <td>Email</td>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Wiradani</td>
                                    <td>Kesmavet</td>
                                    <td>DKI Jakarta</td>
                                    <td>08123456789</td>
                                    <td>wiradani@kesmavet.com</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Wawan</td>
                                    <td>Kesmavet</td>
                                    <td>DKI Jakarta</td>
                                    <td>08987654321</td>
                                    <td>wawan@kesmavet.com</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>Feby</td>
                                    <td>Kesmavet</td>
                                    <td>DKI Jakarta</td>
                                    <td>08987654321</td>
                                    <td>feby@kesmavet.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="laporan" role="tabpanel" aria-labelledby="laporan-tab">
                    <div class="laporan-item row">
                        <div class="col-12">
                            <div class="text-center">
                                Tidak ada laporan.
                            </div>
                        </div>
                        <!-- <div class="col-12 mb-3">
                            <h5 class="font-weight-bold">Judul 1</h5>
                            <img src="https://picsum.photos/150/150" alt="Gambar Laporan" class="float-left img-thumbnail">
                            <p class="text-justify">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
                                has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
                                took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>
                            <a class="btn btn-kesmavet float-right" href="{{ route('sikolam.laporan') }}">SELENGKAPNYA >></a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-12 mb-3">
                            <h5 class="font-weight-bold">Judul 2</h5>
                            <img src="https://picsum.photos/200/300" alt="Gambar Laporan" class="float-left img-thumbnail">
                            <p class="text-justify">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
                                has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
                                took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>
                            <a class="btn btn-kesmavet float-right" href="{{ route('sikolam.laporan') }}">SELENGKAPNYA >></a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-12 mb-3">
                            <h5 class="font-weight-bold">Judul 3</h5>
                            <img src="https://picsum.photos/300/200" alt="Gambar Laporan" class="float-left img-thumbnail">
                            <p class="text-justify">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
                                has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
                                took a galley of type and scrambled it to make a type specimen book. It has survived not only 
                                five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>
                            <a class="btn btn-kesmavet float-right" href="{{ route('sikolam.laporan') }}">SELENGKAPNYA >></a>
                            <div class="clearfix"></div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection