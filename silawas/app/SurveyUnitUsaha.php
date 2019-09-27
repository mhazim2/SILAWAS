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

    public function form4()
    {
        return $this->hasOne('App\Form4', 'id', 'idForm4');
    }

    public function form5()
    {
        return $this->hasOne('App\Form5', 'id', 'idForm5');
    }

    public function form6()
    {
        return $this->hasOne('App\Form6', 'id', 'idForm6');
    }

    public function form7()
    {
        return $this->hasOne('App\Form7', 'id', 'idForm7');
    }

    public function form8()
    {
        return $this->hasOne('App\Form8', 'id', 'idForm8');
    }

    public function form9()
    {
        return $this->hasOne('App\Form9', 'id', 'idForm9');
    }

    public function form10()
    {
        return $this->hasOne('App\Form10', 'id', 'idForm10');
    }

    public function form11()
    {
        return $this->hasOne('App\Form11', 'id', 'idForm11');
    }

    public function form12()
    {
        return $this->hasOne('App\Form12', 'id', 'idForm12');
    }

    public function form13()
    {
        return $this->hasOne('App\Form13', 'id', 'idForm13');
    }

    public function form14()
    {
        return $this->hasOne('App\Form14', 'id', 'idForm14');
    }
}
