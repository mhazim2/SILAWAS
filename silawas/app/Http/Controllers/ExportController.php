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
    public function cetakform1($id){
        
        $form = SurveyUnitUsaha::all();
 
    	$pdf = PDF::loadview('pegawai_pdf',['pegawai'=>$form]);
    	return $pdf->download('laporan-pegawai.pdf');
    }

    public function cetakForm6($id){
        
        $survey = SurveyUnitUsaha::findorFail($id);
        $formDetail = DB::table('surveyunitusaha')
                ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
                ->join('dokterhewanpenanungjawab_','surveyunitusaha.id', '=', 'dokterhewanpenanungjawab_.surveyUnitUsaha_idsurveyUnitusaha')
                ->join('penerimaprodukdistribusi','surveyunitusaha.id', '=', 'penerimaprodukdistribusi.surveyUnitUsaha_idsurveyUnitusaha')
                ->join('form6','surveyunitusaha.idForm6', '=', 'form6.id')
                ->where('surveyunitusaha.id', '=', $survey->id)
                ->select('surveyunitusaha.*','unitusaha.*','form6.*','dokterhewanpenanungjawab_.*','penerimaprodukdistribusi.*')
                ->get();
        
        $pdf = PDF::loadView('export.checklist6', $formDetail);
    
    	return $pdf->download('form6.pdf');
    }
}
