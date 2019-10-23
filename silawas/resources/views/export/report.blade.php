
    <table>
        <tr><td colspan='7' align='center'><b>FORMULIR LAPORAN REKAPITULASI</b></td></tr>
        <tr><td colspan='7' align='center'><b>HASIL PENGAWASAN KESMAVET</b></td></tr>
        <tr><td colspan='7' align='center'><b>PERIODE ... TAHUN ...</b></td></tr>
        <tr><td colspan='7'></td></tr>
        <tr>
            <td colspan='2'>No. Registrasi Pengawas</td>
            <td>...</td>
        </tr>
        <tr>
            <td colspan='2'>Nama Petugas</td>
            <td>...</td>
        </tr>
        <tr>
            <td colspan='2'>Nama Instansi</td>
            <td>...</td>
        </tr>
        <tr><td colspan='7'></td></tr>
    </table>
    <table border='1'>
        <tr>
            <td valign='middle' align='center'><b>No</b></td>
            <td valign='middle'><b>Tanggal Pelaksanaan</b></td>
            <td valign='middle'><b>Nama Unit Usaha</b></td>
            <td valign='middle'><b>Jenis Unit Usaha</b></td>
            <td valign='middle'><b>Hasil Temuan</b></td>
            <td valign='middle'><b>Rekomendasi Tindak Lanjut</b></td>
            <td valign='middle'><b>Hasil Tindak Lanjut</b></td>
        </tr>
        @foreach ($forms as $key=>$form)
        <tr>
            
                            <td class="text-center">{{ ++$key }}</td>
                            <td>{{ date('Y-m-d', strtotime($form->created_at)) }}</td>
                            <td>{{ $form->NamaUnitUsaha ? $form->NamaUnitUsaha ?: '-' : '-' }}</td>
                            <td>{{ $form->tipeForm }}</td>
                            <td>{{ $form->catatan }}</td>
                            <td>{{ $form->rekomendasi ?: '-' }}</td>
                            <td>-</td>
           
        </tr>
        @endforeach
    </table>
    <table>
        <tr><td colspan='7'></td></tr>
        <tr>
            <td colspan='6'></td>
            <td align='right'>......, ....................</td>
        </tr>
        <tr><td colspan='7'></td></tr>
        <tr><td colspan='7'></td></tr>
        <tr><td colspan='7'></td></tr>
        <tr><td colspan='7'></td></tr>
        <tr>
            <td colspan='6'></td>
            <td align='right'>(Nama Petugas)</td>
        </tr>
        <tr><td colspan='7'></td></tr>
        <tr>
            <td>Catatan :</td>
        </tr>
        <tr>
            <td>...</td>
        </tr>
    </table>
