<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Checklist 9 Export PDF</title>
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
        footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;

               
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
                <h3 style="margin-top:0px"><strong>Laporan Pengawasan Unit Usaha Produk Hewan </strong></h3>
                <h3 ><strong>(Tempat Pengolahan Produk Hewan Non Pangan)</strong></h3>
            </td>
        </tr>
        <tr>
            
            <td colspan="2">
                
                <table class="umum" width="100%">
                    <tr>
                        <td>Nama Unit Usaha</td><td>:</td>
                        <td>{{ $data->NamaUnitUsaha ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Unit Usaha</td><td>:</td>
                        <td>{{ $data->AlamatUnitUsaha ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Pemilik Unit Usaha / Nama Kantor Pusat</td><td>:</td>
                        <td>{{ $data->namaPemilikUsaha ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor Pusat</td><td>:</td>
                        <td>{{ $data->AlamatKantorPusat ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>No. Telp / Fax / Email Kantor Pusat</td><td>:</td>
                        <td>{{ $data->Telepon ?: '-' }}/{{ $data->Fax ?: '-' }} /{{ $data->Email ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Teknis</td><td>:</td>
                        <td>{{ $data->PenangungJawabTeknis ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>No.Telp Penanggung Jawab Teknis </td><td>:</td>
                        <td>{{ $data->KontakPJ ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Tahun Operasional</td><td>:</td>
                        <td>{{ $data->TahunOperasional ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Pengolahan</td><td>:</td>
                        <td>{{ $data->jenisPengolahan ? $data->jenisPengolahan : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Kapasitas Produksi</td><td>:</td>
                        <td>{{ $data->kapasitasProduksi ? $data->kapasitasProduksi.' Kg/hari' : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah Produksi Saat Ini</td><td>:</td>
                        <td>{{ $data->jumlahProduksi ? $data->jumlahProduksi.' Kg/hari' : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Asal Sumber Bahan Baku</td><td>:</td>
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
                        <td>Distribusi Produk </td><td>:</td>
                        <td>{{ $data->distribusiProduk ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah karyawan</td><td>:</td>
                        <td>{{ $data->jumlahKaryawan ? $data->jumlahKaryawan.' orang' : '-' }}</td>
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
                        <td align="center"><strong>Aspek parameter</strong></td>
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
                            <span style="margin-left:18px">• NIB</span><br>
                            <span style="margin-left:18px">• Perjanjian Kerja sama</span><br>
                            <span style="margin-left:27px">(jika Sewa Unit Usaha )</span>
                        </td>
                        <td align="center">
                            <br>{{$data->P1_1  ? 'V':' '}}
                            <br>{{$data->P1_2  ? 'V':' '}}
                            <br>{{$data->P1_3  ? 'V':' '}}
                            <br>{{$data->P1_4  ? 'V':' '}}
                            <br>{{$data->P1_5  ? 'V':' '}}
                        </td>
                        <td align="center"></td>
                        <td>
                            <br>No: {{$data->P1_1 ? $data->P1_1 : '-'}}
                            <br>No: {{$data->P1_2 ? $data->P1_2 : '-'}}
                            <br>No: {{$data->P1_3 ? $data->P1_3 : '-'}}
                            <br>No: {{$data->P1_4 ? $data->P1_4 : '-'}}
                            <br>No: {{$data->P1_5 ? $data->P1_5 : '-'}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2. Apakah sudah memiliki sertivikat NKV?
                        </td>
                        <td align="center">
                            {{$data->check_p2  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p2 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p2)
                            <div><b>No:</b> {{ $data->P2_1 ?: '-' }}</div>
                            <div><b>Tanggal Penerbitan:</b> {{ $data->P2_2 ?: '-' }}</div>
                            <div><b>Surveilans terakhir:</b> {{ $data->P2_3 ?: '-' }}</div>
                            <div><b>Tindak lanjut temuan:</b> {{ $data->P2_4 ?: '-' }}</div>
                        @else
                            {{ $data->P2_5 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3.	Apakah ada dokter hewan penanggung jawab teknis?
                        </td>
                        <td align="center">
                            {{$data->check_p3  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p3 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p3)
                                                        <b>Jumlah:</b> {{ $data->P3_1 ?: '0' }} Orang
                                                        <ol>
                                                            @foreach($dokterPJ as $dokterPJ)
                                                                <li>
                                                                    {{ $dokterPJ->namaLengkap }} 
                                                                    {{ $dokterPJ->status ? '('.$dokterPJ->status.')' : '' }} 
                                                                    {{ $dokterPJ->notlp }}
                                                                </li>
                                                            @endforeach
                                                        </ol>
                                                    @else
                                                        {{ $data->P3_2 ?: '-' }}
                                                    @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4.	Apakah ada pendataan sumber bahan baku produk hewan?
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
                                                            @foreach($suplier as $suplier)
                                                                <li>
                                                                    {{ $suplier->namaSuplier ? $suplier->namaSuplier.', ' : '' }}
                                                                    {{ $suplier->negara ? $suplier->negara.', ' : '' }}
                                                                    {{ $suplier->tanggal ? $suplier->tanggal.', ' : '' }}
                                                                    {{ $suplier->jumlah ? $suplier->jumlah.' liter' : '' }}
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
                            5.	Jika menggunakan bahan baku impor, apakah bahan baku produk hewan dilengkapi dengan sertifikat veteriner dan COA
                        </td>
                        <td align="center">
                            {{$data->check_p5  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p5 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p5)
                                                        <div><b>No SV:</b> {{ $data->P5_1 ?: '-' }}</div>
                                                        <div><b>No COA:</b> {{ $data->P5_2 ?: '-' }}</div>
                                                    @else
                                                        {{ $data->P5_3 ?: '-' }}
                                                    @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6.	Jika menggunakan bahan baku lokal, apakah bahan baku produk hewan dilengkapi dengan Sertifikat Veteriner?
                        </td>
                        <td align="center">
                            {{$data->check_p6  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p6 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p6)
                            <div><b>No SV:</b> {{ $data->P6_1 ?: '-' }}</div>
                        @else
                            {{ $data->P6_2 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7.	Apakah bangunan/ruangan di desain untuk mencegah akses masuk hewan atau manusia dari luar?
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
                            8.	Apakah sarana dan prasarana memenuhi/memadai sesuai kapasitas produksi?
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
                            9.	Apakah dilakukan program pengendalian Critical Control Point (CCP)?
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
                <table class="survey" width="100%" border="1" >
                     <tr>
                        <td align="center"><strong>Aspek parameter</strong></td>
                         <td align="center"><strong>Ya</strong></td>
                        <td align="center"><strong>Tidak</strong></td>
                        <td align="center"><strong>Keterangan</strong></td>
                    </tr>
                    <tr>
                        <td>
                            10.	Apakah terdapat pemisahan yang jelas antara area bersih dan area kotor?
                        </td>
                        <td align="center">
                            {{$data->check_p10  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p10 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p10)
                            <div><b>Pemisahan Ruangan:</b> {{ $data->P10_1 ?: '-' }}</div>
                            <div><b>Pemisahan Sarana dan Prasarana:</b> {{ $data->P10_2 ?: '-' }}</div>
                            <div><b>Pemisahan Personel:</b> {{ $data->P10_3 ?: '-' }}</div>
                        @else
                            {{ $data->P10_4 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                        <tr>
                            <td>
                                11.	Apakah produk hewan non pangan memiliki label/informasi?
                            </td>
                            <td align="center">
                                {{$data->check_p11  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p11 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p11)
                                Informasi label
                                <div><b>Jenis Produk:</b> {{ $data->P11_1 ?: '-' }}</div>
                                <div><b>Berat:</b> {{ $data->P11_2 ?: '-' }}</div>
                            @else
                                {{ $data->P11_3 ?: '-' }}
                            @endif   
                            </td>
                        </tr>
                        <tr>
                            <td>
                                12.	Apakah ada pemeriksaan/pengujian terhadap produk secara berkala?
                            </td>
                            <td align="center">
                                {{$data->check_p12  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p12 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p12)
                                <div><b>SOP Pengambilan Sampel dan Pengujian:</b> {{ $data->P12_1 ?: '-' }}</div>
                                <div><b>Frekuensi Pengambilan Sampel:</b> {{ $data->P12_2 ?: '-' }}</div>
                                <div><b>Jenis Uji:</b> {{ $data->P12_3 ?: '-' }}</div>
                                <div><b>Instansi Pelaksana Pengujian:</b> {{ $data->P12_4 ?: '-' }}</div>
                            @else
                                {{ $data->P12_5 ?: '-' }}
                            @endif    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                13.	Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana penyimpanan dan produksi (sanitasi)?
                            </td>
                            <td align="center">
                                {{$data->check_p13  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p13 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p12)
                                <div><b>SOP Pemeliharaan Kebersihan:</b> {{ $data->P12_1 ?: '-' }}</div>
                                <div><b>Frekuensi Pemeliharaan Kebersihan:</b> {{ $data->P12_2 ?: '-' }}</div>
                                <div><b>Metode:</b> {{ $data->P12_3 ?: '-' }}</div>
                                <div><b>Catatan Pemeliharaan Kebersihan:</b> {{ $data->P12_4 ?: '-' }}</div>
                            @else
                                {{ $data->P12_5 ?: '-' }}
                            @endif   
                            </td>
                        </tr>
                        <tr>
                            <td>
                                14.	Apakah sarana dan prasarana untuk kebersihan personal (higiene) memadai?
                            </td>
                            <td align="center">
                                {{$data->check_p14  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p14 ? ' ':"V"}}
                            </td>
                            <td>
                                {{ $data->P14 ?: '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                15.	Apakah dilakukan program pengendalian hama dan serangga?
                            </td>
                            <td align="center">
                                {{$data->check_p15  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p15 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p12)
                                <div><b>SOP Pengendalian Serangga:</b> {{ $data->P12_1 ?: '-' }}</div>
                                <div><b>Dilakukan Subkontrak:</b> {{ $data->P12_2 ?: '-' }}</div>
                                <div><b>Jenis Pengendalian Serangga:</b> {{ $data->P12_3 ?: '-' }}</div>
                                <div><b>Jadwal Pengecekan:</b> {{ $data->P12_4 ?: '-' }}</div>
                                <div><b>Bukti Kontrak:</b> {{ $data->P12_5 ?: '-' }}</div>
                            @else
                                {{ $data->P12_6 ?: '-' }}
                            @endif 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                16.	Apakah ada prosedur penanganan terhadap produk hewan non pangan afkir/rusak? 
                            </td>
                            <td align="center">
                                {{$data->check_p16  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p16 ? ' ':"V"}}
                            </td>
                            <td>
                                {{ $data->P16 ?: '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                17.	Apakah dilakukan pengolahan limbah?
                            </td>
                            <td align="center">
                                {{$data->check_p17  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p17 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p17)
                                <div><b>SOP Pengolahan Limbah:</b> {{ $data->P17_1 ?: '-' }}</div>
                                <div><b>Metode Pelaksanaan:</b> {{ $data->P17_2 ?: '-' }}</div>
                            @else
                                {{ $data->P17_3 ?: '-' }}
                            @endif  
                            </td>
                        </tr>
                       
                    
                </table>
                </td>
            </tr>

        <tr>
        <td colspan="2"><h3></h3></td>
        </tr>
        
        <tr>
            <td colspan="2"><h3></h3></td>
        </tr>
              
        <tr>
            <td colspan="2">
                <table class="catatan" width="100%" border="1">
                    <tr>
                        <td colspan="2">
                            1. Catatan :<br>
                            <div style="min-height:150px; padding-left:18px">
                                 {{$data->catatan}}
                            </div>
                            <br>
                            <br>
                            2. Rekomendasi/Tindak Lanjut :<br>
                            <div style="min-height:150px; padding-left:18px">
                                {{$data->rekomendasi}}
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
        </tr>
    </table>
@endforeach
</body>
</html>