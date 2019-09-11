<?php

namespace App\Http\Controllers;

use App\UnitUsaha;
use App\SurveyUnitUsaha;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class PengawasansController extends Controller
{
    public function index()
    {
        $listForms = DB::table('surveyunitusaha')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.idForm1','=',null)
            ->select('surveyunitusaha.*','unitusaha.NamaUnitUsaha','unitusaha.PelakuUsaha_idPemilikUsaha', 'unitusaha.TahunOperasional')
            ->get();
        foreach ($listForms as $key=>$form) {
            if ($form->idForm1) {
                $listForms[$key]->tipeForm = 'Tempat Budidaya Hewan Perah dan Pemerahan Susu';
            } else if ($form->idForm6) {
                $listForms[$key]->tipeForm = 'Rumah Potong Hewan Unggas';
            } else if ($form->idForm10) {
                $listForms[$key]->tipeForm = 'Gudang Penyimpanan Dingin/Beku';
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
