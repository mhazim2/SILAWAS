<?php

namespace App\Http\Controllers;

use Alert;
use App\UnitUsaha;
use App\PengawasKesmavet;
use App\SurveyUnitUsaha;
use App\Form14;
use App\catatanNKV;
use App\rekomendasi;
use App\catatanSerti;
use App\sertiVet;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Checklists14Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function detail($id)
    {
        $survey = SurveyUnitUsaha::with(['form14'])->where('id', $id)->firstOrFail();
        $pengawas = [
            '1' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas)->first(),
            '2' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas2)->first(),
            '3' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas3)->first()
        ];

        $nkv = DB::table('surveyunitusaha')
            ->leftJoin('catatan_nkv','surveyunitusaha.id', '=', 'catatan_nkv.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('catatan_nkv.*')
            ->get();
        
        $halal = DB::table('surveyunitusaha')
            ->leftJoin('catatan_serti','surveyunitusaha.id', '=', 'catatan_serti.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('catatan_serti.*')
            ->get();

        $vet = DB::table('surveyunitusaha')
            ->leftJoin('serti_vet','surveyunitusaha.id', '=', 'serti_vet.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('serti_vet.*')
            ->get();

        $rekomendasi = DB::table('surveyunitusaha')
            ->leftJoin('rekomendasi','surveyunitusaha.id', '=', 'rekomendasi.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('rekomendasi.*')
            ->get();

        return view('checklist14.detail', [
            'data' => $survey,
            'pengawas' => $pengawas,
            'nkv' =>$nkv,
            'halal' =>$halal,
            'vet'=>$vet,
            'rekomendasi'=>$rekomendasi,
        ]);
    }

    public function umum(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {   
            // Validate and Parsing Data
            request()->validate([
                'namaPemilikProduk' => 'required',
                'telpPusat'=> 'nullable|numeric',
                'faxPusat'=> 'nullable|numeric',
                'emailPusat'=> 'nullable|email',
                'telpPengemudi'=> 'nullable|numeric',
                'kapasitasAlatAngkut'=> 'nullable|numeric',
                'jumlahProdukAngkut'=> 'nullable|numeric',
            ]);
            if (isset($request['jenisProduk'])) {
                $request['jenisProduk'] = implode( ", ", $request['jenisProduk'] );
            }
            if (isset($request['jenisProduk_lainnya'])) {
                $request['jenisProduk'] = str_replace("Lainnya", $request['jenisProduk_lainnya'], $request['jenisProduk']);
            }
            if (!isset($request['check_sumber_lokal'])) $request['check_sumber_lokal'] = '0';
            if (!isset($request['check_sumber_impor'])) $request['check_sumber_impor'] = '0';
            
            // Save Data in Session
            $data_umum = $request->all();
            session()->put('umum', $data_umum);
            return redirect()->action('Checklists14Controller@survey');
        }

        // GET Request
        $list_uu = UnitUsaha::all();
        return view('checklist14.umum', [
            'list_uu' => $list_uu
        ]);
    }

    public function survey(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {   
          
            // Parsing Data
            $data_survey = $request->all();
            if (!isset($data_survey['check_p1'])) $data_survey['check_p1'] = '0';
            if (!isset($data_survey['check_p2'])) $data_survey['check_p2'] = '0';
            if (!isset($data_survey['check_p3'])) $data_survey['check_p3'] = '0';
            if (!isset($data_survey['check_p4'])) $data_survey['check_p4'] = '0';
            if (!isset($data_survey['check_p5'])) $data_survey['check_p5'] = '0';
            if (!isset($data_survey['check_p6'])) $data_survey['check_p6'] = '0';
            if (!isset($data_survey['check_p7'])) $data_survey['check_p7'] = '0';
            if (!isset($data_survey['check_p8'])) $data_survey['check_p8'] = '0';
            if (!isset($data_survey['check_p9'])) $data_survey['check_p9'] = '0';
            
            // Save Data in Session
            session()->put('survey', $data_survey);
            return redirect()->action('Checklists14Controller@catatan');
        }

        // GET Request
        return view('checklist14.survey');
    }

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
            return redirect()->action('Checklists14ontroller@store');
        }

        // GET Request
        $list_dokter = PengawasKesmavet::with(['user', 'user.orang'])->where('isDokter', '=', 1)->get();
        $list_pengawas = PengawasKesmavet::with(['user', 'user.orang'])->get();
        return view('checklist14.catatan', [
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

        // Insert to Database
        $input_ceklis = Form14::create([
            'namaPemilikProduk' => $umum['namaPemilikProduk'],
            'alamatPemilikProduk' => $umum['alamatPemilikProduk'],
            'telpPusat' => $umum['telpPusat'],
            'faxPusat' => $umum['faxPusat'],
            'emailPusat' => $umum['emailPusat'],
            'jenisAlatAngkut' => $umum['jenisAlatAngkut'],
            'statusKepemilikan' => $umum['statusKepemilikan'],
            'nomorPolisi' => $umum['nomorPolisi'],
            'namaPengemudi' => $umum['namaPengemudi'],
            'telpPengemudi' => $umum['telpPengemudi'],
            'kapasitasAlatAngkut' => $umum['kapasitasAlatAngkut'],
            'jumlahProdukAngkut' => $umum['jumlahProdukAngkut'],
            'jenisProduk' => $umum['jenisProduk'],
            'check_sumber_lokal' => $umum['check_sumber_lokal'],
            'sumber_lokal' => $umum['sumber_lokal'],
            'check_sumber_impor' => $umum['check_sumber_impor'],
            'sumber_impor' => $umum['sumber_impor'],
            'tujuanPengiriman' => $umum['tujuanPengiriman'],
            'check_p1' => $survey['check_p1'],
            'P1_1' => $survey['P1_1'],
            'P1_2' => $survey['P1_2'],
            'check_p2' => $survey['check_p2'],
            'P2_1' => $survey['P2_1'],
            'P2_2' => $survey['P2_2'],
            'check_p3' => $survey['check_p3'],
            'P3_1' => $survey['P3_1'],
            'P3_2' => $survey['P3_2'],
            'check_p4' => $survey['check_p4'],
            'P4_1' => $survey['P4_1'],
            'P4_2' => $survey['P4_2'],
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
        ]);
        $input_survey = SurveyUnitUsaha::create([
            'idForm14' => $input_ceklis->id,
            'catatan' => $catatan['catatan'],
            'rekomendasi' => $catatan['rekomendasi'],
            'idPengawas' => $catatan['idPengawas'],
            'idPengawas2' => $catatan['idPengawas2'],
            'idPengawas3' => $catatan['idPengawas3'],
            'pjUnitUsaha' => $catatan['pjAlatAngkut'], // Ini bener ga dimasukkin kesini?
            'tipeForm' => 'Pengangkutan Produk Hewan',
        ]);


        // Input ke Daftar NKV
        if (isset($survey['P1_1'])){
            for($i=0;$i<$survey['P1_1'];$i++){
                catatanNKV::create([
                    'namaUnitUsaha'=>$survey['P1_1_1'][$i],
                    'NKV'=>$survey['P1_1_2'][$i],
                    'tanggal'=>$survey['P1_1_3'][$i],
                    'surveyUnitUsaha_idsurveyUnitusaha'=>$input_survey->id,
                ]);
            }
        };           
        // Input ke Daftar Sertifikat Halal
        if (isset($survey['P2_1'])){
            for($i=0;$i<$survey['P2_1'];$i++){
                catatanSerti::create([
                    'namaUnitUsaha'=>$survey['P2_1_1'][$i],
                    'nomorSerti'=>$survey['P2_1_2'][$i],
                    'tanggalSerti'=>$survey['P2_1_3'][$i],
                    'masaBerlaku'=>$survey['P2_1_4'][$i],
                    'surveyUnitUsaha_idsurveyUnitusaha'=>$input_survey->id,
                ]);
            }
        };           
        // Input ke Daftar Sertifikat Veteriner
        if (isset($survey['P3_1'])){
            for($i=0;$i<$survey['P3_1'];$i++){
                sertiVet::create([
                    'nomorSerti'=>$survey['P3_1_1'][$i],
                    'namaInstansi'=>$survey['P3_1_2'][$i],
                    'tanggalSerti'=>$survey['P3_1_3'][$i],
                    'surveyUnitUsaha_idsurveyUnitusaha'=>$input_survey->id,
                ]);
            }
        };         

        // Input ke Daftar Rekomendasi
        if (isset($survey['P4_1'])){
            for($i=0;$i<$survey['P4_1'];$i++){
                rekomendasi::create([
                    'nomorRekomendasi'=>$survey['P4_1_1'][$i],
                    'tanggalRekomendasi'=>$survey['P4_1_2'][$i],
                    'namaInstansi'=>$survey['P4_1_3'][$i],
                    'surveyUnitUsaha_idsurveyUnitusaha'=>$input_survey->id,
                ]);
            }
        };       

        // Form Complete Redirect
        Alert::success('Ceklis Berhasil Disimpan');
        return redirect()->route('pengawasan.show');
    }

    public function update(Request $request, $id)
    {
        // Fungsi Update
    }
}
