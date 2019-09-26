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
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if (Auth::user()->accessRoleId == 1) {
            $listForms = SurveyUnitUsaha::with('unitUsaha')->get();
        } 
        else if (Auth::user()->accessRoleId == 7) {
            $idpetugas = PengawasKesmavet::where('idUser', Auth::user()->id)->first();
            $listForms = SurveyUnitUsaha::with('unitUsaha')
                ->where('idPengawas', $idpetugas->idPengawasKesmavet)
                ->orWhere('idPengawas2', $idpetugas->idPengawasKesmavet)
                ->orWhere('idPengawas3', $idpetugas->idPengawasKesmavet)
                ->get();
        }
        foreach ($listForms as $key=>$form) {
            if ($form->idForm1) {
                $listForms[$key]->tipeForm = 'Tempat Budidaya Hewan Perah dan Pemerahan Susu';
            }
            else if ($form->idForm2) {
                $listForms[$key]->tipeForm = 'Tempat Penampungan Susu';
            }
            else if ($form->idForm3) {
                $listForms[$key]->tipeForm = 'Tempat Budidaya Unggas Petelur dan Produksi Telur Konsumsi';
            }
            else if ($form->idForm4) {
                $listForms[$key]->tipeForm = 'Tempat Pengepul Telur';
            }
            else if ($form->idForm5) {
                $listForms[$key]->tipeForm = 'Rumah Potong Hewan Ruminansia';
            }
            else if ($form->idForm6) {
                $listForms[$key]->tipeForm = 'Rumah Potong Hewan Unggas';
            }
            else if ($form->idForm7) {
                $listForms[$key]->tipeForm = 'Rumah Potong Hewan Babi';
            }
            else if ($form->idForm8) {
                $listForms[$key]->tipeForm = 'Tempat Pengolahan Pangan Asal Hewan';
            }
            else if ($form->idForm9) {
                $listForms[$key]->tipeForm = 'Tempat Produksi Produk Hewan Non Pangan';
            }
            else if ($form->idForm10) {
                $listForms[$key]->tipeForm = 'Gudang Penyimpanan Dingin/Beku';
            }
            else if ($form->idForm11) {
                $listForms[$key]->tipeForm = 'Gudang Penyimpanan Kering';
            }
            else if ($form->idForm12) {
                $listForms[$key]->tipeForm = 'Tempat Penjualan';
            }
            else if ($form->idForm13) {
                $listForms[$key]->tipeForm = 'Hotel, Restoran dan Katering';
            }
            else if ($form->idForm14) {
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
