<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rekomendasi extends Model
{
    public $timestamps = false;

    protected $table = 'rekomendasi';

    protected $fillable = [
        
        'nomorRekomendasi',
        'tanggalRekomendasi',
        'namaInstansi',
       'surveyUnitUsaha_idsurveyUnitusaha',
      ];
}
