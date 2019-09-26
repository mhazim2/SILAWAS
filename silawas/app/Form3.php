<?php

namespace App;
use App\SurveyUnitUsaha;
use App\PengawasKesmavet;
use App\UnitUsaha;

use Illuminate\Database\Eloquent\Model;

class Form3 extends Model
{
    public $timestamps = false;
    
    protected $table = 'form3';
    
    protected $fillable = [
        'jenisUnitUsaha',
        'kapasitasPemeliharaan',
        'jumlahPopulasi',
        'produksiTelurPerHari',
        'produksiTelurPerBulan',
        'kategoriUsaha',
        'kapasitasGudangTelur',
        'realisasiPemanfaatan',
        'wilayahPeredaran',
        'jumlahSDM',
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
        'P4_3',
        'P4_4',
        'P4_5',
        'check_p5',
        'P5_1',
        'P5_2',
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
	];

	public function surveyUnitUsaha()
	{
		return $this->belongsTo('App\SurveyUnitUsaha', 'id', 'idForm3');
	}
}
