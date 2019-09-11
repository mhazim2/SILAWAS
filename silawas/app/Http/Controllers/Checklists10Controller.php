<?php

namespace App\Http\Controllers;

use Alert;

use App\UnitUsaha;
use App\PengawasKesmavet;
use App\SurveyUnitUsaha;
use App\Form10;
use App\SuplierProduk;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Checklists10Controller extends Controller
{
    public function detail($id)
    {
        $survey = SurveyUnitUsaha::findorFail($id);
        $formDetail = DB::table('surveyunitusaha')
            ->join('form10','surveyunitusaha.idForm10', '=', 'form10.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->join('pelakuusaha', 'unitusaha.PelakuUsaha_idPemilikUsaha', '=', 'pelakuusaha.idPemilikUsaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form10.*','unitusaha.*','unitusaha.pjUnitUsaha','pelakuusaha.Nama')
            ->first();
        $suplier = DB::table('surveyunitusaha')
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
            ->first();
        $pengawas2 =  DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('pengawaskesmavet.idPengawasKesmavet', '=', $survey->idPengawas2)
            ->select('orang.NamaLengkap')
            ->first();
        $pengawas3 =  DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('pengawaskesmavet.idPengawasKesmavet', '=', $survey->idPengawas3)
            ->select('orang.NamaLengkap')
            ->first();
        dd($formDetail);

        return view('checklist10.detail', [
            'data' => $formDetail,
            'dokter_pj' => $dokterPJ,
            'list_distribusi' => $penerimaProduksi
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
                'jenisUsaha'=> 'required',
                'wilayahPeredaran'=> 'required',
                'kapasitasGudang'=> 'nullable|numeric',
                'realisasiPenyimpanan'=> 'nullable|numeric',
                'jumlahKaryawan'=> 'nullable|numeric',
            ]);

            if( isset($request['komoditas'])){
                $request['komoditas']= implode( ", ", $request['komoditas'] );
            }
    
            $temp1 = $request->all();
            session()->put('umum', $temp1);
            
            return redirect()->action('Checklists10Controller@survey');
        }

        // GET Request
        $list_uu = UnitUsaha::all();
        return view('checklist10.umum', [
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
                'check_p1_niu' => $request['check_p1_niu'],
                'P1_1'=> $request['P1-1'],
                'check_p1_npwp'=> $request['check_p1_npwp'],
                'P1_2'=> $request['P1-2'],
                'check_p1_siup'=> $request['check_p1_siup'],
                'P1_3'=> $request['P1-3'],
                'check_p1_nib'=> $request['check_p1_nib'],
                'P1_4'=> $request['P1-4'],
                'check_p1_pks'=> $request['check_p1_pks'],
                'P1_5'=> $request['P1-5'],
                'check_p2'=> $request['check_p2'],
                'P2_1'=> $request['P2-1'],
                'P2_2'=> $request['P2-2'],
                'P2_3'=> $request['P2-3'],
                'P2_4'=> $request['P2-4'],
                'check_p3'=> $request['check_p3'],
                'p3_count'=> $request['p3_count'],
                'check_p4'=> $request['check_p4'],
                'P4_1'=> $request['P4-1'],
                'P4_2'=> $request['P4-2'],
                'P4_3'=> $request['P4-3'],
                'P5'=> $request['P5'],
                'P5_ket'=> $request['P5_ket'],
                'P6'=> $request['P6'],
                'P6_1'=> $request['P6-1'],
                'P6_2'=> $request['P6-2'],
                'P7'=> $request['P7'],
                'P7_1'=> $request['P7-1'],
                'P7_2'=> $request['P7-2'],
                'P8'=> $request['P8'],
                'P8_1'=> $request['P8-1'],
                'P8_2'=> $request['P8-2'],
                'P8_3'=> $request['P8-3'],
                'P8_4'=> $request['P8-4'],
                'P9'=> $request['P9'],
                'P9_ket'=> $request['P9_ket'],
                'P10'=> $request['P10'],
                'P10_1'=> $request['P10-1'],
                'P10_2'=> $request['P10-2'],
                'P10_3'=> $request['P10-3'],
                'P10_4'=> $request['P10-4'],
                'P11'=> $request['P11'],
                'P11_1'=> $request['P11-1'],
                'P11_2'=> $request['P11-2'],
                'P11_3'=> $request['P11-3'],
                'P11_4'=> $request['P11-4'],
                'P11_5'=> $request['P11-5'],
                'P12'=> $request['P12'],
                'P12_1'=> $request['P12-1'],
                'P12_2'=> $request['P12-2'],
                'P12_3'=> $request['P12-3'],
                'P12_4'=> $request['P12-4'],
                'P13'=> $request['P13'],
                'P13_ket'=> $request['P13_ket'],
                'P14'=> $request['P14'],
                'P14_1'=> $request['P14-1'],
                'P14_2'=> $request['P14-2'],
                'P14_3'=> $request['P14-3'],
                'P14_4'=> $request['P14-4'],
                'P14_5'=> $request['P14-5'],
                'P15'=> $request['P15'],
                'P15_1'=> $request['P15-1'],
                'P15_2'=> $request['P15-2'],
                'P3_1'=> $request['P3-1'],
                'P3_2'=> $request['P3-2'],
                'P3_3'=> $request['P3-3'],
                'P3_4'=> $request['P3-4'],
                

            ];
            
            
            return redirect()->action('Checklists10Controller@catatan');
        }

        // GET Request
        
        return view('checklist10.survey');
    }

    public function catatan(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            //dd($request);
            $data_catatan = $request->all();
             session()->put('catatan', $data_catatan);
            return redirect()->action('Checklists10ontroller@store');
        }

        // GET Request
        $list_dokter = PengawasKesmavet::with(['user', 'user.orang'])->where('isDokter', '=', 1)->get();
        $list_pengawas = PengawasKesmavet::with(['user', 'user.orang'])->get();
        return view('checklist10.catatan', [
            'list_dokter' => $list_dokter,
            'list_pengawas' => $list_pengawas
        ]);
    }

    public function store(Request $request)
    {
        // Get All Data
        $umum = session('umum');
        $survey = session('survey');
         

        // Insert to Database
        $formff = Form10::create([
                'jenisUnitUsaha'=> $umum['jenisUsaha'],
                'komoditas'=> $umum['komoditas'],
                'kapasitasGudang'=> $umum['kapasitasGudang'],
                'realisasiPenyimpanan'=> $umum['realisasiPenyimpanan'],
                'wilayahPeredaran'=> $umum['wilayahPeredaran'],
                'jumlahKaryawan'=> $umum['jumlahKaryawan'],
                'check_p1_niu' => $survey['check_p1_niu'],
                'P1_1'=> $survey['P1_1'],
                'check_p1_npwp'=> $survey['check_p1_npwp'],
                'P1_2'=> $survey['P1_2'],
                'check_p1_siup'=> $survey['check_p1_siup'],
                'P1_3'=> $survey['P1_3'],
                'check_p1_nib'=> $survey['check_p1_nib'],
                'P1_4'=> $survey['P1_4'],
                'check_p1_pks'=> $survey['check_p1_pks'],
                'P1_5'=> $survey['P1_5'],
                'check_p2'=> $survey['check_p2'],
                'P2_1'=> $survey['P2_1'],
                'P2_2'=> $survey['P2_2'],
                'P2_3'=> $survey['P2_3'],
                'P2_4'=> $survey['P2_4'],
                'check_p3'=> $survey['check_p3'],
                'p3_count'=> $survey['p3_count'],
                'check_p4'=> $survey['check_p4'],
                'P4_1'=> $survey['P4_1'],
                'P4_2'=> $survey['P4_2'],
                'P4_3'=> $survey['P4_3'],
                'P5'=> $survey['P5'],
                'P5_ket'=> $survey['P5_ket'],
                'P6'=> $survey['P6'],
                'P6_1'=> $survey['P6_1'],
                'P6_2'=> $survey['P6_2'],
                'P7'=> $survey['P7'],
                'P7_1'=> $survey['P7_1'],
                'P7_2'=> $survey['P7_2'],
                'P8'=> $survey['P8'],
                'P8_1'=> $survey['P8_1'],
                'P8_2'=> $survey['P8_2'],
                'P8_3'=> $survey['P8_3'],
                'P8_4'=> $survey['P8_4'],
                'P9'=> $survey['P9'],
                'P9_ket'=> $survey['P9_ket'],
                'P10'=> $survey['P10'],
                'P10_1'=> $survey['P10_1'],
                'P10_2'=> $survey['P10_2'],
                'P10_3'=> $survey['P10_3'],
                'P10_4'=> $survey['P10_4'],
                'P11'=> $survey['P11'],
                'P11_1'=> $survey['P11_1'],
                'P11_2'=> $survey['P11_2'],
                'P11_3'=> $survey['P11_3'],
                'P11_4'=> $survey['P11_4'],
                'P11_5'=> $survey['P11_5'],
                'P12'=> $survey['P12'],
                'P12_1'=> $survey['P12_1'],
                'P12_2'=> $survey['P12_2'],
                'P12_3'=> $survey['P12_3'],
                'P12_4'=> $survey['P12_4'],
                'P13'=> $survey['P13'],
                'P13_ket'=> $survey['P13_ket'],
                'P14'=> $survey['P14'],
                'P14_1'=> $survey['P14_1'],
                'P14_2'=> $survey['P14_2'],
                'P14_3'=> $survey['P14_3'],
                'P14_4'=> $survey['P14_4'],
                'P14_5'=> $survey['P14_5'],
                'P15'=> $survey['P15'],
                'P15_1'=> $survey['P15_1'],
                'P15_2'=> $survey['P15_2'],
        ]);


        $surveyform = SurveyUnitUsaha::create([
            'idUnitUsaha'=>$umum['idUnitUsaha'],
            'idForm10'=> $formff->id,
            'catatan'=>$request['catatan'],
            'rekomendasi'=> $request['rekomendasi'],
            'idPengawas' => $request['idPengawas'],
            'idPengawas2' => $request['idPengawas2'],
            'idPengawas3' => $request['idPengawas3'],
            'pjUnitUsaha' => $request['pjUnitUsaha'],
        ]);
        
        if (isset($survey['p3_count'])){
            for($i=0;$i<$survey['p3_count'];$i++){
                SuplierProduk::create([
                'namaSuplier'=>$survey['P3_1'][$i],
                'negara'=>$survey['P3_2'][$i],
                'tanggal'=>$survey['P3_3'][$i],
                'jumlah'=>$survey['P3_4'][$i],
                'surveyUnitUsaha_idsurveyUnitusaha'=>$formff->id,
              ]);
            }
        };

        //Form Complete Redirect
        Alert::success('Ceklis Berhasil Disimpan');
        return redirect()->route('pengajuan.show');
    }
}
