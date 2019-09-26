<?php

namespace App\Http\Controllers;


use PDF;
use App\PengawasKesmavet;
use App\form6;
use App\form10;
use App\SurveyUnitUsaha;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function cetakBlank1($id){
        
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist1');

        return $pdf->stream('blank.checklist1');
    }

    public function cetakBlank6($id){
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist6');

        return $pdf->stream('blank.checklist6');
    }

    public function cetakBlank7($id){
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist7');

        return $pdf->stream('blank.checklist7');
    }

    public function cetakBlank10($id){
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist10');

        return $pdf->stream('blank.checklist10');
    }

    public function cetakBlank11($id){
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist11');

        return $pdf->stream('blank.checklist11');
    }

    public function cetakBlank12($id){
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist12');

        return $pdf->stream('blank.checklist12');
    }

    public function cetakBlank13($id){
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist13');

        return $pdf->stream('blank.checklist13');
    }

    public function cetakForm1($id){
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form1','surveyunitusaha.idForm1', '=', 'form1.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form1.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->get();
        
        $dokterPJ = 
        DB::table('surveyunitusaha')
            ->join('form1','surveyunitusaha.idForm1', '=', 'form1.id')
            ->leftJoin('dokterhewanpenanggungjawab','surveyunitusaha.id', '=', 'dokterhewanpenanggungjawab.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('dokterhewanpenanggungjawab.*')
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
            
        $pdf = PDF::loadView('export.checklist1', ['form'=>$formDetail,
                'dokter'=>$dokterPJ,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                ]);
      
        return $pdf->stream('cheklist1.pdf');
    }

    public function cetakForm6($id){
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form6','surveyunitusaha.idForm6', '=', 'form6.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form6.*','unitusaha.*','unitusaha.pjUnitUsaha')
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
       
        return $pdf->stream('cheklist6.pdf');
    	//return $pdf->download('form6.pdf');
    }

    public function cetakForm7($id){
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form7','surveyunitusaha.idForm7', '=', 'form7.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form7.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->get();
        
        $dokterPJ = 
        DB::table('surveyunitusaha')
            ->join('form7','surveyunitusaha.idForm7', '=', 'form7.id')
            ->leftJoin('dokterhewanpenanggungjawab','surveyunitusaha.id', '=', 'dokterhewanpenanggungjawab.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('dokterhewanpenanggungjawab.*')
            ->get();

        $penerimaProduksi = 
        DB::table('surveyunitusaha')
            ->join('form7','surveyunitusaha.idForm7', '=', 'form7.id')
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
            
        $pdf = PDF::loadView('export.checklist7', ['form'=>$formDetail,
                'dokter'=>$dokterPJ,
                'produksi'=>$penerimaProduksi,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                ]);
       
        return $pdf->stream('cheklist7.pdf');
    	//return $pdf->download('form6.pdf');
    }

    public function cetakForm10($id){
        set_time_limit(300);
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form10','surveyunitusaha.idForm10', '=', 'form10.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form10.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->get();
    
        $suplier = 
        DB::table('surveyunitusaha')
            ->join('form10','surveyunitusaha.idform10', '=', 'form10.id')
            ->leftJoin('suplierproduk','surveyunitusaha.id', '=', 'suplierproduk.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('suplierproduk.*')
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
            
        $pdf = PDF::loadView('export.checklist10', ['form'=>$formDetail,
                'suplier'=>$suplier,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                ]);
        
      
        return $pdf->stream('cheklist10.pdf');
    	//return $pdf->download('form10.pdf');
    }

    public function cetakForm11($id){
        set_time_limit(300);
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form11','surveyunitusaha.idForm11', '=', 'form11.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form11.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->get();
    
        $suplier = 
        DB::table('surveyunitusaha')
            ->join('form11','surveyunitusaha.idform11', '=', 'form11.id')
            ->leftJoin('suplierproduk','surveyunitusaha.id', '=', 'suplierproduk.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('suplierproduk.*')
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
            
        $pdf = PDF::loadView('export.checklist11', ['form'=>$formDetail,
                'suplier'=>$suplier,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                ]);
        
      
        return $pdf->stream('cheklist11.pdf');
    	//return $pdf->download('form10.pdf');
    }

    public function cetakForm12($id){
        set_time_limit(300);
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form12','surveyunitusaha.idForm12', '=', 'form12.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form12.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->get();
    
        $suplier = 
        DB::table('surveyunitusaha')
            ->join('form12','surveyunitusaha.idform12', '=', 'form12.id')
            ->leftJoin('suplierproduk','surveyunitusaha.id', '=', 'suplierproduk.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('suplierproduk.*')
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
            
        $pdf = PDF::loadView('export.checklist12', ['form'=>$formDetail,
                'suplier'=>$suplier,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                ]);
        
      
        return $pdf->stream('cheklist12.pdf');
    	//return $pdf->download('form10.pdf');
    }

    public function cetakForm13($id){
        set_time_limit(300);
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form13','surveyunitusaha.idForm13', '=', 'form13.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form13.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->get();
    
        $suplier = 
        DB::table('surveyunitusaha')
            ->join('form13','surveyunitusaha.idform13', '=', 'form13.id')
            ->leftJoin('suplierproduk','surveyunitusaha.id', '=', 'suplierproduk.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('suplierproduk.*')
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
            
        $pdf = PDF::loadView('export.checklist13', ['form'=>$formDetail,
                'suplier'=>$suplier,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                ]);
        
      
        return $pdf->stream('cheklist13.pdf');
    	//return $pdf->download('form10.pdf');
    }
}
