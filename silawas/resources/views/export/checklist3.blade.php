<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Checklist 3 Export PDF</title>
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
        {{--
        <tr>
            <td colspan="2" align="center">
                <h3 style="margin-bottom:0px"><strong>Formulir Ceklis</strong></h3>
            </td>
        </tr> --}}
        <tr>
            <td colspan="2" align="center">
                <h3 style="margin-top:0px"><strong>Laporan Pengawasan Unit Usaha Produk Hewan </strong></h3>
                <h3 ><strong>(Tempat Budidaya Unggas Petelur dan Produksi Telur Konsumsi) </strong></h3>
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
                        <td>{{ $data->Telepon ?: '-' }}/{{ $data->Fax ?: '-' }}/{{ $data->Email ?: '-' }}</td>
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
                        <td>Jumlah Populasi</td><td>:</td>
                        <td>{{ $data->jumlahPopulasi ? $data->jumlahPopulasi.' ekor' : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Skala Usaha Peternakan</td><td>:</td>
                        <td>{{ $data->skalaUsaha ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td>Produksi Telur</td><td>:</td>
                        <td>
                            {{ $data->produksiTelurPerHari ? $data->produksiTelurPerHari.' Ton/hari' : '-' }}; 
                            {{ $data->produksiTelurPerBulan ? $data->produksiTelurPerBulan.' Ton/bulan' : '-' }}
                        </td>
                    </tr>
                    <tr>
                        <td>Kapasitas Gudang Telur</td><td>:</td>
                        <td>{{ $data->kapasitasGudangTelur ? $data->kapasitasGudangTelur.' MT' : '-' }}</td>
                    </tr>
                    <tr>
                        <td>Realisasi Pemanfaatan Saat Ini</td><td>:</td>
                        <td>{{ $data->realisasiPemanfaatan ? $data->realisasiPemanfaatan.' MT' : '-' }}</td>
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
                        <td>Jumlah SDM</td><td>:</td>
                        <td>{{ $data->jumlahSDM ? $data->jumlahSDM.' orang' : '-' }}</td>
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
                            <br>{!! $data->P1_1_1 ? '<b>Nomor izin usaha:</b> '.$data->P1_1_1.' <b>Tanggal Sertifikat:</b>'.$data->P1_1_2 : '-' !!}<br>
                            <br>{!! $data->P1_2_1 ? '<b>No NPWP:</b> '.$data->P1_2_2.' <b>Tanggal Sertifikat:</b>'.$data->P1_2_2 : '-' !!}<br>
                            <br>{!! $data->P1_3_1 ? '<b>No SIUP:</b> '.$data->P1_3_2.' <b>Tanggal Sertifikat:</b>'.$data->P1_3_2 : '-' !!}<br>
                            <br>{!! $data->P1_4_1 ? '<b>No NIB:</b> '.$data->P1_4_2.' <b>Tanggal Sertifikat:</b>'.$data->P1_4_2 : '-' !!}<br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2.	Apakah sudah memiliki sertifikat NKV?
                        </td>
                        <td align="center">
                            {{$data->check_p2  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p2 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p2)
                                                        <div><b>No:</b> {{ $data->P2_1 ?: '-' }}</div>
                                                        <div><b>Tanggal Penerbitan:</b> {{ $data->P2_2 ?: '-' }}</div>
                                                        <div><b>Surveilans Terakhir:</b> {{ $data->P2_3 ?: '-' }}</div>
                                                        <div><b>Tindak Lanjut Temuan:</b></div>
                                                        <div>{{ $data->P2_4 ?: '-' }}</div>
                                                        
                                                    @else
                                                        {{ $data->P2_6 ?: '-' }}
                                                    @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                        3.	Apakah sudah memiliki sertifikat kompartemen?
                        </td>
                        <td align="center">
                            {{$data->check_p3  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p3 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p3)
                            <div><b>No:</b> {{ $data->P3_1 ?: '-' }}</div>
                            <div><b>Tanggal Penerbitan:</b> {{ $data->P3_2 ?: '-' }}</div>
                            <div><b>Masa Berlaku:</b> {{ $data->P3_3 ? $data->P3_3.' tahun' : '-' }}</div>
                        @else
                            {{ $data->P3_4 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                        4.	Apakah sudah memiliki sertifikat produk telur (bebas salmonella, bebas residu antibiotik, dll)?
                        </td>
                        <td align="center">
                            {{$data->check_p4  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p4 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p4)
                                                        <div><b>No:</b> {{ $data->P4_1 ?: '-' }}</div>
                                                        <div><b>Tanggal Penerbitan:</b> {{ $data->P4_2 ?: '-' }}</div>
                                                        <div><b>Masa Berlaku:</b> {{ $data->P4_3 ? $data->P4_3.' tahun' : '-' }}</div>
                                                        <div><b>Lembaga Sertifikasi:</b> {{ $data->P4_4 ? $data->P4_4 : '-' }}</div>
                                                    @else
                                                        {{ $data->P4_5 ?: '-' }}
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
                        5.	Jika perusahaan menyatakan produknya bebas salmonella, residu antibiotik, dll, Apakah ada pemeriksaan/pengujian laboratorium terakreditasi secara berkala terhadap telur?
                        </td>
                        <td align="center">
                            {{$data->check_p5  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p5 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p5)
                            <div><b>SOP Pengambilan Sampel dan Pengujian:</b> {{ $data->P5_1 ?: '-' }}</div>
                            <div><b>Frekuensi Pengambilan Sampel:</b> {{ $data->P5_2 ?: '-' }}</div>
                            <div><b>Metode Pengambilan Sampel:</b> {{ $data->P5_3 ?: '-' }}</div>
                            <div><b>Jenis Uji:</b> {{ $data->P5_4 ?: '-' }}</div>
                            <div><b>Instansi yang Melakukan Pengujian:</b> {{ $data->P5_5 ?: '-' }}</div>
                            <div><b>Waktu Terakhir Pengujian:</b> {{ $data->P5_6 ?: '-' }}</div>
                        @else
                            {{ $data->P5_7 ?: '-' }}
                        @endif
                       
                        </td>
                    </tr>
                    <tr>
                        <td>
                        6.	Apakah ada dokter hewan penanggung jawab teknis? 
                        </td>
                        <td align="center">
                            {{$data->check_p6  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p6 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p6)
                            <b>Jumlah:</b> {{ $data->P6_1 ?: '0' }} Orang
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
                            <b>Penanggung Jawab:</b> {{ $data->P6_2 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                        7.	Apakah pemberian pengobatan di bawah pengawasan dokter hewan?
                        </td>
                        <td align="center">
                            {{$data->check_p7  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p7 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p7)
                                                        <div><b>Pencatatan Program Pengobatan:</b> {{ $data->P7_1 ?: '-' }}</div>
                                                        <div><b>Pengobatan Yang Dilakukan:</b></div>
                                                        <div>{{ $data->P7_2 ?: '-' }}</div>
                                                    @else
                                                        <b>Penanggung Jawab:</b> {{ $data->P7_3 ?: '-' }}
                                                    @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                        8.	Apakah area peternakan dirancang untuk mencegah/membatasi akses masuk hewan atau manusia dari luar?
                        </td>
                        <td align="center">
                            {{$data->check_p8  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p8 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p8)
                            <div><b>Pagar Atau Fasilitas Pembatas Lain:</b> {{ $data->P8_1 ?: '-' }}</div>
                            <div><b>Jenis:</b> {{ $data->P8_2 ?: '-' }}</div>
                            <div><b>Berhasil Dibatasi:</b> {{ $data->P8_3 ?: '-' }}</div>
                        @else
                            {{ $data->P8_4 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                        9.	Apakah dilakukan prosedur biosekuriti terhadap manusia, kendaraan, dan ternak yang masuk?
                        </td>
                        <td align="center">
                            {{$data->check_p9  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p9 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p9)
                            <div><b>SOP Biosekuriti:</b> {{ $data->P9_1 ?: '-' }}</div>
                        @else
                            {{ $data->P9_2 ?: '-' }}
                        @endif
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                        10.	Apakah terdapat pemisahan antara hewan lama dan hewan baru ?
                        </td>
                        <td align="center">
                            {{$data->check_p10  ? 'V':' '}}
                        </td>
                        <td align="center">
                            {{$data->check_p10 ? ' ':"V"}}
                        </td>
                        <td>
                            @if ($data->check_p10)
                                                        <div><b>Terdapat Sarana Tempat Penampungan Sementara:</b> {{ $data->P10_1 ?: '-' }}</div>
                                                        <div><b>Kapasitas Penampungan:</b> {{ $data->P10_2.' ekor' ?: '-' }}</div>
                                                    @else
                                                        {{ $data->P10_3 ?: '-' }}
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
                            11.	Apakah terdapat kandang isolasi untuk unggas sakit?
                            </td>
                            <td align="center">
                                {{$data->check_p11  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p11 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p11)
                                <div><b>Prosedur Perawatan Hewan pada Kandang Isolasi:</b></div>
                                <div>{{ $data->P11_1 ?: '-' }}</div>
                            @else
                                {{ $data->P11_2 ?: '-' }}
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                            12.	Apakah sarana dan prasarana pemeliharaan memenuhi/ memadai sesuai kapasitas?
                            </td>
                            <td align="center">
                                {{$data->check_p12  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p12 ? ' ':"V"}}
                            </td>
                            <td>
                                <div><b>Jenis Kandang:</b> {{ $data->P12_1 ?: '-' }}</div>
                                <div><b>Jumlah Kandang:</b> {{ $data->P12_2.' unit' ?: '-' }}</div>
                                <div><b>Kapasitas:</b> {{ $data->P12_3.' ekor' ?: '-' }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            13.	Apakah sarana dan prasarana penyimpanan telur memenuhi/ memadai?
                            </td>
                            <td align="center">
                                {{$data->check_p13  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p13 ? ' ':"V"}}
                            </td>
                            <td>
                                <div><b>Memiliki Kapasitas yang Cukup:</b> {{ $data->P12_1 ?: '-' }}</div>
                                <div><b>Identifikasi Kapasitas Gudang dan Kesesuaian dengan Produksi:</b> {{ $data->P12_2 ?: '-' }}</div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            14.	Apakah prosedur pemeliharaan hewan menerapkan prinsip-prinsip kesejahteraan hewan?
                            </td>
                            <td align="center">
                                {{$data->check_p14  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p14 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p14)
                                                        <div><b>Kepadatan Hewan Unggas:</b> {{ $data->P14_1 ?: '-' }}</div>
                                                        <div><b>Pemberian Makan Minum Sesuai Kebutuhan:</b> {{ $data->P14_2 ?: '-' }}</div>
                                                        <div><b>Ketersediaan Pakan dan Kondisi Ternak:</b> {{ $data->P14_3 ?: '-' }}</div>
                                                    @else
                                                        {{ $data->P14_4 ?: '-' }}
                                                    @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                            15.	Apakah penanganan telur dilakukan dengan baik?
                            </td>
                            <td align="center">
                                {{$data->check_p15  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p15 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p15)
                                                        <div><b>Telur Dalam Kondisi Baik:</b> {{ $data->P15_1 ?: '-' }}</div>
                                                        <div><b>SOP Penanganan Produk Hewan:</b> {{ $data->P15_2 ?: '-' }}</div>
                                                        <div><b>Sorting telur:</b> {{ $data->P15_3 ?: '-' }}</div>
                                                        <div><b>Pembersihan telur:</b> {{ $data->P15_4 ?: '-' }}</div>
                                                        <div><b>Penerapan FIFO:</b> {{ $data->P15_5 ?: '-' }}</div>
                                                        <div><b>Terdapat rak/pallet/sejenisnya:</b> {{ $data->P15_6 ?: '-' }}</div>
                                                    @else
                                                        {{ $data->P15_7 ?: '-' }}
                                                    @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                            16.	Apakah ada penanganan telur afkir/rusak?
                            </td>
                            <td align="center">
                                {{$data->check_p16  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p16 ? ' ':"V"}}
                            </td>
                            <td>
                                {{ $data->P16 ?: '-' }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                            17.	Apakah telur dicap atau memiliki label/informasi?
                            </td>
                            <td align="center">
                                {{$data->check_p17  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p17 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p17)
                                <div><b>Telur Dicap:</b> {{ $data->P17_1 ?: '-' }}</div>
                                <div><b>Informasi yang Terdapat Dalam Label:</b> {{ $data->P17_2 ?: '-' }}</div>
                            @else
                                {{ $data->P17_3 ?: '-' }}
                            @endif
                            </td>
                        </tr>   
                        <tr>
                            <td>
                            18.	Apakah dilakukan program pemeliharaan kebersihan sarana dan prasarana (sanitasi)?
                            </td>
                            <td align="center">
                                {{$data->check_p18  ? 'V':' '}}
                            </td>
                            <td align="center">
                                {{$data->check_p18 ? ' ':"V"}}
                            </td>
                            <td>
                                @if ($data->check_p18)
                                <div><b>SOP Pemeliharaan Kebersihan Sarana dan Prasarana:</b> {{ $data->P18_1 ?: '-' }}</div>
                                <div><b>Frekuensi Pemeliharaan Kebersihan:</b> {{ $data->P18_2 ?: '-' }}</div>
                                <div><b>Metode:</b> {{ $data->P18_3 ?: '-' }}</div>
                                <div><b>Laporan hasil sanitasi (<i>QC Record</i>):</b> {{ $data->P18_4 ?: '-' }}</div>
                            @else
                                <div><b>Kondisi Kebersihan Unit Usaha:</b></div>
                                <div>{{ $data->P18_5 ?: '-' }}</div>
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
                                19.	Apakah sarana dan prasarana untuk higiene personal memadai?
                                </td>
                                <td align="center">
                                    {{$data->check_p19  ? 'V':' '}}
                                </td>
                                <td align="center">
                                    {{$data->check_p19 ? ' ':"V"}}
                                </td>
                                <td>
                                    @if ($data->check_p19)
                                    <div><b>Terdapat Sarpras Untuk Cuci Tangan:</b> {{ $data->P19_1 ?: '-' }}</div>
                                    <div><b>Dilengkapi Sabun:</b> {{ $data->P19_2 ?: '-' }}</div>
                                    <div><b>Dilengkapi Pelindung Diri (APD):</b> {{ $data->P19_3 ?: '-' }}</div>
                                @else
                                    {{ $data->P19_4 ?: '-' }}
                                @endif
                                </td>
                            </tr>           
                            <tr>
                                <td>
                                20.	Apakah dilakukan program pengendalian hama dan serangga?
                                </td>
                                <td align="center">
                                    {{$data->check_p20  ? 'V':' '}}
                                </td>
                                <td align="center">
                                    {{$data->check_p2 ? ' ':"V"}}
                                </td>
                                <td>
                                    @if ($data->check_p20)
                                    <div><b>Dilakukan Secara Subkontrak:</b> {{ $data->P20_1 ?: '-' }}</div>
                                    <div><b>SOP Pengendalian Hama dan Seranga:</b> {{ $data->P20_2 ?: '-' }}</div>
                                    <div><b>Bukti Kontrak:</b> {{ $data->P20_3 ?: '-' }}</div>
                                    <div><b>Jadwal Inspeksi:</b> {{ $data->P20_4 ?: '-' }}</div>
                                    <div><b>Jenis Hama dan Metode:</b> {{ $data->P20_5 ?: '-' }}</div>
                                    <div><b>Jadwal dan Catatan Pelaksanaan Pengendalian Hama:</b> {{ $data->P20_6 ?: '-' }}</div>
                                @else
                                    {{ $data->P20_7 ?: '-' }}
                                @endif
                                </td>
                            </tr>           
                            <tr>
                                <td>
                                21.	Apakah ada prosedur penanganan terhadap unggas yang mati?
                                </td>
                                <td align="center">
                                    {{$data->check_p21  ? 'V':' '}}
                                </td>
                                <td align="center">
                                    {{$data->check_p21 ? ' ':"V"}}
                                </td>
                                <td>
                                    @if ($data->check_p21)
                                                            <div><b>SOP Penanganan Hewan yang Mati:</b> {{ $data->P21_1 ?: '-' }}</div>
                                                        @else
                                                            {{ $data->P21_2 ?: '-' }}
                                                        @endif
                                </td>
                            </tr>           
                            <tr>
                                <td>
                                22.	Apakah dilakukan pengolahan limbah?
                                </td>
                                <td align="center">
                                    {{$data->check_p22  ? 'V':' '}}
                                </td>
                                <td align="center">
                                    {{$data->check_p22 ? ' ':"V"}}
                                </td>
                                <td>
                                    @if ($data->check_p22)
                                                            <div><b>SOP Pengolahan Limbah:</b> {{ $data->P22_1 ?: '-' }}</div>
                                                            <div><b>Metode:</b> {{ $data->P22_2 ?: '-' }}</div>
                                                        @else
                                                            {{ $data->P22_3 ?: '-' }}
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