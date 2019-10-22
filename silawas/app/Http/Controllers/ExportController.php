<?php

namespace App\Http\Controllers;


use PDF;
use App\PengawasKesmavet;
use App\form6;
use App\form10;
use App\SurveyUnitUsaha;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    

   
    public function cetakBlank1(){
        
        set_time_limit(300);
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist1');

        return $pdf->stream('blank.checklist1');
    }

    public function cetakBlank2(){
        
        set_time_limit(300);
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist2');

        return $pdf->stream('blank.checklist2');
    }

    public function cetakBlank3(){
        
        set_time_limit(300);
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist3');

        return $pdf->stream('blank.checklist3');
    }

    public function cetakBlank4(){
        
        set_time_limit(300);
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist4');

        return $pdf->stream('blank.checklist4');
    }

    public function cetakBlank5(){
        
        set_time_limit(300);
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist5');

        return $pdf->stream('blank.checklist5');
    }

    public function cetakBlank6(){
        set_time_limit(300);
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist6');

        return $pdf->stream('blank.checklist6');
    }

    public function cetakBlank7(){
        set_time_limit(300);
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist7');

        return $pdf->stream('blank.checklist7');
    }

    public function cetakBlank8(){
        set_time_limit(300);
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist8');

        return $pdf->stream('blank.checklist8');
    }

    public function cetakBlank9(){
        set_time_limit(300);
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist9');

        return $pdf->stream('blank.checklist9');
    }

    public function cetakBlank10(){
        set_time_limit(300);
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist10');

        return $pdf->stream('blank.checklist10');
    }

    public function cetakBlank11(){
        set_time_limit(300);
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist11');

        return $pdf->stream('blank.checklist11');
    }

    public function cetakBlank12(){
        set_time_limit(300);
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist12');

        return $pdf->stream('blank.checklist12');
    }

    public function cetakBlank13(){
        set_time_limit(300);
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist13');

        return $pdf->stream('blank.checklist13');
    }

    public function cetakBlank14(){
        set_time_limit(300);
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadView('blank.checklist14');

        return $pdf->stream('blank.checklist14');
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
                'dokterPJ'=>$dokterPJ,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                ]);
      
        return $pdf->stream('cheklist1.pdf');
    }
    public function cetakForm2($id){
        set_time_limit(300);
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form2','surveyunitusaha.idForm2', '=', 'form2.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form2.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->get();
    
        $suplier = 
        DB::table('surveyunitusaha')
            ->join('form2','surveyunitusaha.idform2', '=', 'form2.id')
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
            
        $pdf = PDF::loadView('export.checklist2', ['form'=>$formDetail,
                'supliers'=>$suplier,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                ]);
        
      
        return $pdf->stream('cheklist2.pdf');
    	//return $pdf->download('form10.pdf');
    }

    public function cetakForm3($id){
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form3','surveyunitusaha.idForm3', '=', 'form3.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form3.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->get();
        
        $dokterPJ = 
        DB::table('surveyunitusaha')
            ->join('form3','surveyunitusaha.idForm3', '=', 'form3.id')
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
            
        $pdf = PDF::loadView('export.checklist3', ['form'=>$formDetail,
                'dokterPJ'=>$dokterPJ,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                ]);
      
        return $pdf->stream('cheklist3.pdf');
    }

    public function cetakForm4($id){
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form4','surveyunitusaha.idForm4', '=', 'form4.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form4.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->get();
        
        $dokterPJ = 
        DB::table('surveyunitusaha')
            ->join('form4','surveyunitusaha.idForm4', '=', 'form4.id')
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
            
        $pdf = PDF::loadView('export.checklist4', ['form'=>$formDetail,
                'dokter'=>$dokterPJ,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                ]);
      
        return $pdf->stream('cheklist4.pdf');
    }

    public function cetakForm5($id){
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form5','surveyunitusaha.idform5', '=', 'form5.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form5.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->get();
        
        $dokterPJ = 
        DB::table('surveyunitusaha')
            ->join('form5','surveyunitusaha.idform5', '=', 'form5.id')
            ->leftJoin('dokterhewanpenanggungjawab','surveyunitusaha.id', '=', 'dokterhewanpenanggungjawab.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('dokterhewanpenanggungjawab.*')
            ->get();

        $penerimaProduksi = 
        DB::table('surveyunitusaha')
            ->join('form5','surveyunitusaha.idform5', '=', 'form5.id')
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
            
        $pdf = PDF::loadView('export.checklist5', ['form'=>$formDetail,
                'dokter'=>$dokterPJ,
                'produksi'=>$penerimaProduksi,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                ]);
       
        return $pdf->stream('cheklist5.pdf');
    	//return $pdf->download('form5.pdf');
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

    public function cetakForm8($id){
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form8','surveyunitusaha.idform8', '=', 'form8.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form8.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->get();
        
        $dokterPJ = 
        DB::table('surveyunitusaha')
            ->join('form8','surveyunitusaha.idform8', '=', 'form8.id')
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
            
        $pdf = PDF::loadView('export.checklist8', ['form'=>$formDetail,
                'dokterPJ'=>$dokterPJ,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                ]);
      
        return $pdf->stream('cheklist8.pdf');
    }

    public function cetakForm9($id){
        set_time_limit(300);
        
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form9','surveyunitusaha.idform9', '=', 'form9.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form9.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->get();
        
        $dokterPJ = 
        DB::table('surveyunitusaha')
            ->join('form9','surveyunitusaha.idform9', '=', 'form9.id')
            ->leftJoin('dokterhewanpenanggungjawab','surveyunitusaha.id', '=', 'dokterhewanpenanggungjawab.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('dokterhewanpenanggungjawab.*')
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
            
        $pdf = PDF::loadView('export.checklist9', ['form'=>$formDetail,
                'dokterPJ'=>$dokterPJ,
                'suplier'=>$suplier,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                ]);
      
        return $pdf->stream('cheklist9.pdf');
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

    public function cetakForm14($id){
        set_time_limit(300);
        $survey = SurveyUnitUsaha::findorFail($id);

        $formDetail = DB::table('surveyunitusaha')
            ->join('form14','surveyunitusaha.idForm14', '=', 'form14.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form14.*')
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
            $nkv = DB::table('surveyunitusaha')
            ->leftJoin('catatan_nkv','surveyunitusaha.id', '=', 'catatan_nkv.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('catatan_nkv.*')
            ->get();
        
        $halal = DB::table('surveyunitusaha')
            ->leftJoin('catatan_serti','surveyunitusaha.id', '=', 'catatan_serti.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('catatan_serti.*')
            ->get();

        $vet = DB::table('surveyunitusaha')
            ->leftJoin('serti_vet','surveyunitusaha.id', '=', 'serti_vet.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('serti_vet.*')
            ->get();

        $rekomendasi = DB::table('surveyunitusaha')
            ->leftJoin('rekomendasi','surveyunitusaha.id', '=', 'rekomendasi.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('rekomendasi.*')
            ->get();
        
        PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
            
        $pdf = PDF::loadView('export.checklist14', ['form'=>$formDetail,
                'pengawas1'=>$pengawas1,
                'pengawas2'=>$pengawas2,
                'pengawas3'=>$pengawas3,
                'nkv' =>$nkv,
                'halal' =>$halal,
                'vet'=>$vet,
                'rekomendasi'=>$rekomendasi,
                ]);
        
      
        return $pdf->stream('cheklist14.pdf');
    	//return $pdf->download('form10.pdf');
    }
}
