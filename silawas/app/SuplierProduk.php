<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuplierProduk extends Model
{
    public $timestamps = false;
	
	protected $table = 'suplierproduk';
	protected $primaryKey = 'id';
	
    protected $fillable = [
		'surveyUnitUsaha_idsurveyUnitusaha',  
		'namaSuplier',
		'negara',
		'tanggal',
		'jumlah',
		'jenis',
	];
}
