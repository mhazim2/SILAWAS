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

        // Create Form
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

        // Insert to Survey
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
}
