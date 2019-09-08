<?php

namespace App\Http\Controllers;


use PDF;
use App\PengawasKesmavet;
use App\form6;
use App\SurveyUnitUsaha;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExportController extends Controller
{
    public function cetak_form1($id){
        
        $form = SurveyUnitUsaha::all();
 
    	$pdf = PDF::loadview('pegawai_pdf',['pegawai'=>$form]);
    	return $pdf->download('laporan-pegawai.pdf');
    }
}
