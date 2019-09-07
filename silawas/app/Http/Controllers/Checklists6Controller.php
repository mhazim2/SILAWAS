<?php

namespace App\Http\Controllers;

use App\UnitUsaha;
use App\PengawasKesmavet;
use App\form6;
use App\SurveyUnitUsaha;
use App\DokterHewanPJ;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Checklists6Controller extends Controller
{
    public function umum(Request $request)
    {
        $method = $request->method();
        if ($request->isMethod('post')) {

            request()->validate([
                
                'NamaUnitUsaha' => 'required',
                'KaryawanProdL'=> 'nullable|numeric',
                'KaryawanProdP'=> 'nullable|numeric',
                'KaryawanAdminL'=> 'nullable|numeric',
                'KaryawanAdminP'=> 'nullable|numeric',
                'KaryawanAMPM'=> 'nullable|numeric',
                'KaryawanAWO'=> 'nullable|numeric',
                'KaryawanHalal'=> 'nullable|numeric',
                'KaryawanStunning'=> 'nullable|numeric',
    
            ]);

            $temp1 = $request->all();
            session()->put('umum', $temp1);
           
            return redirect()->action('Checklists6Controller@survey');
        }

        $list_uu = UnitUsaha::all();
        return view('checklist6.umum', [
            'list_uu' => $list_uu
        ]);
    }

    public function survey(Request $request)
    {
        $method = $request->method();
            
        if ($request->isMethod('post')) {
            $this->validate($request,[
                'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',

            ]);
            
            $path = '';
            
                if( isset($request['b20'])){
                    $request['b20']= implode( ", ", $request['b20'] );
                }
    
                if( isset($request['b22'])){
                    $request['b22'] = implode( ", ", $request['b22'] );
                }
                
                if (isset($request['check_b31'])){
                    $request['check_b31'] = implode( ", ", $request['check_b31'] );
                }
                if($request->hasFile('file')){
                
                    $name = Storage::disk('local')->put('files', $request->file);
                    $path = $name;     
                }
               
            $temp1=[
                "b1_niu_id" => $request['b1_niu_id'],
                "b1_niu_date" => $request['b1_niu_date'],
                "b1_npwp_id" => $request['b1_npwp_id'],
                "b1_npwp_date" => $request['b1_npwp_date'],
                "b1_siup_id" => $request['b1_siup_id'],
                "b1_siup_date" => $request['b1_siup_date'],
                "b1_nib_id" => $request['b1_nib_id'],
                "b1_nib_date" => $request['b1_nib_date'],
                "b1_pks_id" => $request['b1_pks_id'],
                "b1_pks_date" => $request['b1_pks_date'],
                "check_b2" => $request['check_b2'],
                "b3_1" => $request['b3_1'],
                "b3_2" => $request['b3_2'],
                "b3_3" => $request['b3_3'],
                "check_b4" => $request['check_b4'],
                "b4_id" => $request['b4_id'],
                "b5_1_nama" => $request['b5_1_nama'],
                "b5_1_alamat" => $request['b5_1_alamat'],
                "b5_1_sertifikat" => $request['b5_1_sertifikat'],
                "b5_2_nama" => $request['b5_2_nama'],
                "b5_2_alamat" => $request['b5_2_alamat'],
                "b5_2_sertifikat" => $request['b5_2_sertifikat'],
                "b5_3_nama" => $request['b5_3_nama'],
                "b5_3_alamat" => $request['b5_3_alamat'],
                "b5_3_sertifikat" => $request['b5_3_sertifikat'],
                "b6_1" => $request['b6_1'],
                "b6_2" => $request['b6_2'],
                "b6_3" => $request['b6_3'],
                "b6_4" => $request['b6_4'],
                "b7" => $request['b7'],
                "b8_1" => $request['b8_1'],
                "b8_2" => $request['b8_2'],
                "b9" => $request['b9'],
                "b10" => $request['b10'],
                "b11" => $request['b11'],
                "b12" => $request['b12'],
                "b13" => $request['b13'],
                "b14" => $request['b14'],
                "b15" => $request['b15'],
                "b16" => $request['b16'],
                "b17" => $request['b17'],
                "b18" => $request['b18'],
                "b19" => $request['b19'],
                "b21_1" => $request['b21_1'],
                "b21_2" => $request['b21_2'],
                "b23_1" => $request['b23_1'],
                "b23_2" => $request['b23_2'],
                "b24" => $request['b24'],
                "b25_1" => $request['b25_1'],
                "b25_2" => $request['b25_2'],
                "b26_1" => $request['b26_1'],
                "b26_2" => $request['b26_2'],
                "b27_1" => $request['b27_1'],
                "b27_2" => $request['b27_2'],
                "b27_3" => $request['b27_3'],
                "b28_1" => $request['b28_1'],
                "b28_2" => $request['b28_2'],
                "b28_3" => $request['b28_3'],
                "b29_unit" => $request['b29_unit'],
                "b29_kapasitas" => $request['b29_kapasitas'],
                "b29_realisasi" => $request['b29_realisasi'],
                "b29_metode" => $request['b29_metode'],
                "b30_unit" => $request['b30_unit'],
                "b30_kapasitas" => $request['b30_kapasitas'],
                "b30_realisasi" => $request['b30_realisasi'],
                "b30_waktu" => $request['b30_waktu'],
                "b30_alamat" => $request['b30_alamat'],
                "check_b31" => $request['check_b31'],
                "b31" => $request['check_b31'],
                "b33" => $request['b33'],
                "b4_file" => $path,
                "b2_count" => $request['b2_count'],
                "pj_teknis_id" => $request['pj_teknis_id'],
                "pj_teknis_date" => $request['pj_teknis_date'],
                "pj_teknis_status"=> $request['pj_teknis_status'],
                "b31_count" => $request['b31_count'],
                "b31_nama" => $request['b31_nama'],
                "b31_jenis" => $request['b31_jenis'],
                "b31_jumlah" => $request['b31_jumlah'],
                "b31_alamat" => $request['b31_alamat'],
            ];
                
            
            session()->put('survey', $temp1);
           
            
            return redirect()->action('Checklists6Controller@catatan');
        }

        return view('checklist6.survey');
    }

    public function catatan(Request $request)
    {
        $list_dokter = DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->where('isDokter', '=', 1)
            ->select('orang.NamaLengkap','pengawaskesmavet.*')
            ->get();
        $list_pengawas = DB::table('pengawaskesmavet')
            ->join('user', 'pengawaskesmavet.idUser', '=', 'user.id')
            ->join('orang', 'user.Orang_idOrang', '=', 'orang.idOrang')
            ->select('orang.NamaLengkap','pengawaskesmavet.*')
            ->get();
        
        return view('checklist6.catatan', [
            'list_dokter' => $list_dokter,
            'list_pengawas' => $list_pengawas
        ]);
    }

    public function store(Request $request)
    {   
        $umum = session('umum');
        $survey = session('survey');

        $form = form6::create([
            'tipeUnitUsaha'=> $umum['TipeUnitUsaha'],
            'jenisProduk'=> $umum['JenisProduk'],
            'karyawanProduksi_L'=> $umum['KaryawanProdL'],
            'karyawanProduksi_P'=> $umum['KaryawanProdP'],
            'karyawanAdm_L'=> $umum['KaryawanAdminL'],
            'karyawanAdm_P'=> $umum['KaryawanAdminP'],
            'karyawanAMPM'=> $umum['KaryawanAMPM'],
            'karyawanAWO'=> $umum['KaryawanAWO'],
            'juruSembelih'=> $umum['KaryawanHalal'],
            'operatorStunning'=> $umum['KaryawanStunning'],
            "b1_niu_id" => $survey['b1_niu_id'],
            "b1_niu_date" => $survey['b1_niu_date'],
            "b1_npwp_id" => $survey['b1_npwp_id'],
            "b1_npwp_date" => $survey['b1_npwp_date'],
            "b1_siup_id" => $survey['b1_siup_id'],
            "b1_siup_date" => $survey['b1_siup_date'],
            "b1_nib_id" => $survey['b1_nib_id'],
            "b1_nib_date" => $survey['b1_nib_date'],
            "b1_pks_id" => $survey['b1_pks_id'],
            "b1_pks_date" => $survey['b1_pks_date'],
            "check_b2" => $survey['check_b2'],
            "b3_1" => $survey['b3_1'],
            "b3_2" => $survey['b3_2'],
            "b3_3" => $survey['b3_3'],
            "check_b4" => $survey['check_b4'],
            "b4_id" => $survey['b4_id'],
            "b5_1_nama" => $survey['b5_1_nama'],
            "b5_1_alamat" => $survey['b5_1_alamat'],
            "b5_1_sertifikat" => $survey['b5_1_sertifikat'],
            "b5_2_nama" => $survey['b5_2_nama'],
            "b5_2_alamat" => $survey['b5_2_alamat'],
            "b5_2_sertifikat" => $survey['b5_2_sertifikat'],
            "b5_3_nama" => $survey['b5_3_nama'],
            "b5_3_alamat" => $survey['b5_3_alamat'],
            "b5_3_sertifikat" => $survey['b5_3_sertifikat'],
            "b6_1" => $survey['b6_1'],
            "b6_2" => $survey['b6_2'],
            "b6_3" => $survey['b6_3'],
            "b6_4" => $survey['b6_4'],
            "b7" => $survey['b7'],
            "b8_1" => $survey['b8_1'],
            "b8_2" => $survey['b8_2'],
            "b9" => $survey['b9'],
            "b10" => $survey['b10'],
            "b11" => $survey['b11'],
            "b12" => $survey['b12'],
            "b13" => $survey['b13'],
            "b14" => $survey['b14'],
            "b15" => $survey['b15'],
            "b16" => $survey['b16'],
            "b17" => $survey['b17'],
            "b18" => $survey['b18'],
            "b19" => $survey['b19'],
            "b21_1" => $survey['b21_1'],
            "b21_2" => $survey['b21_2'],
            "b23_1" => $survey['b23_1'],
            "b23_2" => $survey['b23_2'],
            "b24" => $survey['b24'],
            "b25_1" => $survey['b25_1'],
            "b25_2" => $survey['b25_2'],
            "b26_1" => $survey['b26_1'],
            "b26_2" => $survey['b26_2'],
            "b27_1" => $survey['b27_1'],
            "b27_2" => $survey['b27_2'],
            "b27_3" => $survey['b27_3'],
            "b28_1" => $survey['b28_1'],
            "b28_2" => $survey['b28_2'],
            "b28_3" => $survey['b28_3'],
            "b29_unit" => $survey['b29_unit'],
            "b29_kapasitas" => $survey['b29_kapasitas'],
            "b29_realisasi" => $survey['b29_realisasi'],
            "b29_metode" => $survey['b29_metode'],
            "b30_unit" => $survey['b30_unit'],
            "b30_kapasitas" => $survey['b30_kapasitas'],
            "b30_realisasi" => $survey['b30_realisasi'],
            "b30_waktu" => $survey['b30_waktu'],
            "b30_alamat" => $survey['b30_alamat'],
            "check_b31" => $survey['check_b31'],
            "b31" => $survey['check_b31'],
            "b33" => $survey['b33'],
            "b4_file" => $survey['b4_file'],
        ]);
            
        
        $survey1 = SurveyUnitUsaha::create([
            'idUnitUsaha'=>$umum['NamaUnitUsaha'],
            'idForm6'=> $form->id,
            'catatan'=>$request['catatan'],
            'rekomendasi'=> $request['rekomendasi'],
            'idPengawas' => $request['idPengawas'],
            'idPengawas2' => $request['idPengawas2'],
            'idPengawas3' => $request['idPengawas3'],
            'pjUnitUsaha' => $request['pjUnitUsaha'],
            ]);
        
            
        if (isset($survey['b2_count'])){
            for($i=0;$i<$survey['b2_count'];$i++){
            DokterHewanPJ::create([
                'namaLengkap'=>$survey['pj_teknis_id'][$i],
                'status'=>$survey['pj_teknis_status'][$i],
                'notlp'=>$survey['pj_teknis_date'][$i],
                'surveyUnitUsaha_idsurveyUnitusaha'=>$survey1->id,
              ]);
            }
        };

        if (isset($survey['b31_count'])){
            for($i=0;$i<$survey['b31_count'];$i++){
                PenerimaProdukDistribusi::create([
                    'NamaPenerima'=>$survey['b31_nama'][$i],
                    'JenisProduk'=>$survey['b31_jenis'][$i],
                    'JumlahProduk'=>$survey['b31_jumlah'][$i],
                    'AlamatPenerima'=>$survey['b31_alamat'][$i],
                    'surveyUnitUsaha_idsurveyUnitusaha'=>$survey1->id,
                ]);
            };
        };

        
        
        return redirect()->action('PengajuansController@formulir');
    }

    
}
