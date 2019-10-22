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
                <h3 style="margin-top:0px"><strong>Laporan Pengawasan Unit Usaha Produk Hewan (RPH-U)</strong></h3>
            </td>
        </tr>
        <tr>
            
            <td colspan="2">
                
                <table class="umum" width="100%">
                    <tr>
                        <td>Nama Unit Usaha</td><td>:</td>
                        
                    </tr>
                    <tr>
                        <td>Alamat Unit Usaha</td><td>:</td>
                        
                    </tr>
                    <tr>
                        <td>Titik Koordinat Lokasi</td><td>:</td>
                        
                    </tr>
                    <tr>
                        <td>No. Telp / Fax / Email Unit Usaha</td><td>:</td>
                       
                    </tr>
                    <tr>
                        <td>Pemilik Unit Usaha / Nama Kantor Pusat</td><td>:</td>
                        
                    </tr>
                    <tr>
                        <td>Alamat Kantor Pusat</td><td>:</td>
                        
                    </tr>
                    <tr>
                        <td>No. Telp / Fax / Email Kantor Pusat</td><td>:</td>
                        
                    </tr>
                    <tr>
                        <td>Status Kepemilikan</td><td>:</td>
                        
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Unit Usaha / No.Telp</td><td>:</td>
                       
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Teknis / No.Telp</td><td>:</td>
                        
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Produksi / No.Telp</td><td>:</td>
                        
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Mutu / No.Telp</td><td>:</td>
                        
                    </tr>
                    <tr>
                        <td>Penanggung Jawab Higiene Sanitasi / No.Telp</td><td>:</td>
                        
                    </tr>
                    <tr>
                        <td>Tahun Berdiri dan Tahun Operasional</td><td>:</td>
                        
                    </tr>
                    <tr>
                        <td>Tipe Unit Usaha</td><td>:</td>
                       
                    </tr>
                    <tr>
                        <td>Jenis Produk (Daging Unggas)</td><td>:</td>
                        
                    </tr>
                    <tr>
                        <td>Jumlah Karyawan</td><td>:</td>
                        <td>
                            <table>
                                <tr><td colspan="3">Produksi</td></tr>
                                <tr><td>Laki-laki = &nbsp; &nbsp; &nbsp; , Perempuan = </td></tr>
                                <tr><td colspan="3">Administrasi</td></tr>
                                <tr><td>Laki-laki =  &nbsp; &nbsp; &nbsp; , Perempuan = </td></tr>
                                <tr><td>Petugas AMPM</td><td>=</td><td></td></tr>
                                <tr><td>Petugas AWO</td><td>=</td><td></td></tr>
                                <tr><td>Juru Sembelih Halal</td><td>=</td><td></td></tr>
                                <tr><td>Operator Stunning</td><td>=</td><td></td></tr>
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
                           
                        </td>
                        <td align="center"></td>
                        <td>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2. Apakah ada dokter hewan penanggung jawab teknis?
                        </td>
                        <td align="center">
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                        </td>
                        <td align="center">
                        
                        </td>
                        <td>
                       
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3. Apakah RPH-U memiliki sertifikat halal?
                        </td>
                        <td align="center">
                            
                        </td>
                        <td align="center">
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                        </td>
                        <td>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4. Apakah unggas yang akan dipotong dilengkapi dengan Sertifikat Veteriner?
                        </td>
                        <td align="center">
                           
                        </td>
                        <td align="center">
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                        </td>
                        <td>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>
                            5. Apakah ada pendataan sumber unggas?
                        </td>
                        <td align="center">
                           
                        </td>
                        <td align="center">
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                        </td>
                        <td>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>
                            6. Apakah sudah memiliki sertifikat NKV?
                        </td>
                        <td align="center">
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                        </td>
                        <td align="center">
                            
                        </td>
                        <td>
                          
                        </td>
                    </tr>
                    <tr>
                        <td>
                            7. Jika unit usaha telah menerapkan sistem jaminan keamanan pangan (HACCP, ISO 22000), 
                            apakah ada pemeriksaan/pengujian laboratorium terakreditasi secara berkala terhadap daging unggas?
                        </td>
                        <td align="center">
                           
                        </td>
                        <td align="center">
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                        </td> 
                        <td>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>
                            8. Apakah dilakukan pemingsanan terhadap unggas sebelum dipotong? Apakah pemingsanan dilakukan oleh petugas yang kompeten?
                        </td>
                        <td align="center">
                           
                        </td>
                        <td align="center">
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                        </td> 
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            9. Apakah penyembelihan dilakukan oleh juru sembelih halal yang kompeten?
                        </td>
                        <td align="center">
                           
                        </td>
                        <td align="center">
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                        </td> 
                        <td>
                           
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            10. Apakah ada petugas yang bertanggung jawab dalam penerapan kesejahteraan hewan?
                        </td>
                        <td align="center">
                        
                        </td>
                        <td align="center">
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                        </td> 
                        <td>
                             
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
                               
                            </td>
                            <td align="center">
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                            <br>
                            </td> 
                            <td>
                                    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                12. Apakah ada pemeriksaan/pengujian terhadap produk secara berkala?
                            </td>
                            <td align="center">
                               
                            </td>
                            <td align="center">
                                <br> 
                                <br> 
                                <br> 
                                <br> 
                                <br>
                            </td> 
                            <td>
                                    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                13. Apakah karkas unggas memiliki label/informasi?
                            </td>
                            <td align="center">
                               
                            </td>
                            <td align="center">
                                <br> 
                                <br> 
                                <br> 
                                <br> 
                                <br>
                            </td> 
                            <td>
                                   
                            </td>
                        </tr>
                        <tr>
                            <td>
                                14. Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                            </td>
                            <td align="center">
                               
                            </td>
                            <td align="center">
                                <br> 
                                <br> 
                                <br> 
                                <br> 
                                <br>
                            </td> 
                            <td>
                                    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                15. Apakah dilakukan program pengendalian hama dan serangga?
                            </td>
                            <td align="center">
                               
                            </td>
                            <td align="center">
                                <br> 
                                <br> 
                                <br> 
                                <br> 
                                <br>
                            </td> 
                            <td>
                                    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                16. Apakah ada prosedur penanganan terhadap unggas yang mati sebelum dipotong (bangkai)?
                            </td>
                            <td align="center">
                               
                            </td>
                            <td align="center">
                                <br> 
                                <br> 
                                <br> 
                                <br> 
                                <br>
                            </td> 
                            <td>
                                   
                            </td>
                        </tr>
                        <tr>
                            <td>
                                17. Apakah dilakukan pengolahan limbah?
                            </td>
                            <td align="center">
                               
                            </td>
                            <td align="center">
                                <br> 
                                <br> 
                                <br> 
                                <br> 
                                <br>
                            </td> 
                            <td>
                                    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                18. Apakah ada penanganan terhadap bulu dan jeroan usus dari unggas yang dipotong?
                            </td>
                            <td align="center">
                                
                            </td>
                            <td align="center">
                                <br> 
                                <br> 
                                <br> 
                                <br> 
                                <br>
                            </td> 
                            <td>
                                    
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
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            20. Berasal dari manakah sumber air bersih yang digunakan?
                        </td>
                        <td>
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            21. Berasal dari manakah sumber es yang digunakan? Berapa kebutuhan es rata-rata per/hari?
                        </td>
                        <td>
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            22. Berasal dari manakah sumber listrik yang digunakan?
                        </td>
                        <td>
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                            
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
                                <br> 
                                <br> 
                                <br> 
                                <br> 
                                
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            24. Berapakah persentase pemotongan unggas jantan?
                        </td>
                        <td> <br> 
                            <br> 
                            <br> 
                            <br> 
                            
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
                                <br> 
                                <br> 
                                <br> 
                                <br> 
                                
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
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            27. Berapakah rata-rata berat hidup unggas yang dipotong per hari?
                        </td>
                        <td>
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                           
                        </td>
                    </tr>
                    <tr>
                        <td>
                            28. Apakah sarana pembekuan cepat yang digunakan?
                        </td>
                        <td>
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                           
                        </td>
                    </tr>
                    <tr>
                        <td>
                            29. Jika produk akhir karkas dingin, apakah memiliki sarana penyimpanan dingin (Chiller)?
                        </td>
                        <td>
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                            
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
                                <br> 
                            <br> 
                            <br> 
                            <br> 
                            <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                31. Kemanakah tujuan distribusi karkas? 
                            </td>
                            <td>
                    
                                <br> 
                            <br> 
                            <br> 
                            <br> 
                            <br>
                                <ol style="margin:0px; padding-left:18px">
                                   
                                </ol>
                              
                                                               
                            </td>
                        </tr>
                        <tr>
                            <td>
                                32. Apakah jenis sarana/alat angkut untuk distribusi karkas?
                            </td>
                            <td>
                                <br> 
                            <br> 
                            <br> 
                            <br> 
                            <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                33. Jika memiliki unit pengolahan produk unggas, berapa persentase produksi RPH-U yang digunakan sebagai bahan baku produk olahan unggas?
                            </td>
                            <td>    
                                <br> 
                            <br> 
                            <br> 
                            <br> 
                            <br>
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
                                <br> 
                            <br> 
                            <br> 
                            <br> 
                            </div>
                            <br>
                            <br>
                            2. Rekomendasi/Tindak Lanjut :<br>
                            <div style="min-height:150px; padding-left:18px">
                                <br> 
                            <br> 
                            <br> 
                            <br> 
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
    
</body>
</html>