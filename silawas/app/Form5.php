<?php

namespace App;
use App\SurveyUnitUsaha;
use App\PengawasKesmavet;
use App\UnitUsaha;

use Illuminate\Database\Eloquent\Model;

class Form5 extends Model
{
    public $timestamps = false;
    
    protected $table = 'form5';
    
    protected $fillable = [
        'kategoriRPHR',
        'karyawanProdL',
        'karyawanProdP',
        'karyawanAdmL',
        'karyawanAdmP',
        'karyawanAMPM',
        'karyawanAWO',
        'karyawanHalal',
        'karyawanButcher',
        'karyawanStunning',
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
        'P4',
        'check_p5',
        'P5',
        'check_p6',
        'P6',
        'check_p7',
        'P7',
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
        'P14',
        'check_p15',
        'P15',
        'check_p16',
        'P16',
        'check_p17',
        'P17',
        'check_p18',
        'P18',
        'check_p19',
        'P19',
        'check_p20',
        'P20',
        'check_p21',
        'P21',
        'check_p22',
        'P22',
        'check_p23',
        'P23',
        'check_p24',
        'P24',
        'check_p25',
        'P25',
        'check_p26',
        'P26',
        'check_p27',
        'P27',
        'check_p28',
        'P28_1',
        'P28_2',
        'check_p29',
        'P29_1',
        'P29_2',
        'P29_3',
        'P29_4',
        'check_p30',
        'P30_1',
        'P30_2',
        'P30_3',
        'P30_4',
        'P30_5',
        'P31',
        'check_p32',
        'P32',
        'P33',
        'P34',
        'P35',
        'P36_1',
        'P36_2',
        'P37_1',
        'P37_2',
        'P38_1',
        'P38_2',
        'P38_3',
        'P38_4',
	];

	public function surveyUnitUsaha()
	{
		return $this->belongsTo('App\SurveyUnitUsaha', 'id', 'idForm5');
	}
}
