<?php

namespace App;
use App\SurveyUnitUsaha;
use App\PengawasKesmavet;
use App\UnitUsaha;

use Illuminate\Database\Eloquent\Model;

class Form2 extends Model
{
    public $timestamps = false;
    
    protected $table = 'form2';
    
    protected $fillable = [
      'kapasitasPenampungan', 
      'realisasiPemanfaatan', 
      'skalaUsaha', 
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
      'P3_5', 
      'check_p4', 
      'P4_1', 
      'P4_2',
      'check_p5', 
      'P5_1', 
      'P5_2', 
      'P5_3', 
      'P5_4', 
      'check_p6', 
      'P6_1', 
      'P6_2', 
      'P6_3', 
      'check_p7', 
      'P7_1', 
      'P7_2', 
      'P7_3', 
      'P7_4', 
      'P7_5', 
      'check_p8', 
      'P8_1', 
      'P8_2', 
      'P8_3', 
      'P8_4', 
      'P8_5', 
      'P8_6', 
      'P8_7',
      'check_p9', 
      'P9_1', 
      'P9_2', 
      'P9_3', 
      'P9_4', 
      'check_p10', 
      'P10_1', 
      'P10_2', 
      'P10_3', 
      'P10_4', 
      'P10_5', 
      'check_p11', 
      'P11_1', 
      'P11_2', 
      'P11_3', 
      'P11_4', 
      'check_p12', 
      'P12_1', 
      'P12_2', 
      'P12_3', 
      'P12_4', 
      'P12_5', 
      'P12_6', 
      'P12_7', 
      'check_p13', 
      'P13_1', 
      'P13_2', 
      'P13_3',
	];

	public function surveyUnitUsaha()
	{
		return $this->belongsTo('App\SurveyUnitUsaha', 'id', 'idForm2');
	}
}
