<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Checklist 6 Export PDF</title>
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
                <h3 style="margin-top:0px"><strong>Pengawasan Unit Usaha Produk Hewan (RPH-U)</strong></h3>
            </td>
        </tr>
        <tr>
            
            <td colspan="2">
                
                <table class="umum" width="100%">
                    <tr>
                        <td>Nama Unit Usaha</td><td>:</td>
                        <td>{{$f->NamaUnitUsaha ? $f->NamaUnitUsaha : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Alamat Unit Usaha</td><td>:</td>
                        <td>{{$f->AlamatUnitUsaha ? $f->AlamatUnitUsaha : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Titik Koordinat Lokasi</td><td>:</td>
                        <td>{{$f->koordinat ? $f->koordinat : '-'}}</td>
                    </tr>
                    <tr>
                        <td>No. Telp / Fax / Email Unit Usaha</td><td>:</td>
                        <td>{{$f->telpUU ? $f->telpUU : '-'}} / {{$f->faxUU? $f->faxUU : '-'}} / {{$f->emailUU? $f->emailUU : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Pemilik Unit Usaha / Nama Kantor Pusat</td><td>:</td>
                        <td>{{$f->namaPemilikUsaha  ? $f->namaPemilikUsaha : '-'}}</td>
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
                        <td>Status Kepemilikan</td><td>:</td>
                        <td>{{$f->StatusKepemilikan ? $f->StatusKepemilikan : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Unit Usaha / No.Telp</td><td>:</td>
                        <td>{{$f->pjUnitUsaha ? $f->pjUnitUsaha : '-'}} / {{$f->pjUnitUsahaKontak ? $f->pjUnitUsahaKontak : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Teknis / No.Telp</td><td>:</td>
                        <td>{{$f->PenangungJawabTeknis ? $f->PenangungJawabTeknis : '-'}} / {{$f->KontakPJ ? $f->KontakPJ : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Produksi / No.Telp</td><td>:</td>
                        <td>{{$f->pjProduksi ? $f->pjProduksi : '-'}} / {{$f->pjProduksiKontak ? $f->pjProduksiKontak : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Mutu / No.Telp</td><td>:</td>
                        <td>{{$f->pjMutu ? $f->pjMutu : '-'}} / {{$f->pjMutuKontak? $f->pjMutuKontak : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Higiene Sanitasi / No.Telp</td><td>:</td>
                        <td>{{$f->pjHigiene ? $f->pjHigiene : '-'}} / {{$f->pjHigieneKontak ? $f->pjHigieneKontak : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Tahun Berdiri dan Tahun Operasional</td><td>:</td>
                        <td>{{$f->TahunBerdiri ? $f->TahunBerdiri : '-'}}, {{$f->TahunOperasional ? $f->TahunOperasional : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Tipe Unit Usaha</td><td>:</td>
                        <td>{{$f->tipeUnitUsaha ? $f->tipeUnitUsaha : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Jenis Produk (Daging Unggas)</td><td>:</td>
                        <td>{{$f->jenisProduk ? $f->jenisProduk : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Jumlah Karyawan</td><td>:</td>
                        <td>
                            <table>
                                <tr><td colspan="3">Produksi</td></tr>
                                <tr><td>Laki-laki = {{$f->karyawanProduksi_L ? $f->karyawanProduksi_L : '-'}}, Perempuan = {{$f->karyawanProduksi_P ? $f->karyawanProduksi_P : '-'}}</td></tr>
                                <tr><td colspan="3">Administrasi</td></tr>
                                <tr><td>Laki-laki = {{$f->karyawanAdm_L ? $f->karyawanAdm_L : '-'}}, Perempuan = {{$f->karyawanAdm_P ? $f->karyawanAdm_P : '-'}}</td></tr>
                                <tr><td>Petugas AMPM</td><td>=</td><td>{{$f->karyawanAMPM ? $f->karyawanAMPM : '-'}}</td></tr>
                                <tr><td>Petugas AWO</td><td>=</td><td>{{$f->karyawanAWO ? $f->karyawanAWO : '-'}}</td></tr>
                                <tr><td>Juru Sembelih Halal</td><td>=</td><td>{{$f->juruSembelih ? $f->juruSembelih : '-'}}</td></tr>
                                <tr><td>Operator Stunning</td><td>=</td><td>{{$f->operatorStunning ? $f->operatorStunning : '-'}}</td></tr>
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
                            <span style="margin-left:27px">(jika Sewa RPH-U)</span>
                        </td>
                        <td align="center">
                            <br>{{$f->b1_niu_id  ? 'V':' '}}
                            <br>{{$f->b1_npwp_id  ? 'V':' '}}
                            <br>{{$f->b1_siup_id  ? 'V':' '}}
                            <br>{{$f->b1_nib_id  ? 'V':' '}}
                            <br>{{$f->b1_pks_id  ? 'V':' '}}
                        </td>
                        <td align="center"></td>
                        <td>
                            <br>No: {{$f->b1_niu_id ? $f->b1_niu_id : '-'}}, {{$f->b1_niu_date ? $f->b1_niu_date : '-'}}
                            <br>No: {{$f->b1_npwp_id ? $f->b1_npwp_id : '-'}}, {{$f->b1_npwp_date ? $f->b1_npwp_id : '-'}}
                            <br>No: {{$f->b1_siup_id ? $f->b1_siup_id : '-'}}, {{$f->b1_siup_date ? $f->b1_siup_date : '-'}}
                            <br>No: {{$f->b1_nib_id ? $f->b1_nib_id : '-'}}, {{$f->b1_nib_date ? $f->b1_nib_date : '-'}}
                            <br>{{$f->b1_pks_id ? $f->b1_pks_id : '-'}}, {{$f->b1_pks_date ? $f->b1_pks_date : '-'}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2. Apakah ada dokter hewan penanggung jawab teknis?
                        </td>
                        <td align="center">
                        {{$f->check_b2  ? 'V':' '}}
                        </td>
                        <td align="center">
                        {{$f->check_b2 ? ' ':"V"}}
                        </td>
                        <td>
                        @if ($f->check_b2)
                            @foreach ($dokter as $dokter)
                            <ol style="margin:0px; padding-left:18px">

                                <li>{{$dokter->namaLengkap}} ({{$dokter->status}})  {{$dokter->notlp}}</li>
                            </ol>
                            @endforeach
                        @else
                            -
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3. Apakah RPH-U memiliki sertifikat halal?
                        </td>
                        <td align="center">
                            {{$f->check_b3  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_b3 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_b3)
                            <ul style="margin:0px; padding-left:18px">
                                <li>No: {{$f->b3_1}}, {{$f->b3_2}}</li>
                                <li>Masa berlaku: {{$f->b3_3}} Tahun</li>
                            </ul>
                            @else  
                             -  
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4. Apakah unggas yang akan dipotong dilengkapi dengan Sertifikat Veteriner?
                        </td>
                        <td align="center">
                            {{$f->check_b4  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_b4 ? ' ':"V"}}
                        </td>
                        <td>
                            {{$f->check_b4  ? 'Terlampir':'-'}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5. Apakah ada pendataan sumber unggas?
                        </td>
                        <td align="center">
                            {{$f->check_b5_1  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_b5_1 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_b5_1)
                            <ol style="margin:0px; padding-left:18px">
                                <li>Sumber: {{$f->b5_1_nama }}<br>No: {{$f->b5_1_alamat }},Alamat : {{$f->b5_1_sertifikat }}</li>
                                <li>Sumber: {{$f->b5_2_nama }}<br>No: {{$f->b5_2_alamat }},Alamat : {{$f->b5_2_sertifikat }}</li>
                                <li>Sumber: {{$f->b5_3_nama }}<br>No: {{$f->b5_3_alamat }},Alamat : {{$f->b5_3_sertifikat }}</li>
                            </ol>
                            @else    
                              -  
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6. Apakah sudah memiliki sertifikat NKV?
                        </td>
                        <td align="center">
                            {{$f->check_b6  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_b6 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_b6)
                            <ul style="margin:0px; padding-left:18px">
                                <li>No: {{$f->b6_1}}, {{$f->b6_2}}</li>
                                <li>Surveilans terakhir: {{$f->b6_3}}</li>
                                <li>Tindak lanjut temuan: {{$f->b6_4}}</li>
                            </ul>
                            @else  
                             - 
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7. Jika unit usaha telah menerapkan sistem jaminan keamanan pangan (HACCP, ISO 22000), 
                            apakah ada pemeriksaan/pengujian laboratorium terakreditasi secara berkala terhadap daging unggas?
                        </td>
                        <td align="center">
                            {{$f->check_b7  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_b7 ? ' ':"V"}}
                        </td> 
                        <td>
                            {{$f->b7 ? $f->b7:"-"}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            8. Apakah dilakukan pemingsanan terhadap unggas sebelum dipotong? Apakah pemingsanan dilakukan oleh petugas yang kompeten?
                        </td>
                        <td align="center">
                            {{$f->check_b8  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_b8 ? ' ':"V"}}
                        </td> 
                        <td>
                            @if ($f->check_b8)
                            <ul style="margin:0px; padding-left:18px">
                                <li>Metode pemingsanan : {{$f->b8_1}}</li>
                                <li>Waktu pemingsanan sampai ke penyembelihan: {{$f->b8_2}}</li>
                            </ul>
                            @else  
                             - 
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            9. Apakah penyembelihan dilakukan oleh juru sembelih halal yang kompeten?
                        </td>
                        <td align="center">
                            {{$f->check_b9  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_b9 ? ' ':"V"}}
                        </td> 
                        <td>
                            {{$f->b9}}
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            10. Apakah ada petugas yang bertanggung jawab dalam penerapan kesejahteraan hewan?
                        </td>
                        <td align="center">
                            {{$f->check_b10  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_b10 ? ' ':"V"}}
                        </td> 
                        <td>
                                {{$f->b10}}
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
                                11. Apakah dilakukan pemeriksaan karkas dan jeroan setelah dipotong?
                            </td>
                            <td align="center">
                                {{$f->check_b11  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_b11 ? ' ':"V"}}
                            </td> 
                            <td>
                                    {{$f->b11 ? $f->b11:"-"}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                12. Apakah ada pemeriksaan/pengujian terhadap produk secara berkala?
                            </td>
                            <td align="center">
                                {{$f->check_b12  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_b12 ? ' ':"V"}}
                            </td> 
                            <td>
                                    {{$f->b12 ? $f->b12:"-"}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                13. Apakah karkas unggas memiliki label/informasi?
                            </td>
                            <td align="center">
                                {{$f->check_b13  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_b13 ? ' ':"V"}}
                            </td> 
                            <td>
                                    {{$f->b13 ? $f->b13:"-"}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                14. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                            </td>
                            <td align="center">
                                {{$f->check_b14  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_b14 ? ' ':"V"}}
                            </td> 
                            <td>
                                    {{$f->b14 ? $f->b14:"-"}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                15. Apakah dilakukan program pengendalian hama dan serangga?
                            </td>
                            <td align="center">
                                {{$f->check_b15  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_b15 ? ' ':"V"}}
                            </td> 
                            <td>
                                    {{$f->b15 ? $f->b15:"-"}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                16. Apakah ada prosedur penanganan terhadap unggas yang mati sebelum dipotong (bangkai)?
                            </td>
                            <td align="center">
                                {{$f->check_b16  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_b16 ? ' ':"V"}}
                            </td> 
                            <td>
                                    {{$f->b16 ? $f->b16:"-"}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                17. Apakah dilakukan pengolahan limbah?
                            </td>
                            <td align="center">
                                {{$f->check_b17  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_b17 ? ' ':"V"}}
                            </td> 
                            <td>
                                    {{$f->b17 ? $f->b17:"-"}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                18. Apakah ada penanganan terhadap bulu dan jeroan usus dari unggas yang dipotong?
                            </td>
                            <td align="center">
                                {{$f->check_b18  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_b18 ? ' ':"V"}}
                            </td> 
                            <td>
                                    {{$f->b18 ? $f->b18:"-"}}
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
                            19. Berapa lama waktu antara penyembelihan sampai perebusan?
                        </td>
                        <td>
                                {{$f->b19 ? $f->b19:"-"}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            20. Berasal dari manakah sumber air bersih yang digunakan?
                        </td>
                        <td>
                                {{$f->b20 ? $f->b20:"-"}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            21. Berasal dari manakah sumber es yang digunakan? Berapa kebutuhan es rata-rata per/hari?
                        </td>
                        <td>
                                {{$f->b21_1 ? $f->b21_1:"-"}},  {{$f->b21_2 ? $f->b21_2:"-"}} ton/hari
                        </td>
                    </tr>
                    <tr>
                        <td>
                            22. Berasal dari manakah sumber listrik yang digunakan?
                        </td>
                        <td>
                                {{$f->b22 ? $f->b22:"-"}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            23. Berapakah kapasitas pemotongan unggas?<br>
                            <span style="margin-left:18px">• kapasitas pemotongan per jam</span><br>
                            <span style="margin-left:18px">• kapasitas pemotongan per hari</span>
                        </td>
                        <td>
                            <ul style="margin:0px; padding-left:18px">
                                <li> {{$f->b23_1 ? $f->b23_1:"0"}} ekor/jam</li>
                                <li> {{$f->b23_2 ? $f->b23_2:"0"}} ekor/jam</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            24. Berapakah persentase pemotongan unggas jantan?
                        </td>
                        <td>
                                {{$f->b24  ? $f->b24:"0"}}%
                        </td>
                    </tr>
                    <tr>
                        <td>
                            25. Berapakah jumlah jam operasional pemotongan RPH-U:<br>
                            <span style="margin-left:18px">• jumlah jam operasional RPH-U per hari</span><br>
                            <span style="margin-left:18px">• jumlah jam operasional RPH-U per minggu</span>
                        </td>
                        <td>
                            <ul style="margin:0px; padding-left:18px">
                                <li>{{$f->b25_1 ? $f->b25_1:"0"}} jam/hari</li>
                                <li>{{$f->b25_2 ? $f->b25_2:"0"}} hari/minggu</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            26. Berapakah realisasi pemotongan unggas?<br>
                            <span style="margin-left:18px">• realisasi pemotongan per hari</span><br>
                            <span style="margin-left:18px">• realisasi pemotongan per minggu</span>
                        </td>
                        <td>
                            <ul style="margin:0px; padding-left:18px">
                                <li>{{$f->b26_1 ? $f->b26_1:"0"}} ekor/hari</li>
                                <li>{{$f->b26_2 ? $f->b26_2:"0"}} ekor/minggu</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            27. Berapakah rata-rata berat hidup unggas yang dipotong per hari?
                        </td>
                        <td>
                            Berat Hidup (Persentase)
                            <ul style="margin:0px; padding-left:18px">
                                <li>Ukuran kecil (> 1kg): {{$f->b27_1  ? $f->b27_1:"0"}} %</li>
                                <li>Ukuran Sedang (1 - 1,5kg): {{$f->b27_2 ? $f->b27_2:"0"}} %</li>
                                <li>Ukuran Besar (> 1,5kg): {{$f->b27_3 ? $f->b27_3:"0"}} %</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            28. Apakah sarana pembekuan cepat yang digunakan?
                        </td>
                        <td>
                            @if ($f->check_b28)
                            <ul style="margin:0px; padding-left:18px">
                                <li>Unit: {{$f->b28}}</li>
                                <li>Jumlah: {{$f->b28_1}} unit</li>
                                <li>Kapasitas: {{$f->b28_2}} ton</li>
                                <li>Total realisasi saat ini: {{$f->b28_3}} ton</li>
                            </ul>
                            @else  
                              -   
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            29. Jika produk akhir karkas dingin, apakah memiliki sarana penyimpanan dingin (Chiller)?
                        </td>
                        <td>
                            @if ($f->check_b29)
                            Chiller {{$f->b29_unit}} unit, kapasitas masing-masing {{$f->b29_kapasitas}} ton, realisasi {{$f->b29_realisasi}} ton
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
                <table class="survey" width="100%" border="1">
                    <tr>
                        <td align="center"><strong>Aspek parameter</strong></td>
                        <td align="center"><strong>Keterangan</strong></td>
                    </tr>
                    <tr>
                            <td>
                                30. Jika produk akhir karkas beku, apakah memiliki sarana penyimpanan dingin (Cold Storage)?
                            </td>
                            <td>
                                @if($f->check_b30)
                                Cold Storage {{$f->b30_unit}} unit, apasitas masing-masing {{$f->b30_kapasitas}} ton, realisasi {{$f->b30_realisasi}} ton, rata-rata penyimpanan {{$f->b30_waktu}} minggu
                                @else 
                                 - 
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                31. Kemanakah tujuan distribusi karkas? 
                            </td>
                            <td>
                                @if ($f->b31)
                                 {{$f->b31}} 
                                @else 
                                - 
                                @endif
                                
                                <ol style="margin:0px; padding-left:18px">
                                    @foreach ($produksi as $produksi)
                                    <li>{{ $produksi->NamaPenerima}}, {{ $produksi->JumlahProduk}} ton, {{ $produksi->JenisProduk}}, Alamat {{ $produksi->AlamatPenerima}}</li>
                                    @endforeach
                                </ol>
                              
                                                               
                            </td>
                        </tr>
                        <tr>
                            <td>
                                32. Apakah jenis sarana/alat angkut untuk distribusi karkas?
                            </td>
                            <td>
                                {!! $f->check_b32 ? '<b>Jenis:</b> '.$f->b32_jenisAlat.', <b>Jumlah:</b> '.$f->b32_jumlahAlat.', <b>kapasitas:</b> '.$f->b32_kapasitas.'' : '-' !!}
                    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                33. Jika memiliki unit pengolahan produk unggas, berapa persentase produksi RPH-U yang digunakan sebagai bahan baku produk olahan unggas?
                            </td>
                            <td>    
                                {{$f->check_b33  ? $f->b33:'-'}}        
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