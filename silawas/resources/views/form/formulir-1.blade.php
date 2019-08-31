@extends('layouts.app')

@section('title', 'Formulir 1')
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
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue7()">
                                            <input id="radio_example_1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio_example_1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue7()">
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
                                <div id="hidden7form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue7() {
                                            if(document.getElementById('radio_example_1').checked) {
                                                document.getElementById('hidden7form').innerHTML = "";
                                                document.getElementById('hidden7form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example";
                                                    inputField.id = "textfield_example";
                                                    inputField.value = "{{ old('textfield_example') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden7form').appendChild(inputLabel);
                                                document.getElementById('hidden7form').appendChild(inputField);
                                            }else if(document.getElementById('radio_example_2').checked) {
                                                document.getElementById('hidden7form').innerHTML = "";
                                                document.getElementById('hidden7form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example";
                                                    inputField.id = "textfield_example";
                                                    inputField.value = "{{ old('textfield_example') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden7form').appendChild(inputLabel);
                                                document.getElementById('hidden7form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
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
                                    <label>11. Apakah area peternakan dirancang untuk
                                        mencegah/membatasi akses masuk hewan
                                        atau manusia dari luar?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue8()">
                                            <input id="radio1" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio1">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue8()">
                                            <input id="radio2" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio2">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden8form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue8() {
                                            if(document.getElementById('radio1').checked) {
                                                document.getElementById('hidden8form').innerHTML = "";
                                                document.getElementById('hidden8form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example1";
                                                    inputField.id = "textfield_example1";
                                                    inputField.value = "{{ old('textfield_example1') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden8form').appendChild(inputLabel);
                                                document.getElementById('hidden8form').appendChild(inputField);
                                            }else if(document.getElementById('radio2').checked) {
                                                document.getElementById('hidden8form').innerHTML = "";
                                                document.getElementById('hidden8form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example2";
                                                    inputField.id = "textfield_exampl2e";
                                                    inputField.value = "{{ old('textfield_example2') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden8form').appendChild(inputLabel);
                                                document.getElementById('hidden8form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
                                <div class="form-group mb-5">
                                    <label>12. Apakah area peternakan memiliki pagar untuk
                                        membatasi akses?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue9()">
                                            <input id="radio3" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio3">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue9()">
                                            <input id="radio4" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio4">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden9form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue9() {
                                            if(document.getElementById('radio3').checked) {
                                                document.getElementById('hidden9form').innerHTML = "";
                                                document.getElementById('hidden9form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya,bagaimana keadaan pagar?";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example3";
                                                    inputField.id = "textfield_example3";
                                                    inputField.value = "{{ old('textfield_example3') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden9form').appendChild(inputLabel);
                                                document.getElementById('hidden9form').appendChild(inputField);
                                            }else if(document.getElementById('radio4').checked) {
                                                document.getElementById('hidden9form').innerHTML = "";
                                                document.getElementById('hidden9form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example4";
                                                    inputField.id = "textfield_example4";
                                                    inputField.value = "{{ old('textfield_example4') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden9form').appendChild(inputLabel);
                                                document.getElementById('hidden9form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
                                <div class="form-group mb-5">
                                    <label>13. Apakah dilakukan pemisahan hewan baru dan
                                        hewan lama?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue10()">
                                            <input id="radio5" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio5">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue10()">
                                            <input id="radio6" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio6">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden10form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue10() {
                                            if(document.getElementById('radio5').checked) {
                                                document.getElementById('hidden10form').innerHTML = "";
                                                document.getElementById('hidden10form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya,bagaimana keadaan kandang?";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example5";
                                                    inputField.id = "textfield_example5";
                                                    inputField.value = "{{ old('textfield_example5') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden10form').appendChild(inputLabel);
                                                document.getElementById('hidden10form').appendChild(inputField);
                                            }else if(document.getElementById('radio6').checked) {
                                                document.getElementById('hidden10form').innerHTML = "";
                                                document.getElementById('hidden10form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example6";
                                                    inputField.id = "textfield_example6";
                                                    inputField.value = "{{ old('textfield_example6') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden10form').appendChild(inputLabel);
                                                document.getElementById('hidden10form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
                                <div class="form-group mb-5">
                                    <label>14. Apakah ada kandang isolasi untuk hewan yang sakit?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue11()">
                                            <input id="radio7" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio7">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue11()">
                                            <input id="radio8" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio8">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden11form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue11() {
                                            if(document.getElementById('radio7').checked) {
                                                document.getElementById('hidden11form').innerHTML = "";
                                                document.getElementById('hidden11form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya,bagaimana keadaan kandang?";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example7";
                                                    inputField.id = "textfield_example7";
                                                    inputField.value = "{{ old('textfield_example7') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden11form').appendChild(inputLabel);
                                                document.getElementById('hidden11form').appendChild(inputField);
                                            }else if(document.getElementById('radio8').checked) {
                                                document.getElementById('hidden11form').innerHTML = "";
                                                document.getElementById('hidden11form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example8";
                                                    inputField.id = "textfield_example8";
                                                    inputField.value = "{{ old('textfield_example8') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden11form').appendChild(inputLabel);
                                                document.getElementById('hidden11form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
                                <div class="form-group mb-5">
                                    <label>15. Apakah sarana dan prasarana memenuhi/memdai (pemerahan,penyimpanan,pengangukan dan pengiriman susu)</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue12()">
                                            <input id="radio9" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio9">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue12()">
                                            <input id="radio10" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio10">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden12form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue12() {
                                            if(document.getElementById('radio9').checked) {
                                                document.getElementById('hidden12form').innerHTML = "";
                                                document.getElementById('hidden12form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example9";
                                                    inputField.id = "textfield_example9";
                                                    inputField.value = "{{ old('textfield_example9') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden12form').appendChild(inputLabel);
                                                document.getElementById('hidden12form').appendChild(inputField);
                                            }else if(document.getElementById('radio10').checked) {
                                                document.getElementById('hidden12form').innerHTML = "";
                                                document.getElementById('hidden12form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example10";
                                                    inputField.id = "textfield_example10";
                                                    inputField.value = "{{ old('textfield_example10') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden12form').appendChild(inputLabel);
                                                document.getElementById('hidden12form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
                                <div class="form-group mb-5">
                                    <label>16. Apakah prosedur pemeliharaan hewan
                                        menerapkan prinsip-prinsip kesejahteraan
                                        hewan</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue13()">
                                            <input id="radio11" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio11">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue13()">
                                            <input id="radio12" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio12">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden13form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue13() {
                                            if(document.getElementById('radio11').checked) {
                                                document.getElementById('hidden13form').innerHTML = "";
                                                document.getElementById('hidden13form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example11";
                                                    inputField.id = "textfield_example11";
                                                    inputField.value = "{{ old('textfield_example11') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden13form').appendChild(inputLabel);
                                                document.getElementById('hidden13form').appendChild(inputField);
                                            }else if(document.getElementById('radio12').checked) {
                                                document.getElementById('hidden13form').innerHTML = "";
                                                document.getElementById('hidden13form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example12";
                                                    inputField.id = "textfield_example12";
                                                    inputField.value = "{{ old('textfield_example12') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden13form').appendChild(inputLabel);
                                                document.getElementById('hidden13form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
                                <div class="form-group mb-5">
                                    <label>17. Apakah metode pemerahan memperhatikan
                                        kebersihan ambing?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue14()">
                                            <input id="radio13" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio13">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue14()">
                                            <input id="radio14" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio14">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden14form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue14() {
                                            if(document.getElementById('radio13').checked) {
                                                document.getElementById('hidden14form').innerHTML = "";
                                                document.getElementById('hidden14form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example13";
                                                    inputField.id = "textfield_example13";
                                                    inputField.value = "{{ old('textfield_example13') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden14form').appendChild(inputLabel);
                                                document.getElementById('hidden14form').appendChild(inputField);
                                            }else if(document.getElementById('radio14').checked) {
                                                document.getElementById('hidden14form').innerHTML = "";
                                                document.getElementById('hidden14form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example14";
                                                    inputField.id = "textfield_example14";
                                                    inputField.value = "{{ old('textfield_example14') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden14form').appendChild(inputLabel);
                                                document.getElementById('hidden14form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
                                <div class="form-group mb-5">
                                    <label>18. Apakah ada penanganan terhadap susu yang berasal dari hewan yang sedang dalam pengobatan dengan menggunakan antibiotik (masitis dan penyakit lainnya)?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue15()">
                                            <input id="radio15" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio15">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue15()">
                                            <input id="radio16" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio16">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden15form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue15() {
                                            if(document.getElementById('radio15').checked) {
                                                document.getElementById('hidden15form').innerHTML = "";
                                                document.getElementById('hidden15form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example15";
                                                    inputField.id = "textfield_example15";
                                                    inputField.value = "{{ old('textfield_example15') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden15form').appendChild(inputLabel);
                                                document.getElementById('hidden15form').appendChild(inputField);
                                            }else if(document.getElementById('radio16').checked) {
                                                document.getElementById('hidden15form').innerHTML = "";
                                                document.getElementById('hidden15form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example16";
                                                    inputField.id = "textfield_example16";
                                                    inputField.value = "{{ old('textfield_example16') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden15form').appendChild(inputLabel);
                                                document.getElementById('hidden15form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
                                <div class="form-group mb-5">
                                    <label>19. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi): (unit usaha budidaya perah dan unit pemerahan susu)</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue16()">
                                            <input id="radio17" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio17">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue16()">
                                            <input id="radio18" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio18">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden16form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue16() {
                                            if(document.getElementById('radio17').checked) {
                                                document.getElementById('hidden16form').innerHTML = "";
                                                document.getElementById('hidden16form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example17";
                                                    inputField.id = "textfield_example17";
                                                    inputField.value = "{{ old('textfield_example17') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden16form').appendChild(inputLabel);
                                                document.getElementById('hidden16form').appendChild(inputField);
                                            }else if(document.getElementById('radio16').checked) {
                                                document.getElementById('hidden16form').innerHTML = "";
                                                document.getElementById('hidden16form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example18";
                                                    inputField.id = "textfield_example18";
                                                    inputField.value = "{{ old('textfield_example18') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden16form').appendChild(inputLabel);
                                                document.getElementById('hidden16form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
                                <div class="form-group mb-5">
                                    <label>20. Apakah sarana dan prasarana untuk kebersihan personal memadai?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue17()">
                                            <input id="radio19" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio19">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue17()">
                                            <input id="radio20" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio20">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden17form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue17() {
                                            if(document.getElementById('radio19').checked) {
                                                document.getElementById('hidden17form').innerHTML = "";
                                                document.getElementById('hidden17form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example19";
                                                    inputField.id = "textfield_example19";
                                                    inputField.value = "{{ old('textfield_example19') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden17form').appendChild(inputLabel);
                                                document.getElementById('hidden17form').appendChild(inputField);
                                            }else if(document.getElementById('radio20').checked) {
                                                document.getElementById('hidden17form').innerHTML = "";
                                                document.getElementById('hidden17form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example20";
                                                    inputField.id = "textfield_example20";
                                                    inputField.value = "{{ old('textfield_example20') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden17form').appendChild(inputLabel);
                                                document.getElementById('hidden17form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
                                <div class="form-group mb-5">
                                    <label>21. Apakah sarana dan prasarana untuk kebersihan personal memadai?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue18()">
                                            <input id="radio21" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio21">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue18()">
                                            <input id="radio22" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio22">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden18form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue18() {
                                            if(document.getElementById('radio21').checked) {
                                                document.getElementById('hidden18form').innerHTML = "";
                                                document.getElementById('hidden18form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example21";
                                                    inputField.id = "textfield_example21";
                                                    inputField.value = "{{ old('textfield_example21') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden18form').appendChild(inputLabel);
                                                document.getElementById('hidden18form').appendChild(inputField);
                                            }else if(document.getElementById('radio22').checked) {
                                                document.getElementById('hidden18form').innerHTML = "";
                                                document.getElementById('hidden18form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example22";
                                                    inputField.id = "textfield_example22";
                                                    inputField.value = "{{ old('textfield_example22') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden18form').appendChild(inputLabel);
                                                document.getElementById('hidden18form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
                                <div class="form-group mb-5">
                                    <label>22. Apakah sarana dan prasarana untuk kebersihan personal memadai?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue19()">
                                            <input id="radio23" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio23">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue19()">
                                            <input id="radio24" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio24">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden19form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue19() {
                                            if(document.getElementById('radio23').checked) {
                                                document.getElementById('hidden19form').innerHTML = "";
                                                document.getElementById('hidden19form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example23";
                                                    inputField.id = "textfield_example23";
                                                    inputField.value = "{{ old('textfield_example23') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden19form').appendChild(inputLabel);
                                                document.getElementById('hidden19form').appendChild(inputField);
                                            }else if(document.getElementById('radio24').checked) {
                                                document.getElementById('hidden19form').innerHTML = "";
                                                document.getElementById('hidden19form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example24";
                                                    inputField.id = "textfield_example24";
                                                    inputField.value = "{{ old('textfield_example24') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden19form').appendChild(inputLabel);
                                                document.getElementById('hidden19form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
                                <div class="form-group mb-5">
                                    <label>23.  Apakah dilakukan program pengendalian hama dan serangga?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue20()">
                                            <input id="radio25" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio25">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue20()">
                                            <input id="radio26" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio26">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden20form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue20() {
                                            if(document.getElementById('radio25').checked) {
                                                document.getElementById('hidden20form').innerHTML = "";
                                                document.getElementById('hidden20form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example25";
                                                    inputField.id = "textfield_example25";
                                                    inputField.value = "{{ old('textfield_example25') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden20form').appendChild(inputLabel);
                                                document.getElementById('hidden20form').appendChild(inputField);
                                            }else if(document.getElementById('radio26').checked) {
                                                document.getElementById('hidden20form').innerHTML = "";
                                                document.getElementById('hidden20form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example26";
                                                    inputField.id = "textfield_example26";
                                                    inputField.value = "{{ old('textfield_example26') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden20form').appendChild(inputLabel);
                                                document.getElementById('hidden20form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
                                <div class="form-group mb-5">
                                    <label>24.   Apakah ada prosedur penanganan terhadap hewan yang sakit/mati?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue21()">
                                            <input id="radio27" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio27">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue21()">
                                            <input id="radio28" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio28">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden21form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue21() {
                                            if(document.getElementById('radio27').checked) {
                                                document.getElementById('hidden21form').innerHTML = "";
                                                document.getElementById('hidden21form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example27";
                                                    inputField.id = "textfield_example27";
                                                    inputField.value = "{{ old('textfield_example27') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden21form').appendChild(inputLabel);
                                                document.getElementById('hidden21form').appendChild(inputField);
                                            }else if(document.getElementById('radio28').checked) {
                                                document.getElementById('hidden21form').innerHTML = "";
                                                document.getElementById('hidden21form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example28";
                                                    inputField.id = "textfield_example28";
                                                    inputField.value = "{{ old('textfield_example28') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden21form').appendChild(inputLabel);
                                                document.getElementById('hidden21form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
                                <div class="form-group mb-5">
                                    <label>25.   Apakah dilakukan pengolahan limbah?</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3" onclick="checkValue22()">
                                            <input id="radio29" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio29">Ya</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline" onclick="checkValue22()">
                                            <input id="radio30" type="radio" name="radio_example">
                                            <label class="font-weight-normal" for="radio30">Tidak</label>
                                        </div>
                                    </div>
                                    @error('radio_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div id="hidden22form" class="form-group bg-kesmavet mb-5 p-3" style="display:none"></div>
                                @push('scripts')
                                    <script>
                                        function checkValue22() {
                                            if(document.getElementById('radio29').checked) {
                                                document.getElementById('hidden22form').innerHTML = "";
                                                document.getElementById('hidden22form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Ya";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example29";
                                                    inputField.id = "textfield_example29";
                                                    inputField.value = "{{ old('textfield_example29') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden22form').appendChild(inputLabel);
                                                document.getElementById('hidden22form').appendChild(inputField);
                                            }else if(document.getElementById('radio30').checked) {
                                                document.getElementById('hidden22form').innerHTML = "";
                                                document.getElementById('hidden22form').style.display="block";
                                                var inputLabel = document.createElement("label");
                                                    inputLabel.innerHTML = "Alasan Memilih Tidak";
                                                var inputField = document.createElement("input");
                                                    inputField.type = "text";
                                                    inputField.name = "textfield_example30";
                                                    inputField.id = "textfield_example30";
                                                    inputField.value = "{{ old('textfield_example30') }}";
                                                    inputField.classList.add("form-control");
                                                document.getElementById('hidden22form').appendChild(inputLabel);
                                                document.getElementById('hidden22form').appendChild(inputField);
                                            }
                                        }
                                    </script>
                                @endpush
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