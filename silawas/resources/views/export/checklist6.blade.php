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
@foreach($formDetail as $f)
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
                        <td>RPU Unggas Hidup</td>
                    </tr>
                    <tr>
                        <td>Alamat Unit Usaha</td><td>:</td>
                        <td>Jl. Sejahtera chicken No.2</td>
                    </tr>
                    <tr>
                        <td>Titik Koordinat Lokasi</td><td>:</td>
                        <td>-6.297685; 106.822880</td>
                    </tr>
                    <tr>
                        <td>No. Telp / Fax / Email Unit Usaha</td><td>:</td>
                        <td>021-7770000</td>
                    </tr>
                    <tr>
                        <td>Pemilik Unit Usaha / Nama Kantor Pusat</td><td>:</td>
                        <td>Bpk. DEF/ PT. Maju aya</td>
                    </tr>
                    <tr>
                        <td>Alamat Kantor Pusat</td><td>:</td>
                        <td>Jl. Pusat Kota</td>
                    </tr>
                    <tr>
                        <td>No. Telp / Fax / Email Kantor Pusat</td><td>:</td>
                        <td>031-88888888</td>
                    </tr>
                    <tr>
                        <td>Status Kepemilikan</td><td>:</td>
                        <td>Sewa</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Unit Usaha / No.Telp</td><td>:</td>
                        <td>Drh. Asep / 08111111111</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Teknis / No.Telp</td><td>:</td>
                        <td>Drh. Asep / 08111111111</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Produksi / No.Telp</td><td>:</td>
                        <td>Drh. Asep / 08111111111</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Mutu / No.Telp</td><td>:</td>
                        <td>Drh. Asep / 08111111111</td>
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Higiene Sanitasi / No.Telp</td><td>:</td>
                        <td>Drh. Asep / 08111111111</td>
                    </tr>
                    <tr>
                        <td>Tahun Berdiri dan Tahun Operasional</td><td>:</td>
                        <td>2001, 2002</td>
                    </tr>
                    <tr>
                        <td>Tipe Unit Usaha</td><td>:</td>
                        <td>Modern</td>
                    </tr>
                    <tr>
                        <td>Jenis Produk (Daging Unggas)</td><td>:</td>
                        <td>Beku</td>
                    </tr>
                    <tr>
                        <td>Jumlah Karyawan</td><td>:</td>
                        <td>
                            <table>
                                <tr><td colspan="3">Produksi</td></tr>
                                <tr><td>Laki-laki = 10, Perempuan = 5</td></tr>
                                <tr><td colspan="3">Administrasi</td></tr>
                                <tr><td>Laki-laki = 2, Perempuan = 8</td></tr>
                                <tr><td>Petugas AMPM</td><td>=</td><td>2</td></tr>
                                <tr><td>Petugas AWO</td><td>=</td><td>2</td></tr>
                                <tr><td>Juru Sembelih Halal</td><td>=</td><td>2</td></tr>
                                <tr><td>Operator Stunning</td><td>=</td><td>2</td></tr>
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
                            <br>No: 123/JKT/2017, 12 Juli 2018
                            <br>No: 47.222.555.1-017.000, 12 Juli 2018
                            <br>No: 124/SIUP/2017, 12 Juli 2018
                            <br>No: 321/JSEL/2017, 12 Juli 2018
                            <br>Perjanjian Sewa, 5 Januari 2018
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
                                <li>No: 098765478891, 12 Juli 2018</li>
                                <li>Masa berlaku: 2 Tahun</li>
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
                            Terlampir, No SKKH 888/JBr/20/08/2018
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
                                <li>No: RPHU-327601-012, 12 Juli 2018</li>
                                <li>Surveilans terakhir: 8 Juli 2018</li>
                                <li>Tindak lanjut temuan: Tidak ada program pengendalian serangga yang efektif</li>
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
                            Terdapat SOP pengambilan sampel dan pengujian, pengujian dilakukan oleh Lab. XYZ (akreditasi no 1267/2017), 
                            pengujian terakhir 1 maret 2017
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
                                <li>Metode pemingsanan : electric stunning via water bath</li>
                                <li>Waktu pemingsanan sampai ke penyembelihan: 10 detik</li>
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
                            Terdapat 2 orang juru sembelih halal tersertifikasi dengan no sertifikat No.456980 tahun 2015
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
                            Ada petugas PJ Kesrawan sebanyak 3 orang tersertifikasi oleh lembaga XYZ, tertanggal 3 Agustus 2017
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
                            Pemeriksaan Karkas dan jeroan ayam dilakukan oleh PJ Bpk ABC
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
                            SOP pengambilan sampeldan pengujian, dilakukan setiap batch pemotongan, 
                            uji cemaran mikroba dan patogen, diuji oleh lab XYZ (akreditasi No. 123456), 
                            terdapat dokumen hasil uji setiap hasil pengujian, dengan uji terakhir 
                            tanggal 25 Maret 2018
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
                            Untuk produk TOP dengan label bebas salmonella
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
                            Terdapat SOP pemeliharaan kebersihan sarpras, dan kondisi kebersihan terjaga baik, 
                            terdapat QC setiap minggu dengan laporan terakhir 12 April 2017
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
                            SOP pengendalian hama dan serangga, sub kontrak dengan PT. Seranggadel. 
                            Bukti kontrak, jadwal inspeksi dan metode pengendalian terdokumentasi dengan baik
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
                            Terdapat prosedur penanganan bangkai
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
                            SOP pengolahan limbah
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
                            Untuk pakan ikan, dikoleksi oleh CV. Pakan ikan makmur, distribusi lokal
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
                            15 menit
                        </td>
                    </tr>
                    <tr>
                        <td>
                            20. Berasal dari manakah sumber air bersih yang digunakan?
                        </td>
                        <td>
                            PDAM, Air Tanah, dan Air Sungai
                        </td>
                    </tr>
                    <tr>
                        <td>
                            21. Berasal dari manakah sumber es yang digunakan? Berapa kebutuhan es rata-rata per/hari?
                        </td>
                        <td>
                            Es balok, 20 ton/hari
                        </td>
                    </tr>
                    <tr>
                        <td>
                            22. Berasal dari manakah sumber listrik yang digunakan?
                        </td>
                        <td>
                            Listrik PLN dan Genset
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
                                <li>10.000 ekor/jam</li>
                                <li>60.000 ekor/jam</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            24. Berapakah persentase pemotongan unggas jantan?
                        </td>
                        <td>
                            30%
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
                                <li>6 jam/hari</li>
                                <li>5 hari/minggu</li>
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
                                <li>7.000 ekor/hari</li>
                                <li>35.000 ekor/minggu</li>
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
                                <li>Ukuran Kecil (< 1kg): 20 %</li>
                                <li>Ukuran Sedang (1 - 1,5kg): 60 %</li>
                                <li>Ukuran Besar (> 1,5kg): 20%</li>
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
                            Chiller 2 unit, kapasitas masing-masing 10 ton, realisasi 5 ton
                        </td>
                    </tr>
                    <tr>
                        <td>
                            30. Jika produk akhir karkas beku, apakah memiliki sarana penyimpanan dingin (Cold Storage)?
                        </td>
                        <td>
                            Cold Storage 2 unit, apasitas masing-masing 25 ton, realisasi 15 ton, rata-rata penyimpanan 2 minggu
                        </td>
                    </tr>
                    <tr>
                        <td>
                            31. Kemanakah tujuan distribusi karkas? 
                        </td>
                        <td>
                            Antar provinsi:
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
                            Mobil Box berpendingin, 5 unit, kapasitas masing-masing 1 ton
                        </td>
                    </tr>
                    <tr>
                        <td>
                            33. Jika memiliki unit pengolahan produk unggas, berapa persentase produksi RPH-U yang digunakan sebagai bahan baku produk olahan unggas?
                        </td>
                        <td>
                            Ya, 15 % kebutuhan produksi
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