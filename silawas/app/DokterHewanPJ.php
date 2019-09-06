<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DokterHewanPJ extends Model
{
    public $timestamps = false;

    protected $table = 'dokterhewanpenanggungjawab';

    protected $fillable = [
            'namaLengkap',
            'status',
            'notlp',
            'surveyUnitUsaha_idsurveyUnitusaha',
            'surveyUnitUsaha_UnitUsaha_idUnitUsaha',
      ];
}
