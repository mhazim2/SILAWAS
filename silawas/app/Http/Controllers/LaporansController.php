<?php

namespace App\Http\Controllers;

use Auth;
use Alert;
use App\UnitUsaha;
use App\SurveyUnitUsaha;
use App\PengawasKesmavet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;


use Excel;
use App\Exports\Report;


class LaporansController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('laporan.index', [
            'content' => false,
        ]);
    }

    public function content(Request $request)
    {
        if ($request['input_jangkawaktu']) {
            $start = $request['start_date'];
            $end = $request['end_date'];
        }
        else {
            if ($request['input_periode'] == '1') {
                $start = date('Y-m-d');
                $end = date('Y-m-d');
            } 
            else if ($request['input_periode'] == '2') {
                $start = date('Y-m-d', strtotime('-1 week'));
                $end = date('Y-m-d');
            }
            else if ($request['input_periode'] == '3') {
                $start = date('Y-m-d', strtotime('-1 month'));
                $end = date('Y-m-d');
            }
            else if ($request['input_periode'] == '4') {
                $start = date('Y-m-d', strtotime('-3 month'));
                $end = date('Y-m-d');
            }
            else if ($request['input_periode'] == '5') {
                $start = date('Y-m-d', strtotime('-1 year'));
                $end = date('Y-m-d');
            }
            else {
                return redirect()->action('LaporansController@index');
            }
        }

        if (Auth::user()->accessRoleId == 1) {
            $listForms = SurveyUnitUsaha::with('unitUsaha')->whereBetween('created_at', [$start, $end])->get();
        } 
        else if (Auth::user()->accessRoleId == 7) {
            $idpetugas = PengawasKesmavet::where('idUser', Auth::user()->id)->first();
            $listForms = SurveyUnitUsaha::with('unitUsaha')
                ->whereBetween('created_at', [$start, $end])
                ->orWhere('idPengawas', $idpetugas->idPengawasKesmavet)
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
        
       
        //return (new Report($start,$end))->download('report.xlsx');

        return view('laporan.index', [
            'content' => true,
            'listForms' => $listForms,
            'start_date' => $start,
            'end_date' => $end,
        ]);
    }

    public function downloadExcel($start_date, $end_date){
        $nama_file = 'LAPORAN_REKAPITULASI_HASIL_PENGAWASANKESMAVET'.date('Y-m-d_H-i-s').'.xlsx';
        return (new Report($start_date, $end_date))->download($nama_file);
    }

    public function testExcel() {
        return view('export.report');
    }
    
}
