<?php

namespace App\Http\Controllers;
use Alert;
use App\UnitUsaha;
use App\PengawasKesmavet;
use App\Form7;
use App\SurveyUnitUsaha;
use App\DokterHewanPJ;
use App\PenerimaProdukDistribusi;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class Checklists7Controller extends Controller
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
            ->join('form7','surveyunitusaha.idForm7', '=', 'form7.id')
            ->join('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('surveyunitusaha.*','form7.*','unitusaha.*','unitusaha.pjUnitUsaha')
            ->first();
        
        $dokterPJ = 
        DB::table('surveyunitusaha')
            ->join('form7','surveyunitusaha.idForm7', '=', 'form7.id')
            ->leftJoin('dokterhewanpenanggungjawab','surveyunitusaha.id', '=', 'dokterhewanpenanggungjawab.surveyUnitUsaha_idsurveyUnitusaha')
            ->where('surveyunitusaha.id', '=', $survey->id)
            ->select('dokterhewanpenanggungjawab.*')
            ->get();

        $penerimaProduksi = 
        DB::table('surveyunitusaha')
            ->join('form7','surveyunitusaha.idForm7', '=', 'form7.id')
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

       

        return view('checklist7.detail', [
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
                // 'check_sumber_impor' => 'required',
                // 'check_sumber_lokal' => 'required',
    
            ]);

            if( isset($request['distribusiDaging'])){
                $request['distribusiDaging']= implode( ", ", $request['distribusiDaging'] );
            }

            
            $temp1 = $request->all();
            session()->put('umum', $temp1);
           
            return redirect()->action('Checklists7Controller@survey');
        }

        $list_uu = UnitUsaha::all();
        return view('checklist7.umum', [
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
                    
            if($request->hasFile('file')){
                    $name = Storage::disk('local')->put('files', $request->file);
                    $path = $name;     
                }

             if( isset($request['P27'])){
                $request['P27']= implode( ", ", $request['P27'] );
            }

            if( isset($request['P28'])){
                $request['P28']= implode( ", ", $request['P28'] );
            }
           
            $temp1=[
                'check_p1_niu' => $request['check_p1_niu'], 
                'p1_niu_id' => $request['p1_niu_id'], 
                'p1_niu_date' => $request['p1_niu_date'], 
                'check_p1_npwp' => $request['check_p1_npwp'],
                'p1_npwp_id' => $request['p1_npwp_id'], 
                'p1_npwp_date' => $request['p1_npwp_date'], 
                'check_p1_siup' => $request['check_p1_siup'],
                'p1_siup_id' => $request['p1_siup_id'], 
                'p1_siup_date' => $request['p1_siup_date'], 
                'check_p1_nib' => $request['check_p1_nib'], 
                'p1_nib_id' => $request['p1_nib_id'], 
                'p1_nib_date' => $request['p1_nib_date'], 
                'check_p1_pks' => $request['check_p1_pks'], 
                'p1_pks_id' => $request['p1_pks_id'], 
                'p1_pks_date' => $request['p1_pks_date'], 
                'check_p2' => $request['check_p2'], 
                'P2_1' => $request['P2_1'], 
                'P2_2' => $request['P2_2'], 
                'P2_3' => $request['P2_3'], 
                'P2_4' => $request['P2_4'], 
                'check_p3' => $request['check_p3'],
                'p3_count' => $request['p3_count'], 
                'check_p4' => $request['check_p4'], 
                'P4' => $request['P4'], 
                'check_p5' => $request['check_p5'], 
                'P5_id' => $request['P5_id'], 
                'P5' => $path,
                'check_p6' => $request['check_p6'], 
                'P6' => $request['P6'], 
                'check_p7' => $request['check_p7'], 
                'P7' => $request['P7'], 
                'check_p8' => $request['check_p8'], 
                'P8' => $request['P8'], 
                'check_p9' => $request['check_p9'], 
                'P9' => $request['P9'], 
                'check_p10' => $request['check_p10'], 
                'P10' => $request['P10'], 
                'check_p11' => $request['check_p11'], 
                'P11' => $request['P11'], 
                'check_p12' => $request['check_p12'],
                'P12' => $request['P12'], 
                'check_p13' => $request['check_p13'], 
                'P13' => $request['P13'], 
                'check_p14' => $request['check_p14'], 
                'P14' => $request['P14'], 
                'check_p15' => $request['check_p15'], 
                'P15' => $request['P15'], 
                'check_p16' => $request['check_p16'], 
                'P16' => $request['P16'], 
                'check_p17' => $request['check_p17'], 
                'P17' => $request['P17'], 
                'check_p18' => $request['check_p18'], 
                'P18' => $request['P18'], 
                'check_p19' => $request['check_p19'],
                'P19' => $request['P19'], 
                'check_p20' => $request['check_p20'], 
                'P20' => $request['P20'], 
                'check_p21' => $request['check_p21'], 
                'P21' => $request['P21'], 
                'check_p22' => $request['check_p22'], 
                'P22' => $request['P22'], 
                'check_p23' => $request['check_p23'], 
                'P23_1' => $request['P23_1'], 
                'P23_2' => $request['P23_2'], 
                'P23_3' => $request['P23_3'], 
                'P23_4' => $request['P23_4'], 
                'check_p24' => $request['check_p24'], 
                'P24_1' => $request['P24_1'], 
                'P24_2' => $request['P24_2'], 
                'P24_3' => $request['P24_3'], 
                'P24_4' => $request['P24_4'], 
                'P24_5' => $request['P24_5'], 
                'check_p25' => $request['check_p25'], 
                'P25_jenisAlat' => $request['P25_jenisAlat'], 
                'P25_jumlahAlat' => $request['P25_jumlahAlat'], 
                'P25_kapasitas' => $request['P25_kapasitas'],
                'check_p26' => $request['check_p26'], 
                'p26_count' => $request['p26_count'], 
                'P27' => $request['P27'], 
                'P28' => $request['P28'], 
                'P29' => $request['P29'], 
                'P30_1' => $request['P30_1'], 
                'P30_2' => $request['P30_2'], 
                'P31_1' => $request['P31_1'], 
                'P31_2' => $request['P31_2'], 
                'pj_teknis_id'  => $request['pj_teknis_id'],
                'pj_teknis_status'  => $request['pj_teknis_status'],
                'pj_teknis_date'  => $request['pj_teknis_date'],
                'P26_nama'  => $request['P26_nama'],
                'P26_jenis'  => $request['P26_jenis'],
                'P26_jumlah'  => $request['P26_jumlah'],
                'P26_alamat'  => $request['P26_alamat'],
            ];
                
            
            session()->put('survey', $temp1);
           
            
            return redirect()->action('Checklists7Controller@catatan');
        }
        
        return view('checklist7.survey');
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
        
        return view('checklist7.catatan', [
            'list_dokter' => $list_dokter,
            'list_pengawas' => $list_pengawas
        ]);
    }

    public function store(Request $request)
    {   

        
        
        $umum = session('umum');
        $survey = session('survey');

        

        $form = form7::create([
            'tipeUnitUsaha'=> $umum['tipeUnitUsaha'],
            'kapasitasPemotongan'=> $umum['kapasitasPemotongan'],
            'realisasiPemotongan'=> $umum['realisasiPemotongan'],
            'operasionalPemotongan'=> $umum['operasionalPemotongan'],
            'check_sumber_lokal'=> $umum['check_sumber_lokal'],
            'sumber_lokal'=> $umum['sumber_lokal'],
            'check_sumber_impor'=> $umum['check_sumber_impor'],
            'sumber_impor'=> $umum['sumber_impor'],
            'distribusiDaging'=> $umum['distribusiDaging'],
            'check_p1_niu' => $survey['check_p1_niu'], 
            'p1_niu_id' => $survey['p1_niu_id'], 
            'p1_niu_date' => $survey['p1_niu_date'], 
            'check_p1_npwp' => $survey['check_p1_npwp'],
            'p1_npwp_id' => $survey['p1_npwp_id'], 
            'p1_npwp_date' => $survey['p1_npwp_date'], 
            'check_p1_siup' => $survey['check_p1_siup'],
            'p1_siup_id' => $survey['p1_siup_id'], 
            'p1_siup_date' => $survey['p1_siup_date'], 
            'check_p1_nib' => $survey['check_p1_nib'], 
            'p1_nib_id' => $survey['p1_nib_id'], 
            'p1_nib_date' => $survey['p1_nib_date'], 
            'check_p1_pks' => $survey['check_p1_pks'], 
            'p1_pks_id' => $survey['p1_pks_id'], 
            'p1_pks_date' => $survey['p1_pks_date'], 
            'check_p2' => $survey['check_p2'], 
            'P2_1' => $survey['P2_1'], 
            'P2_2' => $survey['P2_2'], 
            'P2_3' => $survey['P2_3'], 
            'P2_4' => $survey['P2_4'], 
            'check_p3' => $survey['check_p3'],
            'p3_count' => $survey['p3_count'], 
            'check_p4' => $survey['check_p4'], 
            'P4' => $survey['P4'], 
            'check_p5' => $survey['check_p5'], 
            'P5_id' => $survey['P5_id'], 
            'P5' => $survey['P5'],
            'check_p6' => $survey['check_p6'], 
            'P6' => $survey['P6'], 
            'check_p7' => $survey['check_p7'], 
            'P7' => $survey['P7'], 
            'check_p8' => $survey['check_p8'], 
            'P8' => $survey['P8'], 
            'check_p9' => $survey['check_p9'], 
            'P9' => $survey['P9'], 
            'check_p10' => $survey['check_p10'], 
            'P10' => $survey['P10'], 
            'check_p11' => $survey['check_p11'], 
            'P11' => $survey['P11'], 
            'check_p12' => $survey['check_p12'],
            'P12' => $survey['P12'], 
            'check_p13' => $survey['check_p13'], 
            'P13' => $survey['P13'], 
            'check_p14' => $survey['check_p14'], 
            'P14' => $survey['P14'], 
            'check_p15' => $survey['check_p15'], 
            'P15' => $survey['P15'], 
            'check_p16' => $survey['check_p16'], 
            'P16' => $survey['P16'], 
            'check_p17' => $survey['check_p17'], 
            'P17' => $survey['P17'], 
            'check_p18' => $survey['check_p18'], 
            'P18' => $survey['P18'], 
            'check_p19' => $survey['check_p19'],
            'P19' => $survey['P19'], 
            'check_p20' => $survey['check_p20'], 
            'P20' => $survey['P20'], 
            'check_p21' => $survey['check_p21'], 
            'P21' => $survey['P21'], 
            'check_p22' => $survey['check_p22'], 
            'P22' => $survey['P22'], 
            'check_p23' => $survey['check_p23'], 
            'P23_1' => $survey['P23_1'], 
            'P23_2' => $survey['P23_2'], 
            'P23_3' => $survey['P23_3'], 
            'P23_4' => $survey['P23_4'], 
            'check_p24' => $survey['check_p24'], 
            'P24_1' => $survey['P24_1'], 
            'P24_2' => $survey['P24_2'], 
            'P24_3' => $survey['P24_3'], 
            'P24_4' => $survey['P24_4'], 
            'P24_5' => $survey['P24_5'], 
            'check_p25' => $survey['check_p25'], 
            'P25_jenisAlat' => $survey['P25_jenisAlat'], 
            'P25_jumlahAlat' => $survey['P25_jumlahAlat'], 
            'P25_kapasitas' => $survey['P25_kapasitas'],
            'check_p26' => $survey['check_p26'], 
            'p26_count' => $survey['p26_count'], 
            'P27' => $survey['P27'], 
            'P28' => $survey['P28'], 
            'P29' => $survey['P29'], 
            'P30_1' => $survey['P30_1'], 
            'P30_2' => $survey['P30_2'], 
            'P31_1' => $survey['P31_1'], 
            'P31_2' => $survey['P31_2'], 
            
        ]);
            
        
        $survey1 = SurveyUnitUsaha::create([
            'idUnitUsaha'=>$umum['NamaUnitUsaha'],
            'idForm7'=> $form->id,
            'catatan'=>$request['catatan'],
            'rekomendasi'=> $request['rekomendasi'],
            'idPengawas' => $request['pengawas1'],
            'idPengawas2' => $request['pengawas2'],
            'idPengawas3' => $request['pengawas3'],
            'pjUnitUsaha' => $request['pjUnitUsaha'],
            'tipeForm' => 'Rumah Potong Hewan Babi',
            'created_at' => $request['tanggalPengawasan_date'],
            ]);
        
            
        if (isset($survey['p3_count'])){
            for($i=0;$i<$survey['p3_count'];$i++){
            DokterHewanPJ::create([
                'namaLengkap'=>$survey['pj_teknis_id'][$i],
                'status'=>$survey['pj_teknis_status'][$i],
                'notlp'=>$survey['pj_teknis_date'][$i],
                'surveyUnitUsaha_idsurveyUnitusaha'=>$survey1->id,
              ]);
            }
        };

        if (isset($survey['p26_count'])){
            for($i=0;$i<$survey['p26_count'];$i++){
                PenerimaProdukDistribusi::create([
                    'NamaPenerima'=>$survey['P26_nama'][$i],
                    'JenisProduk'=>$survey['P26_jenis'][$i],
                    'JumlahProduk'=>$survey['P26_jumlah'][$i],
                    'AlamatPenerima'=>$survey['P26_alamat'][$i],
                    'surveyUnitUsaha_idsurveyUnitusaha'=>$survey1->id,
                ]);
            };
        };

        session()->forget('umum');
        session()->forget('survey');
        

        Alert::success('Ceklis Berhasil Disimpan');
        return redirect()->action('PengajuansController@formulir');
    }

    public function update(Request $request, $id){
        $survey = SurveyUnitUsaha::find($id);
        $form = form7::where('id', $survey->idForm7)->first();

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
