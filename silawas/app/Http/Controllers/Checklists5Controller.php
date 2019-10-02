<?php

namespace App\Http\Controllers;

use Alert;

use App\UnitUsaha;
use App\PengawasKesmavet;
use App\SurveyUnitUsaha;
use App\Form5;
use App\PenerimaProdukDistribusi;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Checklists5Controller extends Controller
{
    // Must Login
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    // Show Detail Data Ceklis 5
    public function detail($id)
    {
        $survey = SurveyUnitUsaha::with(['unitUsaha', 'form5'])->where('id', $id)->firstOrFail();
        $pengawas = [
            '1' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas)->first(),
            '2' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas2)->first(),
            '3' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas3)->first()
        ];
        // Get Tabel PenerimaProdukDistribusi
        $penerimaProduksi = DB::table('surveyunitusaha')
            ->join('form5','surveyunitusaha.idForm5', '=', 'form5.id')
            ->leftJoin('penerimaprodukdistribusi','surveyunitusaha.id', '=', 'penerimaprodukdistribusi.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('penerimaprodukdistribusi.*')
            ->get();
        
        return view('checklist5.detail', [
            'data' => $survey,
            'pengawas' => $pengawas,
            'distribusi' => $penerimaProduksi,
        ]);
    }
    
    // Open Tab Informasi Umum in Ceklis 5
    public function umum(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            // Validate and Parsing Data
            request()->validate([
                'idUnitUsaha' => 'required',
                'karyawanProdL'=> 'nullable|numeric',
                'karyawanProdP'=> 'nullable|numeric',
                'karyawanAdmL'=> 'nullable|numeric',
                'karyawanAdmP'=> 'nullable|numeric',
                'karyawanAMPM'=> 'nullable|numeric',
                'karyawanAWO'=> 'nullable|numeric',
                'karyawanHalal'=> 'nullable|numeric',
                'karyawanButcher'=> 'nullable|numeric',
                'karyawanStunning'=> 'nullable|numeric',
            ]);

            // Save Data in Session
            $data_umum = $request->all();
            session()->put('umum', $data_umum);
            return redirect()->action('Checklists5Controller@survey');
        }

        // GET Request
        $list_uu = UnitUsaha::all();
        return view('checklist5.umum', [
            'list_uu' => $list_uu
        ]);
    }

    // Open Tab Survey in Ceklis 5
    public function survey(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {   

            //validasi
             //validasi
             request()->validate([

                'P6' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'P7' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'P26' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
            ]);
            // Parsing Data
            $data_survey = $request->all();
            if ($request->hasFile('P6')) {
                $path = Storage::putFile('files', $request->file('P6'));
                $data_survey['P6'] = $path;
            } else {
                $data_survey['P6'] = $request['P6'];
            }
            if ($request->hasFile('P7')) {
                $path = Storage::putFile('files', $request->file('P7'));
                $data_survey['P7'] = $path;
            } else {
                $data_survey['P7'] = $request['P7'];
            }
            if ($request->hasFile('P26')) {
                $path = Storage::putFile('files', $request->file('P26'));
                $data_survey['P26'] = $path;
            } else {
                $data_survey['P26'] = $request['P26'];
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
            if (!isset($data_survey['check_p20'])) $data_survey['check_p20'] = '0';
            if (!isset($data_survey['check_p21'])) $data_survey['check_p21'] = '0';
            if (!isset($data_survey['check_p22'])) $data_survey['check_p22'] = '0';
            if (!isset($data_survey['check_p23'])) $data_survey['check_p23'] = '0';
            if (!isset($data_survey['check_p24'])) $data_survey['check_p24'] = '0';
            if (!isset($data_survey['check_p25'])) $data_survey['check_p25'] = '0';
            if (!isset($data_survey['check_p26'])) $data_survey['check_p26'] = '0';
            if (!isset($data_survey['check_p27'])) $data_survey['check_p27'] = '0';
            if (!isset($data_survey['check_p28'])) $data_survey['check_p28'] = '0';
            if (!isset($data_survey['check_p29'])) $data_survey['check_p29'] = '0';
            if (!isset($data_survey['check_p30'])) $data_survey['check_p30'] = '0';
            if (isset($data_survey['check_p32'])) {
                $data_survey['check_p32'] = implode(', ', $data_survey['check_p32']);
            } else {
                $data_survey['check_p32'] = '';
            }
            
            // Save Data in Session
            session()->put('survey', $data_survey);
            return redirect()->action('Checklists5Controller@catatan');
        }

        // GET Request
        return view('checklist5.survey');
    }

    // Open Tab Catatan in Ceklis 5
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
            return redirect()->action('Checklists5Controller@store');
        }

        // GET Request
        $list_dokter = PengawasKesmavet::with(['user', 'user.orang'])->where('isDokter', '=', 1)->get();
        $list_pengawas = PengawasKesmavet::with(['user', 'user.orang'])->get();
        return view('checklist5.catatan', [
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
        $input_ceklis = Form5::create([
            'kategoriRPHR' => $umum['kategoriRPHR'],
            'karyawanProdL' => $umum['karyawanProdL'],
            'karyawanProdP' => $umum['karyawanProdP'],
            'karyawanAdmL' => $umum['karyawanAdmL'],
            'karyawanAdmP' => $umum['karyawanAdmP'],
            'karyawanAMPM' => $umum['karyawanAMPM'],
            'karyawanAWO' => $umum['karyawanAWO'],
            'karyawanHalal' => $umum['karyawanHalal'],
            'karyawanButcher' => $umum['karyawanButcher'],
            'karyawanStunning' => $umum['karyawanStunning'],
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
            'P4' => $survey['P4'],
            'check_p5' => $survey['check_p5'],
            'P5' => $survey['P5'],
            'check_p6' => $survey['check_p6'],
            'P6' => $survey['P6'],
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
            'check_p23' => $survey['check_p23'],
            'P23' => $survey['P23'],
            'check_p24' => $survey['check_p24'],
            'P24' => $survey['P24'],
            'check_p25' => $survey['check_p25'],
            'P25' => $survey['P25'],
            'check_p26' => $survey['check_p26'],
            'P26' => $survey['P26'],
            'check_p27' => $survey['check_p27'],
            'P27' => $survey['P27'],
            'check_p28' => $survey['check_p28'],
            'P28_1' => $survey['P28_1'],
            'P28_2' => $survey['P28_2'],
            'check_p29' => $survey['check_p29'],
            'P29_1' => $survey['P29_1'],
            'P29_2' => $survey['P29_2'],
            'P29_3' => $survey['P29_3'],
            'P29_4' => $survey['P29_4'],
            'check_p30' => $survey['check_p30'],
            'P30_1' => $survey['P30_1'],
            'P30_2' => $survey['P30_2'],
            'P30_3' => $survey['P30_3'],
            'P30_4' => $survey['P30_4'],
            'P30_5' => $survey['P30_5'],
            'P31' => $survey['P31'],
            'check_p32' => $survey['check_p32'],
            'P32' => $survey['P32'],
            'P33' => $survey['P33'],
            'P34' => $survey['P34'],
            'P35' => $survey['P35'],
            'P36_1' => $survey['P36_1'],
            'P36_2' => $survey['P36_2'],
            'P37_1' => $survey['P37_1'],
            'P37_2' => $survey['P37_2'],
            'P38_1' => $survey['P38_1'],
            'P38_2' => $survey['P38_2'],
            'P38_3' => $survey['P38_3'],
            'P38_4' => $survey['P38_4'],
        ]);
        $input_survey = SurveyUnitUsaha::create([
            'idUnitUsaha' => $umum['idUnitUsaha'],
            'idForm5' => $input_ceklis->id,
            'catatan' => $catatan['catatan'],
            'rekomendasi' => $catatan['rekomendasi'],
            'idPengawas' => $catatan['idPengawas'],
            'idPengawas2' => $catatan['idPengawas2'],
            'idPengawas3' => $catatan['idPengawas3'],
            'pjUnitUsaha' => $catatan['pjUnitUsaha'],
        ]);
        // Input ke Tabel PenerimaProdukDistribusi
        if (isset($survey['P32'])){
            for($i=0; $i<$survey['P32']; $i++){
                PenerimaProdukDistribusi::create([
                    'NamaPenerima' => $survey['P32_1'][$i],
                    'JenisProduk' => $survey['P32_2'][$i],
                    'JumlahProduk' => $survey['P32_3'][$i],
                    'AlamatPenerima' => $survey['P32_4'][$i],
                    'surveyUnitUsaha_idsurveyUnitusaha' => $input_survey->id,
                ]);
            };
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
