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
    // Must Login
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // Show Detail Data Ceklis 1
    public function detail($id)
    {
        $survey = SurveyUnitUsaha::with(['unitUsaha', 'form1'])->where('id', $id)->firstOrFail();
        $pengawas = [
            '1' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas)->first(),
            '2' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas2)->first(),
            '3' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas3)->first()
        ];
        
        return view('checklist1.detail', [
            'data' => $survey,
            'pengawas' => $pengawas,
        ]);
    }
    
    // Open Tab Informasi Umum in Ceklis 1
    public function umum(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            // Validate and Parsing Data
            request()->validate([
                'idUnitUsaha' => 'required',
                'kapasitasPemeliharaan'=> 'nullable|numeric',
                'populasiTernak'=> 'nullable|numeric',
                'totalProduksiSusu'=> 'nullable|numeric',
                'jumlahKaryawan'=> 'nullable|numeric',
            ]);
            if (isset($request['wilayahPeredaran'])) {
                $request['wilayahPeredaran'] = implode(', ', $request['wilayahPeredaran']);
            }

            // Save Data in Session
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

    // Open Tab Survey in Ceklis 1
    public function survey(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            // Upload File and Parsing Data
            $data_survey = $request->all();
            if ($request->hasFile('P2')) {
                $path = Storage::putFile('files', $request->file('P2'));
                $data_survey['P2'] = $path;
            } else {
                $data_survey['P2'] = $request['P2'];
            }
            
            // Save Data in Session
            session()->put('survey', $data_survey);
            return redirect()->action('Checklists1Controller@catatan');
        }

        // GET Request
        return view('checklist1.survey');
    }

    // Open Tab Catatan in Ceklis 1
    public function catatan(Request $request)
    {   
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            // Save Data in Session
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

    // Save Ceklis Data
    public function store(Request $request)
    {
        // Get All Data
        $umum = session('umum');
        $survey = session('survey');
        $catatan = session('catatan');

        // Insert to Database
        $input_ceklis = Form1::create([
            'jenisUnitUsaha' => $umum['jenisUnitUsaha'],
            'kapasitasPemeliharaan' => $umum['kapasitasPemeliharaan'],
            'populasiTernak' => $umum['populasiTernak'],
            'kategoriUsaha' => $umum['kategoriUsaha'],
            'totalProduksiSusu' => $umum['totalProduksiSusu'],
            'wilayahPeredaran' => $umum['wilayahPeredaran'],
            'jumlahKaryawan' => $umum['jumlahKaryawan'],
            'check_p1_1' => $survey['check_p1_1'] ?: '0',
            'P1_1' => $survey['P1_1'],
            'check_p1_2' => $survey['check_p1_2'] ?: '0',
            'P1_2' => $survey['P1_2'],
            'check_p1_3' => $survey['check_p1_3'] ?: '0',
            'P1_3' => $survey['P1_3'],
            'check_p1_4' => $survey['check_p1_4'] ?: '0',
            'P1_4' => $survey['P1_4'],
            'check_p1_5' => $survey['check_p1_5'] ?: '0',
            'P1_5' => $survey['P1_5'],
            'check_p2' => $survey['check_p2'] ?: '0',
            'P2' => $survey['P2'],
            'check_p3' => $survey['check_p3'] ?: '0',
            'P3' => $survey['P3'],
            'check_p4' => $survey['check_p4'] ?: '0',
            'P4' => $survey['P4'],
            'check_p5' => $survey['check_p5'] ?: '0',
            'P5_1' => $survey['P5_1'],
            'P5_2' => $survey['P5_2'],
            'P5_3' => $survey['P5_3'],
            'P5_4' => $survey['P5_4'],
            'P5_5' => $survey['P5_5'],
            'check_p6' => $survey['check_p6'] ?: '0',
            'P6' => $survey['P6'],
            'check_p7' => $survey['check_p7'] ?: '0',
            'P7' => $survey['P7'],
            'check_p8' => $survey['check_p8'] ?: '0',
            'P8' => $survey['P8'],
            'check_p9' => $survey['check_p9'] ?: '0',
            'P9' => $survey['P9'],
            'check_p10' => $survey['check_p10'] ?: '0',
            'P10' => $survey['P10'],
            'check_p11' => $survey['check_p11'] ?: '0',
            'P11' => $survey['P11'],
            'check_p12' => $survey['check_p12'] ?: '0',
            'P12' => $survey['P12'],
            'check_p13' => $survey['check_p13'] ?: '0',
            'P13' => $survey['P13'],
            'check_p14' => $survey['check_p14'] ?: '0',
            'P14' => $survey['P14'],
            'check_p15' => $survey['check_p15'] ?: '0',
            'P15' => $survey['P15'],
            'check_p16' => $survey['check_p16'] ?: '0',
            'P16' => $survey['P16'],
            'check_p17' => $survey['check_p17'] ?: '0',
            'P17' => $survey['P17'],
            'check_p18' => $survey['check_p18'] ?: '0',
            'P18' => $survey['P18'],
            'check_p19' => $survey['check_p19'] ?: '0',
            'P19' => $survey['P19'],
        ]);
        $input_survey = SurveyUnitUsaha::create([
            'idUnitUsaha' => $umum['idUnitUsaha'],
            'idForm1' => $input_ceklis->id,
            'catatan' => $catatan['catatan'],
            'rekomendasi' => $catatan['rekomendasi'],
            'idPengawas' => $catatan['idPengawas'],
            'idPengawas2' => $catatan['idPengawas2'],
            'idPengawas3' => $catatan['idPengawas3'],
            'pjUnitUsaha' => $catatan['pjUnitUsaha'],
        ]);
        
        // Redirect to Pengawasan Index
        Alert::success('Ceklis Berhasil Disimpan');
        return redirect()->route('pengawasan.show');
    }

    // Update Ceklis Data
    public function update(Request $request,$id){
        Alert::error('Fungsi Update Belum Diimplementasi');
        return redirect()->route('pengawasan.show');
    }
}
