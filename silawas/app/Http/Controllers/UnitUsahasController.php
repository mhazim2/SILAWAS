<?php

namespace App\Http\Controllers;

use App\UnitUsaha;
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
        return view('unit-usaha.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unit-usaha.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // UnitUsaha::create([
        //     'PelakuUsaha_idPerusahaan'=> 1,
        //     'PelakuUsaha_idPemilikUsaha' => 1,
        //     'AlamatUnitUsaha'=> $request-> input('AlamatUnitUsaha'),
        //     'AlamatKantorPusat' =>$request-> input('AlamatKantorPusat'),
        //     'Telepon'=>$request-> input('Telepon'),
        //     'Fax'=>$request-> input('Fax'),
        //     'Email'=>$request-> input('Email'),
        //     'PenangungJawabTeknis'=>$request-> input('PenangungJawabTeknis'),
        //     'TahunOperasional'=>$request-> input('TahunOperasional'),
        //     ]);
        $uu=UnitUsaha::create($request->all());
        
        //return redirect()->route('pengajuan.index')->with('success','unit usaha created successfully.');
        return Redirect::to('/pengajuan/formulir/9#tambahan') ->with('success','The CPE was created succesfully!');
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
