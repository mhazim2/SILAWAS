<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Checklist 8 Export PDF</title>
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
                <h3 style="margin-top:0px"><strong>Pengawasan Unit Usaha Produk Hewan </strong></h3>
                <h3 ><strong>(Tempat Pengolahan Pangan Asal Hewan)</strong></h3>
            </td>
        </tr>
       
        <tr>
            
            <td colspan="2">
                
                <table class="umum" width="100%">
                    <tr>
                        <td>Nama Unit Usaha</td><td>:</td>
                        <td>{{ $f->NamaUnitUsaha ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Unit Usaha</td><td>:</td>
                        <td>{{ $f->AlamatUnitUsaha ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Pemilik Unit Usaha / Nama Kantor Pusat</td><td>:</td>
                        <td>{{ $f->namaPemilikUsaha ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor Pusat</td><td>:</td>
                        <td>{{ $f->AlamatKantorPusat ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>No. Telp / Fax / Email Kantor Pusat</td><td>:</td>
                        <td>{{ $f->Telepon ?: '-' }}/ {{ $f->Fax ?: '-' }}/{{ $f->Email ?: '-' }} </td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Teknis</td><td>:</td>
                        <td>{{ $f->PenangungJawabTeknis ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>No.Telp Penanggung Jawab Teknis </td><td>:</td>
                        <td>{{ $f->KontakPJ ?: '-' }}</td>
                    </tr>

                    <tr>
                        <td> Tahun Operasional</td><td>:</td>
                        <td>{{ $f->TahunOperasional ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Pengolahan</td><td>:</td>
                        <td>{{ $f->jenisPengolahan ? $f->jenisPengolahan : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Kapasitas Produksi </td><td>:</td>
                        <td>{{ $f->kapasitasProduksi ? $f->kapasitasProduksi.' Kg/hari' : '-' }}</td>
                    </tr>
                    <tr>
                            <td>Realisasi Produksi</td><td>:</td>
                            <td>{{ $f->realisasiProduksi ? $f->realisasiProduksi.' Kg/hari' : '-' }}</td>
                        </tr>
                    <tr>
                        <td>Waktu Produksi</td><td>:</td>
                        <td>{{ $f->waktuProduksi ? $f->waktuProduksi.' hari/minggu' : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Asal Sumber Bahan Baku</td><td>:</td>
                        <td>
                                @if ($f->check_sumber_lokal || $f->check_sumber_impor)
                                    @if ($f->check_sumber_lokal)
                                        <div>Lokal {{ $f->sumber_lokal ? '( '.$f->sumber_lokal.' )' : '' }}</div>
                                    @endif
                                    @if ($f->check_sumber_impor)
                                        <div>Ex-impor {{ $f->sumber_impor ? '( '.$f->sumber_impor.' )' : '' }}</div>
                                    @endif
                                @else
                                    -
                                @endif
                            </td>
                    </tr>
                    <tr>
                        <td>Distribusi Produk Olahan</td><td>:</td>
                        <td>{{ $f->distribusiProduk ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah karyawan</td><td>:</td>
                        <td>{{ $f->jumlahKaryawan ? $f->jumlahKaryawan.' orang' : '-' }}</td>
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
                            <span style="margin-left:27px">(jika Sewa Unit Usaha Pengolahan)</span>
                        </td>
                        <td align="center">
                            <br>{{$f->P1_1  ? 'V':' '}}
                            <br>{{$f->P1_2  ? 'V':' '}}
                            <br>{{$f->P1_3  ? 'V':' '}}
                            <br>{{$f->P1_4  ? 'V':' '}}
                            <br>{{$f->P1_5  ? 'V':' '}}
                        </td>
                        <td align="center"></td>
                        <td>
                            <br>No: {{$f->P1_1 ? $f->P1_1 : '-'}}
                            <br>No: {{$f->P1_2 ? $f->P1_2 : '-'}}
                            <br>No: {{$f->P1_3 ? $f->P1_3 : '-'}}
                            <br>No: {{$f->P1_4 ? $f->P1_4 : '-'}}
                            <br>No: {{$f->P1_5 ? $f->P1_5 : '-'}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2. Apakah sudah memiliki sertivikat NKV?
                        </td>
                        <td align="center">
                            {{$f->check_p2  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p2 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_p2)
                            <div><b>No:</b> {{ $f->P2_1 ?: '-' }}</div>
                            <div><b>Tanggal Penerbitan:</b> {{ $f->P2_2 ?: '-' }}</div>
                            <div><b>Surveilans terakhir:</b> {{ $f->P2_3 ?: '-' }}</div>
                            <div><b>Tindak lanjut temuan:</b> {{ $f->P2_4 ?: '-' }}</div>
                        @else
                            {{ $f->P2_5 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3.	Apakah unit usaha memiliki sertifikat halal (bagi yang dipersyaratkan)?
                        </td>
                        <td align="center">
                            {{$f->check_p3  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p3 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_p3)
                                                        <div><b>No:</b> {{ $f->P3_1 ?: '-' }}</div>
                                                        <div><b>Tanggal Penerbitan:</b> {{ $f->P3_2 ?: '-' }}</div>
                                                        <div><b>Masa Berlaku:</b> {{ $f->P3_3 ? $f->P3_3.' tahun' : '-' }}</div>
                                                    @else
                                                        {{ $f->P3_4 ?: '-' }}
                                                    @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4.	Apakah ada dokter hewan penanggung jawab teknis?
                        </td>
                        <td align="center">
                            {{$f->check_p4  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p4 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_p4)
                                                        <b>Jumlah:</b> {{ $f->P4_1 ?: '0' }} Orang
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
                                                        {{ $f->P4_2 ?: '-' }}
                                                    @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5.	Apakah ada penfan sumber bahan baku produk hewan?
                        </td>
                        <td align="center">
                            {{$f->check_p5  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p5 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_p5)
                            <div><b>Nama Olahan Daging Sapi/Kerbau:</b> {{ $f->P5_1 ?: '-' }}</div>
                            <div><b>Nama Olahan Daging Unggas:</b> {{ $f->P5_2 ?: '-' }}</div>
                            <div><b>Nama Olahan Telur:</b> {{ $f->P5_3 ?: '-' }}</div>
                            <div><b>Nama Olahan Susu:</b> {{ $f->P5_4 ?: '-' }}</div>
                            <div><b>RPH Sertifikat NKV:</b> {{ $f->P5_5 ?: '-' }}</div>
                            <div><b>RPH Sertifikat Halal:</b> {{ $f->P5_6 ?: '-' }}</div>
                            <div><b>Status Peternakan Unggas (Kompartemen):</b> {{ $f->P5_7 ?: '-' }}</div>
                            <div><b>NKV Unit Usaha Budidaya Telur dan Sapi Perah:</b> {{ $f->P5_8 ?: '-' }}</div>
                        @else
                            {{ $f->P5_9 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6.	Jika menggunakan bahan baku impor, apakah bahan baku produk hewan dilengkapi sertifikat halal bagi yang dipersyaratkan dan COA
                        </td>
                        <td align="center">
                            {{$f->check_p6  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p6 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_p6)
                            <div><b>Negara Asal:</b> {{ $f->P6_1 ?: '-' }}</div>
                            <div><b>Unit Usaha/No.EST:</b> {{ $f->P6_2 ?: '-' }}</div>
                        @else
                            {{ $f->P6_3 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7.	Jika menggunakan bahan baku lokal, apakah bahan baku produk hewan dilengkapi dengan Sertifikat Veteriner?
                        </td>
                        <td align="center">
                            {{$f->check_p7  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p7 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_p7)
                                                        <div><b>Daerah Asal:</b> {{ $f->P7_1 ?: '-' }}</div>
                                                    @else
                                                        {{ $f->P7_2 ?: '-' }}
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
                            8.	Apakah bangunan/ruangan di desain untuk mencegah akses masuk hewan atau manusia dari luar?
                        </td>
                        <td align="center">
                            {{$f->check_p8  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p8 ? ' ':"V"}}
                        </td>
                        <td>
                            {{ $f->P8 ?: '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            9.	Apakah sarana dan prasarana penyimpanan bahan dan produk sesuai kapasitas?
                        </td>
                        <td align="center">
                            {{$f->check_p9  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p9 ? ' ':"V"}}
                        </td>
                        <td>
                            {{ $f->P9 ?: '-' }}
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            10.	Apakah unit memiliki sarana penyimpanan dingin?
                        </td>
                        <td align="center">
                            {{$f->check_p10  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p10 ? ' ':"V"}}
                        </td>
                        <td>
                            {{ $f->P10 ?: '-' }} 
                        </td>
                    </tr>
                        <tr>
                            <td>
                                11.	Apakah dilakukan program pengendalian Critical Control Point (CCP)?
                            </td>
                            <td align="center">
                                {{$f->check_p11  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p11 ? ' ':"V"}}
                            </td>
                            <td>
                                {{ $f->P11 ?: '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                12.	Apakah terdapat pemisahan yang jelas antara area bersih dan area kotor?
                            </td>
                            <td align="center">
                                {{$f->check_p12  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p12 ? ' ':"V"}}
                            </td>
                            <td>
                                {{ $f->P12 ?: '-' }}  
                            </td>
                        </tr>
                        <tr>
                            <td>
                                13.	Apakah produk hewan memiliki label/informasi?
                            </td>
                            <td align="center">
                                {{$f->check_p13  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p13 ? ' ':"V"}}
                            </td>
                            <td>
                                {{ $f->P13 ?: '-' }}  
                            </td>
                        </tr>
                        <tr>
                            <td>
                                14.	Apakah ada pemeriksaan/pengujian terhadap produk secara berkala?
                            </td>
                            <td align="center">
                                {{$f->check_p14  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p14 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($f->check_p14)
                                <div><b>Internal:</b> {{ $f->P14_1 ?: '-' }}</div>
                                <div><b>Eksternal:</b> {{ $f->P14_2 ?: '-' }}</div>
                                <div><b>Terakreditasi:</b> {{ $f->P14_3 ?: '-' }}</div>
                            @else
                                {{ $f->P14_4 ?: '-' }}
                            @endif 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                15.	Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana penyimpanan dan produksi (sanitasi)?
                            </td>
                            <td align="center">
                                {{$f->check_p15  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p15 ? ' ':"V"}}
                            </td>
                            <td>
                                {{ $f->P15 ?: '-' }}    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                16.	Apakah sarana dan prasarana untuk kebersihan personal (higiene) memadai?
                            </td>
                            <td align="center">
                                {{$f->check_p16  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p16 ? ' ':"V"}}
                            </td>
                            <td>
                                {{ $f->P16 ?: '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                17.	Apakah ada prosedur tertulis pemeriksaan kesehatan bagi personel
                            </td>
                            <td align="center">
                                {{$f->check_p17  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p17 ? ' ':"V"}}
                            </td>
                            <td>
                                {{ $f->P17 ?: '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                18.	Apakah ada pemeriksaan kesehatan bagi personel
                            </td>
                            <td align="center">
                                {{$f->check_p18  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p18 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($f->check_p18)
                                <div><b>Jangka Waktu:</b> {{ $f->P18_1 ?: '-' }}</div>
                            @else
                                {{ $f->P18_2 ?: '-' }}
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
                                    19.	Apakah dilakukan program pengendalian hama dan serangga?
                                </td>
                                <td align="center">
                                    {{$f->check_p19  ? 'V':' '}}
                                </td>
                                <td align="center">
                                    {{$f->check_p19 ? ' ':"V"}}
                                </td>
                                <td>
                                    {{ $f->P19 ?: '-' }}  
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    20.	Apakah ada prosedur penanganan terhadap bahan pangan asal hewan afkir/rusak? 
                                </td>
                                <td align="center">
                                    {{$f->check_p20  ? 'V':' '}}
                                </td>
                                <td align="center">
                                    {{$f->check_p20 ? ' ':"V"}}
                                </td>
                                <td>
                                    {{ $f->P20 ?: '-' }}  
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    21.	Apakah dilakukan pengolahan limbah?
                                </td>
                                <td align="center">
                                    {{$f->check_p21  ? 'V':' '}}
                                </td>
                                <td align="center">
                                    {{$f->check_p21 ? ' ':"V"}}
                                </td>
                                <td>
                                    {{ $f->P21 ?: '-' }}
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