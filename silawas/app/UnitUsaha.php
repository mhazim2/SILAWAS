<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitUsaha extends Model
{   
	public $timestamps = false;
	
    protected $table = 'unitusaha';

    protected $fillable = [
		'id',  
		'PelakuUsaha_idPerusahaan',
		'PelakuUsaha_idPemilikUsaha',
		'NamaUnitUsaha',
		'namaPemilikUsaha',
		'AlamatUnitUsaha',
		'AlamatKantorPusat',
		'Telepon',
		'Fax',
		'Email',
		'PenangungJawabTeknis',
		'KontakPJ',
		'TahunOperasional',
		'TahunBerdiri',
		'koordinat',
		'pjUnitUsaha',
		'pjUnitUsahaKontak',
		'pjProduksi',
		'pjProduksiKontak',
		'pjMutu',
		'pjMutuKontak',
		'pjHigiene',
		'pjHigieneKontak',
		'StatusKepemilikan',
		'telpUU',
		'faxUU',
		'emailUU',
	];

	public function surveyUnitUsaha()
	{
		return $this->hasMany('App\SurveyUnitUsaha', 'idUnitUsaha', 'id');
	}
}
