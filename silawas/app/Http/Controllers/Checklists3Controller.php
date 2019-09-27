<?php

namespace App\Http\Controllers;

use Alert;

use App\UnitUsaha;
use App\PengawasKesmavet;
use App\SurveyUnitUsaha;
use App\Form3;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Checklists3Controller extends Controller
{
    // Must Login
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // Show Detail Data Ceklis 3
    public function detail($id)
    {
        $survey = SurveyUnitUsaha::with(['unitUsaha', 'form3'])->where('id', $id)->firstOrFail();
        $pengawas = [
            '1' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas)->first(),
            '2' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas2)->first(),
            '3' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas3)->first()
        ];
        
        return view('checklist3.detail', [
            'data' => $survey,
            'pengawas' => $pengawas,
        ]);
    }
    
    // Open Tab Informasi Umum in Ceklis 3
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
                'jumlahPopulasi'=> 'nullable|numeric',
                'produksiTelurPerHari'=> 'nullable|numeric',
                'produksiTelurPerBulan'=> 'nullable|numeric',
                'kapasitasGudangTelur'=> 'nullable|numeric',
                'realisasiPemanfaatan'=> 'nullable|numeric',
                'jumlahSDM'=> 'nullable|numeric',
            ]);
            if (isset($request['wilayahPeredaran'])) {
                $request['wilayahPeredaran'] = implode(', ', $request['wilayahPeredaran']);
            } else {
                $request['wilayahPeredaran'] = '';
            }

            // Save Data in Session
            $data_umum = $request->all();
            session()->put('umum', $data_umum);
            return redirect()->action('Checklists3Controller@survey');
        }

        // GET Request
        $list_uu = UnitUsaha::all();
        return view('checklist3.umum', [
            'list_uu' => $list_uu
        ]);
    }

    // Open Tab Survey in Ceklis 3
    public function survey(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            // Parsing Data
            $data_survey = $request->all();
            if (!isset($data_survey['check_p1_1'])) $data_survey['check_p1_1'] = '0';
            if (!isset($data_survey['check_p1_2'])) $data_survey['check_p1_2'] = '0';
            if (!isset($data_survey['check_p1_3'])) $data_survey['check_p1_3'] = '0';
            if (!isset($data_survey['check_p1_4'])) $data_survey['check_p1_4'] = '0';
            if (!isset($data_survey['check_p1_5'])) $data_survey['check_p1_5'] = '0';
            if (!isset($data_survey['check_p2'])) $data_survey['check_p2'] = '0';
            if (!isset($data_survey['check_p3'])) $data_survey['check_p3'] = '0';
            if (!isset($data_survey['check_p4'])) $data_survey['check_p4'] = '0';
            if (!isset($data_survey['check_p5'])) $data_survey['check_p5'] = '0';
            if (!isset($data_survey['check_p6'])) $data_survey['check_p6'] = '0';
            if (!isset($data_survey['check_p7'])) $data_survey['check_p7'] = '0';
            if (!isset($data_survey['check_p8'])) $data_survey['check_p8'] = '0';
            if (!isset($data_survey['check_p9'])) $data_survey['check_p9'] = '0';
            if (!isset($data_survey['check_p10'])) $data_survey['check_p10'] = '0';
            if (!isset($data_survey['check_p11'])) $data_survey['check_p11'] = '0';
            if (!isset($data_survey['check_p12'])) $data_survey['check_p12'] = '0';
            if (!isset($data_survey['check_p13'])) $data_survey['check_p13'] = '0';
            if (!isset($data_survey['check_p14'])) $data_survey['check_p14'] = '0';
            if (!isset($data_survey['check_p15'])) $data_survey['check_p15'] = '0';
            if (!isset($data_survey['check_p16'])) $data_survey['check_p16'] = '0';
            if (!isset($data_survey['check_p17'])) $data_survey['check_p17'] = '0';
            if (!isset($data_survey['check_p18'])) $data_survey['check_p18'] = '0';
            if (!isset($data_survey['check_p19'])) $data_survey['check_p19'] = '0';
            if (!isset($data_survey['check_p20'])) $data_survey['check_p20'] = '0';
            if (!isset($data_survey['check_p21'])) $data_survey['check_p21'] = '0';
            if (!isset($data_survey['check_p22'])) $data_survey['check_p22'] = '0';
            
            // Save Data in Session
            session()->put('survey', $data_survey);
            return redirect()->action('Checklists3Controller@catatan');
        }

        // GET Request
        return view('checklist3.survey');
    }

    // Open Tab Catatan in Ceklis 3
    public function catatan(Request $request)
    {   
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            // Validate and Parsing Data
            request()->validate([
                'idPengawas' => 'required',
            ]);
            
            // Save Data in Session
            $data_catatan = $request->all();
            session()->put('catatan', $data_catatan);
            return redirect()->action('Checklists3Controller@store');
        }

        // GET Request
        $list_dokter = PengawasKesmavet::with(['user', 'user.orang'])->where('isDokter', '=', 1)->get();
        $list_pengawas = PengawasKesmavet::with(['user', 'user.orang'])->get();
        return view('checklist3.catatan', [
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
        $input_ceklis = Form3::create([
            'kapasitasPemeliharaan' => $umum['kapasitasPemeliharaan'],
            'jumlahPopulasi' => $umum['jumlahPopulasi'],
            'produksiTelurPerHari' => $umum['produksiTelurPerHari'],
            'produksiTelurPerBulan' => $umum['produksiTelurPerBulan'],
            'kategoriUsaha' => $umum['kategoriUsaha'],
            'kapasitasGudangTelur' => $umum['kapasitasGudangTelur'],
            'realisasiPemanfaatan' => $umum['realisasiPemanfaatan'],
            'wilayahPeredaran' => $umum['wilayahPeredaran'],
            'jumlahSDM' => $umum['jumlahSDM'],
            'check_p1_1' => $survey['check_p1_1'],
            'P1_1' => $survey['P1_1'],
            'check_p1_2' => $survey['check_p1_2'],
            'P1_2' => $survey['P1_2'],
            'check_p1_3' => $survey['check_p1_3'],
            'P1_3' => $survey['P1_3'],
            'check_p1_4' => $survey['check_p1_4'],
            'P1_4' => $survey['P1_4'],
            'check_p1_5' => $survey['check_p1_5'],
            'P1_5' => $survey['P1_5'],
            'check_p2' => $survey['check_p2'],
            'P2_1' => $survey['P2_1'],
            'P2_2' => $survey['P2_2'],
            'P2_3' => $survey['P2_3'],
            'P2_4' => $survey['P2_4'],
            'P2_5' => $survey['P2_5'],
            'check_p3' => $survey['check_p3'],
            'P3_1' => $survey['P3_1'],
            'P3_2' => $survey['P3_2'],
            'P3_3' => $survey['P3_3'],
            'P3_4' => $survey['P3_4'],
            'check_p4' => $survey['check_p4'],
            'P4_1' => $survey['P4_1'],
            'P4_2' => $survey['P4_2'],
            'P4_3' => $survey['P4_3'],
            'P4_4' => $survey['P4_4'],
            'P4_5' => $survey['P4_5'],
            'check_p5' => $survey['check_p5'],
            'P5_1' => $survey['P5_1'],
            'P5_2' => $survey['P5_2'],
            'check_p6' => $survey['check_p6'],
            'P6_1' => $survey['P6_1'],
            'P6_2' => $survey['P6_2'],
            'check_p7' => $survey['check_p7'],
            'P7' => $survey['P7'],
            'check_p8' => $survey['check_p8'],
            'P8' => $survey['P8'],
            'check_p9' => $survey['check_p9'],
            'P9' => $survey['P9'],
            'check_p10' => $survey['check_p10'],
            'P10' => $survey['P10'],
            'check_p11' => $survey['check_p11'],
            'P11' => $survey['P11'],
            'check_p12' => $survey['check_p12'],
            'P12' => $survey['P12'],
            'check_p13' => $survey['check_p13'],
            'P13' => $survey['P13'],
            'check_p14' => $survey['check_p14'],
            'P14' => $survey['P14'],
            'check_p15' => $survey['check_p15'],
            'P15' => $survey['P15'],
            'check_p16' => $survey['check_p16'],
            'P16' => $survey['P16'],
            'check_p17' => $survey['check_p17'],
            'P17' => $survey['P17'],
            'check_p18' => $survey['check_p18'],
            'P18' => $survey['P18'],
            'check_p19' => $survey['check_p19'],
            'P19' => $survey['P19'],
            'check_p20' => $survey['check_p20'],
            'P20' => $survey['P20'],
            'check_p21' => $survey['check_p21'],
            'P21' => $survey['P21'],
            'check_p22' => $survey['check_p22'],
            'P22' => $survey['P22'],
        ]);
        $input_survey = SurveyUnitUsaha::create([
            'idUnitUsaha' => $umum['idUnitUsaha'],
            'idForm3' => $input_ceklis->id,
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
    public function update(Request $request, $id){
        Alert::error('Fungsi Update Belum Diimplementasi');
        return redirect()->route('pengawasan.show');
    }
}
