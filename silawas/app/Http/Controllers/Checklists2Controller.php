<?php

namespace App\Http\Controllers;

use Alert;

use App\UnitUsaha;
use App\PengawasKesmavet;
use App\SurveyUnitUsaha;
use App\Form2;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Checklists2Controller extends Controller
{
    // Must Login
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // Show Detail Data Ceklis 2
    public function detail($id)
    {
        $survey = SurveyUnitUsaha::with(['unitUsaha', 'form2'])->where('id', $id)->firstOrFail();
        $pengawas = [
            '1' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas)->first(),
            '2' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas2)->first(),
            '3' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas3)->first()
        ];
        
        return view('checklist2.detail', [
            'data' => $survey,
            'pengawas' => $pengawas,
        ]);
    }
    
    // Open Tab Informasi Umum in Ceklis 2
    public function umum(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            // Validate and Parsing Data
            request()->validate([
                'idUnitUsaha' => 'required',
                'kapasitasPenampungan'=> 'nullable|numeric',
                'realisasiPemanfaatan'=> 'nullable|numeric',
                'jumlahKaryawan'=> 'nullable|numeric',
            ]);
            if (isset($request['wilayahPeredaran'])) {
                $request['wilayahPeredaran'] = implode(', ', $request['wilayahPeredaran']);
            }

            // Save Data in Session
            $data_umum = $request->all();
            session()->put('umum', $data_umum);
            return redirect()->action('Checklists2Controller@survey');
        }

        // GET Request
        $list_uu = UnitUsaha::all();
        return view('checklist2.umum', [
            'list_uu' => $list_uu
        ]);
    }

    // Open Tab Survey in Ceklis 2
    public function survey(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            // Save Data in Session
            $data_survey = $request->all();
            session()->put('survey', $data_survey);
            return redirect()->action('Checklists2Controller@catatan');
        }

        // GET Request
        return view('checklist2.survey');
    }

    // Open Tab Catatan in Ceklis 2
    public function catatan(Request $request)
    {   
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            // Save Data in Session
            $data_catatan = $request->all();
            session()->put('catatan', $data_catatan);
            return redirect()->action('Checklists2Controller@store');
        }

        // GET Request
        $list_dokter = PengawasKesmavet::with(['user', 'user.orang'])->where('isDokter', '=', 1)->get();
        $list_pengawas = PengawasKesmavet::with(['user', 'user.orang'])->get();
        return view('checklist2.catatan', [
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
        $input_ceklis = Form2::create([
            'jenisUnitUsaha' => $umum['jenisUnitUsaha'],
            'kapasitasPenampungan' => $umum['kapasitasPenampungan'],
            'realisasiPemanfaatan' => $umum['realisasiPemanfaatan'],
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
            'P2_1' => $survey['P2_1'],
            'P2_2' => $survey['P2_2'],
            'P2_3' => $survey['P2_3'],
            'P2_4' => $survey['P2_4'],
            'P2_5' => $survey['P2_5'],
            'check_p3' => $survey['check_p3'] ?: '0',
            'P3_1' => $survey['P3_1'],
            'P3_2' => $survey['P3_2'],
            'P3_3' => $survey['P3_3'],
            'P3_4' => $survey['P3_4'],
            'check_p4' => $survey['check_p4'] ?: '0',
            'P4_1' => $survey['P4_1'],
            'P4_2' => $survey['P4_2'],
            'check_p5' => $survey['check_p5'] ?: '0',
            'P5' => $survey['P5'],
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
        ]);
        $input_survey = SurveyUnitUsaha::create([
            'idUnitUsaha' => $umum['idUnitUsaha'],
            'idForm2' => $input_ceklis->id,
            'catatan' => $catatan['catatan'],
            'rekomendasi' => $catatan['rekomendasi'],
            'idPengawas' => $catatan['idPengawas'],
            'idPengawas2' => $catatan['idPengawas2'],
            'idPengawas3' => $catatan['idPengawas3'],
            'pjUnitUsaha' => $catatan['pjUnitUsaha'],
        ]);
        // Input ke Tabel Suplier
        // ===========================
        // jumlah : $survey['P4_1']
        // nama : $survey['P4_1_1']
        // tanggal : $survey['P4_1_2']
        // jumlah : $survey['P4_1_3']
        // ===========================
        
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
