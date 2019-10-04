@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Pengangkutan Produk Hewan')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Pengangkutan Produk Hewan</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist14.survey') }}">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist14.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="umum">
                                <form action="{{ route('checklist14.umum') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if(count($errors)>0)
                                                @foreach($errors->all() as $error)
                                                    <div class="alert alert-dismissible alert-danger mb-3">
                                                        {{$error}}
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label for="namaPemilikProduk">1. Nama Pemilik Produk Hewan</label>
                                            <input type="text" class="form-control" id="namaPemilikProduk" name="namaPemilikProduk">
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label for="alamatPemilikProduk">2. Alamat Pemilik Produk Hewan</label>
                                            <textarea class="form-control" rows="3" id="alamatPemilikProduk" name="alamatPemilikProduk"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>3. Kontak Pusat</label>
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="telpPusat" class="font-weight-normal">No. Telp</label>
                                                    <input type="text" class="form-control" id="telpPusat" name="telpPusat">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="faxPusat" class="font-weight-normal">Fax</label>
                                                    <input type="text" class="form-control" id="faxPusat" name="faxPusat">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="emailPusat" class="font-weight-normal">Email</label>
                                                    <input type="text" class="form-control" id="emailPusat" name="emailPusat">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-3">
                                            <label for="jenisAlatAngkut">4. Jenis Alat Angkut</label>
                                            <select class="form-control select2" id="jenisAlatAngkut" name="jenisAlatAngkut">
                                                <option value="" selected>-- Pilih --</option>
                                                <option value="Mobil Box">Mobil Box</option>
                                                <option value="Mobil Box Berpendingin">Mobil Box Berpendingin</option>
                                                <option value="Kontainer Berpendingin">Kontainer Berpendingin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-3">
                                            <label for="statusKepemilikan">5. Status Kepemilikan Alat Angkut</label>
                                            <select class="form-control select2" id="statusKepemilikan" name="statusKepemilikan">
                                                <option value="" selected>-- Pilih --</option>
                                                <option value="Milik Sendiri">Milik Sendiri</option>
                                                <option value="Sewa">Sewa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-4">
                                            <label for="nomorPolisi">6. Nomor Polisi Kendaraan</label>
                                            <input type="text" class="form-control" id="nomorPolisi" name="nomorPolisi">
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label>7. Pengemudi</label>
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="namaPengemudi" class="font-weight-normal">Nama</label>
                                                    <input type="text" class="form-control" id="namaPengemudi" name="namaPengemudi">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-lg-4">
                                                    <label for="telpPengemudi" class="font-weight-normal">No. Telp</label>
                                                    <input type="text" class="form-control" id="telpPengemudi" name="telpPengemudi">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="kapasitasAlatAngkut">8. Kapasitas Alat Angkut</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="kapasitasAlatAngkut">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Kg</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="jumlahProdukAngkut">9. Jumlah Produk Hewan Yang Diangkut</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="jumlahProdukAngkut">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Kg</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label for="jenisProduk">10. Jenis Produk Hewan Yang Diangkut</label>
                                            <select class="form-control select2" id="jenisProduk" name="jenisProduk[]" multiple="multiple" data-placeholder="Pilih Jenis Produk" onchange="check_jenisProduk()">
                                                <option value="Daging Ayam">Daging Ayam</option>
                                                <option value="Daging Sapi">Daging Sapi</option>
                                                <option value="Daging Kerbau">Daging Kerbau</option>
                                                <option value="Daging Babi">Daging Babi</option>
                                                <option value="Susu">Susu</option>
                                                <option value="Telur">Telur</option>
                                                <option value="Produk Hewan Non Pangan">Produk Hewan Non Pangan</option>
                                                <option id="option_jenisProduk_lainnya" value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_jenisProduk_lainnya" class="mt-3 mt-lg-0" style="display:none">
                                                <label for="jenisProduk_lainnya">Jenis Jenis Produk Lainnya</label>
                                                <input id="jenisProduk_lainnya" type="text" class="form-control" name="jenisProduk_lainnya">
                                                <small class="form-text text-muted"><b>Hint:</b> Jika lebih dari satu pisahkan dengan tanda koma (, )</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label>11. Asal Produk Hewan</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block" onclick="check_sumber_lokal()">
                                                    <input id="check_sumber_lokal" type="checkbox" name="check_sumber_lokal" value="1">
                                                    <label class="font-weight-normal" for="check_sumber_lokal">Lokal</label>
                                                </div>
                                                <div id="hidden_sumber_lokal" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="form-group">
                                                        <label>Sumber</label>
                                                        <input type="text" class="form-control" name="sumber_lokal">
                                                    </div>
                                                </div>
                                                <div class="icheck-wisteria d-block" onclick="check_sumber_impor()">
                                                    <input id="check_sumber_impor" type="checkbox" name="check_sumber_impor" value="1">
                                                    <label class="font-weight-normal" for="check_sumber_impor">Ex-impor</label>
                                                </div>
                                                <div id="hidden_sumber_impor" class="bg-kesmavet p-2 mb-5" style="display:none">
                                                    <div class="form-group">
                                                        <label>Sumber</label>
                                                        <input type="text" class="form-control" name="sumber_impor">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-4">
                                            <label for="tujuanPengiriman">12. Tujuan Pengiriman</label>
                                            <input type="text" class="form-control" id="tujuanPengiriman" name="tujuanPengiriman">
                                        </div>
                                    </div>
                                    <div class="form-group mb-5">
                                        <button type="submit" class="btn btn-kesmavet">
                                            Simpan & Lanjutkan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @push('scripts')
        <script src="{{ asset('js/checklist14.js') }}"></script>
    @endpush
@endsection