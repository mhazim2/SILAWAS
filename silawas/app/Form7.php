<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form7 extends Model
{
    public $timestamps = false;

    protected $table = 'form7';

    protected $fillable = [
        'TipeUnitUsaha',
        'kapasitasPemotongan',
        'realisasiPemotongan',
        'operasionalPemotongan',
        'check_sumber_lokal',
        'sumber_lokal',
        'check_sumber_impor',
        'sumber_impor',
        'distribusiDaging',
        'check_p1_niu' , 
        'p1_niu_id' , 
        'p1_niu_date' , 
        'check_p1_npwp' ,
        'p1_npwp_id' , 
        'p1_npwp_date' , 
        'check_p1_siup' ,
        'p1_siup_id' , 
        'p1_siup_date' , 
        'check_p1_nib' , 
        'p1_nib_id' , 
        'p1_nib_date' , 
        'check_p1_pks' , 
        'p1_pks_id' , 
        'p1_pks_date' , 
        'check_p2' , 
        'P2_1' , 
        'P2_2' , 
        'P2_3' , 
        'P2_4' , 
        'check_p3' ,
        'p3_count' , 
        'check_p4' , 
        'P4' , 
        'check_p5' , 
        'P5_id' , 
        'P5',
        'check_p6' , 
        'P6' , 
        'check_p7' , 
        'P7' , 
        'check_p8' , 
        'P8' , 
        'check_p9' , 
        'P9' , 
        'check_p10' , 
        'P10' , 
        'check_p11' , 
        'P11' , 
        'check_p12' ,
        'P12' , 
        'check_p13' , 
        'P13' , 
        'check_p14' , 
        'P14' , 
        'check_p15' , 
        'P15' , 
        'check_p16' , 
        'P16' , 
        'check_p17' , 
        'P17' , 
        'check_p18' , 
        'P18' , 
        'check_p19' ,
        'P19' , 
        'check_p20' , 
        'P20' , 
        'check_p21' , 
        'P21' , 
        'check_p22' , 
        'P22' , 
        'check_p23' , 
        'P23_1' , 
        'P23_2' , 
        'P23_3' , 
        'P23_4' , 
        'check_p24' , 
        'P24_1' , 
        'P24_2' , 
        'P24_3' , 
        'P24_4' , 
        'P24_5' , 
        'check_p25' , 
        'P25_jenisAlat' , 
        'P25_jumlahAlat' , 
        'P25_kapasitas' ,
        'check_p26' , 
        'p26_count' , 
        'P27' , 
        'P28' , 
        'P29' , 
        'P30_1' , 
        'P30_2' , 
        'P31_1' , 
        'P31_2' , 
    ];
}