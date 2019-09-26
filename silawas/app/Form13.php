<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form13 extends Model
{
    public $timestamps = false;

    protected $table = 'form13';

    protected $fillable = [
      'jenisPengolahan', 
      'kapasitasProduksi', 
      'realisasi', 
      'check_sumber_lokal', 
      'sumber_lokal', 
      'check_sumber_impor', 
      'sumber_impor', 
      'wilayahPeredaran', 
      'check_p1_niu',
      'P1_1',
      'check_p1_npwp',
      'P1_2',
      'check_p1_siup',
      'P1_3' ,
      'check_p1_nib' ,
      'P1_4',
      'check_p1_pks',
      'P1_5',
      'check_p2' ,
      'P2_1',
      'P2_2',
      'P2_3',
      'P2_4',
      'check_p3_1',
      'P3_1',
      'check_p3_2',
      'P3_2_1',
      'P3_2_2',
      'P3_2_3',
      'P3_2_4',
      'check_p4',
      'P4_1',
      'P4_2',
      'P4_3',
      'check_p5',
      'p5_count',
      'check_p6',
      'P6',
      'check_p7',
      'P7_1',
      'P7_2',
      'check_p8',
      'P8_1',
      'P8_2',
      'check_p9',
      'P9_1',
      'P9_2',
      'check_p10',
      'P10_1',
      'P10_2',
      'P10_3',
      'check_p11',
      'P11',
      'check_p12',
      'P12',
    ];
}
