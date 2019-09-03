<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function storeForm1(Request $data){
        // $survey = UnitUsaha::create([
        //     'PelakuUsaha_idPemilikUsaha' => $data['PelakuUsaha_idPemilikUsaha'],
        //     'NamaUnitUsaha' => $data['NamaUnitUsaha'],
        //     'NamaKantorPusat' => $data['NamaKantorPusat'],
        //     'AlamatUnitUsaha'=> $data['AlamatUnitUsaha'],
        //     'AlamatKantorPusat' => $data['AlamatKantorPusat'],
        //     'Telepon'=> $data['Telepon'],
        //     'Fax'=> $data['Fax'],
        //     'Email'=> $data['Email'],
        //     'PenangungJawabTeknis'=>$data['PenangungJawabTeknis'],
        //     'TahunOperasional'=>$data['TahunOperasional'],
        //     'KontakPJ' => $data['KontakPJ'],
        //     ]);
        // //$uu=UnitUsaha::create($request->all());
        // //return dd($uu);
        // //return redirect()->route('pengajuan.index')->with('success','unit usaha created successfully.');
        // return Redirect::to('/pengajuan/formulir/9#tambahan') ->with('success','The data was created succesfully!');
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
        return view('form.formulir-6');
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
