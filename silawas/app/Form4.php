<?php

namespace App;
use App\SurveyUnitUsaha;
use App\PengawasKesmavet;
use App\UnitUsaha;

use Illuminate\Database\Eloquent\Model;

class Form4 extends Model
{
    public $timestamps = false;
    
    protected $table = 'form4';
    
    protected $fillable = [
        'jenisUnitUsaha',
        'kapasitasGudang',
        'kategoriUsaha',
        'realisasiPemanfaatan',
        'check_sumber_lokal',
        'sumber_lokal',
        'check_sumber_impor',
        'sumber_impor',
        'wilayahPeredaran',
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
        'P3',
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
	];

	public function surveyUnitUsaha()
	{
		return $this->belongsTo('App\SurveyUnitUsaha', 'id', 'idForm4');
	}
}
