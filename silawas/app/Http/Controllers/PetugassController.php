<?php

namespace App\Http\Controllers;

use App\User;
use App\Orang;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PetugassController extends Controller
{
    public function index()
    {
        return view('petugas.index');
    }

    public function create()
    {
      
        return view('petugas.create');
    }

    public function show(){
        $petugas = DB::table('user')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->select('user.id','user.email','orang.NamaLengkap','orang.NomorHandphone')
            ->where('user.accessRoleId','=',7)
            ->get();
        $result = $petugas->toArray();

        dd($petugas);
        //return view('unit-usaha.create', ['listPemilikUsaha' => $result]);
    }
}
