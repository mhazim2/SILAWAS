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
    public function detail($id)
    {
        $survey = SurveyUnitUsaha::findorFail($id);
        $surveyID = $survey->id;

        $formDetail = DB::table('surveyunitusaha')
            ->join('form14','surveyunitusaha.idForm14', '=', 'form14.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form14.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->first();
        $pengawas1 =  DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('pengawaskesmavet.idPengawasKesmavet', '=', $survey->idPengawas)
            ->select('orang.NamaLengkap')
            ->first();
        $pengawas2 =  DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('pengawaskesmavet.idPengawasKesmavet', '=', $survey->idPengawas2)
            ->select('orang.NamaLengkap')
            ->first();
        $pengawas3 =  DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('pengawaskesmavet.idPengawasKesmavet', '=', $survey->idPengawas3)
            ->select('orang.NamaLengkap')
            ->first();

        return view('checklist14.detail', [
            'data' => $formDetail,
            'surveyID' => $surveyID,
            'pengawas1' => $pengawas1,
            'pengawas2' => $pengawas2,
            'pengawas3' => $pengawas3,
        ]);
    }

    public function umum(Request $request)
    {
        // POST Request
        $method = $request->method();
        if ($request->isMethod('post')) 
        {   
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
        // $umum = session('umum');
        // $survey = session('survey');

        // Insert to Database

        // Form Complete Redirect
        Alert::success('Ceklis Berhasil Disimpan');
        return redirect()->route('pengawasan.show');
    }

    public function update(Request $request, $id)
    {
        // Fungsi Update
    }
}
