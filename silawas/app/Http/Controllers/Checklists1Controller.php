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
            'P1-1' => $survey['P1-1'],
            'P1-2' => $survey['P1-2'],
            'P1-3' => $survey['P1-3'],
            'P1-4' => $survey['P1-4'],
            'P2' => $survey['P2'],
            'P3' => $survey['P3'],
            'P3_ket' => $survey['P3_ket'],
            'P4' => $survey['P4'],
            'P4_ket' => $survey['P4_ket'],
            'P5-1' => $survey['P5-1'],
            'P5-2' => $survey['P5-2'],
            'P5-3' => $survey['P5-3'],
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

    public function deleteForm1 ($id){
        $survey = SurveyUnitUsaha::where('id', $id)->delete();
        

        $survey = SurveyUnitUsaha::where('id', $id)->get();
        $form = 
    }
}
