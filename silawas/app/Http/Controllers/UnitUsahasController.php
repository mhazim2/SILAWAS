<?php

namespace App\Http\Controllers;

use App\UnitUsaha;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UnitUsahasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function create()
    {   
        $pemilikusaha = DB::table('pemilikusaha')
            ->join('pelakuusaha', 'pelakuusaha.idPemilikUsaha', '=', 'pemilikusaha.idOrang')
            ->select('pemilikusaha.idPemilikUsaha','pelakuusaha.Nama')
            ->get();
        $result = $pemilikusaha->toArray();
        return view('unit-usaha.create', ['listPemilikUsaha' => $result]);
    }

    public function store(Request $data)
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
        return Redirect::to('/unit-usaha');
    }

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
