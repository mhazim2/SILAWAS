@extends('layouts.app')

@section('title', 'Formulir 9')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Formulir 9</h1>
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
                            <form action="/profile" enctype="multipart/form-data" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="textfield_example">Nama Unit Usaha</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">Alamat Unit Usaha</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">Pemilik Unit Usaha/Nama Kantor Pusat</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">Alamat Kantor Pusat</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">No. Telp Kantor Pusat</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">Fax Kantor Pusat</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">Email Kantor Pusat</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">Penanungung Jawab Teknis</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">No. Telp Penanung Jawab Teknis</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">Tahun Operasional</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-kesmavet btn-kesmavet-block float-right mt-4">
                                        Simpan
                                    </button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            </div>
                            <div class="tab-pane" id="tambahan">
                                <div class="form-group">
                                    <label for="textfield_example">Kapasitas Pemeliharaan</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">Jumlah Populasi Ternak</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="combobox_example">Kategori Usaha</label>
                                    <select class="form-control select2" id="combobox_example" name="combobox_example">
                                        <option disabled>-- Pilih --</option>
                                        <option value="1">Kecil ( < 20 Ekor )</option>
                                        <option value="2">Sedang (20 - 100 Ekor)</option>
                                        <option value="3">Besar ( > 100 Ekor)</option>
                                    </select>
                                    @error('combobox_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">Total Produksi Susu</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="combobox_example">Wilayah Peredaran</label>
                                    <select class="form-control select2" id="combobox_example" name="combobox_example">
                                        <option disabled>-- Pilih --</option>
                                        <option value="1">Lokal</option>
                                        <option value="2">Lintas Kab-Kota</option>
                                        <option value="3">Lintas Provinsi</option>
                                        <option value="4">Ekspor</option>
                                    </select>
                                    @error('combobox_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">Jumlah Karyawan</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-kesmavet btn-kesmavet-block float-right mt-4">
                                        Simpan
                                    </button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="tab-pane" id="survey">
                                <div class="form-group">
                                    <label for="textfield_example">Nomor Izin Usaha</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">NPWP</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">SIUP</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">NIB</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Fotocopy Sertifikat Veteriner</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="file_example" name="file_example">
                                            <label class="custom-file-label" for="file_example">Choose file</label>
                                        </div>
                                    </div>
                                    @error('file_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">Nama Dokter Hewan Penanungung Jawab Teknis</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah pemberian pengobatan di bawah pengawasan dokter hewan?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">Nomor dan tanggal NKV</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Surveilans terkahir</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" 
                                               class="form-control" 
                                               id="datepicker_example" 
                                               name="datepicker_example" 
                                               value="{{ old('datepicker_example') }}">
                                    </div>
                                    @error('datepicker_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    @push('scripts')
                                        <script>
                                            $(function() {
                                                $('input[name="datepicker_example"]').daterangepicker({
                                                    singleDatePicker: true,
                                                    showDropdowns: true,
                                                    minYear: 1901,
                                                    maxYear: parseInt(moment().format('YYYY'), 10),
                                                });
                                            });
                                        </script>
                                    @endpush
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">Tindak lanjut temuan hasil surveilans</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah area peternakan dirancang untuk mencegah/membatasi akses masuk hewan atau manusia dari luar?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah area peternakan memiliki pagar untuk membatasi akses?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah dilakukan pemisahan hewan baru dan hewan lama?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah ada kandang isolasi untuk hewan yang sakit?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah sarana dan prasarana memenuhi/memdai (pemerahan,penyimpanan,pengangukan dan pengiriman susu)</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah prosedur pemeliharaan hewan menerapkan prinsip-prinsip kesejahteraan hewan?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah metode pemerahan memperhatikan kebersihan ambing?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah ada penanganan terhadap susu yang berasal dari hewan yang sedang dalam
                                        pengobatan dengan menggunakan antibiotik (masitis dan penyakit lainnya)?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana
                                        (sanitasi): (unit usaha budidaya perah dan unit pemerahan susu)</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah sarana dan prasarana untuk kebersihan personal memadai?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah sarana dan prasarana untuk kebersihan personal memadai?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah sarana dan prasarana untuk kebersihan personal memadai?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah dilakukan program pengendalian hama dan serangga?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah ada prosedur penanganan terhadap hewan yang sakit/mati?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Apakah dilakukan pengolahan limbah?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example_2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-kesmavet btn-kesmavet-block float-right mt-4">
                                        Simpan
                                    </button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id="catatan">
                                <div class="form-group">
                                    <label for="textarea_example">Catatan</label>
                                    <textarea class="form-control @error('textarea_example') is-invalid @enderror" 
                                              rows="3" 
                                              id="textarea_example" 
                                              name="textarea_example">
                                              {{ old('textarea_example') }}
                                    </textarea>
                                    @error('textarea_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textarea_example">Rekomendasi Tindak Lanjut</label>
                                    <textarea class="form-control @error('textarea_example') is-invalid @enderror" 
                                              rows="3" 
                                              id="textarea_example" 
                                              name="textarea_example">
                                              {{ old('textarea_example') }}
                                    </textarea>
                                    @error('textarea_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Pengawas 1</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Pengawas 2</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Pengawas 3</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Penangung Jawab Unit Usaha</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}" autofocus>
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-kesmavet btn-kesmavet-block float-right mt-4">
                                        Simpan
                                    </button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection