<?php
 
 namespace App\Exports;
 use App\SurveyUnitUsaha;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Contracts\View\View;


 use Maatwebsite\Excel\Concerns\FromQuery;
 use Maatwebsite\Excel\Concerns\Exportable;
 use Maatwebsite\Excel\Concerns\WithMapping;
 use Maatwebsite\Excel\Concerns\WithHeadings;
 use Maatwebsite\Excel\Concerns\ShouldAutoSize;
 use Maatwebsite\Excel\Concerns\WithColumnFormatting;
 use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
 

 
 class Report implements FromQuery,WithHeadings,ShouldAutoSize,WithColumnFormatting
 {
     use Exportable;
 
     public function __construct(String $start,String $end)
     {
         $this->start = $start;
         $this->end = $end;
     }

     

     public function headings(): array
    {
        return [
            'Tanggal Pelaksanaan', 'Nama Unit Usaha','Jenis Unit Usaha' ,'Hasil Temuan' ,'Rekomendasi Tindak Lanjut','Hasil Tindak Lanjut'
        ];
    }

    public function columnFormats(): array
    {
        return [
            'A' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
 
     public function query()
     {
    
        // $listForms =  SurveyUnitUsaha::with('unitUsaha')->whereBetween('created_at', [ $this->start, $this->end]);
        
        $listForms = DB::table('surveyunitusaha')
        ->leftJoin('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
        ->whereBetween('created_at', [ $this->start, $this->end])
        ->select('surveyunitusaha.created_at','unitusaha.NamaUnitUsaha','surveyunitusaha.tipeForm','surveyunitusaha.catatan','surveyunitusaha.rekomendasi')
        ->orderBy('created_at');
    
        return $listForms;
     }
 }