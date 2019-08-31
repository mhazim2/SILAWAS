<?php

namespace App\Http\Controllers;

use App\UnitUsaha;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class UnitUsahasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uu = DB::table('unitusaha')
            ->join('pemilikusaha', 'unitusaha.PelakuUsaha_idPemilikUsaha', '=', 'pemilikusaha.idPemilikUsaha')
            ->join('orang', 'pemilikusaha.idOrang', '=', 'orang.idOrang')
            ->select('orang.*','unitusaha.*')
            ->get();
        $result = $uu->toArray();
        return view('unit-usaha.index', ['listunitusaha' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $pemilikusaha = DB::table('pemilikusaha')
            ->join('orang', 'orang.idOrang', '=', 'pemilikusaha.idOrang')
            ->select('pemilikusaha.idPemilikUsaha','orang.NamaLengkap')
            ->get();
        $result = $pemilikusaha->toArray();
        
        return view('unit-usaha.create', ['listPemilikUsaha' => $result]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function simpan(Request $data)
    // {
    //     $uu = UnitUsaha::create([
    //         'PelakuUsaha_idPemilikUsaha' => $data['PelakuUsaha_idPemilikUsaha'],
    //         'AlamatUnitUsaha'=> $data['AlamatUnitUsaha'],
    //         'AlamatKantorPusat' =>$data['AlamatKantorPusat'],
    //         'Telepon'=>$request->$data['Telepon'],
    //         'Fax'=>$request-> $data['Fax'],
    //         'Email'=>$request-> $data['Email'],
    //         'PenangungJawabTeknis'=>$data['PenangungJawabTeknis'],
    //         'TahunOperasional'=>$data['TahunOperasional'],
    //         ]);
    //     //$uu=UnitUsaha::create($request->all());
    //     //return dd($uu);
    //     //return redirect()->route('pengajuan.index')->with('success','unit usaha created successfully.');
    //     return Redirect::to('/pengajuan/formulir/9#tambahan') ->with('success','The CPE was created succesfully!');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\UnitUsaha  $unitUsaha
     * @return \Illuminate\Http\Response
     */
    public function show(UnitUsaha $unitUsaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UnitUsaha  $unitUsaha
     * @return \Illuminate\Http\Response
     */
    public function edit(UnitUsaha $unitUsaha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UnitUsaha  $unitUsaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UnitUsaha $unitUsaha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UnitUsaha  $unitUsaha
     * @return \Illuminate\Http\Response
     */
    public function destroy(UnitUsaha $unitUsaha)
    {
        //
    }
}
