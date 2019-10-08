<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catatanNKV extends Model
{
    public $timestamps = false;

    protected $table = 'catatan_nkv';

    protected $fillable = [
            'namaLengkap',
            'namaUnitUsaha',
            'NKV',
            'tanggalNKV',
            'surveyUnitUsaha_idsurveyUnitusaha',
      ];
}
