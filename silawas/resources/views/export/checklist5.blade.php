<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Checklist 5 Export PDF</title>
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
                <h3 style="margin-bottom:0px"><strong>Formulir Ceklis</strong></h3>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <h3 style="margin-top:0px"><strong>Pengawasan Unit Usaha Produk Hewan (RPH-R)</strong></h3>
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
                        <td>Titik Koordinat Lokasi</td><td>:</td>
                        td>{{ $f->koordinat ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>No. Telp / Fax / Email Unit Usaha</td><td>:</td>
                       <td> {{ $f->telpUU ?: '-' }}/{{ $f->faxUU ?: '-' }}/{{ $f->faxUU ?: '-' }} </td>
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
                        <td>{{ $f->Telepon ?: '-' }}/{{ $f->Fax ?: '-' }}/{{ $f->Email ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Status Kepemilikan</td><td>:</td>
                        <td>{{ $f->StatusKepemilikan ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Unit Usaha / No.Telp</td><td>:</td>
                        <td>{{ $f->pjUnitUsaha ?: '-' }} / {{ $f->pjUnitUsahaKontak ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Teknis / No.Telp</td><td>:</td>
                        <td>{{ $f->PenangungJawabTeknis ?: '-' }} / {{ $f->KontakPJ ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Produksi / No.Telp</td><td>:</td>
                        <td>{{ $f->pjProduksi ?: '-' }} / {{ $f->pjProduksiKontak ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Mutu / No.Telp</td><td>:</td>
                        <td>{{ $f->pjMutu ?: '-' }} / {{ $f->pjMutuKontak ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Higiene Sanitasi / No.Telp</td><td>:</td>
                        <td>{{ $f->pjHigiene ?: '-' }} / {{ $f->pjHigieneKontak ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Tahun Berdiri dan Tahun Operasional</td><td>:</td>
                        <td>{{ $f->TahunBerdiri ?: '-' }} / {{ $f->TahunOperasional ?: '-' }} </td>
                    </tr>
                    <tr>
                        <td>Kategori RPH-R</td><td>:</td>
                        <td>
                        @if ($f->kategoriRPHR == '1')
                            Kategori I (Memproduksi karkas/daging hangat)
                        @elseif ($f->kategoriRPHR == '2')
                            Kategori II (Memproduksi karkas/daging dingin/beku)
                        @else
                            -
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Karyawan</td><td>:</td>
                        <td>
                            <table class="table-inner">
                                <tr><td>Produksi</td><td>=</td><td>{{ $f->karyawanProdL ?: '-' }} Laki-laki, {{ $f->karyawanProdP ?: '-'}} Perempuan</td></tr>
                                <tr><td>Administrasi</td><td>=</td><td>{{ $f->karyawanAdmL ?: '-' }} Laki-laki, {{ $f->karyawanAdmP ?: '-'}} Perempuan</td></tr>
                                <tr><td>Petugas AMPM</td><td>=</td><td>{{ $f->karyawanAMPM ?: '-' }}</td></tr>
                                <tr><td>Petugas AWO</td><td>=</td><td>{{ $f->karyawanAWO ?: '-' }}</td></tr>
                                <tr><td>Juru Sembelih Halal</td><td>=</td><td>{{ $f->karyawanHalal ?: '-' }}</td></tr>
                                <tr><td>Butcher</td><td>=</td><td>{{ $f->karyawanButcher ?: '-'}}</td></tr>
                                <tr><td>Operator Stunning</td><td>=</td><td>{{ $f->karyawanStunning ?: '-'}}</td></tr>
                            </table>
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
                            <span style="margin-left:27px">(jika Sewa RPH-R)</span>
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
                                <br>{{$f->P1_5 ? $f->P1_5 : '-'}}
                            </td>
                    </tr>
                    <tr>
                        <td>
                            2.	Apakah sudah memiliki sertifikat NKV?
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
                            3.	Apakah RPH-R memiliki sertifikat halal?
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
                                {{ $f->P4 ?: '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5.	Apakah ada penfan sumber ternak?
                        </td>
                        <td align="center">
                                {{$f->check_p5  ? 'V':' '}}
                        </td>
                         <td align="center">
                                {{$f->check_p5 ? ' ':"V"}}
                        </td>
                        <td>
                                {{ $f->P5 ?: '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6.	Apakah ternak yang akan dipotong dilengkapi dengan Sertifikat Veteriner?
                        </td>
                        <td align="center">
                                {{$f->check_p6  ? 'V':' '}}
                        </td>
                         <td align="center">
                                {{$f->check_p6 ? ' ':"V"}}
                        </td>
                        <td>
                          
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7.	Apakah ternak betina yang akan dipotong dilengkapi dengan Surat Keterangan Status Reproduksi?
                        </td>
                        <td align="center">
                                {{$f->check_p7 ? 'V':' '}}
                        </td>
                         <td align="center">
                                {{$f->check_p7? ' ':"V"}}
                        </td>
                        <td>
                           
                        </td>
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
                            9.	Apakah terdapat tempat penampungan sementara?
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
                            10.	Apakah sarana dan prasarana memenuhi/memadai sesuai kapasitas produksi?
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
                                11.	Apakah terdapat pemisahan yang jelas antara area bersih dan area kotor?
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
                                12.	Apakah dilakukan pemeriksaan ternak sebelum dipotong?
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
                                13.	Apakah dilakukan pemingsanan terhadap ternak sebelum dipotong? 
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
                                14.	Apakah penyembelihan dilakukan oleh juru sembelih halal yang kompeten?
                            </td>
                            <td align="center">
                                    {{$f->check_p14  ? 'V':' '}}
                            </td>
                             <td align="center">
                                    {{$f->check_p14 ? ' ':"V"}}
                            </td>
                            <td>
                                    {{ $f->P14 ?: '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                15.	Apakah dipastikan hewan telah mati sempurna sebelum ditangani lebih lanjut 
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
                                16.	Apakah ada prosedur tertulis pemotongan terhadap hewan sakit yang diizinkan dipotong? (Brucellosis, cysticercosis)
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
                                17.	Apakah ada prosedur tertulis penanganan terhadap hewan yang mati sebelum dipotong (bangkai)? 
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
                                18.	Apakah ada petugas yang bertanggung jawab dalam penerapan kesejahteraan hewan?
                            </td>
                            <td align="center">
                                    {{$f->check_p18  ? 'V':' '}}
                            </td>
                             <td align="center">
                                    {{$f->check_p18 ? ' ':"V"}}
                            </td>
                            <td>
                                    {{ $f->P18 ?: '-' }} 
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
                                    19.	Apakah karkas ruminansia dicap/stempel sebagai hasil pemeriksaan postmortem?
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
                                    20.	Apakah karkas didinginkan sebelum didistribusikan?
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
                                    21.	Apakah sudah dilakukan penerapan butcher system?
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
                            <tr>
                                <td>
                                    22.	Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                                </td>
                                <td align="center">
                                        {{$f->check_p22  ? 'V':' '}}
                                </td>
                                 <td align="center">
                                        {{$f->check_p22 ? ' ':"V"}}
                                </td>
                                <td>
                                        {{ $f->P22 ?: '-' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    23.	Apakah sarana dan prasarana higiene personal yang memadai?
                                </td>
                                <td align="center">
                                        {{$f->check_p23  ? 'V':' '}}
                                </td>
                                 <td align="center">
                                        {{$f->check_p23 ? ' ':"V"}}
                                </td>
                                <td>
                                        {{ $f->P23 ?: '-' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    24.	Apakah dilakukan program pengendalian hama dan serangga?
                                </td>
                                <td align="center">
                                        {{$f->check_p24  ? 'V':' '}}
                                </td>
                                 <td align="center">
                                        {{$f->check_p24 ? ' ':"V"}}
                                </td>
                                <td>
                                        {{ $f->P24 ?: '-' }} 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    25.	Apakah dilakukan pengolahan limbah?
                                </td>
                                <td align="center">
                                        {{$f->check_p25  ? 'V':' '}}
                                </td>
                                 <td align="center">
                                        {{$f->check_p25 ? ' ':"V"}}
                                </td>
                                <td>
                                        {{ $f->P25 ?: '-' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    26.	Apakah karkas/daging yang dilalulintaskan antar Kabupaten/Kota  dilengkapi dengan sertifikat veteriner
                                </td>
                                <td align="center">
                                        {{$f->check_p26  ? 'V':' '}}
                                </td>
                                 <td align="center">
                                        {{$f->check_p26 ? ' ':"V"}}
                                </td>
                                <td>
                                        
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    27.	Jika unit usaha telah menerapkan sistem jaminan keamanan pangan (HACCP, ISO 22000), apakah ada pemeriksaan/pengujian laboratorium terakreditasi secara berkala terhadap daging?
                                </td>
                                <td align="center">
                                        {{$f->check_p27  ? 'V':' '}}
                                </td>
                                 <td align="center">
                                        {{$f->check_p27 ? ' ':"V"}}
                                </td>
                                <td>
                                        {{ $f->P27 ?: '-' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    28.	Apakah memasok daging ke horeka? 
                                </td>
                                <td align="center">
                                        {{$f->check_p28  ? 'V':' '}}
                                </td>
                                 <td align="center">
                                        {{$f->check_p28 ? ' ':"V"}}
                                </td>
                                <td>
                                        @if ($f->check_p28)
                                                        <div><b>Bukti Kontrak:</b></div>
                                                        {{ $f->P28_1 ?: '-' }}
                                                    @else
                                                        {{ $f->P28_2 ?: '-' }}
                                                    @endif
                                </td>
                            </tr>
                        
                    </table>
                    </td>
                </tr>
       
        <tr>
            <td colspan="2">
                <table class="survey" width="100%" border="1">
                    <tr>
                        <td align="center"><strong>Aspek parameter</strong></td>
                        <td align="center"><strong>Keterangan</strong></td>
                    </tr>
                    <tr>
                        <td>
                            29.	Jika produk akhir karkas dingin, apakah memiliki sarana penyimpanan dingin (Chiller)?
                            <li style="margin-left:18px">Jika memiliki Chiller berapa jumlah, kapasitasnya dan realisasi pemakaian saat ini?</li>
                            <li style="margin-left:18px"> Jika tidak metode apa yang digunakan untuk mendinginkan karkas?</li>
                        </td>
                        <td>
                            @if ($f->check_p29)
                            Chiller
                            <div><b>Jumlah:</b> {{ $f->P29_1 ? $f->P29_1.' unit' : '-' }}</div>
                            <div><b>Kapasitas:</b> {{ $f->P29_2 ? $f->P29_2.' ton' : '-' }}</div>
                            <div><b>Realisasi Pemakaian Saat Ini:</b> {{ $f->P29_3 ? $f->P29_3.' ton' : '-' }}</div>
                        @else
                            <div><b>Metode Pendinginan Karkas:</b> {{ $f->P29_4 ? $f->P29_4 : '-' }}</div>
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            30.	Jika produk akhir karkas beku, apakah memiliki sarana penyimpanan dingin (Cold Storage)?
                            Jika ya,
                            <li style="margin-left:18px">Berapa jumlah dan kapasitasnya?</li>
                            <li style="margin-left:18px">Berapa rata-rata jumlah produk yang disimpan?</li>
                            <li style="margin-left:18px">Berapa lama rata-rata waktu penyimpanan? (bulan)</li>
                            Jika lokasi cold storage terpisah dengan RPH-R, di mana alamatnya?
                        </td>
                        <td>
                        @if ($f->check_p30)
                            Cold Storage
                            <div><b>Jumlah:</b> {{ $f->P30_1 ? $f->P30_1.' unit' : '-' }}</div>
                            <div><b>Kapasitas:</b> {{ $f->P30_2 ? $f->P30_2.' ton' : '-' }}</div>
                            <div><b>Rata-Rata Jumlah Produk Yang Disimpan:</b> {{ $f->P30_3 ? $f->P30_3.' ton' : '-' }}</div>
                            <div><b>Rata-Rata Waktu Penyimpanan:</b> {{ $f->P30_4 ? $f->P30_4.' bulan' : '-' }}</div>
                         @else
                            <div><b>Alamat:</b> {{ $f->P30_5 ? $f->P30_5 : '-' }}</div>
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            31.	Apakah sarana/alat angkut untuk distribusi karkas? 
                        </td>
                        <td>
                            {{ $f->P31 ?: '-' }}
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            32.	Kemanakah tujuan distribusi karkas (dalam kabupaten/kota, antar kabupaten/kota/provinsi/antar provinsi)?
                        </td>
                        <td>
                            @if ($f->check_p26)
                            <B>Tujuan distribusi:</b> {{ $f->check_p32 }}
                            <ol>
                                @foreach($produksi as $penerima)
                                    <li>{{ $penerima->JenisProduk }}, {{ $penerima->JumlahProduk }} Ton, distribusi ke {{ $penerima->NamaPenerima }}, {{ $penerima->AlamatPenerima }}</li>
                                @endforeach
                            </ol>
                        @else
                            -
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            33.	Berasal dari manakah sumber air bersih yang digunakan?
                        </td>
                        <td>
                            <ul style="margin:0px; padding-left:18px">
                                {{ $f->P33 ?: '-' }}
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            34.	Berasal dari manakah sumber listrik  yang digunakan? (Daya Listrik/Genset)
                        </td>
                        <td> 
                             {{ $f->P34 ?: '-' }}
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            35.	Berapakah kapasitas pemotongan ternak per hari?
                        </td>
                        <td>
                                {{ $f->P35 ? $f->P35.' ekor/hari' : '-' }}
                        </td>
                    </tr>
    
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <table class="survey" width="100%" border="1">
                    <tr>
                        <td align="center"><strong>Aspek parameter</strong></td>
                        <td align="center"><strong>Keterangan</strong></td>
                    </tr>

                    <tr>
                        <td>
                            36.	Berapakah jumlah jam operasional pemotongan RPH-R:
                            <li style="margin-left:18px">jumlah jam operasional RPH-R per hari</li>
                            <li style="margin-left:18px">jumlah jam operasional RPH-R per minggu</li>
                        </td>
                        <td>
                                <ul>
                                        <li>{{ $f->P36_1 ? $f->P36_1.' jam/hari' : '' }}</li>
                                        <li>{{ $f->P36_2 ? $f->P36_2.' jam/minggu' : '' }}</li>
                                    </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            37.	Berapakah realisasi pemotongan ternak?
                            <li style="margin-left:18px">realisasi pemotongan per hari</li>
                            <li style="margin-left:18px">realisasi pemotongan per minggu</li>
                        </td>
                        <td>
                                <ul>
                                        <li>{{ $f->P37_1 ? $f->P37_1.' ekor/hari' : '' }}</li>
                                         <li>{{ $f->P37_2 ? $f->P37_2.' ekor/minggu' : '' }}</li>
                                     </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            38.	Apa jenis ternak yang dipotong?
                        </td>
                        <td>
                                <div>Jumlah ternak yang dipotong (ekor/minggu):</div>
                                <div>a) Lokal: {{ $f->P38_1 ?: '0' }}</div>
                                <div>b) Eks Impor: {{ $f->P38_2 ?: '0' }}</div>
                                <div>c) Jantan: {{ $f->P38_3 ?: '0' }}</div>
                                <div>d) Betina: {{ $f->P38_4 ?: '0' }}</div>
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
                                 {{$f->catatan}}
                            </div>
                            <br>
                            <br>
                            2. Rekomendasi/Tindak Lanjut :<br>
                            <div style="min-height:150px; padding-left:18px">
                                {{$f->rekomendasi}}
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