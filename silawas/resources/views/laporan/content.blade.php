<div class="card card-primary card-outline">
    <div class="card-body">
        <div class="table-responsive">
            <table id="laporan-datatable" class="table table-sm table-bordered table-striped">
                <thead>
                    <td>No</td>
                    <td>Tanggal Pelaksanaan</td>
                    <td>Nama Unit Usaha</td>
                    <td>Jenis Unit Usaha</td>
                    <td>Hasil Temuan</td>
                    <td>Rekomendasi/Tindak Lanjut</td>
                    <td>Hasil Tindak Lanjut</td>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            @push('scripts')
                <script>
                    $(function () {
                        $('#laporan-datatable').DataTable({
                            "paging": true,
                            "lengthChange": true,
                            "searching": true,
                            "ordering": true,
                            "info": true,
                            "autoWidth": false,
                        });
                    });
                </script>
            @endpush
        </div>
    </div>
</div>