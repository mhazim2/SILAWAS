<?php

namespace App\Http\Controllers;

use Alert;

use App\UnitUsaha;
use App\PengawasKesmavet;
use App\SurveyUnitUsaha;
// use App\Form10;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Checklists10Controller extends Controller
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
        return view('checklist10.umum', [
            'list_uu' => $list_uu
        ]);
    }

    public function survey(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {
            dd($request);
            // $data_survey = $request->all();
            // session()->put('survey', $data_survey);
            return redirect()->action('Checklists1Controller@catatan');
        }

        // GET Request
        return view('checklist10.survey');
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
        return view('checklist10.catatan', [
            'list_dokter' => $list_dokter,
            'list_pengawas' => $list_pengawas
        ]);
    }

    public function store(Request $request)
    {
        // Get All Data
        // $umum = session('umum');
        // $survey = session('survey');
        // $catatan = session('catatan');

        // Form Complete Redirect
        Alert::success('Ceklis Berhasil Disimpan');
        return redirect()->route('pengajuan.show');
    }
}
