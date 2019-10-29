<?php

namespace App\Http\Controllers;

use App\User;
use App\Orang;
use DB;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($id)
    {
        $user = User::findorFail($id);
        if ($user->id != auth()->user()->id) abort(403);
        $orang = DB::table('Orang')->where('idOrang', $user->Orang_idOrang)->get();
        
        return view('profile.index', [
            'user' => $user,
            'orang' => $orang,
        ]);
    }

    public function edit($id)
    {
        $user = User::findorFail($id);
        if ($user->id != auth()->user()->id) abort(403);
        $orang = DB::table('Orang')->where('idOrang', $user->Orang_idOrang)->get();

        return view('profile.edit', [
            'user' => $user,
            'orang' => $orang,
        ]);
    }

    public function update($id, Request $request) 
    {
        $user = User::findorFail($id);
        $orang = DB::table('Orang')->where('idOrang', $user->Orang_idOrang)->get();
        $tanggal_lahir = date('Y-m-d', strtotime($request->input('TanggalLahir')));

        if($orang != null){
            DB::table('Orang')->where('idOrang', $user->Orang_idOrang)->update([
                'NamaLengkap' => $request->input('NamaLengkap'),
                'TempatLahir' => $request->input('TempatLahir'),
                'TanggalLahir' => $tanggal_lahir,
                'NomorKTP' => $request->input('NomorKTP'),
                'NomorHandphone' => $request->input('NomorHandphone'),
                'NPWP' => $request->input('NPWP'),
            ]);
        }
        else{
            $orangID = Orang::create([
                'NamaLengkap' => $request->input('NamaLengkap'),
                'TempatLahir' => $request->input('TempatLahir'),
                'TanggalLahir' => $tanggal_lahir,
                'NomorKTP' => $request->input('NomorKTP'),
                'NomorHandphone' => $request->input('NomorHandphone'),
                'NPWP' => $request->input('NPWP'),
            ]);
            $user->Orang_idOrang = $orangID->id;
            $user->save();
        }
        return redirect()->route('profile.show', ['id' => $id]);
    }
}
