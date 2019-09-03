<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyUnitUsaha extends Model
{	
	protected $table = 'surveyunitusaha';
	
    protected $fillable = [
		'idUnitUsaha',  
		'idPerusahaan',
		'idPemilikUsaha',
		'idPengawas',
		'idPengawas2',
		'idPengawas3',
        'catatan',
        'rekomendasi',
        'buktiFile',
        'idForm1',
        'idForm2',
        'idForm3',
        'idForm4',
        'idForm5',
        'idForm6',
        'idForm7',
        'idForm8',
        'idForm9',
        'idForm10',
        'idForm11',
        'idForm12',
        'idForm13',
        'idForm14',
        'idForm15',
    ];      
}
