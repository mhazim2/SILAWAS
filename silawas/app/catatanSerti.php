<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catatanSerti extends Model
{
    public $timestamps = false;

    protected $table = 'catatan_serti';

    protected $fillable = [
        
           'namaUnitUsaha',
           'nomorSerti',
           'tanggalSerti',
            'masaBerlaku',
            'surveyUnitUsaha_idsurveyUnitusaha',
      ];
}
