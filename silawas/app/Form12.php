<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form12 extends Model
{
    public $timestamps = false;

    protected $table = 'form12';

    protected $fillable = [
        'komoditas',
        'kapasitasTempat',
        'realisasi',
        'jumlahKaryawan',
        'check_p1_niu',
        'P1_1',
        'check_p1_npwp', 
        'P1_2',
        'check_p1_siup', 
        'P1_3',
        'check_p1_nib', 
        'P1_4', 
        'check_p1_pks', 
        'P1_5',
        'check_p2', 
        'P2_1',
        'P2_2',
        'P2_3',
        'P2_4',
        'check_p3', 
        'p3_count',
        'check_p4',
        'P4', 
        'check_p5',
        'P5_1', 
        'P5_2',
        'P5_3', 
        'P5_4',
        'check_p6', 
        'P6',
        'check_p7', 
        'P7_1', 
        'P7_1_jenis', 
        'P7_1_merk', 
        'P7_2', 
        'P7_2_tanggal', 
        'check_p8', 
        'P8_1', 
        'P8_2', 
        'check_p9', 
        'P9_1', 
        'P9_2', 
        'check_p10',
        'P10_1', 
        'P10_2', 
        'P10_3' ,
        'check_p11' ,
        'P11' ,
    ];
}
