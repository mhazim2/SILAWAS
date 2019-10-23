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
        $forms = DB::table('surveyunitusaha')
        ->leftJoin('unitusaha', 'surveyunitusaha.idUnitUsaha', '=', 'unitusaha.id')
        ->whereBetween('created_at', [ $this->start, $this->end])
        ->select('surveyunitusaha.created_at','unitusaha.NamaUnitUsaha','surveyunitusaha.tipeForm','surveyunitusaha.catatan','surveyunitusaha.rekomendasi')
        ->orderBy('created_at')->get();

        return view('export.report', [
            'forms' => $forms,
        ]);
    }

    
 }