<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Checklist 10 Export PDF</title>
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
                <h3 ><strong>(Gudang Penyimpanan Dingin/Beku) </strong></h3>
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
                        <td>Titik Koordinat Lokasi</td><td>:</td>
                        <td>{{$f->koordinat ? $f->koordinat : '-'}}</td>
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
                        <td> {{$f->TahunOperasional ? $f->TahunOperasional : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Komoditas</td><td>:</td>
                        <td>{{$f->komoditas ? $f->komoditas : '-'}}</td>
                    </tr>
                    <tr>
                        <td>Kapasitas Gudang</td><td>:</td>
                        <td>{{$f->kapasitasGudang ? $f->kapasitasGudang : '-'}} Kg</td>
                    </tr>
                    <tr>
                        <td>Realisasi Penyimpanan</td><td>:</td>
                        <td>{{$f->realisasiPenyimpanan ? $f->realisasiPenyimpanan : '-'}} Kg</td>
                    </tr>
                    <tr>
                        <td>Wilayah Peredaran</td><td>:</td>
                        <td>{{$f->wilayahPeredaran ? $f->wilayahPeredaran : '-'}} </td>
                    </tr>
                    <tr>
                        <td>Jumlah Karyawan</td><td>:</td>
                        <td>{{$f->jumlahKaryawan ? $f->jumlahKaryawan : '-'}} Orang</td>
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
                            <span style="margin-left:18px">• NIB</span><br>
                            <span style="margin-left:18px">• Perjanjian Kerja sama</span><br>
                            <span style="margin-left:27px">(jika Sewa RPH-U)</span>
                        </td>
                        <td align="center">
                            <br>{{$f->check_p1_niu  ? 'V':' '}}
                            <br>{{$f->check_p1_npwp  ? 'V':' '}}
                            <br>{{$f->check_p1_siup  ? 'V':' '}}
                            <br>{{$f->check_p1_nib  ? 'V':' '}}
                            <br>{{$f->check_p1_pks  ? 'V':' '}}
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
                            2. Apakah sudah memiliki sertifikat NKV?
                        </td>
                        <td align="center">
                            {{$f->check_p2  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p2 ? ' ':"V"}}
                        </td>
                        <td>
                            <ul style="margin:0px; padding-left:18px">
                                <li>{{$f->P2_1  ? $f->P2_1 : '-'}}</li>
                                <li>{{$f->P2_2  ? $f->P2_2 : '-'}}</li>
                                <li>{{$f->P2_3 ? $f->P2_3 : '-'}}</li>
                                <li>{{$f->P2_4 ? $f->P2_2 : '-'}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3. Apakah ada pendataan sumber produk?
                        </td>
                        <td align="center">
                        {{$f->check_p3  ? 'V':' '}}
                        </td>
                        <td align="center">
                        {{$f->check_p3 ? ' ':"V"}}
                        </td>
                        <td>
                        @if ($f->check_p3)
                            @foreach ($suplier as $suplier)
                            <ol style="margin:0px; padding-left:18px">

                                <li>{{$suplier->namaSuplier}} ({{$suplier->negara}})  {{$suplier->tanggal}} {{$suplier->jumlah}} </li>
                            </ol>
                            @endforeach
                        @else
                            -
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4. Khusus Gelatine Pangan
                            Apakah dilengkapi dengan sertifikat halal?
                        </td>
                        <td align="center">
                            {{$f->check_p4  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p4 ? ' ':"V"}}
                        </td>
                        <td>
                            <ol style="margin:0px; padding-left:18px">
                                <li>{{$f->P4_1 ? $f->P4_1 : '-'}}</li>
                                <li>{{$f->P4_2 ? $f->P4_2 : '-' }}</li>
                                <li>{{$f->P4_3  ? $f->P4_3 : '-'}}</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5. Apakah area khusus penyimpanan didesain
                            untuk mencegah/membatasi akses masuk
                            hewan atau manusia dari luar?
                        </td>
                        <td align="center">
                            {{$f->P5  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->P5 ? ' ':"V"}}
                        </td>
                        <td>
                            <ul style="margin:0px; padding-left:18px">
                                <li> {{$f->P5_ket ? $f->P5_ket : '-'}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6. Apakah sarana dan prasarana penyimpanan
                            memenuhi/memadai?
                        </td>
                        <td align="center">
                            {{$f->P6  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->P6 ? ' ':"V"}}
                        </td> 
                        <td>
                            <ul style="margin:0px; padding-left:18px">
                                <li> {{$f->P6_1 ? $f->P6_1 : '-'}}</li>
                                <li> {{$f->P6_2 ? $f->P6_2 : '-'}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7. Apakah sarana penyimpanan dingin dikelola dengan baik?
                        </td>
                        <td align="center">
                            {{$f->P7  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->P7 ? ' ':"V"}}
                        </td> 
                        <td>
                            <ul style="margin:0px; padding-left:18px">
                                <li> {{$f->P7_1 ? $f->P7_1 : '-'}}</li>
                                <li> {{$f->P7_2  ? $f->P7_2 : '-'}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            8. Apakah terdapat pemisahan ruangan antar
                            produk?
                        </td>
                        <td align="center">
                            {{$f->P8  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->P8 ? ' ':"V"}}
                        </td> 
                        <td>
                             <ul style="margin:0px; padding-left:18px">
                                <li> {{$f->P8_1 ? $f->P8_1 : '-'}}</li>
                                <li> {{$f->P8_2 ? $f->P8_2 : '-'}}</li>
                                <li> {{$f->P8_3 ? $f->P8_3 : '-'}}</li>
                                <li> {{$f->P8_4 ? $f->P8_4 : '-'}}</li>
                            </ul>
                        </td>
                    </tr>
    
                    <tr>
                        <td>
                            9. Apakah terdapat pemisahan ruangan antar
                            produk halal dan non-halal?
                        </td>
                        <td align="center">
                            {{$f->P9  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->P9 ? ' ':"V"}}
                        </td> 
                        <td>
                                {{$f->P9_ket ? $f->P9_ket : '-'}}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            10. Apakah penanganan produk dilakukan
                            dengan baik?
                        </td>
                        <td align="center">
                            {{$f->P10  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->P10 ? ' ':"V"}}
                        </td> 
                        <td>
                             <ul style="margin:0px; padding-left:18px">
                                <li> {{$f->P10_1 ? $f->P10_1 : '-'}}</li>
                                <li> {{$f->P10_2 ? $f->P10_2 : '-'}}</li>
                                <li> {{$f->P10_3 ? $f->P10_3 : '-'}}</li>
                                <li> {{$f->P10_4 ? $f->P10_4 : '-'}}</li>
                            </ul>
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
                                11. Apakah produk hewan memiliki label/informasi?
                            </td>
                            <td align="center">
                                {{$f->P11  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->P11 ? ' ':"V"}}
                            </td> 
                            <td>
                                <ul style="margin:0px; padding-left:18px">
                                    <li> {{$f->P11_1 ? $f->P11_1 : '-'}}</li>
                                    <li> {{$f->P11_2 ? $f->P11_2 : '-'}}</li>
                                    <li> {{$f->P11_3 ? $f->P11_3 : '-'}}</li>
                                    <li> {{$f->P11_4 ? $f->P11_4 : '-'}}</li>
                                    <li> {{$f->P11_5 ? $f->P11_5 : '-'}}</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                12. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                            </td>
                            <td align="center">
                                {{$f->P12  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->P12 ? ' ':"V"}}
                            </td> 
                            <td>
                                  <ul style="margin:0px; padding-left:18px">
                                    <li> {{$f->P12_1 ? $f->P12_1 : '-'}}</li>
                                    <li> {{$f->P12_2 ? $f->P12_2 : '-'}}</li>
                                    <li> {{$f->P12_3 ? $f->P12_3 : '-'}}</li>
                                    <li> {{$f->P12_4 ? $f->P12_4 : '-'}}</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                13. Apakah dilakukan program pengendalian hama dan serangga?
                            </td>
                            <td align="center">
                                {{$f->P13  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->P13 ? ' ':"V"}}
                            </td> 
                            <td>
                                    {{$f->P13_ket ? $f->P13_ket : '-'}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                14. Apakah dilakukan program pengendalian hama dan serangga?
                            </td>
                            <td align="center">
                                {{$f->P14  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->P14 ? ' ':"V"}}
                            </td> 
                            <td>
                                <ul style="margin:0px; padding-left:18px">
                                    <li> {{$f->P14_1 ? $f->P14_1 : '-'}}</li>
                                    <li> {{$f->P14_2 ? $f->P14_2 : '-'}}</li>
                                    <li> {{$f->P14_3 ? $f->P14_3 : '-'}}</li>
                                    <li> {{$f->P14_4 ? $f->P14_4 : '-'}}</li>
                                    <li> {{$f->P14_5 ? $f->P14_5 : '-'}}</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                15. Apakah dilakukan pengolahan limbah?
                            </td>
                            <td align="center">
                                {{$f->P15  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->P15 ? ' ':"V"}}
                            </td> 
                            <td>
                                <ul style="margin:0px; padding-left:18px">
                                    <li> {{$f->P15_1 ? $f->P15_1 : '-'}}</li>
                                    <li> {{$f->P15_2 ? $f->P15_2 : '-' }}</li>
                                </ul>
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