<?php

namespace App\Http\Controllers;

use Alert;

use App\UnitUsaha;
use App\PengawasKesmavet;
use App\SurveyUnitUsaha;
use App\Form1;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Checklists1Controller extends Controller
{
    public function umum(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            $data_umum = $request->all();
            session()->put('umum', $data_umum);
            return redirect()->action('Checklists1Controller@survey');
        }

        // GET Request
        $list_uu = UnitUsaha::all();
        return view('checklist1.umum', [
            'list_uu' => $list_uu
        ]);
    }

    public function survey(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            $data_survey = $request->all();
            if ($request->hasFile('P2')) {
                $path = Storage::putFile('files', $request->file('P2'));
                $data_survey['P2'] = $path;
            } else {
                $data_survey['P2'] = '';
            }
            session()->put('survey', $data_survey);
            return redirect()->action('Checklists1Controller@catatan');
        }

        // GET Request
        return view('checklist1.survey');
    }

    public function catatan(Request $request)
    {   
        
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            $data_catatan = $request->all();
            session()->put('catatan', $data_catatan);
            return redirect()->action('Checklists1Controller@store');
        }

        // GET Request
        $list_dokter = PengawasKesmavet::with(['user', 'user.orang'])->where('isDokter', '=', 1)->get();
        $list_pengawas = PengawasKesmavet::with(['user', 'user.orang'])->get();
        return view('checklist1.catatan', [
            'list_dokter' => $list_dokter,
            'list_pengawas' => $list_pengawas
        ]);
    }

    public function store(Request $request)
    {
        // Get All Data
        $umum = session('umum');
        $survey = session('survey');
        $catatan = session('catatan');



        //chek if exisit
        //catatan
        if (array_key_exists('catatan', $umum)) { 
           
        } 
        else{ 
            $catatan['catatan'] = null;
        } 

        if (array_key_exists('rekomendasi', $umum)) { 
           
        } 
        else{ 
            $catatan['rekomendasi'] = null;
        } 

        if (array_key_exists('pjUnitUsaha', $umum)) { 
           
        } 
        else{ 
            $catatan['pjUnitUsaha'] = null;
        } 

        //survey
        if (array_key_exists('P1-1', $survey)) { } 
        else{ 
            $survey['P1-1'] = null;
        } 

        if (array_key_exists('P1-2', $survey)) { } 
        else{ 
            $survey['P1-2'] = null;
        } 

        if (array_key_exists('P1-3', $survey)) { } 
        else{ 
            $survey['P1-3'] = null;
        } 

        if (array_key_exists('P1-4', $survey)) { } 
        else{ 
            $survey['P1-4'] = null;
        } 

        if (array_key_exists('P2', $survey)) { } 
        else{ 
            $survey['P2'] = null;
        } 

        if (array_key_exists('P3', $survey)) { } 
        else{ 
            $survey['P3'] = null;
        } 

        if (array_key_exists('P3_ket', $survey)) { } 
        else{ 
            $survey['P3_ket'] = null;
        } 

        if (array_key_exists('P4', $survey)) { } 
        else{ 
            $survey['P4'] = null;
        } 

        if (array_key_exists('P4_ket', $survey)) { } 
        else{ 
            $survey['P4_ket'] = null;
        } 

        if (array_key_exists('P5', $survey)) { } 
        else{ 
            $survey['P5'] = null;
        } 

        if (array_key_exists('P5_ket', $survey)) { } 
        else{ 
            $survey['P5_ket'] = null;
        } 

        if (array_key_exists('P6', $survey)) { } 
        else{ 
            $survey['P6'] = null;
        } 

        if (array_key_exists('P6_ket', $survey)) { } 
        else{ 
            $survey['P6_ket'] = null;
        } 

        if (array_key_exists('P7', $survey)) { } 
        else{ 
            $survey['P7'] = null;
        } 

        if (array_key_exists('P7_ket', $survey)) { } 
        else{ 
            $survey['P7_ket'] = null;
        } 

        if (array_key_exists('P8', $survey)) { } 
        else{ 
            $survey['P8'] = null;
        } 

        if (array_key_exists('P8_ket', $survey)) { } 
        else{ 
            $survey['P8_ket'] = null;
        } 

        if (array_key_exists('P9', $survey)) { } 
        else{ 
            $survey['P9'] = null;
        } 

        if (array_key_exists('P9_ket', $survey)) { } 
        else{ 
            $survey['P9_ket'] = null;
        } 

        if (array_key_exists('P10', $survey)) { } 
        else{ 
            $survey['P10'] = null;
        } 

        if (array_key_exists('P10_ket', $survey)) { } 
        else{ 
            $survey['P10_ket'] = null;
        } 

        if (array_key_exists('P11', $survey)) { } 
        else{ 
            $survey['P11'] = null;
        } 

        if (array_key_exists('P11_ket', $survey)) { } 
        else{ 
            $survey['P11_ket'] = null;
        } 

        if (array_key_exists('P12', $survey)) { } 
        else{ 
            $survey['P12'] = null;
        } 

        if (array_key_exists('P12_ket', $survey)) { } 
        else{ 
            $survey['P12_ket'] = null;
        } 

        if (array_key_exists('P13', $survey)) { } 
        else{ 
            $survey['P13'] = null;
        } 

        if (array_key_exists('P13_ket', $survey)) { } 
        else{ 
            $survey['P13_ket'] = null;
        } 

        if (array_key_exists('P14', $survey)) { } 
        else{ 
            $survey['P14'] = null;
        } 

        if (array_key_exists('P14_ket', $survey)) { } 
        else{ 
            $survey['P14_ket'] = null;
        } 

        if (array_key_exists('P15', $survey)) { } 
        else{ 
            $survey['P15'] = null;
        } 

        if (array_key_exists('P15_ket', $survey)) { } 
        else{ 
            $survey['P15_ket'] = null;
        } 

        if (array_key_exists('P16', $survey)) { } 
        else{ 
            $survey['P16'] = null;
        } 

        if (array_key_exists('P16_ket', $survey)) { } 
        else{ 
            $survey['P16_ket'] = null;
        } 

        if (array_key_exists('P17', $survey)) { } 
        else{ 
            $survey['P17'] = null;
        } 

        if (array_key_exists('P17_ket', $survey)) { } 
        else{ 
            $survey['P17_ket'] = null;
        } 

        if (array_key_exists('P18', $survey)) { } 
        else{ 
            $survey['P18'] = null;
        } 

        if (array_key_exists('P18_ket', $survey)) { } 
        else{ 
            $survey['P18_ket'] = null;
        } 

        if (array_key_exists('P19', $survey)) { } 
        else{ 
            $survey['P19'] = null;
        } 

        if (array_key_exists('P19_ket', $survey)) { } 
        else{ 
            $survey['P19_ket'] = null;
        } 

        // Insert to Database
        $form = Form1::create([
            'kapasitasPemeliharaan' => $umum['kapasitasPemeliharaan'],
            'populasiTernak' => $umum['populasiTernak'],
            'kategoriUsaha' => $umum['kategoriUsaha'],
            'totalProduksiSusu' => $umum['totalProduksiSusu'],
            'wilayahPeredaran' => $umum['wilayahPeredaran'],
            'jumlahKaryawan' => $umum['jumlahKaryawan'],
            'P1_1' => $survey['P1-1'],
            'P1_2' => $survey['P1-2'],
            'P1_3' => $survey['P1-3'],
            'P1_4' => $survey['P1-4'],
            'P2' => $survey['P2'],
            'P3' => $survey['P3'],
            'P3_ket' => $survey['P3_ket'],
            'P4' => $survey['P4'],
            'P4_ket' => $survey['P4_ket'],
            'P5_1' => $survey['P5-1'],
            'P5_2' => $survey['P5-2'],
            'P5_3' => $survey['P5-3'],
            'P6' => $survey['P6'],
            'P6_ket' => $survey['P6_ket'],
            'P7' => $survey['P7'],
            'P7_ket' => $survey['P7_ket'],
            'P8' => $survey['P8'],
            'P8_ket' => $survey['P8_ket'],
            'P9' => $survey['P9'],
            'P9_ket' => $survey['P9_ket'],
            'P10' => $survey['P10'],
            'P10_ket' => $survey['P10_ket'],
            'P11' => $survey['P11'],
            'P11_ket' => $survey['P11_ket'],
            'P12' => $survey['P12'],
            'P12_ket' => $survey['P12_ket'],
            'P13' => $survey['P13'],
            'P13_ket' => $survey['P13_ket'],
            'P14' => $survey['P14'],
            'P14_ket' => $survey['P14_ket'],
            'P15' => $survey['P15'],
            'P15_ket' => $survey['P15_ket'],
            'P16' => $survey['P16'],
            'P16_ket' => $survey['P16_ket'],
            'P17' => $survey['P17'],
            'P17_ket' => $survey['P17_ket'],
            'P18' => $survey['P18'],
            'P18_ket' => $survey['P18_ket'],
            'P19' => $survey['P19'],
            'P19_ket' => $survey['P19_ket'],
        ]);
        $survey = SurveyUnitUsaha::create([
            'idUnitUsaha' => $umum['idUnitUsaha'],
            'idForm1' => $form->id,
            'catatan' => $catatan['catatan'],
            'rekomendasi' => $catatan['rekomendasi'],
            'idPengawas' => $catatan['idPengawas'],
            'idPengawas2' => $catatan['idPengawas2'],
            'idPengawas3' => $catatan['idPengawas3'],
            'pjUnitUsaha' => $catatan['pjUnitUsaha'],
        ]);
        
        // Form Complete Redirect
        Alert::success('Ceklis Berhasil Disimpan');
        return redirect()->route('pengajuan.show');
    }

    public function update(Request $request,$id){
        $survey = SurveyUnitUsaha::find($id);
        $form = Form1::where('id', $survey->idForm1)->first();

        if ($request->isMethod('post')) {
            
            $this->validate($request,[
                'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',

            ]);
            
            $path = '';    
                if($request->hasFile('file')){
                
                    $name = Storage::disk('local')->put('files', $request->file);
                    $path = $name;     
                }
        }

        //update tabel survey
            $survey->NamaUnitUsaha = $request['NamaUnitUsaha'];
            $survey->idUnitUsaha =  $request['idUnitUsaha']; 
            $survey->idPengawas =  $request['idPengawas']; 
            $survey->idPengawas2 =  $request['idPengawas2']; 
            $survey->idPengawas3 =  $request['idPengawas3']; 
            $survey->catatan =  $request['catatan']; 
            $survey->rekomendasi =  $request['rekomendasi']; 
        
        //update tabel form 1
        $form->kapasitasPemeliharaan= $request['NamaUnitUsaha'];
        $form->populasiTernak= $request['populasiTernak'];
        $form->kategoriUsaha= $request['kategoriUsaha'];
        $form->totalProduksiSusu= $request['totalProduksiSusu'];
        $form->wilayahPeredaran= $request['wilayahPeredaran'];
        $form->jumlahKaryawan= $request['jumlahKaryawan'];
        $form->P1_1 = $request['P1_1'];
        $form->P1_2 = $request['P1_2'];
        $form->P1_3 = $request['P1_3'];
        $form->P1_4 = $request['P1_4'];
        $form->P2 = $path;
        $form->P3 = $request['P3'];
        $form->P3_ket = $request['P3_ket'];
        $form->P4 = $request['P4'];
        $form->P4_ket = $request['P4_ket'];
        $form->P5_1 = $request['P5_1'];
        $form->P5_2 = $request['P5_2'];
        $form->P5_3 = $request['P5_3'];
        $form->P6 = $request['P6'];
        $form->P6_ket = $request['P6_ket'];
        $form->P7 = $request['P7'];
        $form->P7_ket = $request['P7_ket'];
        $form->P8 = $request['P8'];
        $form->P8_ket = $request['P8_ket'];
        $form->P9 = $request['P9'];
        $form->P9_ket = $request['P9_ket'];
        $form->P10 = $request['P10'];
        $form->P10_ket = $request['P10_ket'];
        $form->P11 = $request['P11'];
        $form->P11_ket = $request['P11_ket'];
        $form->P12 = $request['P12'];
        $form->P12_ket = $request['P12_ket'];
        $form->P13 = $request['P13'];
        $form->P13_ket = $request['P13_ket'];
        $form->P14 = $request['P14'];
        $form->P14_ket = $request['P14_ket'];
        $form->P15 = $request['P15'];
        $form->P15_ket = $request['P15_ket'];
        $form->P16 = $request['P16'];
        $form->P16_ket = $request['P16_ket'];
        $form->P17 = $request['P17'];
        $form->P17_ket = $request['P17_ket'];
        $form->P18 = $request['P18'];
        $form->P18_ket = $request['P18_ket'];
        $form->P19 = $request['P19'];
        $form->P19_ket = $request['P19_ket'];

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
