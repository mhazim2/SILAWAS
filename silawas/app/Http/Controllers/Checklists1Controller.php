<?php

namespace App\Http\Controllers;

use Alert;

use App\UnitUsaha;
use App\PengawasKesmavet;
use App\SurveyUnitUsaha;
use App\DokterHewanPJ;
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

        $dokterPJ = 
        DB::table('surveyunitusaha')
            ->join('form1','surveyunitusaha.idForm1', '=', 'form1.id')
            ->leftJoin('dokterhewanpenanggungjawab','surveyunitusaha.id', '=', 'dokterhewanpenanggungjawab.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('dokterhewanpenanggungjawab.*')
            ->get();
        
        return view('checklist1.detail', [
            'data' => $survey,
            'pengawas' => $pengawas,
            'dokterPJ' => $dokterPJ,
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
            
            // Save Data in Session
            $data_umum = $request->all();

            if (!isset($data_umum['kapasitasPemeliharaan'])) $data_umum['kapasitasPemeliharaan'] = null;
            if (!isset($data_umum['populasiTernak'])) $data_umum['populasiTernak'] = null;
            if (!isset($data_umum['sapiLaktasi'])) $data_umum['sapiLaktasi'] = null;
            if (!isset($data_umum['kategoriUsaha'])) $data_umum['kategoriUsaha'] = null;
            if (!isset($data_umum['totalProduksiSusu'])) $data_umum['totalProduksiSusu'] = null;
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
            
            //validasi
            request()->validate([

                'sertifikat' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
                'P5_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
    
            ]);
                
            // Upload File and Parsing Data
            $data_survey = $request->all();
            if ($request->hasFile('sertifikat')) {
                $path = Storage::putFile('files', $request->file('sertifikat'));
                $data_survey['sertifikat'] = $path;
            } else {
                $data_survey['sertifikat'] = $request['sertifikat'];
            }
            if ($request->hasFile('P5_5')) {
                $path = Storage::putFile('files', $request->file('P5_5'));
                $data_survey['P5_5'] = $path;
            } else {
                $data_survey['P5_5'] = $request['P5_5'];
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
            if (!isset($data_survey['check_p14'])) $data_survey['check_p14'] = '0';
            if (!isset($data_survey['check_p15'])) $data_survey['check_p15'] = '0';
            if (!isset($data_survey['check_p16'])) $data_survey['check_p16'] = '0';
            if (!isset($data_survey['check_p17'])) $data_survey['check_p17'] = '0';
            if (!isset($data_survey['check_p18'])) $data_survey['check_p18'] = '0';
            if (!isset($data_survey['check_p19'])) $data_survey['check_p19'] = '0';

           
           
            if (!isset($data_survey['P1_1_1'])) $data_survey['P1_1_1'] = null; 
            if (!isset($data_survey['P1_1_2'])) $data_survey['P1_1_2'] = null; 
             
            if (!isset($data_survey['P1_2_1'])) $data_survey['P1_2_1'] = null; 
            if (!isset($data_survey['P1_2_2'])) $data_survey['P1_2_2'] = null; 
            
            if (!isset($data_survey['P1_3_1'])) $data_survey['P1_3_1'] = null; 
            if (!isset($data_survey['P1_3_2'])) $data_survey['P1_3_2'] = null; 
            
            if (!isset($data_survey['P1_4_1'])) $data_survey['P1_4_1'] = null; 
            if (!isset($data_survey['P1_4_2'])) $data_survey['P1_4_2'] = null; 

            if (!isset($data_survey['sertifikat'])) $data_survey['sertifikat'] = null; 
            if (!isset($data_survey['P2_2'])) $data_survey['P2_2'] = null;
            
            if (!isset($data_survey['P3_1'])) $data_survey['P3_1'] = null; 
            if (!isset($data_survey['P3_2'])) $data_survey['P3_2'] = null;

            if (!isset($data_survey['P4_1'])) $data_survey['P4_1'] = null;
            if (!isset($data_survey['P5_1'])) $data_survey['P5_1'] = null;
            if (!isset($data_survey['P5_2'])) $data_survey['P5_2'] = null;
            if (!isset($data_survey['P5_3'])) $data_survey['P5_3'] = null;
            if (!isset($data_survey['P5_4'])) $data_survey['P5_4'] = null;
            if (!isset($data_survey['P5_5'])) $data_survey['P5_5'] = null;
            if (!isset($data_survey['P5_6'])) $data_survey['P5_6'] = null;
            if (!isset($data_survey['P6_1'])) $data_survey['P6_1'] = null;
            if (!isset($data_survey['P6_2'])) $data_survey['P6_2'] = null;
            if (!isset($data_survey['P6_3'])) $data_survey['P6_3'] = null;
            if (!isset($data_survey['P7_1'])) $data_survey['P7_1'] = null;
            if (!isset($data_survey['P7_2'])) $data_survey['P7_2'] = null;
            if (!isset($data_survey['P7_3'])) $data_survey['P7_3'] = null;
            if (!isset($data_survey['P8_1'])) $data_survey['P8_1'] = null;
            if (!isset($data_survey['P8_2'])) $data_survey['P8_2'] = null;
            if (!isset($data_survey['P8_3'])) $data_survey['P8_3'] = null;
            if (!isset($data_survey['P9_1'])) $data_survey['P9_1'] = null;
            if (!isset($data_survey['P9_2'])) $data_survey['P9_2'] = null;
            if (!isset($data_survey['P10_1'])) $data_survey['P10_1'] = null;
            if (!isset($data_survey['P10_2'])) $data_survey['P10_2'] = null;
            if (!isset($data_survey['P10_3'])) $data_survey['P10_3'] = null;
            if (!isset($data_survey['P11_1'])) $data_survey['P11_1'] = null;
            if (!isset($data_survey['P11_2'])) $data_survey['P11_2'] = null;
            if (!isset($data_survey['P11_3'])) $data_survey['P11_3'] = null;
            if (!isset($data_survey['P12_1'])) $data_survey['P12_1'] = null;
            if (!isset($data_survey['P12_2'])) $data_survey['P12_2'] = null;
            if (!isset($data_survey['P12_3'])) $data_survey['P12_3'] = null;
            if (!isset($data_survey['P12_4'])) $data_survey['P12_4'] = null;
            if (!isset($data_survey['P13_1'])) $data_survey['P13_1'] = null;
            if (!isset($data_survey['P13_2'])) $data_survey['P13_2'] = null;
            if (!isset($data_survey['P13_3'])) $data_survey['P13_3'] = null;
            if (!isset($data_survey['P13_4'])) $data_survey['P13_4'] = null;
            if (!isset($data_survey['P13_5'])) $data_survey['P13_5'] = null;
            if (!isset($data_survey['P13_6'])) $data_survey['P13_6'] = null;
            if (!isset($data_survey['P13_7'])) $data_survey['P13_7'] = null;
            if (!isset($data_survey['P14_1'])) $data_survey['P14_1'] = null;
            if (!isset($data_survey['P14_2'])) $data_survey['P14_2'] = null;
            if (!isset($data_survey['P14_3'])) $data_survey['P14_3'] = null;
            if (!isset($data_survey['P14_4'])) $data_survey['P14_4'] = null;
            if (!isset($data_survey['P15_1'])) $data_survey['P15_1'] = null;
            if (!isset($data_survey['P15_2'])) $data_survey['P15_2'] = null;
            if (!isset($data_survey['P15_3'])) $data_survey['P15_1'] = null;
            if (!isset($data_survey['P15_4'])) $data_survey['P15_4'] = null;
            if (!isset($data_survey['P15_5'])) $data_survey['P15_5'] = null;
            if (!isset($data_survey['P16_1'])) $data_survey['P16_1'] = null;
            if (!isset($data_survey['P16_2'])) $data_survey['P16_2'] = null;
            if (!isset($data_survey['P16_3'])) $data_survey['P16_3'] = null;
            if (!isset($data_survey['P16_4'])) $data_survey['P16_4'] = null;
            if (!isset($data_survey['P17_1'])) $data_survey['P17_1'] = null;
            if (!isset($data_survey['P17_1'])) $data_survey['P17_1'] = null;
            if (!isset($data_survey['P17_2'])) $data_survey['P17_2'] = null;
            if (!isset($data_survey['P17_3'])) $data_survey['P17_3'] = null;
            if (!isset($data_survey['P17_4'])) $data_survey['P17_4'] = null;
            if (!isset($data_survey['P17_5'])) $data_survey['P17_5'] = null;
            if (!isset($data_survey['P17_6'])) $data_survey['P17_6'] = null;
            if (!isset($data_survey['P17_7'])) $data_survey['P17_7'] = null;
            if (!isset($data_survey['P18_1'])) $data_survey['P18_1'] = null;
            if (!isset($data_survey['P18_2'])) $data_survey['P18_2'] = null;
            if (!isset($data_survey['P19_1'])) $data_survey['P19_1'] = null;
            if (!isset($data_survey['P19_2'])) $data_survey['P19_2'] = null;
            if (!isset($data_survey['P19_3'])) $data_survey['P19_3'] = null;
            
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
            // Validate and Parsing Data
            request()->validate([
                'idPengawas' => 'required',
            ]);
            
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
            'kapasitasPemeliharaan' => $umum['kapasitasPemeliharaan'],
            'sapiLaktasi'=> $umum['sapiLaktasi'],
            'populasiTernak' => $umum['populasiTernak'],
            'kategoriUsaha' => $umum['kategoriUsaha'],
            'totalProduksiSusu' => $umum['totalProduksiSusu'],
            'check_wilayahPeredaran_1'=> $umum['check_wilayahPeredaran_1'],
            'wilayahPeredaran_1'=> $umum['wilayahPeredaran_1'],
            'check_wilayahPeredaran_2'=> $umum['check_wilayahPeredaran_2'],
            'wilayahPeredaran_2'=> $umum['wilayahPeredaran_2'],
            'check_wilayahPeredaran_3'=> $umum['check_wilayahPeredaran_3'],
            'wilayahPeredaran_3'=> $umum['wilayahPeredaran_3'],
            'check_wilayahPeredaran_4'=> $umum['check_wilayahPeredaran_4'],
            'wilayahPeredaran_4'=> $umum['wilayahPeredaran_4'],
            'jumlahKaryawan' => $umum['jumlahKaryawan'],
            'check_p1_1' => $survey['check_p1_1'],
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
            'P2_1'=> $survey['sertifikat'],
            'P2_2'=> $survey['P2_2'],  
            'check_p3'=> $survey['check_p3'], 
            'P3_1'=> $survey['P3_1'], 
            'P3_2'=> $survey['P3_2'], 
            'check_p4'=> $survey['check_p4'], 
            'P4_1'=> $survey['P4_1'],
            'P4_2'=> $survey['P4_2'], 
            'P4_3'=> $survey['P4_3'], 
            'check_p5'=> $survey['check_p5'], 
            'P5_1'=> $survey['P5_1'], 
            'P5_2'=> $survey['P5_2'],
            'P5_3'=> $survey['P5_3'], 
            'P5_4'=> $survey['P5_4'],
            'P5_5'=> $survey['P5_5'],
            'P5_6'=> $survey['P5_6'],   
            'check_p6'=> $survey['check_p6'],
            'P6_1'=> $survey['P6_1'],
            'P6_2'=> $survey['P6_2'], 
            'P6_3'=> $survey['P6_3'], 
            'P6_4'=> $survey['P6_4'], 
            'check_p7'=> $survey['check_p7'], 
            'P7_1'=> $survey['P7_1'],
            'P7_2'=> $survey['P7_2'], 
            'P7_3'=> $survey['P7_3'], 
            'check_p8'=> $survey['check_p8'], 
            'P8_1'=> $survey['P8_1'], 
            'P8_2'=> $survey['P8_2'], 
            'P8_3'=> $survey['P8_3'], 
            'check_p9'=> $survey['check_p9'], 
            'P9_1'=> $survey['P9_1'], 
            'P9_2'=> $survey['P9_2'], 
            'check_p10'=> $survey['check_p10'], 
            'P10_1'=> $survey['P10_1'],
            'P10_2'=> $survey['P10_2'], 
            'P10_3'=> $survey['P10_3'], 
            'check_p11'=> $survey['check_p11'], 
            'P11_1'=> $survey['P11_1'],
            'P11_2'=> $survey['P11_2'], 
            'P11_3'=> $survey['P11_3'], 
            'check_p12'=> $survey['check_p12'], 
            'P12_1'=> $survey['P12_1'], 
            'P12_2'=> $survey['P12_2'], 
            'P12_3'=> $survey['P12_3'], 
            'P12_4'=> $survey['P12_4'], 
            'check_p13'=> $survey['check_p13'], 
            'P13_1'=> $survey['P13_1'],
            'P13_2'=> $survey['P13_2'], 
            'P13_3'=> $survey['P13_3'], 
            'P13_4'=> $survey['P13_4'], 
            'P13_5'=> $survey['P13_5'], 
            'P13_6'=> $survey['P13_6'], 
            'P13_7'=> $survey['P13_7'], 
            'check_p14'=> $survey['check_p14'], 
            'P14_1'=> $survey['P14_1'], 
            'P14_2'=> $survey['P14_2'], 
            'P14_3'=> $survey['P14_3'], 
            'P14_4'=> $survey['P14_4'], 
            'check_p15'=> $survey['check_p15'], 
            'P15_1'=> $survey['P15_1'], 
            'P15_2'=> $survey['P15_2'], 
            'P15_3'=> $survey['P15_3'], 
            'P15_4'=> $survey['P15_4'], 
            'P15_5'=> $survey['P15_5'], 
            'check_p16'=> $survey['check_p16'], 
            'P16_1'=> $survey['P16_1'], 
            'P16_2'=> $survey['P16_2'], 
            'P16_3'=> $survey['P16_3'], 
            'P16_4'=> $survey['P16_4'], 
            'check_p17'=> $survey['check_p17'], 
            'P17_1'=> $survey['P17_1'], 
            'P17_2'=> $survey['P17_2'], 
            'P17_3'=> $survey['P17_3'], 
            'P17_4'=> $survey['P17_4'], 
            'P17_5'=> $survey['P17_5'], 
            'P17_6'=> $survey['P17_6'], 
            'P17_7'=> $survey['P17_7'], 
            'check_p18'=> $survey['check_p18'], 
            'P18_1'=> $survey['P18_1'], 
            'P18_2'=> $survey['P18_2'], 
            'check_p19'=> $survey['check_p19'], 
            'P19_1'=> $survey['P19_1'], 
            'P19_2'=> $survey['P19_2'], 
            'P19_3'=> $survey['P19_3'], 
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
            'tipeForm' => 'Tempat Budidaya Hewan Perah dan Pemerahan Susu',
        ]);

        if (isset($survey['P3_1'])){
            for($i=0;$i<$survey['P3_1'];$i++){
            DokterHewanPJ::create([
                'namaLengkap'=>$survey['P3_1_1'][$i],
                'status'=>$survey['P3_1_2'][$i],
                'notlp'=>$survey['P3_1_3'][$i],
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
