<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Checklist 14 Export PDF</title>
    <style>
        body {
            /* padding: 60px 20px;
            width: 100%;
            margin: auto; */
            size: 21cm 29.7cm;
            margin: 0;
        }
        .umum td {
            vertical-align: top;
        }
        .survey td {
            vertical-align: top;
            padding: 5px 10px;
        }
        .catatan td {
            vertical-align: top;
            padding: 5px 10px;
        }
        .page-break {
            page-break-after: always;
        }
        
    </style>
</head>
<body>
    @foreach($form as $data)
    <table width="100%">
        <tr>
            <td colspan="2" align="center">
                <h3 style="margin-top:0px"><strong>KEMENTRIAN PERTANIAN</strong></h3>
                <h3 style="margin-top:0px"><strong>DIREKTORAT JENDRAL PETERNAKAN DAN KESEHATAN HEWAN</strong></h3>
            </td>
        </tr>
        {{-- <tr>
            <td rowspan="5" align="center" width="15%">
               
                <img src="{{ public_path('img/backkesmavet3.png') }}" width="100" height="100" style="margin-top:8px">
            </td>
            <td>Jalan.</td>
        </tr>
        <tr><td>Telp.</td></tr>
        <tr><td>Fax.</td></tr>
        <tr><td>E-mail:</td></tr>
        <tr><td>Website:</td></tr> --}}
        <tr><td colspan="2"><hr style="margin:8px 0px"></td></tr>
        
        <tr>
            <td colspan="2" align="center">
                {{-- <h3 style="margin-top:0px"><strong> Formulir Ceklis  </strong></h3> --}}
                <h3 ><strong> Laporan Pengangkutan Produk Hewan </strong></h3>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                
                <table class="umum" width="100%">
                    <tr>
                        <td>Nama Pemilik Produk Hewan</td><td>:</td>
                        <td>{{ $data->namaPemilikProduk ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Pemilik Produk Hewan</td><td>:</td>
                        <td>{{ $data->alamatPemilikProduk ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>No. Telp/Fax/Email Pusat</td><td>:</td>
                        <td>{{ $data->telpPusat ?: '-' }}/{{ $data->faxPusat ?: '-' }}/{{ $data->emailPusat ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Jenis alat angkut</td><td>:</td>
                        <td>{{ $data->jenisAlatAngkut ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Status kepemilikan alat angkut</td><td>:</td>
                        <td>{{ $data->statusKepemilikan ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>No polisi kendaraan </td><td>:</td>
                        <td>{{ $data->nomorPolisi ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Nama pengemudi</td><td>:</td>
                        <td>{{ $data->namaPengemudi ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>No. Telp pengemudi</td><td>:</td>
                        <td>{{ $data->telpPengemudi ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Kapasitas Alat angkut</td><td>:</td>
                        <td>{{ $data->kapasitasAlatAngkut ? $data->kapasitasAlatAngkut.' Kg' : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah produk hewan yang diangkut</td><td>:</td>
                        <td>{{ $data->jumlahProdukAngkut ? $data->jumlahProdukAngkut.' Kg' : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Jenis produk hewan yang diangkut</td><td>:</td>
                        <td>{{ $data->jenisProduk ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Asal produk hewan</td><td>:</td>
                        <td>
                            @if ($data->check_sumber_lokal || $data->check_sumber_impor)
                                @if ($data->check_sumber_lokal)
                                    <div>Lokal {{ $data->sumber_lokal ? '( '.$data->sumber_lokal.' )' : '' }}</div>
                                @endif
                                @if ($data->check_sumber_impor)
                                    <div>Ex-impor {{ $data->sumber_impor ? '( '.$data->sumber_impor.' )' : '' }}</div>
                                @endif
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Tujuan pengiriman</td><td>:</td>
                        <td>{{ $data->tujuanPengiriman ?: '-' }}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2"><h3></h3></td>
        </tr>
        <tr>
            <td colspan="2">
                <table class="survey" width="100%" border="1" >
                
                    <tr>
                        <td align="center"><strong>Aspek Yang Dinilai</strong></td>
                        <td align="center"><strong>Ya</strong></td>
                        <td align="center"><strong>Tidak</strong></td>
                        <td align="center"><strong>Keterangan</strong></td>
                    </tr>
                    
                    <tr>
                        <td>
                            1.	Apakah pangan segar asal hewan berasal dari unit usaha yang bersertifikat NKV?
                        </td>
                        <td align="center">
                            {{$data->check_p1  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p1 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p1)
                            <ul>
                                @foreach($nkv as $nkv)
                                <li>
                                    {{ $nkv->namaUnitUsaha ? $nkv->namaUnitUsaha.', ' : '' }}
                                    {{ $nkv->NKV ? $nkv->NKV.', ' : '' }}
                                    {{ $nkv->tanggal ? $nkv->tanggal.', ' : '' }}
                                </li>
                            @endforeach
                            </ul>
                        @else
                            {{ $data->P1_2 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2.	Apakah pangan segar asal hewan berasal dari unit usaha yang memiliki sertifikat halal (bagi yang dipersyaratkan)?
                        </td>
                        <td align="center">
                            {{$data->check_p2  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p2 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p2)
                            <ul>
                                @foreach($halal as $halal)
                                <li>
                                    {{ $halal->namaUnitUsaha ? $halal->namaUnitUsaha.', ' : '' }}
                                    {{ $halal->nomorSerti ? $halal->nomorSerti.', ' : '' }}
                                    {{ $halal->tanggalSerti ? $halal->tanggalSerti.', ' : '' }}
                                    {{ $halal->masaBerlaku ? $halal->masaBerlaku.', ' : '' }}
                                </li>
                            @endforeach
                            </ul>
                        @else
                            {{ $data->P2_2 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3.	Apakah produk hewan disertai Sertifikat Veteriner?
                        </td>
                        <td align="center">
                            {{$data->check_p3  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p3 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p3)
                            <ul>
                                @foreach($vet as $vet)
                                <li>
                                    {{ $vet->nomorSerti ? $vet->nomorSerti.', ' : '' }}
                                    {{ $vet->namaInstansi ? $vet->namaInstansi.', ' : '' }}
                                    {{ $vet->tanggalSerti ? $vet->tanggalSerti.', ' : '' }}
                                    {{ $vet->tanggalSerti ? $vet->tanggalSerti.', ' : '' }}
                                </li>
                            @endforeach
                            </ul>
                        @else
                            {{ $data->P3_2 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            4.	Apakah produk hewan disertai dengan rekomendasi pengeluaran dari Dinas yang membidangi fungsi Kesmavet Provinsi asal?
                        </td>
                        <td align="center">
                            {{$data->check_p4  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p4 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p4)
                            <ul>
                                @foreach($rekomendasi as $rekomendasi)
                                <li>
                                    {{ $rekomendasi->nomorRekomendasi ? $rekomendasi->nomorRekomendasi.', ' : '' }}
                                    {{ $rekomendasi->tanggalRekomendasi ? $rekomendasi->tanggalRekomendasi.', ' : '' }}
                                    {{ $rekomendasi->namaInstansi ? $rekomendasi->namaInstansi.', ' : '' }}
                                </li>
                            @endforeach
                            </ul>
                        @else
                            {{ $data->P4_2 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5.	Apakah produk hewan di dalam alat angkut disusun dengan baik
                        </td>
                        <td align="center">
                            {{$data->check_p5  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p5 ? ' ':"V"}}
                        </td>
                        <td>
                            {{ $data->P5 ?: '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6.	Apakah suhu boks penyimpanan pada alat angkut telah sesuai dengan persyaratan teknis
                        </td>
                        <td align="center">
                            {{$data->check_p6  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p6 ? ' ':"V"}}
                        </td>
                        <td>
                            {{ $data->P6 ?: '-' }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
                <td colspan="2">
                    <table class="survey" width="100%" border="1" >
                    
                        <tr>
                            <td align="center"><strong>Aspek parameter</strong></td>
                            <td align="center"><strong>Ya</strong></td>
                            <td align="center"><strong>Tidak</strong></td>
                            <td align="center"><strong>Keterangan</strong></td>
                        </tr>
                        <tr>
                            <td>
                                7.	Apakah ada pemisahan produk hewan halal dengan non halal atau produk lainnya
                            </td>
                            <td align="center">
                                {{$data->check_p7  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p7 ? ' ':"V"}}
                            </td>
                            <td>
                                {{ $data->P7 ?: '-' }}
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                                8.	Apakah produk hewan yang diangkut sesuai dengan kapasitas alat angkut
                            </td>
                            <td align="center">
                                {{$data->check_p8  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p8 ? ' ':"V"}}
                            </td>
                            <td>
                                {{ $data->P8 ?: '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                9.	Apakah dilakukan program pemeliharaan kebersihan alat angkut
                            </td>
                            <td align="center">
                                {{$data->check_p9  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p9 ? ' ':"V"}}
                            </td>
                            <td>
                                {{ $data->P9 ?: '-' }}
                            </td>
                        </tr>
                        
                    </table>
                </td>
        </tr>
        <tr>
            <td colspan="2">
                <table class="catatan" width="100%" border="1">
                    <tr>
                        <td colspan="2">
                            1. Catatan :<br>
                            <div style="min-height:150px; padding-left:18px">
                                 {{$data->catatan ? $data->catatan : '-'}}
                            </div>
                            <br>
                            <br>
                            2. Rekomendasi/Tindak Lanjut :<br>
                            <div style="min-height:150px; padding-left:18px">
                                {{$data->rekomendasi  ? $data->rekomendasi : '-'}}
                            </div>
                            <br> 
                            <br>
                            {{-- <div style="min-height:150px; padding-left:18px; text-align:center">
                            Cap Unit Usaha<br><br><br>
                            </div> --}}
                            <div style="min-height:150px; padding-left:18px; text-align:center">
                                <br>..............., ...................................
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">
                            
                            <center>Tim Pengawas</center>
                            <ol style="padding-left:18px">
                                @foreach($pengawas1 as $pe1)
                                <li>{{$data->idPengawas  ? $pe1->NamaLengkap:'-'}}</li>
                                @endforeach
                                @foreach($pengawas2 as $pe2)
                                <li>{{$data->idPengawas2  ? $pe2->NamaLengkap:'-'}}</li>
                                @endforeach
                                @foreach($pengawas3 as $pe3)
                                <li>{{$data->idPengawas3  ? $pe3->NamaLengkap:'-'}}</li>
                                @endforeach
                            </ol>
                            
                        </td>
                        <td align="center" width="50%">
                            Penanggung Jawab Unit Usaha
                            <br><br><br><br><br>
                        </td>
                    </tr>
                </table>
            </td>
      
    @endforeach
</body>
</html>