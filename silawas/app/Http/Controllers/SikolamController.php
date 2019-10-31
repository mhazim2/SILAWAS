<?php

namespace App\Http\Controllers;

use Alert;

use App\Aduan;
use App\User;


use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;


class SikolamController extends Controller
{
    public function dashboard()
    {

        $count = Aduan::all()->count();
        return view('sikolam.dashboard', [
            'sikolam' => true,
            'jumlah'=>$count,
        ]);
    }
    
    public function pengawas()
    {
        return view('sikolam.pengawas', [
            'sikolam' => true
            ]);
        }

    public function aduan()
    {

        $laporan = Aduan::all();

        return view('sikolam.aduan', [
            'listlaporan' => $laporan,
            'sikolam' => true,
        ]);
    }

    public function detailAduan($id)
    {
        $laporan = Aduan::where('id', $id)->get();
        
        return view('sikolam.detail-aduan', [
            'sikolam' => true,
            'laporan' => $laporan,
        ]);
    }
        
    public function laporan()
    {
        $laporan = Aduan::all();

        return view('sikolam.laporan', [
            'listAduan' => $laporan
        ]);
    }

    public function index()
    {

        $laporan = Aduan::all();

        $petugas = DB::table('PengawasKesmavet')
        ->join('user', 'PengawasKesmavet.idUser', '=', 'user.id')
        ->join('Orang', 'user.Orang_idOrang', '=', 'Orang.idOrang')
        ->join('WilayahKerja', 'PengawasKesmavet.idWilayahKerja', '=', 'WilayahKerja.idWilayahKerja')
        ->select('*')
        ->where('user.accessRoleId', '=', 7)
        ->get();
       $listpetugas = $petugas->toArray();
        return view('sikolam.index', [
            'listlaporan' => $laporan,
            'listpetugas' => $listpetugas,
        ]);
    }    

    public function login(Request $request)
    {

        // $password = bcrypt($request->$password);

        // $user = User::where([
        // 'email' =>$request-> $email,
        // 'passwordHash' => $password,
        // 'accessRoleId' => 1,
        // ])->first();
        // Auth::login($user);

        return view('sikolam.login');
    }

    public function storeLaporan(Request $request){
        
        request()->validate([

            'bukti_fisik' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',
        ]);

        if ($request->hasFile('bukti_fisik')) {
            $path = Storage::putFile('files', $request->file('bukti_fisik'));
         
            $request['bukti_fisik'] = $path;
        } else {
            $request['bukti_fisik'] = $request['bukti_fisik'];
        }


        $aduan = Aduan::create([
            'nama'=> $request['nama'],
            'kontak'=> $request['kontak'],
            'alamat'=> $request['alamat'],
            'kategori'=> $request['kategori'],
            'aduan'=> $request['aduan'],
            'bukti_fisik'=> $path,
        ]);

        

        if (isset($aduan)){
            Alert::success('Terimakasih, Laporan anda sudah diterima dan akan segera ditindaklanjuti');
            return redirect()->back();
            
        }
        else {
            Alert::error('Maaf terjadi kesalahan,silahkan coba masukan lagi');
            return redirect()->back();
        } 
    }
}
