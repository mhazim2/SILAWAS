<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form9 extends Model
{
    public $timestamps = false;
    
    protected $table = 'form9';

    protected $fillable = [
        'jenisPengolahan',
		'kapasitasProduksi',
		'jumlahProduksi',
		'check_sumber_lokal',
		'sumber_lokal',
		'check_sumber_impor',
		'sumber_impor',
		'distribusiProduk',
		'jumlahKaryawan',
		'check_p1_1',
		'P1_1',
		'check_p1_2',
		'P1_2',
		'check_p1_3',
		'P1_3',
		'check_p1_4',
		'P1_4',
		'check_p1_5',
		'P1_5',
		'check_p2',
		'P2_1',
		'P2_2',
		'P2_3',
		'P2_4',
		'P2_5',
		'check_p3',
		'P3_1',
		'P3_2',
		'check_p4',
		'P4_1',
		'P4_2',
		'check_p5',
		'P5_1',
		'P5_2',
		'P5_3',
		'check_p6',
		'P6_1',
		'P6_2',
		'check_p7',
		'P7',
		'check_p8',
		'P8',
		'check_p9',
		'P9',
		'check_p10',
		'P10_1',
		'P10_2',
		'P10_3',
		'P10_4',
		'check_p11',
		'P11_1',
		'P11_2',
		'P11_3',
		'check_p12',
		'P12_1',
		'P12_2',
		'P12_3',
		'P12_4',
		'P12_5',
		'check_p13',
		'P13_1',
		'P13_2',
		'P13_3',
		'P13_4',
		'P13_5',
		'check_p14',
		'P14',
		'check_p15',
		'P15_1',
		'P15_2',
		'P15_3',
		'P15_4',
		'P15_5',
		'P15_6',
		'check_p16',
		'P16',
		'check_p17',
		'P17_1',
		'P17_2',
		'P17_3',
	];
    
    public function surveyUnitUsaha()
    {
        return $this->belongsTo('App\SurveyUnitUsaha', 'id', 'idForm9');
    }
}
