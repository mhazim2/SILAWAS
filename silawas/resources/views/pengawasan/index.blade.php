@extends('layouts.app')

@section('title', 'Daftar Ceklis')
@section('Daftar Ceklis', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Page Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12">
                        <h1 class="m-0 text-dark">Daftar Ceklis Hasil Pengawasan</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="formulir-datatable" class="table table-sm table-bordered table-striped">
                                <thead>
                                    <td>No</td>
                                    <td>Jenis Cheklist</td>
                                    <td>Nama Unit Usaha</td>
                                    <td>Pemilik Unit Usaha</td>
                                    <td>Tahun Operasional</td>
                                    <td>Tanggal Dibuat</td>
                                    <td>Operasi</td>
                                </thead>
                                <tbody>
                                    @foreach ($listForms as $key=>$form)
                                        <tr>
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td>{{ $form->tipeForm }}</td>
                                            <td>{{ $form->unitUsaha ? $form->unitUsaha->NamaUnitUsaha ?: '-' : '-' }}</td>
                                            <td>{{ $form->unitUsaha ? $form->unitUsaha->namaPemilikUsaha ?: '-' : '-' }}</td>
                                            <td>{{ $form->unitUsaha ? $form->unitUsaha->TahunOperasional ?: '-' : '-' }}</td>
                                            <td>{{ $form->created_at }}</td>
                                            <td class="text-center">
                                                @if ($form->idForm1)
                                                    <a href="/pengawasan/checklist/1/detail/{{ $form->id }}">
                                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                            <small><i class="fas fa-eye"></i></small>
                                                        </button>
                                                    </a>
                                                @elseif ($form->idForm2)
                                                    <a href="/pengawasan/checklist/2/detail/{{ $form->id }}">
                                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                            <small><i class="fas fa-eye"></i></small>
                                                        </button>
                                                    </a>
                                                @elseif ($form->idForm3)
                                                    <a href="/pengawasan/checklist/3/detail/{{ $form->id }}">
                                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                            <small><i class="fas fa-eye"></i></small>
                                                        </button>
                                                    </a>
                                                @elseif ($form->idForm4)
                                                    <a href="/pengawasan/checklist/4/detail/{{ $form->id }}">
                                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                            <small><i class="fas fa-eye"></i></small>
                                                        </button>
                                                    </a>
                                                @elseif ($form->idForm5)
                                                    <a href="/pengawasan/checklist/5/detail/{{ $form->id }}">
                                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                            <small><i class="fas fa-eye"></i></small>
                                                        </button>
                                                    </a>
                                                @elseif ($form->idForm6)
                                                    <a href="/pengawasan/checklist/6/detail/{{ $form->id }}">
                                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                            <small><i class="fas fa-eye"></i></small>
                                                        </button>
                                                    </a>
                                                @elseif ($form->idForm7)
                                                    <a href="/pengawasan/checklist/7/detail/{{ $form->id }}">
                                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                            <small><i class="fas fa-eye"></i></small>
                                                        </button>
                                                    </a>
                                                @elseif ($form->idForm8)
                                                    <a href="/pengawasan/checklist/8/detail/{{ $form->id }}">
                                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                            <small><i class="fas fa-eye"></i></small>
                                                        </button>
                                                    </a>
                                                @elseif ($form->idForm9)
                                                    <a href="/pengawasan/checklist/9/detail/{{ $form->id }}">
                                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                            <small><i class="fas fa-eye"></i></small>
                                                        </button>
                                                    </a>
                                                @elseif ($form->idForm10)
                                                    <a href="/pengawasan/checklist/10/detail/{{ $form->id }}">
                                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                            <small><i class="fas fa-eye"></i></small>
                                                        </button>
                                                    </a>
                                                @elseif ($form->idForm11)
                                                    <a href="/pengawasan/checklist/11/detail/{{ $form->id }}">
                                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                            <small><i class="fas fa-eye"></i></small>
                                                        </button>
                                                    </a>
                                                @elseif ($form->idForm12)
                                                    <a href="/pengawasan/checklist/12/detail/{{ $form->id }}">
                                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                            <small><i class="fas fa-eye"></i></small>
                                                        </button>
                                                    </a>
                                                @elseif ($form->idForm13)
                                                    <a href="/pengawasan/checklist/13/detail/{{ $form->id }}">
                                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                            <small><i class="fas fa-eye"></i></small>
                                                        </button>
                                                    </a>
                                                @elseif ($form->idForm14)
                                                    <a href="/pengawasan/checklist/14/detail/{{ $form->id }}">
                                                        <button type="button" class="btn btn-sm btn-outline-primary" title="Lihat Formulir">
                                                            <small><i class="fas fa-eye"></i></small>
                                                        </button>
                                                    </a>
                                                @endif
                                                <a href="/pengajuan/hapus/{{$form->id}}" onclick="return confirm('Apakah Anda yakin ingin menghapus pengajuan ini?')">
                                                    <button type="button" class="btn btn-sm btn-outline-danger" title="Hapus Formulir">
                                                        <small><i class="fas fa-trash"></i></small>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @push('scripts')
                                <script>
                                    $(function () {
                                        $('#formulir-datatable').DataTable({
                                            "paging": true,
                                            "lengthChange": true,
                                            "searching": true,
                                            "ordering": true,
                                            "info": true,
                                            "autoWidth": false,
                                            "language": {
                                                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json"
                                            }
                                        });
                                    });
                                </script>
                            @endpush
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection