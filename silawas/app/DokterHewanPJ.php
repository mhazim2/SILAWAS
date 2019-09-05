<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DokterHewanPJ extends Model
{
    public $timestamps = false;

    protected $table = 'dokter_hewan_penanung_jawab_';

    protected $fillable = [
            'namaLengkap',
            'status',
            'notlp',
            'surveyUnitUsaha_idsurveyUnitusaha',
            'surveyUnitUsaha_UnitUsaha_idUnitUsaha',
      ];
}
