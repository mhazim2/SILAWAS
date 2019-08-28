@extends('layouts.app')

@section('title', 'Formulir 9')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Formulir 1</h1>
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
                            <li class="nav-item"><a class="nav-link active" href="#unit" data-toggle="tab">A.Informasi Unit Usaha</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tambahan" data-toggle="tab">B.Informasi Tambahan</a></li>
                            <li class="nav-item"><a class="nav-link" href="#survey" data-toggle="tab">C.Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="#catatan" data-toggle="tab">D.Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="unit">
                            <form action="/unitusaha" enctype="multipart/form-data" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="NamaUnitUsaha">1.Nama Unit Usaha</label>
                                    <input type="text" 
                                           class="form-control @error('NamaUnitUsaha') is-invalid @enderror" 
                                           id="NamaUnitUsaha" 
                                           name="NamaUnitUsaha" 
                                           value="{{ old('NamaUnitUsaha') }}" autofocus>
                                    @error('NamaUnitUsaha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="AlamatUnitUsaha">2.Alamat Unit Usaha</label>
                                    <textarea class="form-control @error('AlamatUnitUsaha') is-invalid @enderror" 
                                              rows="3" 
                                              id="AlamatUnitUsaha" 
                                              name="AlamatUnitUsaha">
                                              {{ old('AlamatUnitUsaha') }}
                                    </textarea>
                                    @error('AlamatUnitUsaha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="NamaKantorPusat">3.Pemilik Unit Usaha/Nama Kantor Pusat</label>
                                    <input type="text" 
                                           class="form-control @error('NamaKantorPusat') is-invalid @enderror" 
                                           id="NamaKantorPusat" 
                                           name="NamaKantorPusat" 
                                           value="{{ old('NamaKantorPusat') }}" autofocus>
                                    @error('NamaKantorPusat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="AlamatKantorPusat">4.Alamat Kantor Pusat</label>
                                    <textarea class="form-control @error('AlamatKantorPusat') is-invalid @enderror" 
                                              rows="3" 
                                              id="AlamatKantorPusat" 
                                              name="AlamatKantorPusat">
                                              {{ old('AlamatKantorPusat') }}
                                    </textarea>
                                    @error('AlamatKantorPusat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Telepon">5.No. Telp Kantor Pusat</label>
                                    <input type="text" 
                                           class="form-control @error('Telepon') is-invalid @enderror" 
                                           id="Telepon" 
                                           name="Telepon" 
                                           value="{{ old('Telepon') }}" autofocus>
                                    @error('Telepon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Fax">6.Fax Kantor Pusat</label>
                                    <input type="text" 
                                           class="form-control @error('Fax') is-invalid @enderror" 
                                           id="Fax" 
                                           name="Fax" 
                                           value="{{ old('Fax') }}" autofocus>
                                    @error('Fax')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="Email">7.Email Kantor Pusat</label>
                                    <input type="text" 
                                           class="form-control @error('Email') is-invalid @enderror" 
                                           id="Email" 
                                           name="Email" 
                                           value="{{ old('Email') }}" autofocus>
                                    @error('Email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="PenangungJawabTeknis">8.Penangung Jawab Teknis</label>
                                    <input type="text" 
                                           class="form-control @error('PenangungJawabTeknis') is-invalid @enderror" 
                                           id="PenangungJawabTeknis" 
                                           name="PenangungJawabTeknis" 
                                           value="{{ old('PenangungJawabTeknis') }}" autofocus>
                                    @error('PenangungJawabTeknis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="KontakPJ">9.No. Telp Penangung Jawab Teknis</label>
                                    <input type="text" 
                                           class="form-control @error('KontakPJ') is-invalid @enderror" 
                                           id="KontakPJ" 
                                           name="KontakPJ" 
                                           value="{{ old('KontakPJ') }}" autofocus>
                                    @error('KontakPJ')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="TahunOperasional">10.Tahun Operasional</label>
                                    <input type="text" 
                                           class="form-control @error('TahunOperasional') is-invalid @enderror" 
                                           id="TahunOperasional" 
                                           name="TahunOperasional" 
                                           value="{{ old('TahunOperasional') }}" autofocus>
                                    @error('TahunOperasional')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-kesmavet btn-kesmavet-block float-right mt-4">
                                        Simpan & Lanjutkan
                                    </button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            </div>
                            <div class="tab-pane" id="tambahan">
                                <div class="form-group">
                                    <label for="textfield_example">1.Kapasitas Pemeliharaan</label>
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
                                    <label for="textfield_example">2.Jumlah Populasi Ternak</label>
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
                                    <label for="combobox_example">3.Kategori Usaha</label>
                                    <select class="form-control select2" id="combobox_example" name="combobox_example">
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
                                    <label for="textfield_example">4.Total Produksi Susu</label>
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
                                    <label for="combobox_example2">5.Wilayah Peredaran</label>
                                    <select class="form-control select2" id="combobox_example2" name="combobox_example2">
                                        <option value="1">Lokal</option>
                                        <option value="2">Lintas Kab-Kota</option>
                                        <option value="3">Lintas Provinsi</option>
                                        <option value="4">Ekspor</option>
                                    </select>
                                    @error('combobox_example2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="textfield_example">6.Jumlah Karyawan</label>
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
                                        Simpan & Lanjutkan
                                    </button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="tab-pane" id="survey">
                                <div class="form-group">
                                    <label for="textfield_example">1.Nomor Izin Usaha</label>
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
                                    <label for="textfield_example">2.NPWP</label>
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
                                    <label for="textfield_example">3.SIUP</label>
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
                                    <label for="textfield_example">4.NIB</label>
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
                                    <label>5.Fotocopy Sertifikat Veteriner</label>
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
                                    <label for="textfield_example">6.Nama Dokter Hewan Penanungung Jawab Teknis</label>
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
                                    <label>7.Apakah pemberian pengobatan di bawah pengawasan dokter hewan?</label>
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
                                    <label for="textfield_example">8.Nomor dan tanggal NKV</label>
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
                                    <label>9.Surveilans terkahir</label>
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
                                    <label for="textfield_example">10.Tindak lanjut temuan hasil surveilans</label>
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
                                    <label>11.Apakah area peternakan dirancang untuk mencegah/membatasi akses masuk hewan atau manusia dari luar?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example2">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example3" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example3">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>12.Apakah area peternakan memiliki pagar untuk membatasi akses?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example4" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example4">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example4" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example4">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>13.Apakah dilakukan pemisahan hewan baru dan hewan lama?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example5" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example5">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example6" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example6">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>14.Apakah ada kandang isolasi untuk hewan yang sakit?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example7" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example7">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example8" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example8">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>15.Apakah sarana dan prasarana memenuhi/memdai (pemerahan,penyimpanan,pengangukan dan pengiriman susu)</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example9" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example9">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example10" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example10">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>16.Apakah prosedur pemeliharaan hewan menerapkan prinsip-prinsip kesejahteraan hewan?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example11" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example11">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example12" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example12">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>17.Apakah metode pemerahan memperhatikan kebersihan ambing?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example13" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example13">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example14" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example14">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>18.Apakah ada penanganan terhadap susu yang berasal dari hewan yang sedang dalam
                                        pengobatan dengan menggunakan antibiotik (masitis dan penyakit lainnya)?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example15" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example15">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example16" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example16">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>19.Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana
                                        (sanitasi): (unit usaha budidaya perah dan unit pemerahan susu)</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example17" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example17">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example18" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example18">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>20.Apakah sarana dan prasarana untuk kebersihan personal memadai?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example19" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example19">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example20" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example20">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>21.Apakah sarana dan prasarana untuk kebersihan personal memadai?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example21" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example21">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example22" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example22">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>22.Apakah sarana dan prasarana untuk kebersihan personal memadai?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example23" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example23">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example23" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example23">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>23.Apakah dilakukan program pengendalian hama dan serangga?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example24" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example24" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example24">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>24.Apakah ada prosedur penanganan terhadap hewan yang sakit/mati?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example25" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example25">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example26" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example26">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>25.Apakah dilakukan pengolahan limbah?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="radio_example27" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example27">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="radio_example28" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example28">Tidak</label>
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
                                        Simpan & Lanjutkan
                                    </button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id="catatan">
                                <div class="form-group">
                                    <label for="textarea_example">1.Catatan</label>
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
                                    <label for="textarea_example">2.Rekomendasi Tindak Lanjut</label>
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
                                    <label>3.Pengawas 1</label>
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
                                    <label>4.Pengawas 2</label>
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
                                    <label>5.Pengawas 3</label>
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
                                    <label>6.Penangung Jawab Unit Usaha</label>
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