<?php

namespace App\Http\Controllers;

use Alert;

use App\UnitUsaha;
use App\PengawasKesmavet;
use App\SurveyUnitUsaha;
use App\Form2;
use App\SuplierProduk;

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
        $supliers = DB::table('surveyunitusaha')
        ->join('form2','surveyunitusaha.idform2', '=', 'form2.id')
        ->leftJoin('suplierproduk','surveyunitusaha.id', '=', 'suplierproduk.surveyUnitUsaha_idsurveyUnitusaha')
        ->where('surveyunitusaha.id', '=', $survey->id)
        ->select('suplierproduk.*')
        ->get();
        
        return view('checklist2.detail', [
            'data' => $survey,
            'pengawas' => $pengawas,
            'supliers' => $supliers,
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
            } else {
                $request['wilayahPeredaran'] = '';
            }

            // Save Data in Session
            $data_umum = $request->all();
            
            //cek kosong
            if (!isset($data_umum['kapasitasPenampungan'])) $data_umum['kapasitasPenampungan'] = null; 
            if (!isset($data_umum['realisasiPemanfaatan'])) $data_umum['realisasiPemanfaatan'] = null; 
            if (!isset($data_umum['skalaUsaha'])) $data_umum['skalaUsaha'] = null; 
            if (!isset($data_umum['check_wilayahPeredaran_1'])) $data_umum['check_wilayahPeredaran_1'] = '0';
            if (!isset($data_umum['wilayahPeredaran_1'])) $data_umum['wilayahPeredaran_1'] = null; 
            if (!isset($data_umum['check_wilayahPeredaran_2'])) $data_umum['check_wilayahPeredaran_2'] = '0'; 
            if (!isset($data_umum['wilayahPeredaran_2'])) $data_umum['wilayahPeredaran_2'] = null; 
            if (!isset($data_umum['check_wilayahPeredaran_3'])) $data_umum['check_wilayahPeredaran_3'] = '0';
            if (!isset($data_umum['wilayahPeredaran_3'])) $data_umum['wilayahPeredaran_3'] = null; 
            if (!isset($data_umum['check_wilayahPeredaran_4'])) $data_umum['check_wilayahPeredaran_4'] = '0';
            if (!isset($data_umum['wilayahPeredaran_4'])) $data_umum['wilayahPeredaran_4'] = null; 
            if (!isset($data_umum['jumlahKaryawan'])) $data_umum['jumlahKaryawan'] = null;

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
            //validasi
            request()->validate([

                'P2_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
                'P3_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
    
            ]);

            // Parsing Data
            $data_survey = $request->all();

            // Upload File and Parsing Data
            $data_survey = $request->all();
            if ($request->hasFile('P2_5')) {
                $path = Storage::putFile('files', $request->file('P2_5'));
                $data_survey['P2_5'] = $path;
            } else {
                $data_survey['P2_5'] = $request['P2_5'];
            }
            if ($request->hasFile('P3_4')) {
                $path = Storage::putFile('files', $request->file('P3_4'));
                $data_survey['P3_4'] = $path;
            } else {
                $data_survey['P3_4'] = $request['P3_4'];
            }

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

            //cek kosong
            if (!isset($data_survey['P1_1_1'])) $data_survey['P1_1_1'] = null; 
            if (!isset($data_survey['P1_1_2'])) $data_survey['P1_1_2'] = null; 
            
            if (!isset($data_survey['P1_2_1'])) $data_survey['P1_2_1'] = null; 
            if (!isset($data_survey['P1_2_2'])) $data_survey['P1_2_2'] = null; 
            
            if (!isset($data_survey['P1_3_1'])) $data_survey['P1_3_1'] = null; 
            if (!isset($data_survey['P1_3_2'])) $data_survey['P1_3_2'] = null; 
            
            if (!isset($data_survey['P1_4_1'])) $data_survey['P1_4_1'] = null; 
            if (!isset($data_survey['P1_4_2'])) $data_survey['P1_4_2'] = null; 
            
            if (!isset($data_survey['P2_1'])) $data_survey['P2_1'] = null; 
            if (!isset($data_survey['P2_2'])) $data_survey['P2_2'] = null; 
            if (!isset($data_survey['P2_3'])) $data_survey['P2_3'] = null; 
            if (!isset($data_survey['P2_4'])) $data_survey['P2_4'] = null; 
            if (!isset($data_survey['P2_5'])) $data_survey['P2_5'] = null; 
            
            if (!isset($data_survey['P3_1'])) $data_survey['P3_1'] = null; 
            if (!isset($data_survey['P3_2'])) $data_survey['P3_2'] = null; 
            if (!isset($data_survey['P3_3'])) $data_survey['P3_3'] = null; 
            if (!isset($data_survey['P3_4'])) $data_survey['P3_4'] = null; 
            if (!isset($data_survey['P3_5'])) $data_survey['P3_5'] = null; 
            
            if (!isset($data_survey['P4_1'])) $data_survey['P4_1'] = null; 
            if (!isset($data_survey['P4_2'])) $data_survey['P4_2'] = null;
            
            if (!isset($data_survey['P5_1'])) $data_survey['P5_1'] = null; 
            if (!isset($data_survey['P5_2'])) $data_survey['P5_2'] = null; 
            if (!isset($data_survey['P5_3'])) $data_survey['P5_3'] = null; 
            if (!isset($data_survey['P5_4'])) $data_survey['P5_4'] = null; 
             
            if (!isset($data_survey['P6_1'])) $data_survey['P6_1'] = null; 
            if (!isset($data_survey['P6_2'])) $data_survey['P6_2'] = null; 
            if (!isset($data_survey['P6_3'])) $data_survey['P6_3'] = null; 
            
            if (!isset($data_survey['P7_1'])) $data_survey['P7_1'] = null; 
            if (!isset($data_survey['P7_2'])) $data_survey['P7_2'] = null; 
            if (!isset($data_survey['P7_3'])) $data_survey['P7_3'] = null; 
            if (!isset($data_survey['P7_4'])) $data_survey['P7_4'] = null; 
            if (!isset($data_survey['P7_5'])) $data_survey['P7_5'] = null; 
            
            if (!isset($data_survey['P8_1'])) $data_survey['P8_1'] = null; 
            if (!isset($data_survey['P8_2'])) $data_survey['P8_2'] = null; 
            if (!isset($data_survey['P8_3'])) $data_survey['P8_3'] = null; 
            if (!isset($data_survey['P8_4'])) $data_survey['P8_4'] = null; 
            if (!isset($data_survey['P8_5'])) $data_survey['P8_5'] = null; 
            if (!isset($data_survey['P8_6'])) $data_survey['P8_6'] = null; 
            if (!isset($data_survey['P8_7'])) $data_survey['P8_7'] = null;
            
            if (!isset($data_survey['P9_1'])) $data_survey['P9_1'] = null; 
            if (!isset($data_survey['P9_2'])) $data_survey['P9_2'] = null; 
            if (!isset($data_survey['P9_3'])) $data_survey['P9_3'] = null; 
            if (!isset($data_survey['P9_4'])) $data_survey['P9_4'] = null; 
            
            if (!isset($data_survey['P10_1'])) $data_survey['P10_1'] = null; 
            if (!isset($data_survey['P10_2'])) $data_survey['P10_2'] = null; 
            if (!isset($data_survey['P10_3'])) $data_survey['P10_3'] = null; 
            if (!isset($data_survey['P10_4'])) $data_survey['P10_4'] = null; 
            if (!isset($data_survey['P10_5'])) $data_survey['P10_5'] = null; 
            
            if (!isset($data_survey['P11_1'])) $data_survey['P11_1'] = null; 
            if (!isset($data_survey['P11_2'])) $data_survey['P11_2'] = null; 
            if (!isset($data_survey['P11_3'])) $data_survey['P11_3'] = null; 
            if (!isset($data_survey['P11_4'])) $data_survey['P11_4'] = null; 
            
            if (!isset($data_survey['P12_1'])) $data_survey['P12_1'] = null; 
            if (!isset($data_survey['P12_2'])) $data_survey['P12_2'] = null; 
            if (!isset($data_survey['P12_3'])) $data_survey['P12_3'] = null; 
            if (!isset($data_survey['P12_4'])) $data_survey['P12_4'] = null; 
            if (!isset($data_survey['P12_5'])) $data_survey['P12_5'] = null; 
            if (!isset($data_survey['P12_6'])) $data_survey['P12_6'] = null; 
            if (!isset($data_survey['P12_7'])) $data_survey['P12_7'] = null; 
             
            if (!isset($data_survey['P13_1'])) $data_survey['P13_1'] = null; 
            if (!isset($data_survey['P13_2'])) $data_survey['P13_2'] = null; 
            if (!isset($data_survey['P13_3'])) $data_survey['P13_3'] = null;
            
            // Save Data in Session
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
            // Validate and Parsing Data
            request()->validate([
                'idPengawas' => 'required',
            ]);
            
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
            'kapasitasPenampungan'=> $umum['kapasitasPenampungan'], 
            'realisasiPemanfaatan'=> $umum['realisasiPemanfaatan'], 
            'skalaUsaha'=> $umum['skalaUsaha'], 
            'check_wilayahPeredaran_1'=> $umum['check_wilayahPeredaran_1'],
            'wilayahPeredaran_1'=> $umum['wilayahPeredaran_1'], 
            'check_wilayahPeredaran_2'=> $umum['check_wilayahPeredaran_2'], 
            'wilayahPeredaran_2'=> $umum['wilayahPeredaran_2'], 
            'check_wilayahPeredaran_3'=> $umum['check_wilayahPeredaran_3'],
            'wilayahPeredaran_3'=> $umum['wilayahPeredaran_3'], 
            'check_wilayahPeredaran_4'=> $umum['check_wilayahPeredaran_4'],
            'wilayahPeredaran_4'=> $umum['wilayahPeredaran_4'], 
            'jumlahKaryawan'=> $umum['jumlahKaryawan'],
            'check_p1_1'=> $survey['check_p1_1'], 
            'P1_1_1'=> $survey['P1_1_1'], 
            'P1_1_2'=> $survey['P1_1_2'], 
            'check_p1_2'=> $survey['check_p1_2'], 
            'P1_2_1'=> $survey['P1_2_1'], 
            'P1_2_2'=> $survey['P1_2_2'], 
            'check_p1_3'=> $survey['check_p1_3'], 
            'P1_3_1'=> $survey['P1_3_1'], 
            'P1_3_2'=> $survey['P1_3_2'], 
            'check_p1_4'=> $survey['check_p1_4'], 
            'P1_4_1'=> $survey['P1_4_1'], 
            'P1_4_2'=> $survey['P1_4_2'], 
            'check_p2'=> $survey['check_p2'], 
            'P2_1'=> $survey['P2_1'], 
            'P2_2'=> $survey['P2_2'], 
            'P2_3'=> $survey['P2_3'], 
            'P2_4'=> $survey['P2_4'], 
            'P2_5'=> $survey['P2_5'], 
            'check_p3'=> $survey['check_p3'],
            'P3_1'=> $survey['P3_1'], 
            'P3_2'=> $survey['P3_2'], 
            'P3_3'=> $survey['P3_3'], 
            'P3_4'=> $survey['P3_4'], 
            'P3_5'=> $survey['P3_5'], 
            'check_p4'=> $survey['check_p4'], 
            'P4_1'=> $survey['P4_1'], 
            'P4_2'=> $survey['P4_2'],
            'check_p5'=> $survey['check_p5'], 
            'P5_1'=> $survey['P5_1'], 
            'P5_2'=> $survey['P5_2'], 
            'P5_3'=> $survey['P5_3'], 
            'P5_4'=> $survey['P5_4'], 
            'check_p6'=> $survey['check_p6'], 
            'P6_1'=> $survey['P6_1'], 
            'P6_2'=> $survey['P6_2'], 
            'P6_3'=> $survey['P6_3'], 
            'check_p7'=> $survey['check_p7'], 
            'P7_1'=> $survey['P7_1'], 
            'P7_2'=> $survey['P7_2'], 
            'P7_3'=> $survey['P7_3'], 
            'P7_4'=> $survey['P7_4'], 
            'P7_5'=> $survey['P7_5'], 
            'check_p8'=> $survey['check_p8'], 
            'P8_1'=> $survey['P8_1'], 
            'P8_2'=> $survey['P8_2'], 
            'P8_3'=> $survey['P8_3'], 
            'P8_4'=> $survey['P8_4'], 
            'P8_5'=> $survey['P8_5'], 
            'P8_6'=> $survey['P8_6'], 
            'P8_7'=> $survey['P8_7'],
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
            'P12_1'=> $survey['P12_1'], 
            'P12_2'=> $survey['P12_2'], 
            'P12_3'=> $survey['P12_3'], 
            'P12_4'=> $survey['P12_4'], 
            'P12_5'=> $survey['P12_5'], 
            'P12_6'=> $survey['P12_6'], 
            'P12_7'=> $survey['P12_7'], 
            'check_p13'=> $survey['check_p13'], 
            'P13_1'=> $survey['P13_1'], 
            'P13_2'=> $survey['P13_2'], 
            'P13_3'=> $survey['P13_3'],
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
            'tipeForm' => 'Tempat Penampungan Susu',
        ]);
        // Input ke Tabel Suplier
        if (isset($survey['P4_1'])){
            for($i=0;$i<$survey['P4_1'];$i++){
                SuplierProduk::create([
                'namaSuplier'=>$survey['P4_1_1'][$i],
                'negara'=>$survey['P4_1_2'][$i],
                'tanggal'=>$survey['P4_1_3'][$i],
                'jumlah'=>$survey['P4_1_4'][$i],
                'surveyUnitUsaha_idsurveyUnitusaha'=>$input_survey->id,
              ]);
            }
        };
        
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
