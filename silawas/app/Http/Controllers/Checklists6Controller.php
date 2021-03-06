<?php

namespace App\Http\Controllers;
use Alert;
use App\UnitUsaha;
use App\PengawasKesmavet;
use App\form6;
use App\SurveyUnitUsaha;
use App\DokterHewanPJ;
use App\PenerimaProdukDistribusi;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Checklists6Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function detail($id)
    {
        $survey = SurveyUnitUsaha::findorFail($id);
        $surveyID = $survey->id;

        $formDetail = DB::table('surveyunitusaha')
            ->join('form6','surveyunitusaha.idForm6', '=', 'form6.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form6.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->first();
        
        $dokterPJ = 
        DB::table('surveyunitusaha')
            ->join('form6','surveyunitusaha.idForm6', '=', 'form6.id')
            ->leftJoin('dokterhewanpenanggungjawab','surveyunitusaha.id', '=', 'dokterhewanpenanggungjawab.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('dokterhewanpenanggungjawab.*')
            ->get();

        $penerimaProduksi = 
        DB::table('surveyunitusaha')
            ->join('form6','surveyunitusaha.idForm6', '=', 'form6.id')
            ->leftJoin('penerimaprodukdistribusi','surveyunitusaha.id', '=', 'penerimaprodukdistribusi.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('penerimaprodukdistribusi.*')
            ->get();


        $pengawas1 =  DB::table('PengawasKesmavet')
            ->join('user', 'PengawasKesmavet.idUser', '=', 'user.id')
            ->join('Orang', 'user.Orang_idOrang', '=', 'Orang.idOrang')
            ->where('PengawasKesmavet.idPengawasKesmavet', '=', $survey->idPengawas)
            ->select('Orang.NamaLengkap')
            ->first();

        $pengawas2 =  DB::table('PengawasKesmavet')
            ->join('user', 'PengawasKesmavet.idUser', '=', 'user.id')
            ->join('Orang', 'user.Orang_idOrang', '=', 'Orang.idOrang')
            ->where('PengawasKesmavet.idPengawasKesmavet', '=', $survey->idPengawas2)
            ->select('Orang.NamaLengkap')
            ->first();

        $pengawas3 =  DB::table('PengawasKesmavet')
            ->join('user', 'PengawasKesmavet.idUser', '=', 'user.id')
            ->join('Orang', 'user.Orang_idOrang', '=', 'Orang.idOrang')
            ->where('PengawasKesmavet.idPengawasKesmavet', '=', $survey->idPengawas3)
            ->select('Orang.NamaLengkap')
            ->first();

       

        return view('checklist6.detail', [
            'data' => $formDetail,
            'dokter_pj' => $dokterPJ,
            'list_distribusi' => $penerimaProduksi,
            'pengawas1'=>$pengawas1,
            'pengawas2'=>$pengawas2,
            'pengawas3'=>$pengawas3,
            'surveyID'=>$surveyID,
            
        ]);
    }

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
           
            if (!isset($temp1['tipeUnitUsaha'])) $temp1['tipeUnitUsaha'] = null;
            if (!isset($temp1['jenisProduk'])) $temp1['jenisProduk'] = null;
            if (!isset($temp1['karyawanProduksi_L'])) $temp1['karyawanProduksi_L'] = null;
            if (!isset($temp1['karyawanProduksi_P'])) $temp1['karyawanProduksi_P'] = null;
            if (!isset($temp1['karyawanAdm_L'])) $temp1['karyawanAdm_L'] = null;
            if (!isset($temp1['karyawanAdm_P'])) $temp1['karyawanAdm_P'] = null;
            if (!isset($temp1['karyawanAMPM'])) $temp1['karyawanAMPM'] = null;
            if (!isset($temp1['karyawanAWO'])) $temp1['karyawanAWO'] = null;
            if (!isset($temp1['juruSembelih'])) $temp1['juruSembelih'] = null;
            if (!isset($temp1['operatorStunning'])) $temp1['operatorStunning'] = null;
      
            
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
                "check_b3" => $request['check_b3'],
                "b3_1" => $request['b3_1'],
                "b3_2" => $request['b3_2'],
                "b3_3" => $request['b3_3'],
                "check_b4" => $request['check_b4'],
                "b4_id" => $request['b4_id'],
                "check_b5_1" => $request['check_b5_1'],
                "b5_1_nama" => $request['b5_1_nama'],
                "b5_1_alamat" => $request['b5_1_alamat'],
                "b5_1_sertifikat" => $request['b5_1_sertifikat'],
                "check_b5_2" => $request['check_b5_2'],
                "b5_2_nama" => $request['b5_2_nama'],
                "b5_2_alamat" => $request['b5_2_alamat'],
                "b5_2_sertifikat" => $request['b5_2_sertifikat'],
                "check_b5_3" => $request['check_b5_3'],
                "b5_3_nama" => $request['b5_3_nama'],
                "b5_3_alamat" => $request['b5_3_alamat'],
                "b5_3_sertifikat" => $request['b5_3_sertifikat'],
                "check_b6" => $request['check_b6'],
                "b6_1" => $request['b6_1'],
                "b6_2" => $request['b6_2'],
                "b6_3" => $request['b6_3'],
                "b6_4" => $request['b6_4'],
                "check_b7" => $request['check_b7'],
                "b7" => $request['b7'],
                "check_b8" => $request['check_b8'],
                "b8_1" => $request['b8_1'],
                "b8_2" => $request['b8_2'],
                "check_b9" => $request['check_b9'],
                "b9" => $request['b9'],
                "check_b10" => $request['check_b10'],
                "b10" => $request['b10'],
                "check_b11" => $request['check_b11'],
                "b11" => $request['b11'],
                "check_b12" => $request['check_b12'],
                "b12" => $request['b12'],
                "check_b13" => $request['check_b13'],
                "b13" => $request['b13'],
                "check_b14" => $request['check_b14'],
                "b14" => $request['b14'],
                "check_b15" => $request['check_b15'],
                "b15" => $request['b15'],
                "check_b16" => $request['check_b16'],
                "b16" => $request['b16'],
                "check_b17" => $request['check_b17'],
                "b17" => $request['b17'],
                "check_b18" => $request['check_b18'],
                "b18" => $request['b18'],
                "b19" => $request['b19'],
                "b20" => $request['b20'],
                "b21_1" => $request['b21_1'],
                "b21_2" => $request['b21_2'],
                "b22" => $request['b22'],
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
                "check_b28" => $request['check_b28'],
                "b28_1" => $request['b28_1'],
                "b28_2" => $request['b28_2'],
                "b28_3" => $request['b28_3'],
                "check_b29" => $request['check_b29'],
                "b29_unit" => $request['b29_unit'],
                "b29_kapasitas" => $request['b29_kapasitas'],
                "b29_realisasi" => $request['b29_realisasi'],
                "b29_metode" => $request['b29_metode'],
                "check_b30" => $request['check_b30'],
                "b30_unit" => $request['b30_unit'],
                "b30_kapasitas" => $request['b30_kapasitas'],
                "b30_realisasi" => $request['b30_realisasi'],
                "b30_waktu" => $request['b30_waktu'],
                "b30_alamat" => $request['b30_alamat'],
                "b31" => $request['check_b31'],
                "check_b32" => $request['check_b32'],
                "b32_jenisAlat" => $request['b32_jenisAlat'],
                "b32_jumlahAlat" => $request['b32_jumlahAlat'],
                "b32_kapasitas" => $request['b32_kapasitas'],
                "check_b33" => $request['check_b33'],
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

   // Open Tab Catatan in Ceklis 6
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
            'tipeUnitUsaha'=> $umum['tipeUnitUsaha'],
            'jenisProduk'=> $umum['jenisProduk'],
            'karyawanProduksi_L'=> $umum['karyawanProduksi_L'],
            'karyawanProduksi_P'=> $umum['karyawanProduksi_P'],
            'karyawanAdm_L'=> $umum['karyawanAdm_L'],
            'karyawanAdm_P'=> $umum['karyawanAdm_P'],
            'karyawanAMPM'=> $umum['karyawanAMPM'],
            'karyawanAWO'=> $umum['karyawanAWO'],
            'juruSembelih'=> $umum['juruSembelih'],
            'operatorStunning'=> $umum['operatorStunning'],
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
            "check_b3" => $survey['check_b3'],
            "b3_1" => $survey['b3_1'],
            "b3_2" => $survey['b3_2'],
            "b3_3" => $survey['b3_3'],
            "check_b4" => $survey['check_b4'],
            "b4_id" => $survey['b4_id'],
            "check_b5_1" => $survey['check_b5_1'],
            "b5_1_nama" => $survey['b5_1_nama'],
            "b5_1_alamat" => $survey['b5_1_alamat'],
            "b5_1_sertifikat" => $survey['b5_1_sertifikat'],
            "check_b5_2" => $survey['check_b5_2'],
            "b5_2_nama" => $survey['b5_2_nama'],
            "b5_2_alamat" => $survey['b5_2_alamat'],
            "b5_2_sertifikat" => $survey['b5_2_sertifikat'],
            "check_b5_3" => $survey['check_b5_3'],
            "b5_3_nama" => $survey['b5_3_nama'],
            "b5_3_alamat" => $survey['b5_3_alamat'],
            "b5_3_sertifikat" => $survey['b5_3_sertifikat'],
            "check_b6" => $survey['check_b6'],
            "b6_1" => $survey['b6_1'],
            "b6_2" => $survey['b6_2'],
            "b6_3" => $survey['b6_3'],
            "b6_4" => $survey['b6_4'],
            "check_b7" => $survey['check_b7'],
            "b7" => $survey['b7'],
            "check_b8" => $survey['check_b8'],
            "b8_1" => $survey['b8_1'],
            "b8_2" => $survey['b8_2'],
            "check_b9" => $survey['check_b9'],
            "b9" => $survey['b9'],
            "check_b10" => $survey['check_b10'],
            "b10" => $survey['b10'],
            "check_b11" => $survey['check_b11'],
            "b11" => $survey['b11'],
            "check_b12" => $survey['check_b12'],
            "b12" => $survey['b12'],
            "check_b13" => $survey['check_b13'],
            "b13" => $survey['b13'],
            "check_b14" => $survey['check_b14'],
            "b14" => $survey['b14'],
            "check_b15" => $survey['check_b15'],
            "b15" => $survey['b15'],
            "check_b16" => $survey['check_b16'],
            "b16" => $survey['b16'],
            "check_b17" => $survey['check_b17'],
            "b17" => $survey['b17'],
            "check_b18" => $survey['check_b18'],
            "b18" => $survey['b18'],
            "b19" => $survey['b19'],
            "b20" => $survey['b20'],
            "b21_1" => $survey['b21_1'],
            "b21_2" => $survey['b21_2'],
            "b22" => $survey['b22'],
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
            "check_b28" => $survey['check_b28'],
            "b28_1" => $survey['b28_1'],
            "b28_2" => $survey['b28_2'],
            "b28_3" => $survey['b28_3'],
            "check_b29" => $survey['check_b29'],
            "b29_unit" => $survey['b29_unit'],
            "b29_kapasitas" => $survey['b29_kapasitas'],
            "b29_realisasi" => $survey['b29_realisasi'],
            "b29_metode" => $survey['b29_metode'],
            "check_b30" => $survey['check_b30'],
            "b30_unit" => $survey['b30_unit'],
            "b30_kapasitas" => $survey['b30_kapasitas'],
            "b30_realisasi" => $survey['b30_realisasi'],
            "b30_waktu" => $survey['b30_waktu'],
            "b30_alamat" => $survey['b30_alamat'],
            "b31" => $survey['b31'],
            "check_b32" => $survey['check_b32'],
            "b32_jenisAlat" => $survey['b32_jenisAlat'],
            "b32_jumlahAlat" => $survey['b32_jumlahAlat'],
            "b32_kapasitas" => $survey['b32_kapasitas'],
            "check_b33" => $survey['check_b33'],
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
            'tipeForm' => 'Rumah Potong Hewan Unggas',
            'created_at' => $request['tanggalPengawasan_date'],
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

        session()->forget('umum');
        session()->forget('survey');
       
       
        Alert::success('Ceklis Berhasil Disimpan');
        return redirect()->route('pengawasan.show');
    }

    public function update(Request $request, $id){
        $survey = SurveyUnitUsaha::find($id);
        $form = form6::where('id', $survey->idForm6)->first();

        if ($request->isMethod('post')) {
            
            $this->validate($request,[
                'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,pdf|max:2048',

            ]);
            
            $path = '';    
                if($request->hasFile('file')){
                
                    $name = Storage::disk('local')->put('files', $request->file);
                    $path = $name;     
                }
        }

        //update tabel survey
            $survey->NamaUnitUsaha = $request['NamaUnitUsaha'];
            $survey->idUnitUsaha =  $request['idUnitUsaha']; 
            $survey->idPengawas =  $request['idPengawas']; 
            $survey->idPengawas2 =  $request['idPengawas2']; 
            $survey->idPengawas3 =  $request['idPengawas3']; 
            $survey->catatan =  $request['catatan']; 
            $survey->rekomendasi =  $request['rekomendasi']; 
        
        //update tabel form 6
        $form->kapasitasPemeliharaan = $request['kapasitasPemeliharaan'];
        $form->tipeUnitUsaha = $request['tipeUnitUsaha'];
        $form->jenisProduk = $request['jenisProduk'];
        $form->karyawanProduksi_L = $request['karyawanProduksi_L'];
        $form->karyawanProduksi_P = $request['karyawanProduksi_P'];
        $form->karyawanAdm_L = $request['karyawanAdm_L'];
        $form->karyawanAdm_P = $request['karyawanAdm_P'];
        $form->karyawanAMPM = $request['karyawanAMPM'];
        $form->karyawanAWO = $request['karyawanAWO'];
        $form->juruSembelih = $request['juruSembelih'];
        $form->operatorStunning = $request['operatorStunning'];
        $form->b1_niu_id = $request['b1_niu_id'];
        $form->b1_niu_date = $request['b1_niu_date'];
        $form->b1_npwp_id = $request['b1_npwp_id'];
        $form->b1_npwp_date= $request['b1_npwp_date'];
        $form->b1_siup_id= $request['b1_siup_id'];
        $form->b1_siup_date= $request['b1_siup_date'];
        $form->b1_nib_id= $request['b1_nib_id'];
        $form->b1_nib_date= $request['b1_nib_date'];
        $form->b1_pks_id= $request['b1_pks_id'];
        $form->b1_pks_date= $request['b1_pks_date'];
        $form->check_b2 = $request['check_b2'];
        $form->check_b3 = $request['check_b3'];
        $form->b3_1 = $request['b3_1'];
        $form->b3_2 = $request['b3_2'];
        $form->b3_3 = $request['b3_3'];
        $form->check_b4 = $request['check_b4'];
        $form->b4_id = $request['b4_id'];
        $form->check_b5_1 = $request['check_b5_1'];
        $form->b5_1_nama = $request['b5_1_nama'];
        $form->b5_1_alamat = $request['b5_1_alamat'];
        $form->b5_1_sertifikat = $request['b5_1_sertifikat'];
        $form->check_b5_2 = $request['check_b5_2'];
        $form->b5_2_nama = $request['b5_2_nama'];
        $form->b5_2_alamat = $request['b5_2_alamat'];
        $form->b5_2_sertifikat = $request['b5_2_sertifikat'];
        $form->check_b5_3 = $request['check_b5_3'];
        $form->b5_3_nama = $request['b5_3_nama'];
        $form->b5_3_alamat = $request['b5_3_alamat'];
        $form->b5_3_sertifikat = $request['b5_3_sertifikat'];
        $form->check_b6 = $request['check_b6'];
        $form->b6_1= $request['b6_1'];
        $form->b6_2= $request['b6_2'];
        $form->b6_3= $request['b6_3'];
        $form->b6_4= $request['b6_4'];
        $form->check_b7= $request['check_b7'];
        $form->b7= $request['b7'];
        $form->check_b8= $request['check_b8'];
        $form->b8_1= $request['b8_1'];
        $form->b8_2= $request['b8_2'];
        $form->check_b9= $request['check_b9'];
        $form->b9= $request['b9'];
        $form->check_b10= $request['check_b10'];
        $form->b10= $request['b10'];
        $form->check_b11= $request['check_b11'];
        $form->b11= $request['b11'];
        $form->check_b12= $request['check_b12'];
        $form->b12= $request['b12'];
        $form->check_b13= $request['check_b13'];
        $form->b13= $request['b13'];
        $form->check_b14= $request['check_b14'];
        $form->b14= $request['b14'];
        $form->check_b15= $request['check_b15'];
        $form->b15= $request['b15'];
        $form->check_b16= $request['check_b16'];
        $form->b16= $request['b16'];
        $form->check_b17= $request['check_b17'];
        $form->b17= $request['b17'];
        $form->check_b18= $request['check_b18'];
        $form->b18= $request['b18'];
        $form->b19= $request['b19'];
        $form->b20= $request['b20'];
        $form->b21_1= $request['b21_1'];
        $form->b21_2= $request['b21_2'];
        $form->b22= $request['b22'];
        $form->b23_1= $request['b23_1'];
        $form->b23_2= $request['b23_2'];
        $form->b24= $request['b24'];
        $form->b25_1= $request['b25_1'];
        $form->b25_2= $request['b25_2'];
        $form->b26_1= $request['b26_1'];
        $form->b26_2= $request['b26_2'];
        $form->b27_1= $request['b27_1'];
        $form->b27_2= $request['b27_2'];
        $form->b27_3= $request['b27_3'];
        $form->check_b28= $request['check_b28'];
        $form->b28_1= $request['b28_1'];
        $form->b28_2= $request['b28_2'];
        $form->b28_3= $request['b28_3'];
        $form->check_b29= $request['check_b29'];
        $form->b29_unit= $request['b29_unit'];
        $form->b29_kapasitas= $request['b29_kapasitas'];
        $form->b29_realisasi= $request['b29_realisasi'];
        $form->b29_metode= $request['b29_metode'];
        $form->check_b30= $request['check_b30'];
        $form->b30_unit= $request['b30_unit'];
        $form->b30_kapasitas= $request['b30_kapasitas'];
        $form->b30_realisasi= $request['b30_realisasi'];
        $form->b30_waktu= $request['b30_waktu'];
        $form->b30_alamat= $request['b30_alamat'];
        $form->check_b31= $request['check_b31'];
        $form->b31= $request['b31'];
        $form->check_b32= $request['check_b32'];
        $form->b32_jenisAlat= $request['b32_jenisAlat'];
        $form->b32_jumlahAlat= $request['b32_jumlahAlat'];
        $form->b32_kapasitas= $request['b32_kapasitas'];
        $form->check_b33= $request['check_b33'];
        $form->b33= $request['b33'];
        $form->b4_file= $path;

        //simpan model ke db
        $form->save();
        $survey->save();
        if($form && $survey){
            Alert::success('Data Berhasil Diubah');
        }
        else Alert::success('Data gagal Diubah');
        return Redirect::to('/unit-usaha');
    }

    
}
