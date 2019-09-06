<?php

namespace App;
use App\SurveyUnitUsaha;
use App\PengawasKesmavet;
use App\UnitUsaha;

use Illuminate\Database\Eloquent\Model;

class Form1 extends Model
{
    protected $table = 'form1';
    public $timestamps = false;
    protected $fillable = [
        'kapasitasPemeliharaan',
        'populasiTernak',
        'kategoriUsaha',
        'totalProduksiSusu',
        'wilayahPeredaran',
        'jumlahKaryawan',
        'P1-1',
        'P1-2',
        'P1-3',
        'P1-4',
        'P2',
        'P3',
        'P3_ket',
        'P4',
        'P4_ket',
        'P5-1',
        'P5-2',
        'P5-3',
        'P6',
        'P6_ket',
        'P7',
        'P7_ket',
        'P8',
        'P8_ket',
        'P9',
        'P9_ket',
        'P10',
        'P10_ket',
        'P11',
        'P11_ket',
        'P12',
        'P12_ket',
        'P13',
        'P13_ket',
        'P14',
        'P14_ket',
        'P15',
        'P15_ket',
        'P16',
        'P16_ket',
        'P17',
        'P17_ket',
        'P18',
        'P18_ket',
        'P19',
        'P19_ket',
      ];

    public function finalForm1($id){
      $form1 = SurveyUnitUsaha::findorFail($id)->get();

      $forms = DB::table('surveyunitusaha')
        ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', $form1->id)
        ->select('surveyunitusaha.*','unitusaha.*')
        ->get();
        $listpengawas = $pengawas->toArray();

        return $form1;
    }
}
