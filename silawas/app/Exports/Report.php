<?php
 
 namespace App\Exports;
 use Auth;
 use App\SurveyUnitUsaha;
 use App\Form14;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Contracts\View\View;


 use Maatwebsite\Excel\Concerns\FromQuery;
 use Maatwebsite\Excel\Concerns\Exportable;
 use Maatwebsite\Excel\Concerns\WithMapping;
 use Maatwebsite\Excel\Concerns\WithHeadings;
 use Maatwebsite\Excel\Concerns\ShouldAutoSize;
 use Maatwebsite\Excel\Concerns\WithColumnFormatting;
 use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
 use Maatwebsite\Excel\Concerns\FromView;

 
 class Report implements FromView,ShouldAutoSize
 {
     use Exportable;
 
     public function __construct(String $start,String $end)
     {
         $this->start = $start;
         $this->end = $end;
        

     }

     public function view(): View
    {   
        $petugas =  DB::table('user')
        ->where('user.id', '=', Auth::user()->id )
        ->join('Orang', 'user.Orang_idOrang', '=', 'Orang.idOrang')
        ->join('PengawasKesmavet', 'user.id', '=', 'PengawasKesmavet.idUser')
        ->select('Orang.NamaLengkap', 'PengawasKesmavet.unitKerja','PengawasKesmavet.NoRegistrasi')
        ->get();

        if (Auth::user()->accessRoleId == 1){
            $forms = DB::table('surveyunitusaha')
            ->leftJoin('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
            ->whereBetween('created_at', [ $this->start, $this->end])
            // ->select('surveyunitusaha.created_at','unitusaha.NamaUnitUsaha','surveyunitusaha.tipeForm','surveyunitusaha.catatan','surveyunitusaha.rekomendasi')
            ->orderBy('created_at')->get();
        } 
        else if (Auth::user()->accessRoleId == 7) {
            
            $forms = SurveyUnitUsaha::with('unitUsaha')
                ->whereBetween('created_at', [$start, $end])
                ->orWhere('idPengawas', $idpetugas->idPengawasKesmavet)
                ->orWhere('idPengawas2', $idpetugas->idPengawasKesmavet)
                ->orWhere('idPengawas3', $idpetugas->idPengawasKesmavet)
                // ->select('surveyunitusaha.created_at','unitusaha.NamaUnitUsaha','surveyunitusaha.tipeForm','surveyunitusaha.catatan','surveyunitusaha.rekomendasi')
                ->get();
            }
            foreach ($forms as $key=>$form) {
                if ($form->idForm1) {
                    $forms[$key]->tipeForm = 'Tempat Budidaya Hewan Perah dan Pemerahan Susu';
                }
                else if ($form->idForm2) {
                    $forms[$key]->tipeForm = 'Tempat Penampungan Susu';
                }
                else if ($form->idForm3) {
                    $forms[$key]->tipeForm = 'Tempat Budidaya Unggas Petelur dan Produksi Telur Konsumsi';
                }
                else if ($form->idForm4) {
                    $forms[$key]->tipeForm = 'Tempat Pengepul Telur';
                }
                else if ($form->idForm5) {
                    $forms[$key]->tipeForm = 'Rumah Potong Hewan Ruminansia';
                }
                else if ($form->idForm6) {
                    $forms[$key]->tipeForm = 'Rumah Potong Hewan Unggas';
                }
                else if ($form->idForm7) {
                    $forms[$key]->tipeForm = 'Rumah Potong Hewan Babi';
                }
                else if ($form->idForm8) {
                    $forms[$key]->tipeForm = 'Tempat Pengolahan Pangan Asal Hewan';
                }
                else if ($form->idForm9) {
                    $forms[$key]->tipeForm = 'Tempat Produksi Produk Hewan Non Pangan';
                }
                else if ($form->idForm10) {
                    $forms[$key]->tipeForm = 'Gudang Penyimpanan Dingin/Beku';
                }
                else if ($form->idForm11) {
                    $forms[$key]->tipeForm = 'Gudang Penyimpanan Kering';
                }
                else if ($form->idForm12) {
                    $forms[$key]->tipeForm = 'Tempat Penjualan';
                }
                else if ($form->idForm13) {
                    $forms[$key]->tipeForm = 'Hotel, Restoran dan Katering';
                }
                else if ($form->idForm14) {
                    $forms[$key]->tipeForm = 'Pengangkutan Produk Hewan';
                     $temp = Form14::where('id', $forms[$key]->idForm14)->first();
                     $forms[$key]->namaPemilik = $temp->namaPemilikProduk;
                    
               
                }
            }
           

        // $forms = DB::table('surveyunitusaha')
        // ->leftJoin('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
        // ->whereBetween('created_at', [ $this->start, $this->end])
        // ->select('surveyunitusaha.created_at','unitusaha.NamaUnitUsaha','surveyunitusaha.tipeForm','surveyunitusaha.catatan','surveyunitusaha.rekomendasi')
        // ->orderBy('created_at')->get();

        return view('export.report', [
            'forms' => $forms,
            'data' => $petugas,
        ]);
    }

    
 }