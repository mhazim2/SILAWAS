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
        
        $pengawas1 =  DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('pengawaskesmavet.idPengawasKesmavet', '=', $survey->idPengawas)
            ->select('orang.NamaLengkap')
            ->get()->toArray();

        $pengawas2 =  DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('pengawaskesmavet.idPengawasKesmavet', '=', $survey->idPengawas2)
            ->select('orang.NamaLengkap')
            ->get()->toArray();

        $pengawas3 =  DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('pengawaskesmavet.idPengawasKesmavet', '=', $survey->idPengawas3)
            ->select('orang.NamaLengkap')
            ->get()->toArray();
       
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
            
        $pdf = PDF::loadView('export.checklist6', ['form'=>$formDetail,
                'dokter'=>$dokterPJ,
                'produksi'=>$penerimaProduksi,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                ]);
        //return view('export.checklist6', ['form'=>$formDetail,'dokter'=>$dokterPJ,'produksi'=>$penerimaProduksi]);
        return $pdf->stream('whateveryourviewname.pdf');

    	//return $pdf->download('form6.pdf');
    }
}
