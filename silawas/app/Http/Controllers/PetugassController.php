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
        $petugas = DB::table('user')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->select('user.id','user.email','orang.NamaLengkap','orang.NomorHandphone')
            ->where('user.accessRoleId','=',7)
            ->get();
        $result = $petugas->toArray();
        return view('petugas.index', ['listpetugas' => $result]);
    }

    public function create()
    {
      
        return view('petugas.create');
    }
}
