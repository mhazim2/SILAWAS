<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Checklist 13 Export PDF</title>
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
@foreach($form as $f)
    <table width="100%">
        <tr>
            <td colspan="2" align="center">
                <h3 style="margin-top:0px"><strong>KEMENTRIAN PERTANIAN</strong></h3>
                <h3 style="margin-top:0px"><strong>DIREKTORAT JENDRAL PETERNAKAN DAN KESEHATAN HEWAN</strong></h3>
            </td>
        </tr>
        <tr>
            <td rowspan="5" align="center" width="15%">
               
                <img src="{{ public_path('img/backkesmavet3.png') }}" width="100" height="100" style="margin-top:8px">
            </td>
            <td>Jalan.</td>
        </tr>
        <tr><td>Telp.</td></tr>
        <tr><td>Fax.</td></tr>
        <tr><td>E-mail:</td></tr>
        <tr><td>Website:</td></tr>
        <tr><td colspan="2"><hr style="margin:8px 0px"></td></tr>
        <tr>
            <td colspan="2" align="center">
                <h3 style="margin-bottom:0px"><strong>Formulir Ceklis</strong></h3>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <h3 style="margin-top:0px"><strong>Pengawasan Unit Usaha Produk Hewan </strong></h3>
                <h3 ><strong>(Hotel, Restoran dan Katering) </strong></h3>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                
                <table class="umum" width="100%">
                    <tr>
                        <td>Nama Unit Usaha</td><td>:</td>
                        <td>{{$f->NamaUnitUsaha ? $f->NamaUnitUsaha : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Alamat Unit Usaha</td><td>:</td>
                        <td>{{$f->AlamatUnitUsaha ? $f->AlamatUnitUsaha : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Pemilik Unit Usaha / Nama Kantor Pusat</td><td>:</td>
                        <td>{{$f->namaPemilikUsaha ? $f->namaPemilikUsaha : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor Pusat</td><td>:</td>
                        <td>{{$f->AlamatKantorPusat ? $f->AlamatKantorPusat : '-'}}</td>
                    </tr>
                    <tr>
                        <td>No. Telp / Fax / Email Kantor Pusat</td><td>:</td>
                        <td>{{$f->Telepon ? $f->Telepon : '-'}} / {{$f->Fax ? $f->Fax : '-'}} / {{$f->Email ? $f->Email : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Teknis </td><td>:</td>
                        <td>{{$f->PenangungJawabTeknis ? $f->PenangungJawabTeknis : '-'}} </td>
                    </tr>
                    <tr>
                        <td>No. Telp Penanggung Jawab Teknis</td><td>:</td>
                        <td>{{$f->KontakPJ ? $f->KontakPJ : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Tahun Operasional</td><td>:</td>
                        <td>{{$f->TahunOperasional ? $f->TahunOperasional : '-'}} </td>
                    </tr>
                    <tr>
                        <td>Jenis Pengolahan</td><td>:</td>
                        <td>{{$f->jenisPengolahan ? $f->jenisPengolahan : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Kapasitas Produksi</td><td>:</td>
                        <td>{{$f->kapasitasProduksi ? $f->kapasitasProduksi : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Realisasi </td><td>:</td>
                        <td>{{$f->realisasi ? $f->realisasi.' Kg' : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Asal Sumber Bahan Baku </td><td>:</td>
                        <td>@if ($f->check_sumber_lokal || $f->check_sumber_impor)
                            @if ($f->check_sumber_lokal)
                                <div>Lokal {{ $f->sumber_lokal ? '( '.$f->sumber_lokal.' )' : '' }}</div>
                            @endif
                            @if ($f->check_sumber_impor)
                                <div>Ex-impor {{ $f->sumber_impor ? '( '.$f->sumber_impor.' )' : '' }}</div>
                            @endif
                        @else
                            -
                        @endif</td>
                    </tr>
                    <tr>
                        <td>Wilayah Peredaran</td><td>:</td>
                        <td>
                            {{ $f->wilayahPeredaran ? $f->wilayahPeredaran : '-' }}</td>
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
                            1. Apakah memiliki:<br>
                            <span style="margin-left:18px">• Nomor izin usaha</span><br>
                            <span style="margin-left:18px">• NPWP</span><br>
                            <span style="margin-left:18px">• SIUP</span><br>
                        </td>
                        <td align="center">
                            <br>{{$f->P1_1  ? 'V':' '}}
                            <br>{{$f->P1_2  ? 'V':' '}}
                            <br>{{$f->P1_3  ? 'V':' '}}
                        </td>
                        <td align="center"></td>
                        <td>
                            <br>No: {{$f->P1_1 ? $f->P1_1 : '-'}}
                            <br>No: {{$f->P1_2 ? $f->P1_2 : '-'}}
                            <br>No: {{$f->P1_3 ? $f->P1_3 : '-'}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2. Apakah bahan baku yang digunakan berasal dari unit usaha yang bersertifikat NKV?
                        </td>
                        <td align="center">
                            {{$f->check_p2  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p2 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_p2)
                                <div><b>No:</b> {{ $f->P2_1 ? $f->P2_1 : '-' }}</div>
                                <div><b>Tanggal Penerbitan:</b> {{ $f->P2_2 ? $f->P2_2 : '-' }}</div>
                                <div><b>Surveilans terakhir:</b> {{ $f->P2_3 ? $f->P2_3 : '-' }}</div>
                                <div><b>Tindak lanjut temuan:</b> {{ $f->P2_4 ? $f->P2_4 : '-' }}</div>
                            @else
                                 -
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3.<div> a. Apakah unit usaha memiliki gudang penyimpanan bahan baku (kering/dingin-beku)?</div>
                            <br>
                            <div> b. jika ya,Apakah gudang penyimpanan sudah memiliki sertifikat NKV?
                        </td>
                        <td align="center">
                            {{$f->check_p3_1  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p3_1 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_p3_2)
                            <div><b>No:</b> {{ $f->P3_2_1 ? $f->P3_2_1 : '-' }}</div>
                            <div><b>Tanggal Penerbitan:</b> {{ $f->P3_2_2 ? $f->P3_2_2 : '-' }}</div>
                            <div><b>Surveilans terakhir:</b> {{ $f->P3_2_3 ? $f->P3_2_3 : '-' }}</div>
                            <div><b>Tindak lanjut temuan:</b> {{ $f->P3_2_4 ? $f->P3_2_4 : '-' }}</div>
                        @else
                            -
                        @endif
                    </tr>
                    <tr>
                        <td>
                            4. Apakah unit usaha memiliki sertifikat halal (bagi yang dipersyaratkan)? 
                        </td>
                        <td align="center">
                            {{$f->check_p4  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p4 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_p4)
                                <div><b>No:</b> {{ $f->P4_1 ? $f->P4_1 : '-' }}</div>
                                <div><b>Tanggal:</b> {{ $f->P4_2 ? $f->P4_2 : '-' }}</div>
                                <div><b>Masa Berlaku:</b> {{ $f->P4_3 ? $f->P4_3.' Tahun' : '-' }}</div>
                            @else
                            -
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                        5.	Apakah ada pendataan pemasok pangan asal hewan segar?
                        </td>
                        <td align="center">
                            {{$f->check_p5  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p5 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_p5)
                                <ul>
                                @foreach($suplier as $suplier)
                                <li>
                                {{ $suplier->namaSuplier ? $suplier->namaSuplier.', ' : '' }}
                                {{ $suplier->negara ? $suplier->negara.', ' : '' }}
                                {{ $suplier->tanggal ? $suplier->tanggal.', ' : '' }}
                                {{ $suplier->jumlah ? $suplier->jumlah.' Kg' : '' }} 
                                </li>
                                @endforeach
                                </ul>
                            @else
                            -
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                        6.	Apakah sarana prasarana penyimpanan dan pengolahan pangan asal hewan non halal terpisah dengan produk halal?
                        </td>
                         <td align="center">
                            {{$f->check_p6  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p6 ? ' ':"V"}}
                        </td>
                        <td>
                            {{ $f->P6 ? $f->P6 : '-' }}
                    </tr>
                    <tr>
                        <td>
                        7.	Apakah sarana dan prasarana penyimpanan dan pengolahanpangan asal hewan sesuai kapasitas?
                        </td>
                        <td align="center">
                            {{$f->check_p7  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p7 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_p7)
                            <ol>
                                {!! $f->P7_1 ? '<li>Sarana dan prasarana penyimpanan memadai</li>' : '' !!}
                                {!! $f->P7_2 ? '<li>Sarpras pengolahan pangan asal hewan sesuai kapasitas</li>' : '' !!}
                            </ol>
                        @else
                            -
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                        8.	Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana prasarana penyimpanan dan produksi (sanitasi)?
                        </td>
                        <td align="center">
                            {{$f->check_p8  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p8 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_p8)
                            <ol>
                                {!! $f->P8_1 ? '<li>Frekuensi pemeliharaan kebersihan '.$f->P8_1.'</li>' : '' !!}
                                {!! $f->P8_2 ? '<li>Terdapat bukti laporan hasil sanitasi (QC record)</li>' : '' !!}
                            </ol>
                        @else
                            -
                        @endif
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
                            9.	Apakah sarana dan prasarana untuk higiene personal memadai?
                            </td>
                            <td align="center">
                                {{$f->check_p9  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p9 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($f->check_p9)
                                <ol>
                                    {!! $f->P9_1 ? '<li>Terdapat bak cuci tangan dilengkapi dengan sabun dan air mengalir</li>' : '' !!}
                                    {!! $f->P9_2 ? '<li>Menggunakan alat pelindung diri</li>' : '' !!}
                                </ol>
                            @else
                                -
                            @endif
                            </td>
                        </tr>
    
                        <tr>
                            <td>
                            10.	Apakah dilakukan program pengendalian hama dan serangga?
                            </td>
                            <td align="center">
                                {{$f->check_p10  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p10 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($f->check_p10)
                                <ol>
                                    {!! $f->P10_1 ? '<li>Memiliki SOP pengendalian hama dan serangga</li>' : '' !!}
                                    {!! $f->P10_2 ? '<li>Jadwal pelaksanaan kegiatan dilakukan '.$f->P10_2.'</li>' : '' !!}
                                    {!! $f->P10_3 ? '<li>Kontrak dengan pihak ketiga '.$f->P10_3.'</li>' : '' !!}
                                </ol>
                            @else
                                -
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                11. Apakah ada prosedur penanganan terhadap bahan pangan asal hewan afkir/rusak?
                            </td>
                            <td align="center">
                                {{$f->check_p11  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p11 ? ' ':"V"}}
                            </td>
                            <td>
                                {{ $f->P11 ? $f->P11 : '-' }}
                            </td>
                        </tr>

                        <tr>
                            <td>
                            12.	Apakah sisa potongan daging sapi/kerbau mentah dijual/diberikan sebagai pakan babi? 
                            </td>
                            <td align="center">
                                {{$f->check_p12 ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p12? ' ':"V"}}
                            </td>
                            <td>
                                {{ $f->P12 ? $f->P12 : '-' }}
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
                                 {{$f->catatan ? $f->catatan : '-'}}
                            </div>
                            <br>
                            <br>
                            2. Rekomendasi/Tindak Lanjut :<br>
                            <div style="min-height:150px; padding-left:18px">
                                {{$f->rekomendasi  ? $f->rekomendasi : '-'}}
                            </div>
                            <br> 
                            <br>
                            <div style="min-height:150px; padding-left:18px; text-align:center">
                            Cap Unit Usaha<br><br><br>
                            </div>
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
                                <li>{{$f->idPengawas  ? $pe1->NamaLengkap:'-'}}</li>
                                @endforeach
                                @foreach($pengawas2 as $pe2)
                                <li>{{$f->idPengawas2  ? $pe2->NamaLengkap:'-'}}</li>
                                @endforeach
                                @foreach($pengawas3 as $pe3)
                                <li>{{$f->idPengawas3  ? $pe3->NamaLengkap:'-'}}</li>
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
        </tr>
    </table>
    @endforeach
</body>
</html>