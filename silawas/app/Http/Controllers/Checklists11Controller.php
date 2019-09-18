<?php

namespace App\Http\Controllers;

use Alert;

use App\UnitUsaha;
use App\PengawasKesmavet;
use App\SurveyUnitUsaha;
use App\Form11;
use App\SuplierProduk;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Checklists11Controller extends Controller
{
    public function detail($id)
    {
        $survey = SurveyUnitUsaha::findorFail($id);
        $surveyID = $survey->id;

        $formDetail = DB::table('surveyunitusaha')
            ->join('form11','surveyunitusaha.idForm11', '=', 'form11.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form11.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->first();
        $supliers = DB::table('surveyunitusaha')
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

        return view('checklist11.detail', [
            'data' => $formDetail,
            'surveyID' => $surveyID,
            'supliers' => $supliers,
            'pengawas1' => $pengawas1,
            'pengawas2' => $pengawas2,
            'pengawas3' => $pengawas3,
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
                'wilayahPeredaran'=> 'required',
                'kapasitasGudang'=> 'nullable|numeric',
                'realisasiPenyimpanan'=> 'nullable|numeric',
                'jumlahKaryawan'=> 'nullable|numeric',
            ]);

            if( isset($request['komoditas'])){
                $request['komoditas']= implode( ", ", $request['komoditas'] );
            }
            if( isset($request['komoditas_lainnya'])){
                $request['komoditas'] = str_replace("Lainnya", $request['komoditas_lainnya'], $request['komoditas']);
            }
            if( isset($request['wilayahPeredaran'])){
                $request['wilayahPeredaran']= implode( ", ", $request['wilayahPeredaran'] );
            }
            $temp = $request->all();
            session()->put('umum', $temp);
            
            return redirect()->action('Checklists11Controller@survey');
        }

        // GET Request
        $list_uu = UnitUsaha::all();
        return view('checklist11.umum', [
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
                'P1_1'=> $request['P1_1'],
                'check_p1_npwp'=> $request['check_p1_npwp'],
                'P1_2'=> $request['P1_2'],
                'check_p1_siup'=> $request['check_p1_siup'],
                'P1_3'=> $request['P1_3'],
                'check_p1_nib'=> $request['check_p1_nib'],
                'P1_4'=> $request['P1_4'],
                'check_p1_pks'=> $request['check_p1_pks'],
                'P1_5'=> $request['P1_5'],
                'check_p2'=> $request['check_p2'],
                'P2_1'=> $request['P2_1'],
                'P2_2'=> $request['P2_2'],
                'P2_3'=> $request['P2_3'],
                'P2_4'=> $request['P2_4'],
                'check_p3'=> $request['check_p3'],
                'p3_count'=> $request['p3_count'],
                'check_p4'=> $request['check_p4'],
                'P4'=> $request['P4'],
                'check_p5'=> $request['check_p5'],
                'P5_1'=> $request['P5_1'],
                'P5_2'=> $request['P5_2'],
                'check_p6'=> $request['check_p6'],
                'P6'=> $request['P6'],
                'check_p7'=> $request['check_p7'],
                'P7_1'=> $request['P7_1'],
                'P7_2'=> $request['P7_2'],
                'P7_3'=> $request['P7_3'],
                'P7_4'=> $request['P7_4'],
                'check_p8'=> $request['check_p8'],
                'P8'=> $request['P8'],
                'check_p9'=> $request['check_p9'],
                'P9_1'=> $request['P9_1'],
                'P9_2'=> $request['P9_2'],
                'P9_3'=> $request['P9_3'],
                'P9_4'=> $request['P9_4'],
                'check_p10'=> $request['check_p10'],
                'P10_1'=> $request['P10_1'],
                'P10_2'=> $request['P10_2'],
                'P10_3'=> $request['P10_3'],
                'P10_4'=> $request['P10_4'],
                'P10_5'=> $request['P10_5'],
                'check_p11'=> $request['check_p11'],
                'P11_1'=> $request['P11_1'],
                'P11_2'=> $request['P11_2'],
                'P11_3'=> $request['P11_3'],
                'P11_4'=> $request['P11_4'],
                'check_p12'=> $request['check_p12'],
                'P12'=> $request['P12'],
                'check_p13'=> $request['check_p13'],
                'P13_1'=> $request['P13_1'],
                'P13_2'=> $request['P13_2'],
                'P13_3'=> $request['P13_3'],
                'P13_4'=> $request['P13_4'],
                'P13_5'=> $request['P13_5'],
                'check_p14'=> $request['check_p14'],
                'P14_1'=> $request['P14_1'],
                'P14_2'=> $request['P14_2'],
                'P3_1'=> $request['P3_1'],
                'P3_2'=> $request['P3_2'],
                'P3_3'=> $request['P3_3'],
                'P3_4'=> $request['P3_4'],
                'P3_5'=> $request['P3_5'],
            ];
            session()->put('survey', $data_survey);
            return redirect()->action('Checklists11Controller@catatan');
        }

        // GET Request
        return view('checklist11.survey');
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
            return redirect()->action('Checklists11ontroller@store');
        }

        // GET Request
        $list_dokter = PengawasKesmavet::with(['user', 'user.orang'])->where('isDokter', '=', 1)->get();
        $list_pengawas = PengawasKesmavet::with(['user', 'user.orang'])->get();
        return view('checklist11.catatan', [
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
        $formff = Form11::create([
                'komoditas'=> $umum['komoditas'],
                'kapasitasGudang'=> $umum['kapasitasGudang'],
                'realisasiPenyimpanan'=> $umum['realisasiPenyimpanan'],
                'wilayahPeredaran'=> $umum['wilayahPeredaran'],
                'jumlahKaryawan'=> $umum['jumlahKaryawan'],
                'check_p1_niu'=> $survey['check_p1_niu'],
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
                'P4'=> $survey['P4'],
                'check_p5'=> $survey['check_p5'],
                'P5_1'=> $survey['P5_1'],
                'P5_2'=> $survey['P5_2'],
                'check_p6'=> $survey['check_p6'],
                'P6'=> $survey['P6'],
                'check_p7'=> $survey['check_p7'],
                'P7_1'=> $survey['P7_1'],
                'P7_2'=> $survey['P7_2'],
                'P7_3'=> $survey['P7_3'],
                'P7_4'=> $survey['P7_4'],
                'check_p8'=> $survey['check_p8'],
                'P8'=> $survey['P8'],
                'check_p9'=> $survey['check_p9'],
                'P9_1'=> $survey['P9_1'],
                'P9_2'=> $survey['P9_2'],
                'P9_3'=> $survey['P9_3'],
                'P9_4'=> $survey['P9_4'],
                'check_p10'=> $survey['check_p10'],
                'P10_1'=> $survey['P10_1'],
                'P10_2'=> $survey['P10_2'],
                'P10_3'=> $survey['P10_3'],
                'P10_4'=> $survey['P10_4'],
                'P10_5'=> $survey['P10_5'],
                'check_p11'=> $survey['check_p11'],
                'P11_1'=> $survey['P11_1'],
                'P11_2'=> $survey['P11_2'],
                'P11_3'=> $survey['P11_3'],
                'P11_4'=> $survey['P11_4'],
                'check_p12'=> $survey['check_p12'],
                'P12'=> $survey['P12'],
                'check_p13'=> $survey['check_p13'],
                'P13_1'=> $survey['P13_1'],
                'P13_2'=> $survey['P13_2'],
                'P13_3'=> $survey['P13_3'],
                'P13_4'=> $survey['P13_4'],
                'P13_5'=> $survey['P13_5'],
                'check_p14'=> $survey['check_p14'],
                'P14_1'=> $survey['P14_1'],
                'P14_2'=> $survey['P14_2'],
                
        ]);


        $surveyform = SurveyUnitUsaha::create([
            'idUnitUsaha'=>$umum['idUnitUsaha'],
            'idForm11'=> $formff->id,
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
                'jenis'=>$survey['P3_5'][$i],
                'surveyUnitUsaha_idsurveyUnitusaha'=>$surveyform->id,
              ]);
            }
        };

        //Form Complete Redirect
        Alert::success('Ceklis Berhasil Disimpan');
        return redirect()->route('pengawasan.show');
    }

    public function update(Request $request,$id){
        $survey = SurveyUnitUsaha::find($id);
        $form = Form11::where('id', $survey->idForm11)->first();

        //update tabel survey
        $survey->NamaUnitUsaha =  $request['idUnitUsaha']; 
        $survey->idUnitUsaha =  $request['idUnitUsaha']; 
        $survey->idPengawas =  $request['idPengawas']; 
        $survey->idPengawas2 =  $request['idPengawas2']; 
        $survey->idPengawas3 =  $request['idPengawas3']; 
        $survey->catatan =  $request['catatan']; 
        $survey->rekomendasi =  $request['rekomendasi']; 

        //update tabel form
        $form->jenisUnitUsaha =  $request['jenisUnitUsaha']; 
        $form->komoditas =  $request['komoditas']; 
        $form->kapasitasGudang =  $request['kapasitasGudang']; 
        $form->realisasiPenyimpanan =  $request['realisasiPenyimpanan']; 
        $form->wilayahPeredaran =  $request['wilayahPeredaran']; 
        $form->jumlahKaryawan =  $request['jumlahKaryawan']; 
        $form->check_p1_niu = $request['check_p1_niu'];
        $form->P1_1 = $request['P1_1'];
        $form->check_p1_npwp =$request['check_p1_npwp'];
        $form->P1_2 = $request['P1_2'];
        $form->check_p1_siup = $request['check_p1_siup'];
        $form->P1_3 = $request['P1_3'];
        $form->check_p1_nib = $request['check_p1_nib'];
        $form->P1_4 = $request['P1_4'];
        $form->check_p1_pks = $request['check_p1_pks'];
        $form->P1_5 = $request['P1_5'];
        $form->check_p2 = $request['check_p2'];
        $form->P2_1 = $request['P2_1'];
        $form->P2_2 = $request['P2_2'];
        $form->P2_3 = $request['P2_3'];
        $form->P2_4 =$request['P2_4'];
        $form->check_p3 = $request['check_p3'];
        $form->p3_count =$request['p3_count'];
        $form->check_p4 = $request['check_p4'];
        $form->P4_1 =$request['P4_1'];
        $form->P4_2 =$request['P4_2'];
        $form->check_p5 = $request['check_p5'];
        $form->P5_1 = $request['P5_1'];
        $form->P5_2 = $request['P5_2'];
        $form->check_p6 = $request['check_p6'];
        $form->P6 =$request['P6'];
        $form->check_p7 = $request['check_p7'];
        $form->P7_1 = $request['P7_1'];
        $form->P7_2 = $request['P7_2'];
        $form->P7_3 = $request['P7_3'];
        $form->P7_4 = $request['P7_4'];
        $form->check_p8 = $request['check_p8'];
        $form->P8 =$request['P8'];
        $form->check_p9 = $request['check_p9'];
        $form->P9_1 = $request['P9_1'];
        $form->P9_2 = $request['P9_2'];
        $form->P9_3 =$request['P9_3'];
        $form->P9_4 =$request['P9_4'];
        $form->check_p10 =$request['check_p10'];
        $form->P10_1 = $request['P10_1'];
        $form->P10_2 = $request['P10_2'];
        $form->P10_3 = $request['P10_3'];
        $form->P10_4 =$request['P10_4'];
        $form->P10_5 =$request['P10_5'];
        $form->check_p11 =$request['check_p11'];
        $form->P11_1 =$request['P11_1'];
        $form->P11_2 =$request['P11_2'];
        $form->P11_3 =$request['P11_3'];
        $form->P11_4 =$request['P11_4'];
        $form->check_p12 = $request['check_p12'];
        $form->P12 =$request['P12'];
        $form->check_p13 =$request['check_p13'];
        $form->P13_1 =$request['P13_1'];
        $form->P13_2 =$request['P13_2'];
        $form->P13_3 =$request['P13_3'];
        $form->P13_4 =$request['P13_4'];
        $form->P13_5 =$request['P13_5'];
        $form->check_p14 = $request['check_p14'];
        $form->P14_1 =$request['P14_1'];
        $form->P14_2 =$request['P14_2'];

         //simpan model ke db
         $form->save();
         $survey->save();
         if($form && $survey){
             Alert::success('Data Berhasil Diubah');
         }
         else Alert::success('Data gagal Diubah');
         return Redirect::to('/unit-usaha');
     


    }
}
