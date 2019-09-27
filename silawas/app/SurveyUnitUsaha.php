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
		'pjUnitUsaha',
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

    public function unitUsaha()
    {
        return $this->belongsTo('App\UnitUsaha', 'idUnitUsaha', 'id');
    }

    public function form1()
    {
        return $this->hasOne('App\Form1', 'id', 'idForm1');
    }

    public function form2()
    {
        return $this->hasOne('App\Form2', 'id', 'idForm2');
    }

    public function form3()
    {
        return $this->hasOne('App\Form3', 'id', 'idForm3');
    }
}
