<?php

namespace App\Http\Controllers;
use Alert;
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
            ->select('unitusaha.*')
            ->get();
        return view('unit-usaha.index', ['listunitusaha' => $uu]);
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
            'StatusKepemilikan'=> $data['StatusKepemilikan'],
            'PenangungJawabTeknis'=>$data['PenangungJawabTeknis'],
            'TahunOperasional'=>$data['TahunOperasional'],
            'KontakPJ' => $data['KontakPJ'],
		    'TahunBerdiri'=> $data['TahunBerdiri'],
            'koordinat'=> $data['koordinat'],
            'pjUnitUsaha'=> $data['pjUnitUsaha'],
            'pjUnitUsahaKontak'=> $data['pjUnitUsahaKontak'],
            'pjProduksi'=> $data['pjProduksi'],
            'pjProduksiKontak'=> $data['pjProduksiKontak'],
            'pjMutu'=> $data['pjMutu'],
            'pjMutuKontak'=> $data['pjMutuKontak'],
            'pjHigiene'=> $data['pjHigiene'],
            'pjHigieneKontak'=> $data['pjHigieneKontak'],
            'telpUU'=> $data['telepUU'],
            'emailUU'=> $data['emailUU'],
            'faxUU'=> $data['faxUU'],
            'namaPemilikUsaha'=> $data['namaPemilikUsaha'],
        ]);
        if($uu){
            Alert::success('Data Berhasil Disimpan');
        }
        else Alert::success('Data gagal disimpan');
        return Redirect::to('/unit-usaha');
    }

    public function deleteUnitUsaha($id){
        $unit = UnitUsaha::find($id);
        $unit->delete();  
        if($unit){
            Alert::success('Data Berhasil dihapus');
        }
        else Alert::success('Data gagal dihapus');
        return Redirect::to('/unit-usaha');
    }

    public function updateUnitUsaha(Request $request,$id){
        $unit = UnitUsaha::find($id);
        
            $unit->NamaUnitUsaha = $request['NamaUnitUsaha'];
            $unit->AlamatUnitUsaha = $request['AlamatUnitUsaha'];
            $unit->AlamatKantorPusat = $request['AlamatKantorPusat'];
            $unit->Telepon = $request['NamaUnitUsaha'];
            $unit->Fax = $request['Telepon'];
            $unit->Email = $request['Email'];
            $unit->PenangungJawabTeknis = $request['PenangungJawabTeknis'];
            $unit->KontakPJ = $request['KontakPJ'];
            $unit->TahunOperasional = $request['TahunOperasional'];
            $unit->TahunBerdiri = $request['TahunBerdiri'];
            $unit->koordinat = $request['koordinat'];
            $unit->pjUnitUsaha = $request['pjUnitUsaha'];
            $unit->pjUnitUsahaKontak = $request['pjUnitUsahaKontak'];
            $unit->pjProduksi = $request['pjProduksi'];
            $unit->pjProduksiKontak = $request['pjProduksiKontak'];
            $unit->pjMutu = $request['pjMutu'];
            $unit->pjMutuKontak = $request['pjMutuKontak'];
            $unit->pjHigiene = $request['pjHigiene'];
            $unit->pjHigieneKontak = $request['pjHigieneKontak']; 
            $unit->StatusKepemilikan = $request['StatusKepemilikan'];
            $unit->telpUU = $request['telpUU'];
            $unit->faxUU = $request['faxUU'];
            $unit->emailUU = $request['emailUU'];
            $unit->namaPemilikUsaha = $request['namaPemilikUsaha'];

        $unit->save();
        if($unit){
            Alert::success('Data Berhasil Diubah');
        }
        else Alert::success('Data gagal Diubah');
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
