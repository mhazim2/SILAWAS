<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Checklist 6 Export PDF</title>
    <style>
        body {
            padding: 60px 20px;
            width: 60%;
            margin: auto;
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
    </style>
</head>
<body>
@foreach($form as $f)
    <table width="100%">
        <tr>
            <td colspan="2" align="center">
                <h3 style="margin-top:0px"><strong>DINAS............ KABUPATEN/KOTA............</strong></h3>
            </td>
        </tr>
        <tr>
            <td rowspan="5" align="center" width="15%">
                <img src="{{ asset('img/backkesmavet3.png') }}" width="100" height="100" style="margin-top:8px">
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
                        <td>{{$f->NamaUnitUsaha}}</td>
                    </tr>
                    <tr>
                        <td>Alamat Unit Usaha</td><td>:</td>
                        <td>{{$f->AlamatUnitUsaha}}</td>
                    </tr>
                    <tr>
                        <td>Titik Koordinat Lokasi</td><td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>No. Telp / Fax / Email Unit Usaha</td><td>:</td>
                        <td>{{$f->Telepon}} / {{$f->Fax}} / {{$f->Email}}</td>
                    </tr>
                    <tr>
                        <td>Pemilik Unit Usaha / Nama Kantor Pusat</td><td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor Pusat</td><td>:</td>
                        <td>{{$f->AlamatKantorPusat}}</td>
                    </tr>
                    <tr>
                        <td>No. Telp / Fax / Email Kantor Pusat</td><td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Status Kepemilikan</td><td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Unit Usaha / No.Telp</td><td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Teknis / No.Telp</td><td>:</td>
                        <td>{{$f->PenangungJawabTeknis}} / {{$f->KontakPJ}}</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Produksi / No.Telp</td><td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Mutu / No.Telp</td><td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Higiene Sanitasi / No.Telp</td><td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tahun Berdiri dan Tahun Operasional</td><td>:</td>
                        <td>, {{$f->TahunOperasional}}</td>
                    </tr>
                    <tr>
                        <td>Tipe Unit Usaha</td><td>:</td>
                        <td>{{$f->tipeUnitUsaha}}</td>
                    </tr>
                    <tr>
                        <td>Jenis Produk (Daging Unggas)</td><td>:</td>
                        <td>{{$f->jenisProduk}}</td>
                    </tr>
                    <tr>
                        <td>Jumlah Karyawan</td><td>:</td>
                        <td>
                            <table>
                                <tr><td colspan="3">Produksi</td></tr>
                                <tr><td>Laki-laki = {{$f->karyawanProduksi_L}}, Perempuan = {{$f->karyawanProduksi_P}}</td></tr>
                                <tr><td colspan="3">Administrasi</td></tr>
                                <tr><td>Laki-laki = {{$f->karyawanAdm_L}}, Perempuan = {{$f->karyawanAdm_P}}</td></tr>
                                <tr><td>Petugas AMPM</td><td>=</td><td>{{$f->karyawanAMPM}}</td></tr>
                                <tr><td>Petugas AWO</td><td>=</td><td>{{$f->karyawanAWO}}</td></tr>
                                <tr><td>Juru Sembelih Halal</td><td>=</td><td>{{$f->juruSembelih}}</td></tr>
                                <tr><td>Operator Stunning</td><td>=</td><td>{{$f->operatorStunning}}</td></tr>
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
                <table class="survey" width="100%" border="1">
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
                            <br>V
                            <br>V
                            <br>V
                            <br>V
                            <br>V
                        </td>
                        <td align="center"></td>
                        <td>
                            <br>No: {{$f->b1_niu_id}}, {{$f->b1_niu_date}}
                            <br>No: {{$f->b1_npwp_id}}, {{$f->b1_npwp_date}}
                            <br>No: {{$f->b1_siup_id}}, {{$f->b1_siup_date}}
                            <br>No: {{$f->b1_nib_date}}, {{$f->operatorStunning}}
                            <br>{{$f->operatorStunning}}, {{$f->b1_pks_date}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2. Apakah ada dokter hewan penanggung jawab teknis?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                            Jumlah: 2 Orang
                            <ol style="margin:0px; padding-left:18px">
                                <li>Drh. Asep (swasta) 082222222</li>
                                <li>Drh. Ujang (swasta) 081111111</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3. Apakah RPH-U memiliki sertifikat halal?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                            <ul style="margin:0px; padding-left:18px">
                                <li>No: {{$f->b3_1}}, {{$f->b3_2}}</li>
                                <li>Masa berlaku: {{$f->b3_3}} Tahun</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4. Apakah unggas yang akan dipotong dilengkapi dengan Sertifikat Veteriner?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                            Terlampir
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5. Apakah ada pendataan sumber unggas?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                            <ol style="margin:0px; padding-left:18px">
                                <li>Sumber: perusahaan sendiri<br>No: 1678/PKH/08/2017</li>
                                <li>Sumber: kemitraan oeternakan mandiri<br>No: 1678/PKH/08/2017</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6. Apakah sudah memiliki sertifikat NKV?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                            <ul style="margin:0px; padding-left:18px">
                                <li>No: {{$f->b6_1}}, {{$f->b6_2}}</li>
                                <li>Surveilans terakhir: {{$f->b6_3}}</li>
                                <li>Tindak lanjut temuan: {{$f->b6_4}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7. Jika unit usaha telah menerapkan sistem jaminan keamanan pangan (HACCP, ISO 22000), 
                            apakah ada pemeriksaan/pengujian laboratorium terakreditasi secara berkala terhadap daging unggas?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                            {{$f->b7}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            8. Apakah dilakukan pemingsanan terhadap unggas sebelum dipotong? Apakah pemingsanan dilakukan oleh petugas yang kompeten?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                            <ul style="margin:0px; padding-left:18px">
                                <li>Metode pemingsanan : {{$f->b8_1}}</li>
                                <li>Waktu pemingsanan sampai ke penyembelihan: {{$f->b8_2}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            9. Apakah penyembelihan dilakukan oleh juru sembelih halal yang kompeten?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                            {{$f->b9}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            10. Apakah ada petugas yang bertanggung jawab dalam penerapan kesejahteraan hewan?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                                {{$f->b10}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            11. Apakah dilakukan pemeriksaan karkas dan jeroan setelah dipotong?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                                {{$f->b11}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            12. Apakah ada pemeriksaan/pengujian terhadap produk secara berkala?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                                {{$f->b12}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            13. Apakah karkas unggas memiliki label/informasi?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                                {{$f->b13}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            14. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                                {{$f->b14}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            15. Apakah dilakukan program pengendalian hama dan serangga?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                                {{$f->b15}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            16. Apakah ada prosedur penanganan terhadap unggas yang mati sebelum dipotong (bangkai)?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                                {{$f->b16}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            17. Apakah dilakukan pengolahan limbah?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                                {{$f->b17}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            18. Apakah ada penanganan terhadap bulu dan jeroan usus dari unggas yang dipotong?
                        </td>
                        <td align="center">
                            V
                        </td>
                        <td align="center"></td>
                        <td>
                                {{$f->b18}}
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
                                {{$f->b19}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            20. Berasal dari manakah sumber air bersih yang digunakan?
                        </td>
                        <td>
                                {{$f->b20}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            21. Berasal dari manakah sumber es yang digunakan? Berapa kebutuhan es rata-rata per/hari?
                        </td>
                        <td>
                                {{$f->b21_1}},  {{$f->b21_2}} ton/hari
                        </td>
                    </tr>
                    <tr>
                        <td>
                            22. Berasal dari manakah sumber listrik yang digunakan?
                        </td>
                        <td>
                                {{$f->b22}}
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
                                <li> {{$f->b23_1}} ekor/jam</li>
                                <li> {{$f->b23_2}} ekor/jam</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            24. Berapakah persentase pemotongan unggas jantan?
                        </td>
                        <td>
                                {{$f->b24}}%
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
                                <li>{{$f->b25_1}} jam/hari</li>
                                <li>{{$f->b25_2}} hari/minggu</li>
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
                                <li>{{$f->b26_1}} ekor/hari</li>
                                <li>{{$f->b27_1}} ekor/minggu</li>
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
                                <li>Ukuran Kecil (< 1kg): {{$f->b27_1}} %</li>
                                <li>Ukuran Sedang (1 - 1,5kg): {{$f->b27_2}} %</li>
                                <li>Ukuran Besar (> 1,5kg): {{$f->b27_3}} %</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            28. Apakah sarana pembekuan cepat yang digunakan?
                        </td>
                        <td>
                            <ul style="margin:0px; padding-left:18px">
                                <li>Unit: Air Blast Freezer</li>
                                <li>Jumlah: 5 unit</li>
                                <li>Kapasitas: 10 ton</li>
                                <li>Total realisasi saat ini: 6 ton</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            29. Jika produk akhir karkas dingin, apakah memiliki sarana penyimpanan dingin (Chiller)?
                        </td>
                        <td>
                            Chiller {{$f->b29_1}} unit, kapasitas masing-masing {{$f->b29_2}} ton, realisasi {{$f->b29_3}} ton
                        </td>
                    </tr>
                    <tr>
                        <td>
                            30. Jika produk akhir karkas beku, apakah memiliki sarana penyimpanan dingin (Cold Storage)?
                        </td>
                        <td>
                            Cold Storage {{$f->b30_1}} unit, apasitas masing-masing {{$f->b30_2}} ton, realisasi {{$f->b30_3}} ton, rata-rata penyimpanan {{$f->b30_4}} minggu
                        </td>
                    </tr>
                    <tr>
                        <td>
                            31. Kemanakah tujuan distribusi karkas? 
                        </td>
                        <td>
                            {{$f->b31}}:
                            <ol style="margin:0px; padding-left:18px">
                                <li>Karkas beku dada fillet, 20 ton, distribusi ke PT. OLahpangan, Alamat Jl. Reksabumi No. 88 Provinsi Jatim</li>
                                <li>Karkas beku dada fillet, 20 ton, distribusi ke PT. OLahpangan, Alamat Jl. Reksabumi No. 88 Provinsi Jatim</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            32. Apakah jenis sarana/alat angkut untuk distribusi karkas?
                        </td>
                        <td>
                                {{$f->b32_jenis}}, {{$f->b32_jenisAlat}}, {{$f->b32_jumlahAlat}},{{$f->b32_kapasitas}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            33. Jika memiliki unit pengolahan produk unggas, berapa persentase produksi RPH-U yang digunakan sebagai bahan baku produk olahan unggas?
                        </td>
                        <td>
                                {{$f->check_b33}},  {{$f->b33}}
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
                                <br>Isi catatan
                            </div>
                            2. Rekomendasi/Tindak Lanjut :<br>
                            <div style="min-height:150px; padding-left:18px">
                                <br>Isi rekomendasi
                            </div>
                            Cap Unit Usaha<br>
                            <div style="min-height:150px; padding-left:18px; text-align:center">
                                <br>..............., ...................................
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%">
                            <center>Tim Pengawas</center>
                            <ol style="padding-left:18px">
                                <li></li>
                                <li></li>
                                <li></li>
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


    @endforeach</body>
</html>