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
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form6','surveyunitusaha.idForm6', '=', 'form6.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form6.*','unitusaha.*')
            ->get();
        
        $dokterPJ = 
        DB::table('surveyunitusaha')
            ->join('form6','surveyunitusaha.idForm6', '=', 'form6.id')
            ->leftJoin('dokterhewanpenanggungjawab','surveyunitusaha.id', '=', 'dokterhewanpenanggungjawab.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('dokterhewanpenanggungjawab.*')
            ->get();

        $penerimaProduksi = 
        DB::table('surveyunitusaha')
            ->join('form6','surveyunitusaha.idForm6', '=', 'form6.id')
            ->leftJoin('penerimaprodukdistribusi','surveyunitusaha.id', '=', 'penerimaprodukdistribusi.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('penerimaprodukdistribusi.*')
            ->get();
        
        
        
        //$pdf = PDF::loadView('export.checklist6', ['form'=>$formDetail,'dokter'=>$dokterPJ,'produksi'=>$penerimaProduksi]);
        return view('export.checklist6', ['form'=>$formDetail,'dokter'=>$dokterPJ,'produksi'=>$penerimaProduksi]);
    	//return $pdf->download('form6.pdf');
    }
}
