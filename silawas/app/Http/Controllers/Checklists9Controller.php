<?php

namespace App\Http\Controllers;

use Alert;

use App\UnitUsaha;
use App\PengawasKesmavet;
use App\SurveyUnitUsaha;
use App\Form9;
use App\DokterHewanPJ;
use App\SuplierProduk;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Checklists9Controller extends Controller
{
    // Must Login
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // Show Detail Data Ceklis 9
    public function detail($id)
    {
        $survey = SurveyUnitUsaha::with(['unitUsaha', 'form9'])->where('id', $id)->firstOrFail();
        $pengawas = [
            '1' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas)->first(),
            '2' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas2)->first(),
            '3' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas3)->first()
        ];
        // Get Table DokterHewanPJ
        $dokterPJ = DB::table('surveyunitusaha')
            ->join('form9','surveyunitusaha.idForm9', '=', 'form9.id')
            ->leftJoin('dokterhewanpenanggungjawab','surveyunitusaha.id', '=', 'dokterhewanpenanggungjawab.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('dokterhewanpenanggungjawab.*')
            ->get();
        // Get Table SuplierProduk
        $supliers = DB::table('surveyunitusaha')
            ->join('form9','surveyunitusaha.idform9', '=', 'form9.id')
            ->leftJoin('suplierproduk','surveyunitusaha.id', '=', 'suplierproduk.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('suplierproduk.*')
            ->get();
        
        return view('checklist9.detail', [
            'data' => $survey,
            'pengawas' => $pengawas,
            'dokterPJ' => $dokterPJ,
            'supliers' => $supliers,
        ]);
    }
    
    // Open Tab Informasi Umum in Ceklis 9
    public function umum(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            // Validate and Parsing Data
            request()->validate([
                'idUnitUsaha' => 'required',
                'kapasitasProduksi'=> 'nullable|numeric',
                'jumlahProduksi'=> 'nullable|numeric',
                'jumlahKaryawan'=> 'nullable|numeric',
            ]);
            if (isset($request['jenisPengolahan'])) {
                $request['jenisPengolahan'] = implode( ", ", $request['jenisPengolahan'] );
            }
            if (isset($request['jenisPengolahan_lainnya'])) {
                $request['jenisPengolahan'] = str_replace("Lainnya", $request['jenisPengolahan_lainnya'], $request['jenisPengolahan']);
            }
            if (isset($request['distribusiProduk'])) {
                $request['distribusiProduk'] = implode(', ', $request['distribusiProduk']);
            } else {
                $request['distribusiProduk'] = '';
            }
            if (!isset($request['check_sumber_lokal'])) $request['check_sumber_lokal'] = '0';
            if (!isset($request['check_sumber_impor'])) $request['check_sumber_impor'] = '0';

            // Save Data in Session
            $data_umum = $request->all();
            session()->put('umum', $data_umum);
            return redirect()->action('Checklists9Controller@survey');
        }

        // GET Request
        $list_uu = UnitUsaha::all();
        return view('checklist9.umum', [
            'list_uu' => $list_uu
        ]);
    }

    // Open Tab Survey in Ceklis 9
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
            if (!isset($data_survey['P10_1'])) $data_survey['P10_1'] = '';
            if (!isset($data_survey['P10_2'])) $data_survey['P10_2'] = '';
            if (!isset($data_survey['P10_3'])) $data_survey['P10_3'] = '';
            if (!isset($data_survey['check_p11'])) $data_survey['check_p11'] = '0';
            if (!isset($data_survey['check_p12'])) $data_survey['check_p12'] = '0';
            if (!isset($data_survey['P12_1'])) $data_survey['P12_1'] = '';
            if (!isset($data_survey['check_p13'])) $data_survey['check_p13'] = '0';
            if (!isset($data_survey['P13_1'])) $data_survey['P13_1'] = '';
            if (!isset($data_survey['P13_4'])) $data_survey['P13_4'] = '';
            if (!isset($data_survey['check_p14'])) $data_survey['check_p14'] = '0';
            if (!isset($data_survey['check_p15'])) $data_survey['check_p15'] = '0';
            if (!isset($data_survey['P15_1'])) $data_survey['P15_1'] = '';
            if (!isset($data_survey['P15_2'])) $data_survey['P15_2'] = '';
            if (!isset($data_survey['P15_5'])) $data_survey['P15_5'] = '';
            if (!isset($data_survey['check_p16'])) $data_survey['check_p16'] = '0';
            if (!isset($data_survey['check_p17'])) $data_survey['check_p17'] = '0';
            if (!isset($data_survey['P17_1'])) $data_survey['P17_1'] = '';
            
            // Save Data in Session
            session()->put('survey', $data_survey);
            return redirect()->action('Checklists9Controller@catatan');
        }

        // GET Request
        return view('checklist9.survey');
    }

    // Open Tab Catatan in Ceklis 9
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
            return redirect()->action('Checklists9Controller@store');
        }

        // GET Request
        $list_dokter = PengawasKesmavet::with(['user', 'user.orang'])->where('isDokter', '=', 1)->get();
        $list_pengawas = PengawasKesmavet::with(['user', 'user.orang'])->get();
        return view('checklist9.catatan', [
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
        $input_ceklis = Form9::create([
            'jenisPengolahan' => $umum['jenisPengolahan'],
            'kapasitasProduksi' => $umum['kapasitasProduksi'],
            'jumlahProduksi' => $umum['jumlahProduksi'],
            'check_sumber_lokal' => $umum['check_sumber_lokal'],
            'sumber_lokal' => $umum['sumber_lokal'],
            'check_sumber_impor' => $umum['check_sumber_impor'],
            'sumber_impor' => $umum['sumber_impor'],
            'distribusiProduk' => $umum['distribusiProduk'],
            'jumlahKaryawan' => $umum['jumlahKaryawan'],
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
            'check_p4' => $survey['check_p4'],
            'P4_1' => $survey['P4_1'],
            'P4_2' => $survey['P4_2'],
            'check_p5' => $survey['check_p5'],
            'P5_1' => $survey['P5_1'],
            'P5_2' => $survey['P5_2'],
            'P5_3' => $survey['P5_3'],
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
            'P10_1' => $survey['P10_1'],
            'P10_2' => $survey['P10_2'],
            'P10_3' => $survey['P10_3'],
            'P10_4' => $survey['P10_4'],
            'check_p11' => $survey['check_p11'],
            'P11_1' => $survey['P11_1'],
            'P11_2' => $survey['P11_2'],
            'P11_3' => $survey['P11_3'],
            'check_p12' => $survey['check_p12'],
            'P12_1' => $survey['P12_1'],
            'P12_2' => $survey['P12_2'],
            'P12_3' => $survey['P12_3'],
            'P12_4' => $survey['P12_4'],
            'P12_5' => $survey['P12_5'],
            'check_p13' => $survey['check_p13'],
            'P13_1' => $survey['P13_1'],
            'P13_2' => $survey['P13_2'],
            'P13_3' => $survey['P13_3'],
            'P13_4' => $survey['P13_4'],
            'P13_5' => $survey['P13_5'],
            'check_p14' => $survey['check_p14'],
            'P14' => $survey['P14'],
            'check_p15' => $survey['check_p15'],
            'P15_1' => $survey['P15_1'],
            'P15_2' => $survey['P15_2'],
            'P15_3' => $survey['P15_3'],
            'P15_4' => $survey['P15_4'],
            'P15_5' => $survey['P15_5'],
            'P15_6' => $survey['P15_6'],
            'check_p16' => $survey['check_p16'],
            'P16' => $survey['P16'],
            'check_p17' => $survey['check_p17'],
            'P17_1' => $survey['P17_1'],
            'P17_2' => $survey['P17_2'],
            'P17_3' => $survey['P17_3'],
        ]);
        $input_survey = SurveyUnitUsaha::create([
            'idUnitUsaha' => $umum['idUnitUsaha'],
            'idForm9' => $input_ceklis->id,
            'catatan' => $catatan['catatan'],
            'rekomendasi' => $catatan['rekomendasi'],
            'idPengawas' => $catatan['idPengawas'],
            'idPengawas2' => $catatan['idPengawas2'],
            'idPengawas3' => $catatan['idPengawas3'],
            'pjUnitUsaha' => $catatan['pjUnitUsaha'],
            'tipeForm' => 'Tempat Produksi Produk Hewan Non Pangan',
            'created_at' => $catatan['tanggalPengawasan_date'],
            
        ]);
        // Input ke Tabel DokterHewanPJ
        if (isset($survey['P3_1'])) {
            for($i=0; $i<$survey['P3_1']; $i++){
                DokterHewanPJ::create([
                    'namaLengkap' => $survey['P3_1_1'][$i],
                    'status' => $survey['P3_1_2'][$i],
                    'notlp' => $survey['P3_1_3'][$i],
                    'surveyUnitUsaha_idsurveyUnitusaha' => $input_survey->id,
                ]);
            }
        };
        // Input ke Tabel Suplier
        if (isset($survey['P4_1'])){
            for ($i=0; $i<$survey['P4_1']; $i++) {
                SuplierProduk::create([
                    'namaSuplier' => $survey['P4_1_1'][$i],
                    'negara' => $survey['P4_1_2'][$i],
                    'tanggal' => $survey['P4_1_3'][$i],
                    'jumlah' => $survey['P4_1_4'][$i],
                    'surveyUnitUsaha_idsurveyUnitusaha' => $input_survey->id,
                ]);
            }
        };

        session()->forget('umum');
        session()->forget('survey');
        session()->forget('catatan');
        
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
