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
                <h3 ><strong>(Gudang Penyimpanan Kering) </strong></h3>
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
                            2. Apakah sudah memiliki sertifikat NKV?
                        </td>
                        <td align="center">
                            {{$f->check_p2  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p2 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($f->check_p2)
                            <ul style="margin:0px; padding-left:18px">
                                <li>No: {{$f->P2_1  ? $f->P2_1 : '-'}}</li>
                                <li>Tanggal Penerbitan: {{$f->P2_2  ? $f->P2_2 : '-'}}</li>
                                <li>Surveilans Terakhir {{$f->P2_3 ? $f->P2_3 : '-'}}</li>
                                <li>Tindak lanjut temuan: {{$f->P2_4 ? $f->P2_2 : '-'}}</li>
                            </ul>
                            @else 
                             - 
                            @endif
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
                                <li>
                                    {{ $suplier->namaSuplier ? $suplier->namaSuplier.', ' : '' }}
                                    {{ $suplier->negara ? $suplier->negara.', ' : '' }}
                                    {{ $suplier->jenis ? $suplier->jenis.', ' : '' }}
                                    {{ $suplier->tanggal ? $suplier->tanggal.', ' : '' }}
                                    {{ $suplier->jumlah ? $suplier->jumlah.' MT' : '' }}
                                </li>
                            </ol>
                            @endforeach
                        @else
                            -
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4. Apakah area khusus penyimpanan didesain untuk mencegah/membatasi akses masuk hewan atau manusia dari luar?
                        </td>
                        <td align="center">
                            {{$f->check_p4  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p4 ? ' ':"V"}}
                        </td>
                        <td>
                            {{ $f->P4 ? $f->P4 : '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5. Apakah sarana dan prasarana penyimpanan memenuhi/memadai sesuai kapasitas?
                        </td>
                        <td align="center">
                            {{$f->check_p5  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->P5 ? ' ':"V"}}
                        </td>
                        <td>
                            @if($f->check_p5)
                            <ol style="margin:0px; padding-left:18px">
                                <li>Jumlah: {{$f->P5_1 ? $f->P5_1 : '-'}}</li>
                                <li>Kapasitas: {{$f->P5_2 ? $f->P5_2 : '-' }}</li>
                            </ol>
                            @else 
                            -
                            @endif 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6. Apakah sirkulasi udara, kelembaban dan suhu dikelola dengan baik?
                        </td>
                        <td align="center">
                            {{$f->check_p6  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p6 ? ' ':"V"}}
                        </td> 
                        <td>
                            {{$f->P6 ? $f->P6 : '-'}}
                        </td>
                    </tr>
                    <tr>

                        <td>
                            7. Apakah terdapat pemisahan ruangan antar produk?
                        </td>
                        <td align="center">
                            {{$f->check_p7  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p7 ? ' ':"V"}}
                        </td> 
                        <td>
                            @if($f->check_p7)
                            <ul style="margin:0px; padding-left:18px">
                                <li>Pemisah ruangan atar produk:  {{$f->P7_1 ? 'Ya' : 'Tidak'}}</li>
                                <li>Lokasi antar produk terpisah: {{$f->P7_2  ? 'Ya' : 'Tidak'}}</li>
                                <li>Partisi antar produk: {{$f->P7_3  ? 'Ya' : 'Tidak'}}</li>
                                <li>Perlatan terpisah: {{$f->P7_4  ? 'Ya' : 'Tidak'}}</li>
                            </ul>
                            @else 
                             - 
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            8. Apakah terdapat pemisahan ruangan antar produk halal dan non halal?
                        </td>
                        <td align="center">
                            {{$f->check_p8  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p8 ? ' ':"V"}}
                        </td> 
                        <td>
                            {{$f->P8_1 ? $f->P8_1 : '-'}} 
                        </td>
                    </tr>
    
                    <tr>
                        <td>
                            9. Apakah penanganan produk dilakukan dengan baik?
                        </td>
                        <td align="center">
                            {{$f->check_p9  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p9 ? ' ':"V"}}
                        </td> 
                        <td>
                            @if($f->P9)
                            <ul style="margin:0px; padding-left:18px">
                                <li>Sop penanganan produk:  {{$f->P9_1 ? 'Ya' : 'Tidak'}}</li>
                                <li>FIFO: {{$f->P9_2  ? 'Ya' : 'Tidak'}}</li>
                                <li>Rak palet: {{$f->P9_3  ? 'Ya' : 'Tidak'}}</li>
                                <li>Jenis palet: {{$f->P9_4  ? $f->P9_4 : '-'}}</li>
                            </ul>
                            @else 
                             - 
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td>
                            10. Apakah produk hewan memiliki label/informasi?
                        </td>
                        <td align="center">
                            {{$f->check_p10  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$f->check_p10 ? ' ':"V"}}
                        </td> 
                        <td>
                            @if($f->P10)
                             <ul style="margin:0px; padding-left:18px">
                                <li>Jenis produk: {{$f->P10_1 ? $f->P10_1 : '-'}}</li>
                                <li>Asal produk: {{$f->P10_2 ? $f->P10_2 : '-'}}</li>
                                <li>Est Produk:{{$f->P10_3 ? $f->P10_3 : '-'}}</li>
                                <li>Tanggal Produksi: {{$f->P10_4 ? $f->P10_4 : '-'}}</li>
                                <li>Tanggal kadaluarsa: {{$f->P10_5 ? $f->P10_5 : '-'}}</li>
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
                                11. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                            </td>
                            <td align="center">
                                {{$f->check_p11  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p11 ? ' ':"V"}}
                            </td> 
                            <td>
                                @if ($f->P11)
                                <ul style="margin:0px; padding-left:18px">
                                    <li>SOP pemeliharaan kebersihan: {{$f->P11_1 ? 'ada': 'tidak'}}</li>
                                    <li>Frekuensi pemeliharaan kebersihan: {{$f->P11_2 ? $f->P11_2 : '-'}}</li>
                                    <li>Metode: {{$f->P11_3 ? $f->P11_3 : '-'}}</li>
                                    <li>CAtatan pemeliharaan kebersihan: {{$f->P11_4 ? 'ada': 'tidak'}}</li>
                                </ul>
                                @else 
                                 -  
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                12. Apakah sarana dan prasarana kebersihan personal (higiene) memadai?
                            </td>
                            <td align="center">
                                {{$f->check_p12  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p12 ? ' ':"V"}}
                            </td> 
                            <td>
                                {{$f->P12 ? f->P12 : '-'}}
                            </td>
                        </tr>
                        <t
                            <td>
                                13. Apakah dilakukan program pengendalian hama dan serangga?
                            </td>
                            <td align="center">
                                {{$f->check_p13  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p13 ? ' ':"V"}}
                            </td> 
                            <td>
                                @if ($f->P13)
                                <ul style="margin:0px; padding-left:18px">
                                    <li>SOP pengendalian serangga: {{$f->P13_1 ? 'Ada' : 'Tidak ada'}}</li>
                                    <li>Dilakukan subkontrak: {{$f->P13_2 ? 'Ya' : 'Tidak'}}</li>
                                    <li>Jenis pengendalian serangga: {{$f->P13_3 ? $f->P13_3 : '-'}}</li>
                                    <li>Jadwal pengecekan: {{$f->P13_4 ? $f->P13_4 : '-'}}</li>
                                    <li>Bukti kontrak: {{$f->P13_5 ?'Ada' : 'Tidak ada'}}</li>
                                </ul>
                                @else 
                                -  
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                14. Apakah dilakukan pengolahan limbah?
                            </td>
                            <td align="center">
                                {{$f->check_p14  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$f->check_p14 ? ' ':"V"}}
                            </td> 
                            <td>
                                @if ($f->P14)
                                <ul style="margin:0px; padding-left:18px">
                                    <li>SOP pengolahan limbah: {{$f->P14_1 ? 'Ada' : 'Tidak ada'}}</li>
                                    <li>Metode pelaksanaan: {{$f->P14_2 ? $f->P14_2 : '-' }}</li>
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