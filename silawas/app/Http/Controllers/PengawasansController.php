<?php

namespace App\Http\Controllers;

use Auth;
use App\UnitUsaha;
use App\SurveyUnitUsaha;
use App\PengawasKesmavet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class PengawasansController extends Controller
{
    public function index()
    {
        if (Auth::user()->accessRoleId == 1) {
            $listForms = DB::table('surveyunitusaha')
                ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
                ->where('surveyunitusaha.idForm1','=',null)
                ->select('surveyunitusaha.*', 'unitusaha.NamaUnitUsaha', 'unitusaha.namaPemilikUsaha', 'unitusaha.PelakuUsaha_idPemilikUsaha', 'unitusaha.TahunOperasional')
                ->get();
        } else if (Auth::user()->accessRoleId == 7) {
            $petugas = PengawasKesmavet::where('idUser', Auth::user()->id)->first();
            
            $listForms = DB::table('surveyunitusaha')
                ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
                ->where('idPengawas', '=', $petugas->idPengawasKesmavet)
                ->orWhere('idPengawas2', '=', $petugas->idPengawasKesmavet)
                ->orWhere('idPengawas3', '=', $petugas->idPengawasKesmavet)
                ->select('surveyunitusaha.*', 'unitusaha.NamaUnitUsaha', 'unitusaha.namaPemilikUsaha', 'unitusaha.PelakuUsaha_idPemilikUsaha', 'unitusaha.TahunOperasional')
                ->get();
        }
        foreach ($listForms as $key=>$form) {
            if ($form->idForm1) {
                $listForms[$key]->tipeForm = 'Tempat Budidaya Hewan Perah dan Pemerahan Susu';
            } else if ($form->idForm6) {
                $listForms[$key]->tipeForm = 'Rumah Potong Hewan Unggas';
            }else if ($form->idForm7) {
                $listForms[$key]->tipeForm = 'Rumah Potong Hewan Babi';
            }else if ($form->idForm10) {
                $listForms[$key]->tipeForm = 'Gudang Penyimpanan Dingin/Beku';
            } else if ($form->idForm11) {
                $listForms[$key]->tipeForm = 'Gudang Penyimpanan Kering';
            } else if ($form->idForm12) {
                $listForms[$key]->tipeForm = 'Tempat Penjualan';
            } else if ($form->idForm13) {
                $listForms[$key]->tipeForm = 'Hotel, Restoran dan Katering';
            } else if ($form->idForm14) {
                $listForms[$key]->tipeForm = 'Pengangkutan Produk Hewan';
            }
        }

        return view('pengawasan.index', [
            'listForms' => $listForms,
        ]);
    }

    public function checklists()
    {
        return view('pengawasan.list-checklist');
    }

    public function delete($id)
    {
        return view('pengawasan.index');
    }
}
