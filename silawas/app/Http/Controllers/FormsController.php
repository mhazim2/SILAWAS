<?php

namespace App\Http\Controllers;

use App\UnitUsaha;
use App\SurveyUnitUsaha;
use App\PengawasKesmavet;
use App\Form1;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class FormsController extends Controller
{
    public function form1()
    {   
        $uu = DB::table('unitusaha')
            ->select('unitusaha.*')
            ->get();
        $listuu = $uu->toArray();

        $pengawas = DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->select('orang.NamaLengkap','pengawaskesmavet.*')
            ->get();
        $listpengawas = $pengawas->toArray();

        $DokterPengawas = DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('isDokter', '=', 1)
            ->select('orang.NamaLengkap','pengawaskesmavet.*')
            ->get();
        $listdokter = $DokterPengawas->toArray();

        return view('form.formulir-1', ['listunitusaha' => $listuu,
                                        'listpengawas'=> $listpengawas,
                                        'listdokter'=>$listdokter]);
    }

    public function storeUtamaForm1(Request $data){

        $surveyUtama = [
            'idUnitUsaha'=>$data['NamaUnitUsaha'],
            'kapasitasPemeliharaan'=> $data['kapasitasPemeliharaan'],
            'populasiTernak' => $data['populasiTernak'],
            'kategoriUsaha' => $data['kategoriUsaha'],
            'totalProduksiSusu' => $data['totalProduksiSusu'],
            'wilayahPeredaran' => $data['wilayahPeredaran'],
            'jumlahKaryawan' => $data['jumlahKaryawan'],
        ];
        session()->put('utama', $surveyUtama);
        //return dd($stor);
        return redirect()->action('FormsController@form1');
    }

    public function storeSurveyForm1(Request $data){

        // dd($data);
        // $uploadedFile = $data->file('file'); 
        // $path = $uploadedFile->store('public/files');
        $path = '';
        if($data->hasFile('file')){
            $name = Storage::disk('local')->put('files', $data->file);
            $path = $name;     
        }
       
        $surveySurvey = [
            'P1-1'=>$data['P1-1'],
            'P1-2'=>$data['P1-2'],
            'P1-3'=>$data['P1-3'],
            'P1-4'=>$data['P1-4'],
            'P2'=>$path,
            'P3'=>$data['P3'],
            'P3_ket'=>$data['P3_ket'],
            'P4'=>$data['P4'],
            'P4_ket'=>$data['P4_ket'],
            'P5-1'=>$data['P5-1'],
            'P5-2'=>$data['P5-2'],
            'P5-3'=>$data['P5-3'],
            'P6'=>$data['P6'],
            'P6_ket'=>$data['P6_ket'],
            'P7'=>$data['P7'],
            'P7_ket'=>$data['P7_ket'],
            'P8'=>$data['P8'],
            'P8_ket'=>$data['P8_ket'],
            'P9'=>$data['P9'],
            'P9_ket'=>$data['P9_ket'],
            'P10'=>$data['P10'],
            'P10_ket'=>$data['P10_ket'],
            'P11'=>$data['P11'],
            'P11_ket'=>$data['P11_ket'],
            'P12'=>$data['P12'],
            'P12_ket'=>$data['P12_ket'],
            'P13'=>$data['P13'],
            'P13_ket'=>$data['P13_ket'],
            'P14'=>$data['P14'],
            'P14_ket'=>$data['P14_ket'],
            'P15'=>$data['P15'],
            'P15_ket'=>$data['P15_ket'],
            'P16'=>$data['P16'],
            'P16_ket'=>$data['P16_ket'],
            'P17'=>$data['P17'],
            'P17_ket'=>$data['P17_ket'],
            'P18'=>$data['P18'],
            'P18_ket'=>$data['P18_ket'],
            'P19'=>$data['P19'],
            'P19_ket'=>$data['P19_ket'],
            
        ];
        
        session()->put('survey', $surveySurvey);
    
        return redirect()->action('FormsController@form1');
    }

    public function storeTambahanForm1(Request $data){

        $surveyUtama = [
            'idUnitUsaha'=>$data['NamaUnitUsaha'],
            'kapasitasPemeliharaan'=> $data['kapasitasPemeliharaan'],
            'populasiTernak' => $data['populasiTernak'],
            'kategoriUsaha' => $data['kategoriUsaha'],
            'totalProduksiSusu' => $data['totalProduksiSusu'],
            'wilayahPeredaran' => $data['wilayahPeredaran'],
            'jumlahKaryawan' => $data['jumlahKaryawan'],
        ];
        session()->put('utama', $surveyUtama);
        //return dd($stor);
        return redirect()->action('FormsController@form1');
    }

    public function form2()
    {
        return view('form.formulir-2');
    }

    public function form3()
    {
        return view('form.formulir-3');
    }

    public function form4()
    {
        return view('form.formulir-4');
    }

    public function form5()
    {
        return view('form.formulir-5');
    }

    public function form6()
    {
        $list_uu = UnitUsaha::all();

        $pengawas = DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->select('orang.NamaLengkap','pengawaskesmavet.*')
            ->get();
        $listpengawas = $pengawas->toArray();

        $DokterPengawas = DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('isDokter', '=', 1)
            ->select('orang.NamaLengkap','pengawaskesmavet.*')
            ->get();
        $listdokter = $DokterPengawas->toArray();

        return view('form.formulir-6', [
            'list_uu' => $list_uu,
            'listpengawas'=> $listpengawas,
            'listdokter'=>$listdokter
        ]);
    }

    public function form7()
    {
        return view('form.formulir-7');
    }

    public function form8()
    {
        return view('form.formulir-8');
    }

    public function form9()
    {
        return view('form.formulir-9');
    }

    public function form10()
    {
        return view('form.formulir-10');
    }

    public function form11()
    {
        return view('form.formulir-11');
    }

    public function form12()
    {
        return view('form.formulir-12');
    }

    public function form13()
    {
        return view('form.formulir-13');
    }

    public function form14()
    {
        return view('form.formulir-14');
    }
}
