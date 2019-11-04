<?php

namespace App\Http\Controllers;

use Alert;
use App\UnitUsaha;
use App\PengawasKesmavet;
use App\SurveyUnitUsaha;
use App\Form13;
use App\SuplierProduk;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Checklists13Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function detail($id)
    {
        $survey = SurveyUnitUsaha::findorFail($id);
        $surveyID = $survey->id;

        $formDetail = DB::table('surveyunitusaha')
            ->join('form13','surveyunitusaha.idForm13', '=', 'form13.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form13.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->first();
            $pengawas1 =  DB::table('PengawasKesmavet')
            ->join('user', 'PengawasKesmavet.idUser', '=', 'user.id')
            ->join('Orang', 'user.Orang_idOrang', '=', 'Orang.idOrang')
            ->where('PengawasKesmavet.idPengawasKesmavet', '=', $survey->idPengawas)
            ->select('Orang.NamaLengkap')
            ->first();

        $pengawas2 =  DB::table('PengawasKesmavet')
            ->join('user', 'PengawasKesmavet.idUser', '=', 'user.id')
            ->join('Orang', 'user.Orang_idOrang', '=', 'Orang.idOrang')
            ->where('PengawasKesmavet.idPengawasKesmavet', '=', $survey->idPengawas2)
            ->select('Orang.NamaLengkap')
            ->first();

        $pengawas3 =  DB::table('PengawasKesmavet')
            ->join('user', 'PengawasKesmavet.idUser', '=', 'user.id')
            ->join('Orang', 'user.Orang_idOrang', '=', 'Orang.idOrang')
            ->where('PengawasKesmavet.idPengawasKesmavet', '=', $survey->idPengawas3)
            ->select('Orang.NamaLengkap')
            ->first();
        $supliers = DB::table('surveyunitusaha')
            ->join('form13','surveyunitusaha.idform13', '=', 'form13.id')
            ->leftJoin('suplierproduk','surveyunitusaha.id', '=', 'suplierproduk.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('suplierproduk.*')
            ->get();

        return view('checklist13.detail', [
            'data' => $formDetail,
            'surveyID' => $surveyID,
            'pengawas1' => $pengawas1,
            'pengawas2' => $pengawas2,
            'pengawas3' => $pengawas3,
            'supliers' => $supliers,
        ]);
    }

    public function umum(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {   
            request()->validate([
                'idUnitUsaha' => 'required',
                'jenisPengolahan'=> 'required',
                'wilayahPeredaran'=> 'required',
            ]);

            if( isset($request['jenisPengolahan'])){
                $request['jenisPengolahan']= implode( ", ", $request['jenisPengolahan'] );
            }

            if( isset($request['wilayahPeredaran'])){
                $request['wilayahPeredaran']= implode( ", ", $request['wilayahPeredaran'] );
            }
           
            $temp = $request->all();
            session()->put('umum', $temp);
            
            return redirect()->action('Checklists13Controller@survey');
        }

        // GET Request
        $list_uu = UnitUsaha::all();
        return view('checklist13.umum', [
            'list_uu' => $list_uu
        ]);
    }

    public function survey(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {   
            $data_survey = [
                'check_p1_niu'=> $request['check_p1_niu'],
                'check_p1_niu' => $request['check_p1_niu'],
                'P1_1' => $request['P1_1'],
                'check_p1_npwp' => $request['check_p1_npwp'],
                'P1_2' => $request['P1_2'],
                'check_p1_siup' => $request['check_p1_siup'],
                'P1_3' => $request['P1_3'],
                'check_p1_nib' => $request['check_p1_nib'],
                'P1_4' => $request['P1_4'],
                'check_p1_pks' => $request['check_p1_pks'],
                'P1_5' => $request['P1_5'],
                'check_p2' => $request['check_p2'],
                'P2_1' => $request['P2_1'],
                'P2_2' => $request['P2_2'],
                'P2_3' => $request['P2_3'],
                'P2_4' => $request['P2_4'],
                'check_p3_1' => $request['check_p3_1'],
                'P3_1' => $request['P3_1'],
                'check_p3_2' => $request['check_p3_2'],
                'P3_2_1' => $request['P3_2_1'],
                'P3_2_2' => $request['P3_2_2'],
                'P3_2_3' => $request['P3_2_3'],
                'P3_2_4' => $request['P3_2_4'],
                'check_p4' => $request['check_p4'],
                'P4_1' => $request['P4_1'],
                'P4_2' => $request['P4_2'],
                'P4_3' => $request['P4_3'],
                'check_p5' => $request['check_p5'],
                'p5_count' => $request['p5_count'],
                'check_p6' => $request['check_p6'],
                'P6' => $request['P6'],
                'check_p7' => $request['check_p7'],
                'P7_1' => $request['P7_1'],
                'P7_2' => $request['P7_2'],
                'check_p8' => $request['check_p8'],
                'P8_1' => $request['P8_1'],
                'P8_2' => $request['P8_2'],
                'check_p9' => $request['check_p9'],
                'P9_1' => $request['P9_1'],
                'P9_2' => $request['P9_2'],
                'check_p10' => $request['check_p10'],
                'P10_1' => $request['P10_1'],
                'P10_2' => $request['P10_2'],
                'P10_3' => $request['P10_3'],
                'check_p11' => $request['check_p11'],
                'P11' => $request['P11'],
                'check_p12' => $request['check_p12'],
                'P12' => $request['P12'],
                'P5_1' => $request['P5_1'],
                'P5_2' => $request['P5_2'],
                'P5_3' => $request['P5_3'],
                'P5_4' => $request['P5_4'],
            ];
            session()->put('survey', $data_survey);
            return redirect()->action('Checklists13Controller@catatan');
        }

        // GET Request
        return view('checklist13.survey');
    }

    public function catatan(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            return redirect()->action('Checklists13ontroller@store');
        }

        // GET Request
        $list_dokter = PengawasKesmavet::with(['user', 'user.orang'])->where('isDokter', '=', 1)->get();
        $list_pengawas = PengawasKesmavet::with(['user', 'user.orang'])->get();
        return view('checklist13.catatan', [
            'list_dokter' => $list_dokter,
            'list_pengawas' => $list_pengawas
        ]);
    }

    public function store(Request $request)
    {   

        request()->validate([
            'idPengawas' => 'required',
        ]);
        
        // Get All Data
         $umum = session('umum');
         $survey = session('survey');
       
        // Insert to Database
        $formff = Form13::create([
            'jenisPengolahan'=> $umum['jenisPengolahan'], 
            'kapasitasProduksi'=> $umum['kapasitasProduksi'], 
            'realisasi'=> $umum['realisasi'], 
            'check_sumber_lokal'=> $umum['check_sumber_lokal'], 
            'sumber_lokal'=> $umum['sumber_lokal'], 
            'check_sumber_impor'=> $umum['check_sumber_impor'], 
            'sumber_impor'=> $umum['sumber_impor'], 
            'wilayahPeredaran'=> $umum['wilayahPeredaran'],
            'check_p1_niu'=> $survey['check_p1_niu'],
            'check_p1_niu' => $survey['check_p1_niu'],
            'P1_1' => $survey['P1_1'],
            'check_p1_npwp' => $survey['check_p1_npwp'],
            'P1_2' => $survey['P1_2'],
            'check_p1_siup' => $survey['check_p1_siup'],
            'P1_3' => $survey['P1_3'],
            'check_p1_nib' => $survey['check_p1_nib'],
            'P1_4' => $survey['P1_4'],
            'check_p1_pks' => $survey['check_p1_pks'],
            'P1_5' => $survey['P1_5'],
            'check_p2' => $survey['check_p2'],
            'P2_1' => $survey['P2_1'],
            'P2_2' => $survey['P2_2'],
            'P2_3' => $survey['P2_3'],
            'P2_4' => $survey['P2_4'],
            'check_p3_1' => $survey['check_p3_1'],
            'P3_1' => $survey['P3_1'],
            'check_p3_2' => $survey['check_p3_2'],
            'P3_2_1' => $survey['P3_2_1'],
            'P3_2_2' => $survey['P3_2_2'],
            'P3_2_3' => $survey['P3_2_3'],
            'P3_2_4' => $survey['P3_2_4'],
            'check_p4' => $survey['check_p4'],
            'P4_1' => $survey['P4_1'],
            'P4_2' => $survey['P4_2'],
            'P4_3' => $survey['P4_3'],
            'check_p5' => $survey['check_p5'],
            'p5_count' => $survey['p5_count'],
            'check_p6' => $survey['check_p6'],
            'P6' => $survey['P6'],
            'check_p7' => $survey['check_p7'],
            'P7_1' => $survey['P7_1'],
            'P7_2' => $survey['P7_2'],
            'check_p8' => $survey['check_p8'],
            'P8_1' => $survey['P8_1'],
            'P8_2' => $survey['P8_2'],
            'check_p9' => $survey['check_p9'],
            'P9_1' => $survey['P9_1'],
            'P9_2' => $survey['P9_2'],
            'check_p10' => $survey['check_p10'],
            'P10_1' => $survey['P10_1'],
            'P10_2' => $survey['P10_2'],
            'P10_3' => $survey['P10_3'],
            'check_p11' => $survey['check_p11'],
            'P11' => $survey['P11'],
            'check_p12' => $survey['check_p12'],
            'P12' => $survey['P12'],
        ]);


    $surveyform = SurveyUnitUsaha::create([
        'idUnitUsaha'=>$umum['idUnitUsaha'],
        'idForm13'=> $formff->id,
        'catatan'=>$request['catatan'],
        'rekomendasi'=> $request['rekomendasi'],
        'idPengawas' => $request['idPengawas'],
        'idPengawas2' => $request['idPengawas2'],
        'idPengawas3' => $request['idPengawas3'],
        'pjUnitUsaha' => $request['pjUnitUsaha'],
        'tipeForm' => 'Hotel, Restoran dan Katering',
    ]);

    if (isset($survey['p5_count'])){
        for($i=0;$i<$survey['p5_count'];$i++){
             SuplierProduk::create([
                'namaSuplier'=>$survey['P5_1'][$i],
                'negara'=>$survey['P5_2'][$i],
                'tanggal'=>$survey['P5_3'][$i],
                'jumlah'=>$survey['P5_4'][$i],
                'surveyUnitUsaha_idsurveyUnitusaha'=>$surveyform->id,
            ]);
        }
    };              

        // Form Complete Redirect
        Alert::success('Ceklis Berhasil Disimpan');
        return redirect()->route('pengawasan.show');
    }

    public function update(Request $request, $id)
    {
        // Fungsi Update
    }
}
