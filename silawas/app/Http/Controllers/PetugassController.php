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
        $wilayahkerja = DB::table('wilayahkerja')->select('idWilayahKerja','Nama')->get();
        $listwilayahkerja = $wilayahkerja->toArray();
        $petugas = DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->join('wilayahkerja', 'pengawaskesmavet.idWilayahKerja', '=', 'wilayahkerja.idWilayahKerja')
            ->select('*')
            ->where('user.accessRoleId', '=', 7)
            ->get();
        $result = $petugas->toArray();
        return view('petugas.index', ['listpetugas' => $result,'listwilayahkerja' => $listwilayahkerja,]);
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

        $newstring = substr($data['NIP'], -7);
        
        $tmt = date('Y-m-d');
        $user = User::create([
            'username' => $data['email'],
            'email' => $data['email'],
            'passwordHash' => Hash::make($newstring),
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

    public function deletePetugas ($id){
        $petugas = PengawasKesmavet::find($id);
        $user = User::where('id', $petugas['idUser'])->first();
        $orang = Orang::where('idOrang', $user['Orang_idOrang'])->first();
        
        $petugas->delete();
        $orang=DB::table('orang')->where('idOrang', '=', $user['Orang_idOrang'])->delete();
        $user->delete();
    

        if($orang && $user &&$petugas ){
            Alert::success('Data berhasil dihapus');
            return redirect()->route('petugas.show');
            }
        Alert::error('Data gagal dihapus');
        return redirect()->route('petugas.show');
       
    }
    
    public function editPetugas($id){
            
		$pengawas = DB::table('pengawaskesmavet')->where('idUser',$id)->get();

		return view('edit',['pengawaskesmavet' => $pengawas]);
    }
    public function update(Request $request,$id)
	{
		
		$pengawas = DB::table('pengawaskesmavet')->where('idPengawasKesmavet',$id)->update([
			'NoSK' => $request['NoSK'],
            'PNS_idPegawai' => $request['NIP'],
            'idWilayahKerja' => $request['WilayahKerja'],
            'idRegencyCity' => $request['RegencyCity'],
            'isActive' => $request['isActive'],
            'isDokter' => $request['isDokter'],
            'unitKerja' => $request['unitKerja'],
		    'jabatan' => $request['jabatan'],
            'kewenangan' => $request['kewenangan'],
            'NoRegistrasi'=> $request['NoRegistrasi'],
            'alamatKantor'=> $request['alamatKantor'],
		]);
        if($pengawas ){
            Alert::success('Data berhasil diubah');
            return redirect()->route('petugas.show');
            }
        Alert::error('Data gagal diubah');
		return redirect()->route('petugas.show');
	}
}
