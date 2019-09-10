<?php

namespace App\Http\Controllers;

use App\UnitUsaha;
use App\SurveyUnitUsaha;
use App\PengawasKesmavet;
use App\Form1;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class FormsController extends Controller
{   


    public function getAllForm(){
        
        $forms = DB::table('surveyunitusaha')
        ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
        ->select('surveyunitusaha.*','unitusaha.*')
        ->get();
        $listpengawas = $pengawas->toArray();

        return view('pengajuan.index', [
            'listForms' => $froms
        ]);
    }

    public function getFormUserHas($id){
        $user = User::findorFail($id);
        $petugas = PengawasKesmavet::where('idUser', $id)->get();
        $forms = DB::table('surveyunitusaha')
                ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
                ->where('idPengawas', '=', $petugas->idPengawasKesmavet)
                ->orWhere('idPengawas2', '=', $petugas->idPengawasKesmavet)
                ->orWhere('idPengawas3', '=', $petugas->idPengawasKesmavet)
                ->select('surveyunitusaha.*','unitusaha.*')
                ->get();

        if (array_key_exists('idForm1', $forms)) {
            $tipeForm = 1 ; 
            foreach ($forms as $forms) {
                 $idForm =  $forms->idForm1;
            } 
         } 
        else if (array_key_exists('idForm6', $forms)) {
            $tipeForm = 6 ; 
            foreach ($forms as $forms) {
                 $idForm =  $forms->idForm6;
            } 
         } 

        else if (array_key_exists('idForm10', $forms)) {
            $tipeForm = 10 ; 
            foreach ($forms as $forms) {
                 $idForm =  $forms->idForm10;
            } 
         } 

        $forms['tipeForm'] = $tipeForm;
        $forms['idForm'] = $idForm;

        return view('pengajuan.index', [
            'listForms' => $froms
        ]);

    }

    public function getDetailForm1($id){
        $survey = SurveyUnitUsaha::findorFail($id);
        $formDetail = DB::table('surveyunitusaha')
                ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
                ->join('form1','surveyunitusaha.idForm1', '=', 'form1.id')
                ->where('surveyunitusaha.id', '=', $survey->id)
                ->select('surveyunitusaha.*','unitusaha.*','form1.*')
                ->get();
  
       return dd($formDetail);
    }

    public function getDetailForm6($id){
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
            ->get();

        $pengawas2 =  DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('pengawaskesmavet.idPengawasKesmavet', '=', $survey->idPengawas2)
            ->select('orang.NamaLengkap')
            ->get();

        $pengawas3 =  DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('pengawaskesmavet.idPengawasKesmavet', '=', $survey->idPengawas3)
            ->select('orang.NamaLengkap')
            ->get();
        
        $data['detail']=$formDetail; 
        $data['dokter']=$dokterPJ;
        $data['penerima']=$penerimaProduksi;
        $data['pengawas1']=$pengawas1;
        $data['pengawas2']=$pengawas2;
        $data['pengawas3']=$pengawas3;
      
  
       return dd($data);
    }

    public function getDetailForm10($id){
        $survey = SurveyUnitUsaha::findorFail($id);
        $formDetail = DB::table('surveyunitusaha')
                ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
                ->join('form10','surveyunitusaha.idForm10', '=', 'form10.id')
                ->where('surveyunitusaha.id', '=', $survey->id)
                ->select('surveyunitusaha.*','unitusaha.*','form10.*')
                ->get();
        
        $suplier = 
        DB::table('surveyunitusaha')
            ->join('form6','surveyunitusaha.idForm6', '=', 'form6.id')
            ->leftJoin('suplierproduk','surveyunitusaha.id', '=', 'suplierproduk.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('suplierproduk.*')
            ->get();

         $pengawas1 =  DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('pengawaskesmavet.idPengawasKesmavet', '=', $survey->idPengawas)
            ->select('orang.NamaLengkap')
            ->get();

        $pengawas2 =  DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('pengawaskesmavet.idPengawasKesmavet', '=', $survey->idPengawas2)
            ->select('orang.NamaLengkap')
            ->get();

        $pengawas3 =  DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('pengawaskesmavet.idPengawasKesmavet', '=', $survey->idPengawas3)
            ->select('orang.NamaLengkap')
            ->get();


        $data['detail']=$formDetail;
        $data['suplierproduk']=$suplier;
        $data['pengawas1']=$pengawas1;
        $data['pengawas2']=$pengawas2;
        $data['pengawas3']=$pengawas3;
      

        return dd($data);
    }

    

    public function form1()
    {   
        $uu = DB::table('unitusaha')
            ->select('unitusaha.*')
            ->get();
        $listuu = $uu->toArray();

        $pengawas = DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->select('orang.NamaLengkap','pengawaskesmavet.*')
            ->get();
        $listpengawas = $pengawas->toArray();

        $DokterPengawas = DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('isDokter', '=', 1)
            ->select('orang.NamaLengkap','pengawaskesmavet.*')
            ->get();
        $listdokter = $DokterPengawas->toArray();

        return view('form.formulir-1', ['listunitusaha' => $listuu,
                                        'listpengawas'=> $listpengawas,
                                        'listdokter'=>$listdokter]);
    }

    public function storeUtamaForm1(Request $data){

        $surveyUtama = [
            'idUnitUsaha'=>$data['NamaUnitUsaha'],
            'kapasitasPemeliharaan'=> $data['kapasitasPemeliharaan'],
            'populasiTernak' => $data['populasiTernak'],
            'kategoriUsaha' => $data['kategoriUsaha'],
            'totalProduksiSusu' => $data['totalProduksiSusu'],
            'wilayahPeredaran' => $data['wilayahPeredaran'],
            'jumlahKaryawan' => $data['jumlahKaryawan'],
        ];
        session()->put('utama', $surveyUtama);
        //return dd($stor);
        return redirect()->action('FormsController@form1');
    }

    public function storeSurveyForm1(Request $data){

        // dd($data);
        // $uploadedFile = $data->file('file'); 
        // $path = $uploadedFile->store('public/files');
        $path = '';
        if($data->hasFile('file')){
            $name = Storage::disk('local')->put('files', $data->file);
            $path = $name;     
        }
       
        $surveySurvey = [
            'P1-1'=>$data['P1-1'],
            'P1-2'=>$data['P1-2'],
            'P1-3'=>$data['P1-3'],
            'P1-4'=>$data['P1-4'],
            'P2'=>$path,
            'P3'=>$data['P3'],
            'P3_ket'=>$data['P3_ket'],
            'P4'=>$data['P4'],
            'P4_ket'=>$data['P4_ket'],
            'P5-1'=>$data['P5-1'],
            'P5-2'=>$data['P5-2'],
            'P5-3'=>$data['P5-3'],
            'P6'=>$data['P6'],
            'P6_ket'=>$data['P6_ket'],
            'P7'=>$data['P7'],
            'P7_ket'=>$data['P7_ket'],
            'P8'=>$data['P8'],
            'P8_ket'=>$data['P8_ket'],
            'P9'=>$data['P9'],
            'P9_ket'=>$data['P9_ket'],
            'P10'=>$data['P10'],
            'P10_ket'=>$data['P10_ket'],
            'P11'=>$data['P11'],
            'P11_ket'=>$data['P11_ket'],
            'P12'=>$data['P12'],
            'P12_ket'=>$data['P12_ket'],
            'P13'=>$data['P13'],
            'P13_ket'=>$data['P13_ket'],
            'P14'=>$data['P14'],
            'P14_ket'=>$data['P14_ket'],
            'P15'=>$data['P15'],
            'P15_ket'=>$data['P15_ket'],
            'P16'=>$data['P16'],
            'P16_ket'=>$data['P16_ket'],
            'P17'=>$data['P17'],
            'P17_ket'=>$data['P17_ket'],
            'P18'=>$data['P18'],
            'P18_ket'=>$data['P18_ket'],
            'P19'=>$data['P19'],
            'P19_ket'=>$data['P19_ket'],
            
        ];
        
        session()->put('survey', $surveySurvey);
    
        return redirect()->action('FormsController@form1');
    }

    public function storeTambahanForm1(Request $data){

        $surveyTambahan = [
            'catatan'=>$data['catatan'],
            'rekomendasi'=> $data['rekomendasi'],
            'idPengawas' => $data['idPengawas'],
            'idPengawas2' => $data['idPengawas2'],
            'idPengawas3' => $data['idPengawas3'],
            'pjUnitUsaha' => $data['pjUnitUsaha'],
        ];
        session()->put('tambahan', $surveyTambahan);
        
        $utama = session('utama');
        $survey = session('survey');
        $tambahan = session('tambahan');
        
        $form1 = Form1::create([
            'kapasitasPemeliharaan'=> $utama['kapasitasPemeliharaan'],
            'populasiTernak'=>$utama['populasiTernak'],
            'kategoriUsaha'=>$utama['kategoriUsaha'],
            'totalProduksiSusu'=>$utama['totalProduksiSusu'],
            'wilayahPeredaran'=>$utama['wilayahPeredaran'],
            'jumlahKaryawan'=>$utama['jumlahKaryawan'],
            'P1-1'=>$survey['P1-1'],
            'P1-2'=>$survey['P1-2'],
            'P1-3'=>$survey['P1-3'],
            'P1-4'=>$survey['P1-4'],
            'P2'=>$survey['P2'],
            'P3'=>$survey['P3'],
            'P3_ket'=>$survey['P3_ket'],
            'P4'=>$survey['P4'],
            'P4_ket'=>$survey['P4_ket'],
            'P5-1'=>$survey['P5-1'],
            'P5-2'=>$survey['P5-2'],
            'P5-3'=>$survey['P5-3'],
            'P6'=>$survey['P6'],
            'P6_ket'=>$survey['P6_ket'],
            'P7'=>$survey['P7'],
            'P7_ket'=>$survey['P7_ket'],
            'P8'=>$survey['P8'],
            'P8_ket'=>$survey['P8_ket'],
            'P9'=>$survey['P9'],
            'P9_ket'=>$survey['P9_ket'],
            'P10'=>$survey['P10'],
            'P10_ket'=>$survey['P10_ket'],
            'P11'=>$survey['P11'],
            'P11_ket'=>$survey['P11_ket'],
            'P12'=>$survey['P12'],
            'P12_ket'=>$survey['P12_ket'],
            'P13'=>$survey['P13'],
            'P13_ket'=>$survey['P13_ket'],
            'P14'=>$survey['P14'],
            'P14_ket'=>$survey['P14_ket'],
            'P15'=>$survey['P15'],
            'P15_ket'=>$survey['P15_ket'],
            'P16'=>$survey['P16'],
            'P16_ket'=>$survey['P16_ket'],
            'P17'=>$survey['P17'],
            'P17_ket'=>$survey['P17_ket'],
            'P18'=>$survey['P18'],
            'P18_ket'=>$survey['P18_ket'],
            'P19'=>$survey['P19'],
            'P19_ket'=>$survey['P19_ket'],
        ]);

        $survey = SurveyUnitUsaha::create([
        'idUnitUsaha'=>$utama['idUnitUsaha'],
        'idForm1'=> $form1->id,
        'catatan'=>$tambahan['catatan'],
        'rekomendasi'=> $tambahan['rekomendasi'],
        'idPengawas' => $tambahan['idPengawas'],
        'idPengawas2' => $tambahan['idPengawas2'],
        'idPengawas3' => $tambahan['idPengawas3'],
        'pjUnitUsaha' => $tambahan['pjUnitUsaha'],
        ]);
        
       
        return redirect()->action('FormsController@form1');
    }

    public function form2()
    {
        return view('form.formulir-2');
    }

    public function form3()
    {
        return view('form.formulir-3');
    }

    public function form4()
    {
        return view('form.formulir-4');
    }

    public function form5()
    {
        return view('form.formulir-5');
    }

    public function form6()
    {
        $list_uu = UnitUsaha::all();

        $pengawas = DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->select('orang.NamaLengkap','pengawaskesmavet.*')
            ->get();
        $listpengawas = $pengawas->toArray();

        $DokterPengawas = DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('isDokter', '=', 1)
            ->select('orang.NamaLengkap','pengawaskesmavet.*')
            ->get();
        $listdokter = $DokterPengawas->toArray();

        return view('form.formulir-6', [
            'list_uu' => $list_uu,
            'listpengawas'=> $listpengawas,
            'listdokter'=>$listdokter
        ]);
    }

    public function form7()
    {
        return view('form.formulir-7');
    }

    public function form8()
    {
        return view('form.formulir-8');
    }

    public function form9()
    {
        return view('form.formulir-9');
    }

    public function form10()
    {
        return view('form.formulir-10');
    }

    public function form11()
    {
        return view('form.formulir-11');
    }

    public function form12()
    {
        return view('form.formulir-12');
    }

    public function form13()
    {
        return view('form.formulir-13');
    }

    public function form14()
    {
        return view('form.formulir-14');
    }
}
