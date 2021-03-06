@extends('layouts.app')

@section('title', 'Ceklis Pengawasan Tempat Pengolahan Pangan Asal Hewan')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Ceklis Pengawasan Tempat Pengolahan Pangan Asal Hewan</h1>
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
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist8.survey') }}">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('checklist8.catatan') }}">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="umum">
                                <form action="{{ route('checklist8.umum') }}" method="POST">
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
                                        <div class="col-lg-5">
                                            <label for="NamaUnitUsaha">1. Nama Unit Usaha <font color="red">*</font></label>
                                            <select class="form-control select2" id="NamaUnitUsaha" name="idUnitUsaha">
                                                <option value="" selected>-- Pilih --</option>
                                                @foreach($list_uu as $uu)
                                                    <option value="{{ $uu->id }}">{{ $uu->NamaUnitUsaha }} </option>
                                                @endforeach
                                            </select>
                                            <small class="form-text text-muted">
                                                Jika tidak ditemukan, silahkan 
                                                <a href="{{ route('unitusaha.create') }}"><u>tambah unit usaha</u></a> 
                                                terlebih dahulu.
                                            </small>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label for="jenisPengolahan">2. Jenis Pengolahan</label>
                                            <select class="form-control select2" id="jenisPengolahan" name="jenisPengolahan[]" multiple="multiple" data-placeholder="Pilih Jenis Pengolahan" onchange="check_jenisPengolahan()">
                                                <option value="Daging Ayam">Daging Ayam</option>
                                                <option value="Daging Sapi">Daging Sapi</option>
                                                <option value="Daging Kerbau">Daging Kerbau</option>
                                                <option value="Daging Babi">Daging Babi</option>
                                                <option value="Susu">Susu</option>
                                                <option value="Telur">Telur</option>
                                                <option id="option_jenisPengolahan_lainnya" value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="hidden_jenisPengolahan_lainnya" class="mt-3 mt-lg-0" style="display:none">
                                                <label for="jenisPengolahan_lainnya">Jenis Jenis Pengolahan Lainnya</label>
                                                <input id="jenisPengolahan_lainnya" type="text" class="form-control" name="jenisPengolahan_lainnya">
                                                <small class="form-text text-muted"><b>Hint:</b> Jika lebih dari satu pisahkan dengan tanda koma (, )</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="kapasitasProduksi">3. Kapasitas Produksi</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="kapasitasProduksi">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Kg/hari</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-4">
                                            <label for="kategoriUsaha">4. Kategori Usaha</label>
                                            <select class="form-control select2" id="kategoriUsaha" name="kategoriUsaha">
                                                <option value="" selected>-- Pilih --</option>
                                                <option value="Kecil">Kecil</option>
                                                <option value="Sedang">Sedang</option>
                                                <option value="Besar">Besar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="realisasiProduksi">5. Realisasi Produksi</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="realisasiProduksi">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">Kg/hari</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="waktuProduksi">6. Waktu Produksi</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="waktuProduksi">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">hari/minggu</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-6">
                                            <label>7. Asal Sumber Bahan Baku</label>
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
                                        <div class="col-lg-6">
                                            <label>8. Distribusi Produk Olahan</label>
                                            <div class="d-block">
                                                <div class="icheck-wisteria d-block">
                                                    <input id="distribusiProduk_1" type="checkbox" name="distribusiProduk[]" value="Lokal">
                                                    <label class="font-weight-normal" for="distribusiProduk_1">Lokal</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="distribusiProduk_2" type="checkbox" name="distribusiProduk[]" value="Lintas Kab-kota">
                                                    <label class="font-weight-normal" for="distribusiProduk_2">Lintas Kab-Kota</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="distribusiProduk_3" type="checkbox" name="distribusiProduk[]" value="Lintas Provinsi">
                                                    <label class="font-weight-normal" for="distribusiProduk_3">Lintas Provinsi</label>
                                                </div>
                                                <div class="icheck-wisteria d-block">
                                                    <input id="distribusiProduk_4" type="checkbox" name="distribusiProduk[]" value="Ekspor">
                                                    <label class="font-weight-normal" for="distribusiProduk_4">Ekspor</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-5">
                                        <div class="col-lg-12">
                                            <label for="jumlahKaryawan">9. Jumlah Karyawan</label>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="jumlahKaryawan">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">orang</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
        <script src="{{ asset('js/checklist8.js') }}"></script>
    @endpush
@endsection