<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sertiVet extends Model
{
    public $timestamps = false;

    protected $table = 'serti_vet';

    protected $fillable = [
        'nomorSerti',
        'namaInstansi',
        'tanggalSerti',
        'surveyUnitUsaha_idsurveyUnitusaha',
      ];
}
