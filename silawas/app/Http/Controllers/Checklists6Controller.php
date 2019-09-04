<?php

namespace App\Http\Controllers;

use App\UnitUsaha;
use App\PengawasKesmavet;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Checklists6Controller extends Controller
{
    public function umum(Request $request)
    {
        $method = $request->method();
        if ($request->isMethod('post')) {
            return redirect()->action('Checklists6Controller@survey');
        }

        $list_uu = UnitUsaha::all();
        return view('checklist6.umum', [
            'list_uu' => $list_uu
        ]);
    }

    public function survey(Request $request)
    {
        $method = $request->method();
        if ($request->isMethod('post')) {
            return redirect()->action('Checklists6Controller@catatan');
        }

        return view('checklist6.survey');
    }

    public function catatan(Request $request)
    {
        $method = $request->method();
        if ($request->isMethod('post')) {
            return redirect()->action('Checklists6Controller@store');
        }

        $list_dokter = DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            // ->where('isDokter', '=', 1)
            ->select('orang.NamaLengkap','pengawaskesmavet.*')
            ->get();
        $list_pengawas = DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->select('orang.NamaLengkap','pengawaskesmavet.*')
            ->get();
            
        return view('checklist6.catatan', [
            'list_dokter' => $list_dokter,
            'list_pengawas' => $list_pengawas
        ]);
    }
}
