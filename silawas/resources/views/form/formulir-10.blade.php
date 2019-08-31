@extends('layouts.app')

@section('title', 'Formulir 10')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Formulir 10</h1>
                        <small>Formulir dan Panduan Pengisian Ceklis Gudang Penyimpanan Dingin/Beku</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card formulir">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#utama" data-toggle="tab">A. Informasi Utama</a></li>
                            <li class="nav-item"><a class="nav-link" href="#survey" data-toggle="tab">B. Survey</a></li>
                            <li class="nav-item"><a class="nav-link" href="#catatan" data-toggle="tab">C. Catatan</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="utama">
                                <div class="form-group mb-5">
                                    <label for="unit_usaha">1. Nama Unit Usaha</label>
                                    <select class="form-control select2" id="unit_usaha" name="unit_usaha">
                                        <option value="1">Superfarm</option>
                                    </select>
                                    @error('unit_usaha')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="textfield_example">2. Kapasitas Pemeliharaan</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="textfield_example">3. Jumlah Populasi Ternak</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="combobox_example">4. Kategori Usaha</label>
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
                                <div class="form-group mb-5">
                                    <label for="textfield_example">5. Total Produksi Susu</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="combobox_example2">6. Wilayah Peredaran</label>
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
                                <div class="form-group mb-5">
                                    <label for="textfield_example">7. Jumlah Karyawan</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <button type="submit" class="btn btn-kesmavet btn-kesmavet-block float-right">
                                        Simpan & Lanjutkan
                                    </button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="tab-pane" id="survey">
                                <div class="form-group mb-5">
                                    <label for="textfield_example">1. Nomor Izin Usaha</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="textfield_example">2. NPWP</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="textfield_example">3. SIUP</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label for="textfield_example">4. NIB</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label>5. Fotocopy Sertifikat Veteriner</label>
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
                                <div class="form-group mb-5">
                                    <label for="textfield_example">6. Nama Dokter Hewan Penanungung Jawab Teknis</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label>7. Apakah pemberian pengobatan di bawah pengawasan dokter hewan?</label>
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
                                <div class="form-group mb-5">
                                    <label for="textfield_example">8. Nomor dan tanggal NKV</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label>9. Surveilans terkahir</label>
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
                                <div class="form-group mb-5">
                                    <label for="textfield_example">10. Tindak lanjut temuan hasil surveilans</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label>11. Apakah area peternakan dirancang untuk mencegah/membatasi akses masuk hewan atau manusia dari luar?</label>
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
                                <div class="form-group mb-5">
                                    <label>12. Apakah area peternakan memiliki pagar untuk membatasi akses?</label>
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
                                <div class="form-group mb-5">
                                    <label>13. Apakah dilakukan pemisahan hewan baru dan hewan lama?</label>
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
                                <div class="form-group mb-5">
                                    <label>14. Apakah ada kandang isolasi untuk hewan yang sakit?</label>
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
                                <div class="form-group mb-5">
                                    <label>15. Apakah sarana dan prasarana memenuhi/memdai (pemerahan,penyimpanan,pengangukan dan pengiriman susu)</label>
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
                                <div class="form-group mb-5">
                                    <label>16. Apakah prosedur pemeliharaan hewan menerapkan prinsip-prinsip kesejahteraan hewan?</label>
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
                                <div class="form-group mb-5">
                                    <label>17. Apakah metode pemerahan memperhatikan kebersihan ambing?</label>
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
                                <div class="form-group mb-5">
                                    <label>18. Apakah ada penanganan terhadap susu yang berasal dari hewan yang sedang dalam
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
                                <div class="form-group mb-5">
                                    <label>19. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana
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
                                <div class="form-group mb-5">
                                    <label>20. Apakah sarana dan prasarana untuk kebersihan personal memadai?</label>
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
                                <div class="form-group mb-5">
                                    <label>21. Apakah sarana dan prasarana untuk kebersihan personal memadai?</label>
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
                                <div class="form-group mb-5">
                                    <label>22. Apakah sarana dan prasarana untuk kebersihan personal memadai?</label>
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
                                <div class="form-group mb-5">
                                    <label>23. Apakah dilakukan program pengendalian hama dan serangga?</label>
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
                                <div class="form-group mb-5">
                                    <label>24. Apakah ada prosedur penanganan terhadap hewan yang sakit/mati?</label>
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
                                <div class="form-group mb-5">
                                    <label>25. Apakah dilakukan pengolahan limbah?</label>
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
                                <div class="form-group mb-5">
                                    <button type="submit" class="btn btn-kesmavet btn-kesmavet-block float-right">
                                        Simpan & Lanjutkan
                                    </button>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id="catatan">
                                <div class="form-group mb-5">
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
                                <div class="form-group mb-5">
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

                                <div class="form-group mb-5">
                                    <label>3.Pengawas 1</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label>4.Pengawas 2</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label>5.Pengawas 3</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label>6.Penangung Jawab Unit Usaha</label>
                                    <input type="text" 
                                           class="form-control @error('textfield_example') is-invalid @enderror" 
                                           id="textfield_example" 
                                           name="textfield_example" 
                                           value="{{ old('textfield_example') }}">
                                    @error('textfield_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <button type="submit" class="btn btn-kesmavet btn-kesmavet-block float-right">
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