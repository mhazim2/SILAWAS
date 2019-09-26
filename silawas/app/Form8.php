<?php

namespace App;
use App\SurveyUnitUsaha;
use App\PengawasKesmavet;
use App\UnitUsaha;

use Illuminate\Database\Eloquent\Model;

class Form8 extends Model
{
    public $timestamps = false;
    
    protected $table = 'form8';
    
    protected $fillable = [
        'jenisPengolahan',
        'kapasitasProduksi',
        'kategoriUsaha',
        'realisasiProduksi',
        'waktuProduksi',
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
        'P3_3',
        'P3_4',
        'check_p4',
        'P4_1',
        'P4_2',
        'check_p5',
        'P5_1',
        'P5_2',
        'P5_3',
        'P5_4',
        'P5_5',
        'P5_6',
        'P5_7',
        'P5_8',
        'P5_9',
        'check_p6',
        'P6_1',
        'P6_2',
        'P6_3',
        'check_p7',
        'P7_1',
        'P7_2',
        'check_p8',
        'P8',
        'check_p9',
        'P9',
        'check_p10',
        'P10',
        'check_p11',
        'P11',
        'check_p12',
        'P12',
        'check_p13',
        'P13',
        'check_p14',
        'P14_1',
        'P14_2',
        'P14_3',
        'P14_4',
        'check_p15',
        'P15',
        'check_p16',
        'P16',
        'check_p17',
        'P17',
        'check_p18',
        'P18_1',
        'P18_2',
        'check_p19',
        'P19',
        'check_p20',
        'P20',
        'check_p21',
        'P21',
	];

	public function surveyUnitUsaha()
	{
		return $this->belongsTo('App\SurveyUnitUsaha', 'id', 'idForm8');
	}
}
