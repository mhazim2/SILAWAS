<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Checklist 1 Export PDF</title>
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
                <h3 ><strong>(Tempat Budidaya Hewan Perah dan Pemerahan Susu) </strong></h3>
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
                        <td>
                            {{ $data->Telepon ?: '-' }}/{{ $data->Fax ?: '-' }}/{{ $data->Email ?: '-' }}
                        <td>
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
                        <td>Kapasitas Pemeliharaan</td><td>:</td>
                        <td>{{ $data->kapasitasPemeliharaan ? $data->kapasitasPemeliharaan.' ekor' : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Populasi Ternak</td><td>:</td>
                        <td>{{ $data->populasiTernak ? $data->populasiTernak.' ekor' : '-' }}</td>
                    </tr>
                    @if ($data->sapiLaktasi)
                        <tr>
                            <td>&nbsp;</td><td>&nbsp;</td>
                            <td>(Sapi Laktasi: {{ $data->sapiLaktasi }} ekor)</td>
                        </tr>
                    @endif
                    <tr>
                        <td>Kategori usaha</td><td>:</td>
                        <td>{{ $data->kategoriUsaha ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Total Produksi Susu</td><td>:</td>
                        <td>{{ $data->totalProduksiSusu ? $data->totalProduksiSusu.' liter/hari' : '-' }}</td>
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
                            <br>{{$data->P1_1_1  ? 'V':' '}}
                            <br>{{$data->P1_2_1  ? 'V':' '}}
                            <br>{{$data->P1_3_1  ? 'V':' '}}
                            <br>{{$data->P1_4_1  ? 'V':' '}}
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
                            2.	Apakah lalu lintas hewan (masuk dan keluar peternakan) dilengkapi dengan Sertifikat Veteriner?
                        </td>
                        <td align="center">
                            {{$data->P2  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->P2 ? ' ':"V"}}
                        </td>
                        <td>
            
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
                            <b>Penanggung Jawab:</b> {{ $data->P3_2 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4.	Apakah pemberian pengobatan di bawah pengawasan dokter hewan?
                        </td>
                        <td align="center">
                            {{$data->check_p4  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p4 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p4)
                                <div><b>Pencatatan Program Pengobatan:</b> {{ $data->P4_1 ?: '-' }}</div>
                                <div><b>Pengobatan Yang Dilakukan:</b></div>
                                <div>{{ $data->P4_2 ?: '-' }}</div>
                            @else
                                <b>Penanggung Jawab:</b> {{ $data->P4_3 ?: '-' }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5.	Apakah sudah memiliki sertifikat NKV?
                        </td>
                        <td align="center">
                            {{$data->check_p5  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p5 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p5)
                            <div><b>No:</b> {{ $data->P5_1 ?: '-' }}</div>
                            <div><b>Tanggal Penerbitan:</b> {{ $data->P5_2 ?: '-' }}</div>
                            <div><b>Surveilans Terakhir:</b> {{ $data->P5_3 ?: '-' }}</div>
                            <div><b>Tindak Lanjut Temuan:</b></div>
                            <div>{{ $data->P5_4 ?: '-' }}</div>
                            
                        @else
                            {{ $data->P5_6 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6.	Apakah area peternakan dirancang untuk mencegah/membatasi akses masuk hewan atau manusia dari luar?
                        </td>
                        <td align="center">
                            {{$data->check_p6  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p6 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p6)
                            <div><b>Pagar Atau Fasilitas Pembatas Lain:</b> {{ $data->P6_1 ?: '-' }}</div>
                            <div><b>Jenis:</b> {{ $data->P6_2 ?: '-' }}</div>
                            <div><b>Berhasil Dibatasi:</b> {{ $data->P6_3 ?: '-' }}</div>
                        @else
                            {{ $data->P6_4 ?: '-' }}
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
                                7.	Apakah area peternakan memiliki pagar untuk membatasi akses?
                            </td>
                            <td align="center">
                                {{$data->check_p7  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p7 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p7)
                                <div><b>Dilakukan Prosedur Biosekuriti:</b> {{ $data->P7_1 ?: '-' }}</div>
                                <div><b>SOP Biosekuriti:</b> {{ $data->P7_2 ?: '-' }}</div>
                            @else
                                {{ $data->P7_3 ?: '-' }}
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                8.	Apakah dilakukan pemisahan hewan baru dan hewan lama?
                            </td>
                            <td align="center">
                                {{$data->check_p8 ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p8? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p8)
                                <div><b>Terdapat Sarana Tempat Penampungan Sementara:</b> {{ $data->P8_1 ?: '-' }}</div>
                                <div><b>Kapasitas Penampungan:</b> {{ $data->P8_2.' ekor' ?: '-' }}</div>
                            @else
                                {{ $data->P8_3 ?: '-' }}
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                9.	Apakah ada kandang isolasi untuk hewan yang sakit?
                            </td>
                            <td align="center">
                                {{$data->check_p9  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p9 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p9)
                                    <div><b>Prosedur Perawatan Hewan pada Kandang Isolasi:</b></div>
                                    <div>{{ $data->P9_1 ?: '-' }}</div>
                                @else
                                    {{ $data->P9_2 ?: '-' }}
                               @endif
                            </td>
                        </tr>
                       
                        <tr>
                            <td>
                                10.	Apakah sarana dan prasarana pemeliharaan memenuhi/ memadai sesuai jumlah ternak?
                            </td>
                            <td align="center">
                                {{$data->check_p10  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p10 ? ' ':"V"}}
                            </td>
                            <td>
                                <div><b>Jenis Kandang:</b> {{ $data->P10_1 ?: '-' }}</div>
                                <div><b>Jumlah Kandang:</b> {{ $data->P10_2.' unit' ?: '-' }}</div>
                                <div><b>Kapasitas:</b> {{ $data->P10_3.' ekor' ?: '-' }}</div>
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
                                11.	Apakah sarana dan prasarana  memenuhi/ memadai :
                                <div>a)	pemerahan,</div>
                                <div>b)	penyimpanan,</div>
                                <div>c) pengangkutan/pengiriman susu </div>
                            </td>
                            <td align="center">
                                {{$data->check_p11  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p11 ? ' ':"V"}}
                            </td>
                            <td>
                                <div><b>Sarana Yang Digunakan:</b></div>
                                <div>{{ $data->P11_1 ?: '-' }}</div>
                                <div><b>Rata-Rata Produksi Susu:</b> {{ $data->P11_2.' Liter/hari' ?: '-' }}</div>
                                <div><b>Kapasitas Penyimpanan:</b> {{ $data->P11_3.' Liter' ?: '-' }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                12.	Apakah prosedur pemeliharaan hewan menerapkan prinsip-prinsip kesejahteraan hewan
                            </td>
                            <td align="center">
                                {{$data->check_p12  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p12 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p12)
                                    <div><b>Kepadatan Hewan:</b> {{ $data->P12_1 ?: '-' }}</div>
                                    <div><b>Pemberian Makan Minum Sesuai Kebutuhan:</b> {{ $data->P12_2 ?: '-' }}</div>
                                    <div><b>Ketersediaan Pakan dan Kondisi Ternak:</b> {{ $data->P12_3 ?: '-' }}</div>
                                @else
                                    {{ $data->P12_4 ?: '-' }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                13.	Apakah metode pemerahan memperhatikan kebersihan ambing?
                            </td>
                            <td align="center">
                                {{$data->check_p13  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p6 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p13)
                                <div><b>Pemerah Membesihkan Tangan Sebelum Memerah:</b> {{ $data->P13_1 ?: '-' }}</div>
                                <div><b>Metode Pemerahan:</b> {{ $data->P13_2 ?: '-' }}</div>
                                <div><b>Kebersihan Personal:</b> {{ $data->P13_3 ?: '-' }}</div>
                                <div><b>Ambing Dibersihkan Sebelum dan Setelah Pemerahan:</b> {{ $data->P13_4 ?: '-' }}</div>
                                <div><b>Metode Pembersihan Ambing:</b> {{ $data->P13_5 ?: '-' }}</div>
                                <div><b>Dilakukan <i>Teat Dipping</i>:</b> {{ $data->P13_6 ?: '-' }}</div>
                            @else
                                {{ $data->P13_7 ?: '-' }}
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                14.	Apakah ada penanganan terhadap susu yang berasal dari hewan yang sedang dalam pengobatan dengan menggunakan antibiotik (mastitis dan penyakit lainnya)?
                            </td>
                            <td align="center">
                                {{$data->check_p14  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p14 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p14)
                                <div><b>Penanganan Susu:</b></div>
                                <div>{{ $data->P14_1 ?: '-' }}</div>
                                <div><b>Tempat Penampungan dan Peralatan Dibedakan:</b> {{ $data->P14_2 ?: '-' }}</div>
                                <div><b>Sapi Mastitis Diperah Terkahir:</b> {{ $data->P14_3 ?: '-' }}</div>
                            @else
                                {{ $data->P14_4 ?: '-' }}
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
            <td colspan="2">
                <table class="survey" width="100%" border="1">
                    <tr>
                        <td align="center"><strong>Aspek parameter</strong></td>
                         <td align="center"><strong>Ya</strong></td>
                        <td align="center"><strong>Tidak</strong></td>
                        <td align="center"><strong>Keterangan</strong></td>
                    </tr>
                    <tr>
                            <td>
                                15.	Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi):
                                <div>a)	unit usaha budidaya perah </div>
                                <br>
                                <div>b)	unit pemerahan susu</div>
                            </td>
                            <td align="center">
                                {{$data->check_p15  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p15 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p15)
                                <div><b>SOP Pemeliharaan Kebersihan Sarana dan Prasarana:</b> {{ $data->P15_1 ?: '-' }}</div>
                                <div><b>Frekuensi Pemeliharaan Kebersihan:</b> {{ $data->P15_2 ?: '-' }}</div>
                                <div><b>Metode:</b> {{ $data->P15_3 ?: '-' }}</div>
                                <div><b>Laporan hasil sanitasi (<i>QC Record</i>):</b> {{ $data->P15_4 ?: '-' }}</div>
                            @else
                                <div><b>Kondisi Kebersihan Unit Usaha:</b></div>
                                <div>{{ $data->P15_5 ?: '-' }}</div>
                            @endif
                            </td>
                        </tr>
                    <tr>
                            <td>
                                16.	Apakah sarana dan prasarana untuk kebersihan personal (higiene) memadai?
                            </td>
                            <td align="center">
                                {{$data->check_p16  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p16 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p16)
                                <div><b>Terdapat Sarpras Untuk Cuci Tangan:</b> {{ $data->P16_1 ?: '-' }}</div>
                                <div><b>Dilengkapi Sabun:</b> {{ $data->P16_2 ?: '-' }}</div>
                                <div><b>Dilengkapi Pelindung Diri (APD):</b> {{ $data->P16_3 ?: '-' }}</div>
                            @else
                                {{ $data->P16_4 ?: '-' }}
                            @endif
                            </td>
                        </tr>
                        
                    <tr>
                        <td>
                            17.	Apakah dilakukan program pengendalian hama dan serangga?
                        </td>
                        <td align="center">
                            {{$data->check_p17  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p17 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p17)
                                                        <div><b>Dilakukan Secara Subkontrak:</b> {{ $data->P17_1 ?: '-' }}</div>
                                                        <div><b>SOP Pengendalian Hama dan Seranga:</b> {{ $data->P17_2 ?: '-' }}</div>
                                                        <div><b>Bukti Kontrak:</b> {{ $data->P17_3 ?: '-' }}</div>
                                                        <div><b>Jadwal Inspeksi:</b> {{ $data->P17_4 ?: '-' }}</div>
                                                        <div><b>Jenis Hama dan Metode:</b> {{ $data->P17_5 ?: '-' }}</div>
                                                        <div><b>Jadwal dan Catatan Pelaksanaan Pengendalian Hama:</b> {{ $data->P17_6 ?: '-' }}</div>
                                                    @else
                                                        {{ $data->P17_7 ?: '-' }}
                                                    @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            18.	Apakah ada prosedur penanganan terhadap hewan yang sakit/mati?
                        </td>
                        <td align="center">
                            {{$data->check_p18  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p18 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p18)
                                <div><b>SOP Penanganan Hewan yang Mati:</b> {{ $data->P18_1 ?: '-' }}</div>
                            @else
                                {{ $data->P18_2 ?: '-' }}
                            @endif
                        </td>
                    </tr>
                     <tr>
                        <td>
                            19.	Apakah dilakukan pengolahan limbah?
                        </td>
                        <td align="center">
                            {{$data->check_p19  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p19 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p19)
                            <div><b>SOP Pengolahan Limbah:</b> {{ $data->P19_1 ?: '-' }}</div>
                            <div><b>Metode:</b> {{ $data->P19_2 ?: '-' }}</div>
                        @else
                            {{ $data->P19_3 ?: '-' }}
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