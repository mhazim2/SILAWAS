
    <table>
        <tr><td colspan='7' align='center'><b>FORMULIR LAPORAN REKAPITULASI</b></td></tr>
        <tr><td colspan='7' align='center'><b>HASIL PENGAWASAN KESMAVET</b></td></tr>
        <tr><td colspan='7' align='center'><b>PERIODE ... TAHUN ...</b></td></tr>
        <tr><td colspan='7'></td></tr>
        @foreach ($data as $data)
        <tr>
            <td>No. Registrasi Pengawas :</td>
        <td>{{ $data->NoRegistrasi ? $data->NoRegistrasi : '-'  }}</td>
        </tr>
        <tr>
            <td>Nama Petugas :</td>
            <td>{{ $data->NamaLengkap ? $data->NamaLengkap : '-' }}</td>
        </tr>
        <tr>
            <td>Nama Instansi: </td>
            <td>{{ $data->unitKerja ? $data->unitKerja : '-' }}</td>
        </tr>
        @endforeach
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
            <td> 
                    @if ($form->idForm14)
                        {{ $form->namaPemilik ?  $form->namaPemilik : '-' }}
                    @else
                        {{ $form->NamaUnitUsaha ? $form->NamaUnitUsaha : '-' }}
                    @endif
                </td>
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
            <td align='right'>{{ $data->NamaLengkap ? "(". $data->NamaLengkap .")" : '-' }}</td>
        </tr>
        <tr><td colspan='7'></td></tr>
        <tr>
            <td>Catatan :</td>
        </tr>
        <tr>
            <td>...</td>
        </tr>
    </table>
