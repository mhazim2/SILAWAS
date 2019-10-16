<?php

namespace App;
use App\SurveyUnitUsaha;
use App\PengawasKesmavet;
use App\UnitUsaha;

use Illuminate\Database\Eloquent\Model;

class Form1 extends Model
{
    public $timestamps = false;
    
    protected $table = 'form1';
    
    protected $fillable = [
        'kapasitasPemeliharaan',
        'populasiTernak',
        'sapiLaktasi',
        'kategoriUsaha',
        'totalProduksiSusu',
        'check_wilayahPeredaran_1', 
        'wilayahPeredaran_1', 
        'check_wilayahPeredaran_2', 
        'wilayahPeredaran_2', 
        'check_wilayahPeredaran_3', 
        'wilayahPeredaran_3', 
        'check_wilayahPeredaran_4', 
        'wilayahPeredaran_4', 
        'jumlahKaryawan',
        'check_p1_1',
        'P1_1_1', 
        'P1_1_2', 
        'check_p1_2', 
        'P1_2_1', 
        'P1_2_2', 
        'check_p1_3', 
        'P1_3_1', 
        'P1_3_2', 
        'check_p1_4', 
        'P1_4_1', 
        'P1_4_2', 
        'P2', 
        'check_p3', 
        'P3_1', 
        'P3_2', 
        'check_p4', 
        'P4_1',
        'P4_2', 
        'P4_3', 
        'check_p5', 
        'P5_1', 
        'P5_2',
        'P5_3', 
        'P5_4',
        'P5_5', 
        'P5_6', 
        'check_p6',
        'P6_1',
        'P6_2', 
        'P6_3', 
        'P6_4', 
        'check_p7', 
        'P7_1',
        'P7_2', 
        'P7_3', 
        'check_p8', 
        'P8_1', 
        'P8_2', 
        'P8_3', 
        'check_p9', 
        'P9_1', 
        'P9_2', 
        'check_p10', 
        'P10_1',
        'P10_2', 
        'P10_3', 
        'check_p11', 
        'P11_1',
        'P11_2', 
        'P11_3', 
        'check_p12', 
        'P12_1', 
        'P12_2', 
        'P12_3', 
        'P12_4', 
        'check_p13', 
        'P13_1',
        'P13_2', 
        'P13_3', 
        'P13_4', 
        'P13_5', 
        'P13_6', 
        'P13_7', 
        'check_p14', 
        'P14_1', 
        'P14_2', 
        'P14_3', 
        'P14_4', 
        'check_p15', 
        'P15_1', 
        'P15_2', 
        'P15_3', 
        'P15_4', 
        'P15_5', 
        'check_p16', 
        'P16_1', 
        'P16_2', 
        'P16_3', 
        'P16_4', 
        'check_p17', 
        'P17_1', 
        'P17_2', 
        'P17_3', 
        'P17_4', 
        'P17_5', 
        'P17_6', 
        'P17_7', 
        'check_p18', 
        'P18_1', 
        'P18_2', 
        'check_p19', 
        'P19_1', 
        'P19_2', 
        'P19_3', 
	];

	public function surveyUnitUsaha()
	{
		return $this->belongsTo('App\SurveyUnitUsaha', 'id', 'idForm1');
	}
}
