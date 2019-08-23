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
                                    <label for="textfield_example">Textfield Example</label>
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
                                    <label>Datepicker Example</label>
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
                                    <label for="textarea_example">Textarea Example</label>
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
                                    <label for="combobox_example">Combobox Example</label>
                                    <select class="form-control select2" id="combobox_example" name="combobox_example">
                                        <option disabled>-- Pilih --</option>
                                        <option value="1">Alaska</option>
                                        <option value="2">California</option>
                                        <option value="3">Delaware</option>
                                        <option value="4">Tennessee</option>
                                        <option value="5">Washington</option>
                                    </select>
                                    @error('combobox_example')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>File Example</label>
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
                                    <label>Radio Example</label>
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
                                    <label>Checkbox Example</label>
                                    <div class="d-block">
                                        <div class="icheck-wisteria d-inline mr-3">
                                            <input id="checkbox_example_1" type="checkbox" name="checkbox_example">
                                            <label class="font-weight-normal" for="checkbox_example_1">Pilihan 1</label>
                                        </div>
                                        <div class="icheck-wisteria d-inline">
                                            <input id="checkbox_example_2" type="checkbox" name="checkbox_example">
                                            <label class="font-weight-normal" for="checkbox_example_2">Pilihan 2</label>
                                        </div>
                                    </div>
                                    @error('checkbox_example')
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
                                Informasi Tambahan
                            </div>
                            <div class="tab-pane" id="survey">
                                Survey
                            </div>
                            <div class="tab-pane" id="catatan">
                                Catatan
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection