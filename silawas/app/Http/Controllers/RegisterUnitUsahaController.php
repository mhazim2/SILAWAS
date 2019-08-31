<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UnitUsaha;

class RegisterUnitUsahaController extends Controller
{
    public function simpan(Request $data)
    {
        $uu = UnitUsaha::create([
            'PelakuUsaha_idPemilikUsaha' => $data['PelakuUsaha_idPemilikUsaha'],
            'NamaUnitUsaha' => $data['NamaUnitUsaha'],
            'NamaKantorPusat' => $data['NamaKantorPusat'],
            'AlamatUnitUsaha'=> $data['AlamatUnitUsaha'],
            'AlamatKantorPusat' => $data['AlamatKantorPusat'],
            'Telepon'=> $data['Telepon'],
            'Fax'=> $data['Fax'],
            'Email'=> $data['Email'],
            'PenangungJawabTeknis'=>$data['PenangungJawabTeknis'],
            'TahunOperasional'=>$data['TahunOperasional'],
            'KontakPJ' => $data['KontakPJ'],
            ]);
        //$uu=UnitUsaha::create($request->all());
        //return dd($uu);
        //return redirect()->route('pengajuan.index')->with('success','unit usaha created successfully.');
        return Redirect::to('/pengajuan/formulir/9#tambahan') ->with('success','The data was created succesfully!');
    }
}
