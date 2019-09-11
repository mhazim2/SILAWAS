<?php

namespace App\Http\Controllers;
use Alert;
use App\User;
use App\Orang;
use App\PengawasKesmavet;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PetugassController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $petugas = DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->join('wilayahkerja', 'pengawaskesmavet.idWilayahKerja', '=', 'wilayahkerja.idWilayahKerja')
            ->join('regencycity', 'pengawaskesmavet.idRegencyCity', '=', 'regencycity.idRegencyCity')
            ->select('*')
            ->where('user.accessRoleId', '=', 7)
            ->get();
        $result = $petugas->toArray();
        return view('petugas.index', ['listpetugas' => $result]);
    }

    public function create()
    {
        $wilayahkerja = DB::table('wilayahkerja')->select('idWilayahKerja','Nama')->get();
        $listwilayahkerja = $wilayahkerja->toArray();
        $regencycity = DB::table('regencycity')->select('idRegencyCity','RegencyCityNameID')->get();
        $listregencycity = $regencycity->toArray();
        return view('petugas.create', [
            'listwilayahkerja' => $listwilayahkerja,
            'listregencycity' => $listregencycity,
        ]);
    }

    public function store(Request $data)
    {
        $tmt = date('Y-m-d');
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'passwordHash' => Hash::make($data['password']),
            'authKey' => '123',
            'status' => 10,
            'accessRoleId' => 7
        ]);
        
        $orangID = Orang::create([
            'NamaLengkap' => $data['NamaLengkap'],
            'NomorHandphone' => $data['NomorHandphone'],
        ]);
        
        $user->Orang_idOrang = $orangID->id;
        $user->save();

        $pengawas = PengawasKesmavet::create([
            'idUser' => $user->id,
            'TMT' => $tmt,
            'NoSK' => $data['NoSK'],
            'PNS_idPegawai' => $data['NIP'],
            'idWilayahKerja' => $data['WilayahKerja'],
            'idRegencyCity' => $data['RegencyCity'],
            'isActive' => FALSE,
            'isDokter' => $data['isDokter'],
            'unitKerja' => $data['unitKerja'],
		    'jabatan' => $data['jabatan'],
            'kewenangan' => $data['kewenangan'],
            'NoRegistrasi'=> $data['NoRegistrasi'],
            'alamatKantor'=> $data['alamatKantor'],
        ]);

        if($pengawas){
            Alert::success('Data Berhasil Disimpan');
        }
        else Alert::success('Data gagal disimpan');

        return redirect()->route('petugas.show');
    }
}
