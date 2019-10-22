<?php

namespace App\Http\Controllers;

use Alert;

use App\Aduan;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;


class SikolamController extends Controller
{
    public function dashboard()
    {
        return view('sikolam.dashboard', [
            'sikolam' => true
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
        return view('sikolam.aduan', [
            'sikolam' => true
        ]);
    }

    public function detailAduan($id)
    {
        $laporan = Aduan::findOrFail($id);

        return view('sikolam.detail-aduan', [
            'sikolam' => true,
            'detailAduan' => $aduan,
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

        $petugas = DB::table('pengawaskesmavet')
        ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
        ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
        ->join('wilayahkerja', 'pengawaskesmavet.idWilayahKerja', '=', 'wilayahkerja.idWilayahKerja')
        ->select('*')
        ->where('user.accessRoleId', '=', 7)
        ->get();
       $listpetugas = $petugas->toArray();
        return view('sikolam.index', [
            'listpetugas' => $listpetugas
        ]);
    }    

    public function login()
    {
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
            'bukti_fisik'=> $request['bukti_fisik'],
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
