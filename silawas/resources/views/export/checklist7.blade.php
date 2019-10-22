<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Checklist 7 Export PDF</title>
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
        {{-- <tr>
            <td colspan="2" align="center">
                <h3 style="margin-bottom:0px"><strong>Formulir Ceklis</strong></h3>
            </td>
        </tr> --}}
        <tr>
            <td colspan="2" align="center">
                <h3 style="margin-top:0px"><strong>Laporan Pengawasan Unit Usaha Produk Hewan (RPH-B)</strong></h3>
            </td>
        </tr>
        <tr>
            
            <td colspan="2">
                
                <table class="umum" width="100%">
                    <tr>
                        <td>Nama Unit Usaha</td><td>:</td>
                        <td>{{ $data->NamaUnitUsaha ? $data->NamaUnitUsaha : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Unit Usaha</td><td>:</td>
                        <td>{{ $data->AlamatUnitUsaha ? $data->AlamatUnitUsaha : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Pemilik Unit Usaha / Nama Kantor Pusat</td><td>:</td>
                        <td>{{ $data->PelakuUsaha_idPemilikUsaha ? $pemilikUsaha->Nama : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor Pusat</td><td>:</td>
                        <td>{{ $data->AlamatKantorPusat ? $data->AlamatKantorPusat : '-'}}</td>
                    </tr>
                    <tr>
                        <td>No. Telp / Fax / Email Kantor Pusat</td><td>:</td>
                        <td>{{ $data->Telepon ? $data->Telepon : '-' }}/{{ $data->Fax ? $data->Fax : '-' }} / {{ $data->Email ? $data->Email : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Teknis</td><td>:</td>
                        <td>{{ $data->PenangungJawabTeknis ? $data->PenangungJawabTeknis : '-' }}</td>
                    </tr>
                    <tr>
                        <td>No.Telp Penanggung Jawab Teknis </td><td>:</td>
                        <td>{{ $data->KontakPJ ? $data->KontakPJ : '-' }}</td>
                    </tr>
                    <tr>
                        <td> Tahun Operasional</td><td>:</td>
                        <td>{{ $data->TahunOperasional ? $data->TahunOperasional : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Tipe Unit Usaha</td><td>:</td>
                        <td>{{ $data->tipeUnitUsaha ? $data->tipeUnitUsaha : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Kapasitas Pemotongan</td><td>:</td>
                        <td>{{ $data->kapasitasPemotongan ? $data->kapasitasPemotongan.' ekor/hari' : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Realisasi pemotongan saat ini</td><td>:</td>
                        <td>{{ $data->realisasiPemotongan ? $data->realisasiPemotongan.' ekor/hari' : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Operasional pemotongan</td><td>:</td>
                        <td>{{ $data->operasionalPemotongan ? $data->operasionalPemotongan.' hari/minggu' : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Asal Sumber Ternak</td><td>:</td>
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
                        <td>Distribusi karkas/daging</td><td>:</td>
                        <td>{{ $data->distribusiDaging ? $data->distribusiDaging : '-' }}</td>
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
                            <span style="margin-left:27px">(jika Sewa RPH-U)</span>
                        </td>
                        <td align="center">
                            <br>{{$data->p1_niu_id  ? 'V':' '}}
                            <br>{{$data->p1_npwp_id  ? 'V':' '}}
                            <br>{{$data->p1_siup_id  ? 'V':' '}}
                            <br>{{$data->p1_nib_id  ? 'V':' '}}
                            <br>{{$data->p1_pks_id  ? 'V':' '}}
                        </td>
                        <td align="center"></td>
                        <td>
                            <br>No: {{$data->p1_niu_id ? $data->p1_niu_id : '-'}}, {{$data->p1_niu_date ? $data->p1_niu_date : '-'}}
                            <br>No: {{$data->p1_npwp_id ? $data->p1_npwp_id : '-'}}, {{$data->p1_npwp_date ? $data->p1_npwp_id : '-'}}
                            <br>No: {{$data->p1_siup_id ? $data->p1_siup_id : '-'}}, {{$data->p1_siup_date ? $data->p1_siup_date : '-'}}
                            <br>No: {{$data->p1_nib_id ? $data->p1_nib_id : '-'}}, {{$data->p1_nib_date ? $data->p1_nib_date : '-'}}
                            <br>{{$data->p1_pks_id ? $data->p1_pks_id : '-'}}, {{$data->p1_pks_date ? $data->p1_pks_date : '-'}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2. Apakah sudah memiliki sertifikat NKV?
                        </td>
                        <td align="center">
                            {{$data->check_p2  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p2 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p2)
                            <ul style="margin:0px; padding-left:18px">
                                <li>No: {{$data->P2_1}}, {{$data->P2_2}}</li>
                                <li>Surveilans terakhir: {{$data->P2_3}}</li>
                                <li>Tindak lanjut temuan: {{$data->P2_4}}</li>
                            </ul>
                            @else  
                             - 
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3. Apakah ada dokter hewan penanggung jawab teknis?
                        </td>
                        <td align="center">
                            {{$data->check_p3  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p3 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p3)
                                <b>Jumlah:</b> {{ $dokter_pj->count() }} Orang
                                <ol>
                                @foreach($dokter_pj as $dokter)
                                <li>{{ $dokter->namaLengkap }} ,({{ $dokter->status }}), {{ $dokter->notlp }}</li>
                                @endforeach
                                </ol>
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4. Apakah ada pendataan sumber ternak?
                        </td>
                        <td align="center">
                                {{$data->check_p4  ? 'V':' '}}
                        </td>
                        <td align="center">
                                {{$data->check_p4 ? ' ':"V"}}
                        </td>
                        <td>
                                {{ $data->P4 ? $data->P4 : '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5. Apakah ternak yang akan dipotong dilengkapi dengan sertifikat Veteriner?
                        </td>
                        <td align="center">
                                {{$data->check_p5  ? 'V':' '}}
                        </td>
                        <td align="center">
                                {{$data->check_p5 ? ' ':"V"}}
                        </td>
                        <td>
                            <div><b>No:</b> {{ $data->P5_id ? $data->P5_id : '-' }}</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6. Apakah bangungan/ruangan di desain untuk mencegah akses masuk hewan atau manusia dari luar?
                        </td>
                        <td align="center">
                                {{$data->check_p6  ? 'V':' '}}
                        </td>
                        <td align="center">
                                {{$data->check_p6 ? ' ':"V"}}
                        </td>
                        <td>
                                {{ $data->P6 ? $data->P6 : '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7. Apakah terdapat tempat penampungan sementara?
                        </td>
                        <td align="center">
                                {{$data->check_p7  ? 'V':' '}}
                        </td>
                        <td align="center">
                                {{$data->check_p7 ? ' ':"V"}}
                        </td>
                        <td>
                                {{ $data->P7 ? $data->P7 : '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            8. Apakah dilakukan pemeriksaan hewan sebelum dipotong?
                        </td>
                        <td align="center">
                                {{$data->check_p8  ? 'V':' '}}
                        </td>
                        <td align="center">
                                {{$data->check_p8 ? ' ':"V"}}
                        </td>
                        <td>
                                {{ $data->P8 ? $data->P8 : '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            9. Apakah sarana dan prasarana memenuhi/memadai sesua kapasitas produksi?
                        </td>
                        <td align="center">
                                {{$data->check_p9  ? 'V':' '}}
                        </td>
                        <td align="center">
                                {{$data->check_p9 ? ' ':"V"}}
                        </td>
                        <td>
                                {{ $data->P9 ? $data->P9 : '-' }}
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            10. apakah terdapat pemisahan yang jelas antara area bersih dan area kotor?
                        </td>
                        <td align="center">
                                {{$data->check_p10  ? 'V':' '}}
                        </td>
                        <td align="center">
                                {{$data->check_p10 ? ' ':"V"}}
                        </td>
                        <td>
                                {{ $data->P10 ? $data->P10 : '-' }}
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
                                11. Apakah dilakukan pemingsanan terhadap ternak sebelum dipotong?
                            </td>
                            <td align="center">
                                    {{$data->check_p11  ? 'V':' '}}
                            </td>
                            <td align="center">
                                    {{$data->check_p11 ? ' ':"V"}}
                            </td>
                            <td>
                                    {{ $data->P11 ? $data->P11 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                12. Apakah ada petugas yang bertanggung jawab dalam penerapan kesejahteraan hewan?
                            </td>
                            <td align="center">
                                    {{$data->check_p12  ? 'V':' '}}
                            </td>
                            <td align="center">
                                    {{$data->check_p12 ? ' ':"V"}}
                            </td>
                            <td>
                                    {{ $data->P12 ? $data->P12 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                13. Apakah dilakukan pemeriksaan karkas dan jeroan setelah dipotong?
                            </td>
                            <td align="center">
                                    {{$data->check_p13  ? 'V':' '}}
                            </td>
                            <td align="center">
                                    {{$data->check_p13 ? ' ':"V"}}
                            </td>
                            <td>
                                    {{ $data->P13 ? $data->P13 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                14. Apakah karkas babi dicap/stempel sebagai hasil pemeriksaan postmortem?
                            </td>
                            <td align="center">
                                    {{$data->check_p14  ? 'V':' '}}
                            </td>
                            <td align="center">
                                    {{$data->check_p14 ? ' ':"V"}}
                            </td>
                            <td>
                                    {{ $data->P14 ? $data->P14 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                15. Apakah dilakukan pendinginan terhadap karkas/daging babi?
                            </td>
                            <td align="center">
                                    {{$data->check_p15  ? 'V':' '}}
                            </td>
                            <td align="center">
                                    {{$data->check_p15 ? ' ':"V"}}
                            </td>
                            <td>
                                    {{ $data->P15 ? $data->P15 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                16. Jika unit usaha telah menerapkan sistem jaminan keamanan pangan (HACCP,ISO 22000),
                                apakah ada pemeriksaan/pengujian laboratorium terakreditasi secara berkala terhadap
                                daging babi?
                            </td>
                            <td align="center">
                                    {{$data->check_p16  ? 'V':' '}}
                            </td>
                            <td align="center">
                                    {{$data->check_p16 ? ' ':"V"}}
                            </td>
                            <td>
                                    {{ $data->P16 ? $data->P16 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                17. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasaranan (sanitasi)?
                            </td>
                            <td align="center">
                                    {{$data->check_p17  ? 'V':' '}}
                            </td>
                            <td align="center">
                                    {{$data->check_p17 ? ' ':"V"}}
                            </td>
                            <td>
                                    {{ $data->P17 ? $data->P17 : '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                18. Apakah sarana dan prasarana higinene personal memadai
                            </td>
                            <td align="center">
                                    {{$data->check_p18  ? 'V':' '}}
                            </td>
                            <td align="center">
                                    {{$data->check_p18 ? ' ':"V"}}
                            </td>
                            <td>
                                    {{ $data->P18 ? $data->P18 : '-' }}
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
                                    19. Apakah dilakukan program pengendalian hama dan serangga?
                                </td>
                                <td align="center">
                                        {{$data->check_p19  ? 'V':' '}}
                                </td>
                                <td align="center">
                                        {{$data->check_p19 ? ' ':"V"}}
                                </td>
                                <td>
                                        {{ $data->P19 ? $data->P19 : '-' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    20. Apakah ada prosedur tertulis pemotongan terhadap hewan sakit yang diizinkan dipotong? (Brucellosis,cysticercosis)
                                </td>
                                <td align="center">
                                        {{$data->check_p20  ? 'V':' '}}
                                </td>
                                <td align="center">
                                        {{$data->check_p20 ? ' ':"V"}}
                                </td>
                                <td>
                                        {{ $data->P20 ? $data->P20 : '-' }} 
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    21. Apakah ada prosedur tertulis penanganan terhadap hewan yang mati sebelum dipotong (bangkai)?
                                </td>
                                <td align="center">
                                        {{$data->check_p21  ? 'V':' '}}
                                </td>
                                <td align="center">
                                        {{$data->check_p21 ? ' ':"V"}}
                                </td>
                                <td>
                                        {{ $data->P21 ? $data->P21 : '-' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    22. Apakah dilakukan pengolahan limbah?
                                </td>
                                <td align="center">
                                        {{$data->check_p22  ? 'V':' '}}
                                </td>
                                <td align="center">
                                        {{$data->check_p22 ? ' ':"V"}}
                                </td>
                                <td>
                                        {{ $data->P22 ? $data->P22 : '-' }}
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
                        <td align="center"><strong>Keterangan</strong></td>
                    </tr>
                    <tr>
                        <td>
                            23. Jika produk akhir karkas dingin, apakah memiliki sarana penyimpanan dingin (Chiller)?<br>
                                <span style="margin-left:18px">•Jika memiliki Chiller berapa jumlah, kapasitasnya dan realisasi pemakaian saat ini?</span><br>
                                <span style="margin-left:18px">•Jika tidak metode apa yang digunakan untuk mendinginkan karkas?</span><br>
                            
                        </td>
                        <td>
                                @if ($data->check_p23)
                                    Chiller
                                    <div><b>Jumlah:</b> {{ $data->P23_1 ? $data->P23_1.' unit' : '-' }}</div>
                                    <div><b>Kapasitas:</b> {{ $data->P23_2 ? $data->P23_2.' ton' : '-' }}</div>
                                    <div><b>Realisasi:</b> {{ $data->P23_3 ? $data->P23_3.' ton' : '-' }}</div>
                                @else
                                    <div><b>Metode:</b> {{ $data->P23_4 ? $data->P23_4 : '-' }}</div>
                                @endif
                            </td>
                    </tr>
                    <tr>
                        <td>
                            24. Jika produk akhir karkas beku, apakah memiliki sarana penyimpanan dingin (Cold Storage)?
                            Jika ya,<br>
                                <span style="margin-left:18px">•Berapa jumlah dan kapasitasnya?</span><br>
                                <span style="margin-left:18px">•Berapa rata-rata jumlah produk unggas yang disimpan?</span><br>
                                <span style="margin-left:18px">•Berapa lama rata-rata waktu penyimpanan? (bulan)</span><br>
                            Jika lokasi cold storage terpisah dengan RPH-B, di mana alamatnya?
                        </td>
                        <td>
                                @if ($data->check_p24)
                                    Cold Storage
                                    <div><b>Jumlah:</b> {{ $data->P24_1 ? $data->P24_1.' unit' : '-' }}</div>
                                    <div><b>Kapasitas:</b> {{ $data->P24_2 ? $data->P24_2.' ton' : '-' }}</div>
                                    <div><b>Realisasi:</b> {{ $data->P24_3 ? $data->P24_3.' ton' : '-' }}</div>
                                    <div><b>Rata-rata penyimpanan:</b> {{ $data->P24_4 ? $data->P24_4.' bulan' : '-' }}</div>
                                @else
                                    <div><b>Alamat:</b> {{ $data->P24_5 ? $data->P24_5 : '-' }}</div>
                                @endif
                            </td>
                    </tr>
                    <tr>
                        <td>
                            25. Apakah sarana/alat angkut untuk distribusi karkas? 
                        </td>
                        <td>
                                @if ($data->check_p25)
                                    {{ $data->check_p25 }}
                                    <div><b>Jenis:</b> {{ $data->P25_1 ? $data->P25_1 : '-' }}</div>
                                    <div><b>Jumlah:</b> {{ $data->P25_2 ? $data->P25_2.' unit' : '-' }}</div>
                                    <div><b>Kapasitas:</b> {{ $data->P25_3 ? $data->P25_3.' ton' : '-' }}</div>
                                @else
                                    -
                                @endif
                            </td>
                    </tr>
                    <tr>
                        <td>
                            26. Kemanakah tujuan distribusi karkas (dalamkabupaten/kota, antar kabupaten/kota/provinsi/antar provinsi)?
                        </td>
                        <td>
                                @if ($data->check_p26)
                                    <B>Tujuan distribusi:</b> {{ $data->check_p26 }}
                                    <ol>
                                        @foreach($list_distribusi as $penerima)
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
                            27. Berasal dari manakah sumber air bersih yang digunakan?
                        </td>
                        <td>
                                {{ $data->P27 ? $data->P27 : '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            28. Berasal dari manakah sumber listrik  yang digunakan? (Daya Listrik/Genset)
                        </td>
                        <td>
                                {{ $data->P28 ? $data->P28 : '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            29. Berapakah kapasitas pemotongan ternak per hari?
                        </td>
                        <td>
                                {{ $data->P29 ? $data->P29 : '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            30. Berapakah jumlah jam operasional pemotongan RPH-B:<br>
                            <span style="margin-left:18px">• jumlah jam operasional RPH-B per hari</span><br>
                            <span style="margin-left:18px">• jumlah jam operasional RPH-B per minggu</span>
                        </td>
                        <td>
                                @if ($data->P30_1 || $data->P30_2)
                                <ul>
                                    <li>{{ $data->P30_1 ? $data->P30_1.' jam/hari' : '-' }}</li>
                                    <li>{{ $data->P30_2 ? $data->P30_2.' hari/minggu' : '-' }}</li>
                                </ul>
                            @else
                                -
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            31. Berapakah realisasi pemotongan ternak?<br>
                            <span style="margin-left:18px">• realisasi pemotongan per hari</span><br>
                            <span style="margin-left:18px">• realisasi pemotongan per minggu</span>
                        </td>
                        <td>
                                @if ($data->P31_1 || $data->P31_2)
                                <ul>
                                    <li>{{ $data->P31_1 ? $data->P31_1.' jam/hari' : '-' }}</li>
                                    <li>{{ $data->P31_2 ? $data->P31_2.' hari/minggu' : '-' }}</li>
                                </ul>
                            @else
                                -
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