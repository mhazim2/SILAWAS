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
                <h3 style="margin-top:0px"><strong>Laporan Pengawasan Unit Usaha Produk Hewan (RPH-R)</strong></h3>
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
                        <td>Kategori RPH-R</td><td>:</td>
                       
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
                                <tr><td>Butcher  </td><td>=</td><td></td></tr>
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
                            <span style="margin-left:27px">(jika Sewa RPH-R)</span>
                        </td>
                        <td align="center">
                           
                        </td>
                        <td align="center"></td>
                        <td>
                           
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2.	Apakah sudah memiliki sertifikat NKV?
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
                            3.	Apakah RPH-R memiliki sertifikat halal?
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
                            4.	Apakah ada dokter hewan penanggung jawab teknis?
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
                            5.	Apakah ada pendataan sumber ternak?
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
                            6.	Apakah ternak yang akan dipotong dilengkapi dengan Sertifikat Veteriner?
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
                            7.	Apakah ternak betina yang akan dipotong dilengkapi dengan Surat Keterangan Status Reproduksi?
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
                            8.	Apakah bangunan/ruangan di desain untuk mencegah akses masuk hewan atau manusia dari luar?
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
                            9.	Apakah terdapat tempat penampungan sementara?
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
                            10.	Apakah sarana dan prasarana memenuhi/memadai sesuai kapasitas produksi?
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
                                11.	Apakah terdapat pemisahan yang jelas antara area bersih dan area kotor?
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
                                12.	Apakah dilakukan pemeriksaan ternak sebelum dipotong?
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
                                13.	Apakah dilakukan pemingsanan terhadap ternak sebelum dipotong? 
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
                                14.	Apakah penyembelihan dilakukan oleh juru sembelih halal yang kompeten?
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
                                15.	Apakah dipastikan hewan telah mati sempurna sebelum ditangani lebih lanjut 
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
                                16.	Apakah ada prosedur tertulis pemotongan terhadap hewan sakit yang diizinkan dipotong? (Brucellosis, cysticercosis)
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
                                17.	Apakah ada prosedur tertulis penanganan terhadap hewan yang mati sebelum dipotong (bangkai)? 
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
                                18.	Apakah ada petugas yang bertanggung jawab dalam penerapan kesejahteraan hewan?
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
                                   
                                </td>
                                <td align="center">
                                <br> 
                                <br> 
                                
                                <br>
                                </td> 
                                <td>
                                        
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    20.	Apakah karkas didinginkan sebelum didistribusikan?
                                </td>
                                <td align="center">
                                   
                                </td>
                                <td align="center">
                                    <br> 
                                    <br> 
                                    <br> 
                                   
                                </td> 
                                <td>
                                        
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    21.	Apakah sudah dilakukan penerapan butcher system?
                                </td>
                                <td align="center">
                                   
                                </td>
                                <td align="center">
                                    <br> 
                                    <br> 
                                    <br> 
                                    
                                </td> 
                                <td>
                                       
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    22.	Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                                </td>
                                <td align="center">
                                   
                                </td>
                                <td align="center">
                                    <br> 
                                    <br> 
                                    <br> 
                                    
                                </td> 
                                <td>
                                        
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    23.	Apakah sarana dan prasarana higiene personal yang memadai?
                                </td>
                                <td align="center">
                                   
                                </td>
                                <td align="center">
                                    <br> 
                                    <br> 
                                    <br> 
                                   
                                </td> 
                                <td>
                                        
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    24.	Apakah dilakukan program pengendalian hama dan serangga?
                                </td>
                                <td align="center">
                                   
                                </td>
                                <td align="center">
                                    <br> 
                                    <br> 
                                    <br> 
                                  
                                </td> 
                                <td>
                                       
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    25.	Apakah dilakukan pengolahan limbah?
                                </td>
                                <td align="center">
                                   
                                </td>
                                <td align="center">
                                    <br> 
                                    <br> 
                                    <br> 
                                    
                                </td> 
                                <td>
                                        
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    26.	Apakah karkas/daging yang dilalulintaskan antar Kabupaten/Kota  dilengkapi dengan sertifikat veteriner
                                </td>
                                <td align="center">
                                    
                                </td>
                                <td align="center">
                                    <br> 
                                    <br> 
                                    <br> 
                                    
                                </td> 
                                <td>
                                        
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    27.	Jika unit usaha telah menerapkan sistem jaminan keamanan pangan (HACCP, ISO 22000), apakah ada pemeriksaan/pengujian laboratorium terakreditasi secara berkala terhadap daging?
                                </td>
                                <td align="center">
                                    
                                </td>
                                <td align="center">
                                    <br> 
                                    <br> 
                                    <br> 
                                    
                                </td> 
                                <td>
                                        
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    28.	Apakah memasok daging ke horeka? 
                                </td>
                                <td align="center">
                                    
                                </td>
                                <td align="center">
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
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                            <br>
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
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            31.	Apakah sarana/alat angkut untuk distribusi karkas? 
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
                            32.	Kemanakah tujuan distribusi karkas (dalam kabupaten/kota, antar kabupaten/kota/provinsi/antar provinsi)?
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
                            33.	Berasal dari manakah sumber air bersih yang digunakan?
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
                            34.	Berasal dari manakah sumber listrik  yang digunakan? (Daya Listrik/Genset)
                        </td>
                        <td> <br> 
                            <br> 
                            <br> 
                            <br> 
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            35.	Berapakah kapasitas pemotongan ternak per hari?
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
                            <br> 
                            <br> 
                            <br> 
                            <br> 
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            37.	Berapakah realisasi pemotongan ternak?
                            <li style="margin-left:18px">realisasi pemotongan per hari</li>
                            <li style="margin-left:18px">realisasi pemotongan per minggu</li>
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
                            38.	Apa jenis ternak yang dipotong?
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