<?php

namespace App\Http\Controllers;

use App\User;
use App\Orang;
use DB;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($id)
    {
        $user = User::findorFail($id);
        if ($user->id != auth()->user()->id) abort(403);
        $orang = DB::table('orang')->where('idOrang',$user->Orang_idOrang)->get();
        //dd($orang);
        return view('profile.index', [
            'user' => $user,
            'orang'=> $orang,
        ]);

        return view('profile.index', compact('user','orang'));
    }

    public function edit($id)
    {
        $user = User::findorFail($id);
        if ($user->id != auth()->user()->id) abort(403);
        $orang = DB::table('orang')->where('idOrang',$user->Orang_idOrang)->get();
        
        return view('profile.edit', [
            'user' => $user,
            'orang'=> $orang,
        ]);

        return view('profile.index', compact('user','orang'));
        
    }

    public function updateProfile($id,Request $request){
        $user = User::findorFail($id);
        $orang = DB::table('orang')->where('idOrang',$user->Orang_idOrang)->get();
        if($orang != null){
            DB::table('orang')->where('idOrang',$user->Orang_idOrang)->update([
                'NamaLengkap'=> $request-> input('NamaLengkap'),
                'TempatLahir' => $request-> input('TempatLahir'),
                'TanggalLahir'=> $request-> input('TanggalLahir'),
                'NomorKTP' =>$request-> input('NomorKTP'),
                'NomorHandphone'=>$request-> input('NomorHandphone'),
                'NPWP'=>$request-> input('NPWP'),
            ]);
            return dd($request);
        }
        else{
        
            $orangID = Orang::create([
            'NamaLengkap'=> $request-> input('NamaLengkap'),
            'TempatLahir' => $request-> input('TempatLahir'),
            'TanggalLahir'=> $request-> input('TanggalLahir'),
            'NomorKTP' =>$request-> input('NomorKTP'),
            'NomorHandphone'=>$request-> input('NomorHandphone'),
            'NPWP'=>$request-> input('NPWP'),
            ]);
            
            $user->Orang_idOrang = $orangID->id;
            $user->save();

            return dd($user);
        }
    }
}
