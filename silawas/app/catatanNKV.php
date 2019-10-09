<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catatanNKV extends Model
{
    public $timestamps = false;

    protected $table = 'catatan_nkv';

    protected $fillable = [
            'namaUnitUsaha',
            'NKV',
            'tanggal',
            'surveyUnitUsaha_idsurveyUnitusaha',
      ];
}
