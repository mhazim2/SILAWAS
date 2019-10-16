<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Checklist 2 Export PDF</title>
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
                <h3 ><strong>(Tempat Penampungan Susu) </strong></h3>
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
                        <td>Pemilik Unit Usaha/Nama Kantor Pusat</td><td>:</td>
                        <td>{{ $data->namaPemilikUsaha ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor Pusat</td><td>:</td>
                        <td>{{ $data->AlamatKantorPusat ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>No. Telp / Fax / Email Kantor Pusat</td><td>:</td>
                        {{ $data->Telepon ?: '-' }}/{{ $data->Fax ?: '-' }}/{{ $data->Email ?: '-' }}
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Teknis</td><td>:</td>
                        <td>{{ $data->PenangungJawabTeknis ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>No. Telp Penanggung Jawab Teknis</td><td>:</td>
                        <td>{{ $data->KontakPJ ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Tahun Operasional</td><td>:</td>
                        <td>{{ $data->TahunOperasional ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Kapasitas Penampungan</td><td>:</td>
                        <td>{{ $data->kapasitasPenampungan ? $data->kapasitasPenampungan.' liter' : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Realisasi Pemanfaatan Saat Ini</td><td>:</td>
                        <td>{{ $data->realisasiPemanfaatan ? $data->realisasiPemanfaatan.' liter' : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Skala Usaha</td><td>:</td>
                        <td>{{ $data->skalaUsaha ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Wilayah Peredaran</td><td>:</td>
                        <td>
                            @if ($data->check_wilayahPeredaran_1)
                                <div>Lokal {{ $data->wilayahPeredaran_1 ? '('.$data->wilayahPeredaran_1.')' : '' }}</div>
                            @endif
                            @if ($data->check_wilayahPeredaran_2)
                                <div>Lokal {{ $data->wilayahPeredaran_2 ? '('.$data->wilayahPeredaran_2.')' : '' }}</div>
                            @endif
                            @if ($data->check_wilayahPeredaran_3)
                                <div>Lokal {{ $data->wilayahPeredaran_3 ? '('.$data->wilayahPeredaran_3.')' : '' }}</div>
                            @endif
                            @if ($data->check_wilayahPeredaran_4)
                                <div>Lokal {{ $data->wilayahPeredaran_4 ? '('.$data->wilayahPeredaran_4.')' : '' }}</div>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Karyawan</td><td>:</td>
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
                            
                        </td>
                        <td align="center">
                            <br>{{$data->check_p1_1  ? 'V':' '}}
                            <br>{{$data->check_p1_2  ? 'V':' '}}
                            <br>{{$data->check_p1_3  ? 'V':' '}}
                            <br>{{$data->check_p1_4  ? 'V':' '}}
                            
                        </td>
                        <td align="center"></td>
                        <td>
                            <br>{!! $data->P1_1_1 ? '<b>Nomor izin usaha:</b> '.$data->P1_1_1.'&nbsp <b>Tanggal Sertifikat:</b>'.$data->P1_1_2 : '-' !!}<br>
                            <br>{!! $data->P1_2_1 ? '<b>No NPWP:</b> '.$data->P1_2_2.'&nbsp <b>Tanggal Sertifikat:</b>'.$data->P1_2_2 : '-' !!}<br>
                            <br>{!! $data->P1_3_1 ? '<b>No SIUP:</b> '.$data->P1_3_2.'&nbsp <b>Tanggal Sertifikat:</b>'.$data->P1_3_2 : '-' !!}<br>
                            <br>{!! $data->P1_4_1 ? '<b>No NIB:</b> '.$data->P1_4_2.'&nbsp <b>Tanggal Sertifikat:</b>'.$data->P1_4_2 : '-' !!}<br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2.	Apakah sudah memiliki sertifikat NKV?
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
                                                        <div><b>Surveilans Terakhir:</b> {{ $data->P2_3 ?: '-' }}</div>
                                                        <div><b>Tindak Lanjut Temuan:</b></div>
                                                        <div>{{ $data->P2_4 ?: '-' }}</div>
                                                       
                                                    @else
                                                        {{ $data->P2_6 ?: '-' }}
                                                    @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3.	Apakah sudah memiliki sertifikat halal?
                        </td>
                        <td align="center">
                            {{$data->check_p3  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p3 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p3)
                                                        <div><b>No:</b> {{ $data->P3_1 ?: '-' }}</div>
                                                        <div><b>Tanggal Penerbitan:</b> {{ $data->P3_2 ?: '-' }}</div>
                                                        <div><b>Masa Berlaku:</b> {{ $data->P3_3 ? $data->P3_3.' tahun' : '-' }}</div>
                                                        
                                                    @else
                                                        {{ $data->P3_5 ?: '-' }}
                                                    @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4.	Apakah ada pendataan sumber susu?
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
                                                            @foreach($supliers as $suplier)
                                                                <li>
                                                                    {{ $suplier->namaSuplier ? $suplier->namaSuplier.', ' : '' }}
                                                                    {{ $suplier->negara ? $suplier->negara.', ' : '' }}
                                                                    {{ $suplier->tanggal ? $suplier->tanggal.', ' : '' }}
                                                                    {{ $suplier->jumlah ? $suplier->jumlah.' Liter' : '' }}
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
                            5.	Apakah area penampungan didesain untuk mencegah/ membatasi  akses masuk hewan atau manusia dari luar?
                        </td>
                        <td align="center">
                            {{$data->check_p5  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p5 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p5)
                            <div><b>Pagar Atau Fasilitas Pembatas Lain:</b> {{ $data->P5_1 ?: '-' }}</div>
                            <div><b>Jenis:</b> {{ $data->P5_2 ?: '-' }}</div>
                            <div><b>Berhasil Dibatasi:</b> {{ $data->P5_3 ?: '-' }}</div>
                        @else
                            {{ $data->P5_4 ?: '-' }}
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
                            6.	Apakah sarana dan prasarana memenuhi/ memadai sesuai kapasitas penampungan susu?
                        </td>
                        <td align="center">
                            {{$data->check_p6  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p6 ? ' ':"V"}}
                        </td>
                        <td>
                            <div><b>Sarana Yang Digunakan:</b></div>
                            <div>{{ $data->P6_1 ?: '-' }}</div>
                            <div><b>Rata-Rata Jumlah Susu yang Masuk dan Keluar:</b> {{ $data->P6_2.' Liter/hari' ?: '-' }}</div>
                            <div><b>Kesesuaian Jumlah dan Kapasitas Penampungan:</b> {{ $data->P6_3 ?: '-' }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7.	Apakah memiliki sarana pendingin untuk penyimpanan susu?
                        </td>
                        <td align="center">
                            {{$data->check_p7  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p7 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p7)
                            <div><b>Memiliki Regulator Suhu:</b> {{ $data->P7_1 ?: '-' }}</div>
                            <div><b>Regulator Suhu Rutin Dikalibrasi:</b> {{ $data->P7_2 ?: '-' }}</div>
                            <div><b>Waktu Kalibrasi Terakhir:</b> {{ $data->P7_3 ?: '-' }}</div>
                            <div><b>Pencatatan Suhu Secara Rutin:</b> {{ $data->P7_4 ?: '-' }}</div>
                        @else
                            {{ $data->P7_5 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            8.	Apakah ada pemeriksaan/pengujian laboratorium terhadap susu  secara berkala?
                        </td>
                        <td align="center">
                            {{$data->check_p8  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p8 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p8)
                            <div><b>SOP Pengambilan Sampel dan Pengujian:</b> {{ $data->P8_1 ?: '-' }}</div>
                            <div><b>Frekuensi Pengambilan Sampel:</b> {{ $data->P8_2 ?: '-' }}</div>
                            <div><b>Metode Pengambilan Sampel:</b> {{ $data->P8_3 ?: '-' }}</div>
                            <div><b>Jenis Uji:</b> {{ $data->P8_4 ?: '-' }}</div>
                            <div><b>Instansi yang Melakukan Pengujian:</b> {{ $data->P8_5 ?: '-' }}</div>
                            <div><b>Waktu Terakhir Pengujian:</b> {{ $data->P8_6 ?: '-' }}</div>
                        @else
                            {{ $data->P8_7 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            9.	Apakah instrumen uji dikalibrasi secara berkala?
                        </td>
                        <td align="center">
                            {{$data->check_p9  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p9 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p9)
                            <div><b>SOP Kalibrasi Instrumen Uji:</b> {{ $data->P9_1 ?: '-' }}</div>
                            <div><b>Frekuensi Pelaksanaan Kalibrasi:</b> {{ $data->P9_2 ?: '-' }}</div>
                            <div><b>Waktu Terakhir Kalibrasi:</b> {{ $data->P9_3 ?: '-' }}</div>
                        @else
                            {{ $data->P9_4 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            10.	Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                        </td>
                        <td align="center">
                            {{$data->check_p10  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p10 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p10)
                                                        <div><b>SOP Pemeliharaan Kebersihan Sarana dan Prasarana:</b> {{ $data->P10_1 ?: '-' }}</div>
                                                        <div><b>Frekuensi Pemeliharaan Kebersihan:</b> {{ $data->P10_2 ?: '-' }}</div>
                                                        <div><b>Metode:</b> {{ $data->P10_3 ?: '-' }}</div>
                                                        <div><b>Laporan hasil sanitasi (<i>QC Record</i>):</b> {{ $data->P10_4 ?: '-' }}</div>
                                                    @else
                                                        <div><b>Kondisi Kebersihan Unit Usaha:</b></div>
                                                        <div>{{ $data->P10_5 ?: '-' }}</div>
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
                                11.	Apakah sarana dan prasarana higiene personal memadai?
                            </td>
                            <td align="center">
                                {{$data->check_p11  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p11 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p11)
                                <div><b>Terdapat Sarpras Untuk Cuci Tangan:</b> {{ $data->P11_1 ?: '-' }}</div>
                                <div><b>Dilengkapi Sabun:</b> {{ $data->P11_2 ?: '-' }}</div>
                                <div><b>Dilengkapi Pelindung Diri (APD):</b> {{ $data->P11_3 ?: '-' }}</div>
                            @else
                                {{ $data->P11_4 ?: '-' }}
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                12.	Apakah dilakukan program pengendalian hama dan serangga?
                            </td>
                            <td align="center">
                                {{$data->check_p12  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p12 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p12)
                                <div><b>Dilakukan Secara Subkontrak:</b> {{ $data->P12_1 ?: '-' }}</div>
                                <div><b>SOP Pengendalian Hama dan Seranga:</b> {{ $data->P12_2 ?: '-' }}</div>
                                <div><b>Bukti Kontrak:</b> {{ $data->P12_3 ?: '-' }}</div>
                                <div><b>Jadwal Inspeksi:</b> {{ $data->P12_4 ?: '-' }}</div>
                                <div><b>Jenis Hama dan Metode:</b> {{ $data->P12_5 ?: '-' }}</div>
                                <div><b>Jadwal dan Catatan Pelaksanaan Pengendalian Hama:</b> {{ $data->P12_6 ?: '-' }}</div>
                            @else
                                {{ $data->P12_7 ?: '-' }}
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                13.	Apakah dilakukan pengolahan limbah?
                            </td>
                            <td align="center">
                                {{$data->check_p13  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p13 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p13)
                                                        <div><b>SOP Pengolahan Limbah:</b> {{ $data->P13_1 ?: '-' }}</div>
                                                        <div><b>Metode:</b> {{ $data->P13_2 ?: '-' }}</div>
                                                    @else
                                                        {{ $data->P13_3 ?: '-' }}
                                                    @endif
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