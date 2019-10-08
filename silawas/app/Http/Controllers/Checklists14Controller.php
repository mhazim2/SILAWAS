<?php

namespace App\Http\Controllers;

use Alert;
use App\UnitUsaha;
use App\PengawasKesmavet;
use App\SurveyUnitUsaha;
use App\Form14;

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
        $survey = SurveyUnitUsaha::with(['unitUsaha', 'form14'])->where('id', $id)->firstOrFail();
        $pengawas = [
            '1' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas)->first(),
            '2' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas2)->first(),
            '3' => PengawasKesmavet::with(['user', 'user.orang'])->where('idPengawasKesmavet', $survey->idPengawas3)->first()
        ];

        return view('checklist14.detail', [
            'data' => $survey,
            'pengawas' => $pengawas,
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
            return dd($request);
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
            'catatan' => $request['re$request'],
            'rekomendasi' => $request['rekomendasi'],
            'idPengawas' => $request['idPengawas'],
            'idPengawas2' => $request['idPengawas2'],
            'idPengawas3' => $request['idPengawas3'],
            'pjUnitUsaha' => $request['pjAlatAngkut'], 
        ]);
        // Input ke Daftar NKV
        // Input ke Daftar Sertifikat Halal
        // Input ke Daftar Sertifikat Veteriner
        // Input ke Daftar Rekomendasi

        // Form Complete Redirect
        Alert::success('Ceklis Berhasil Disimpan');
        return redirect()->route('pengawasan.show');
    }

    public function update(Request $request, $id)
    {
        // Fungsi Update
    }
}
