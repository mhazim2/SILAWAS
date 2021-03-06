<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenerimaProdukDistribusi extends Model
{
    public $timestamps = false;

    protected $table = 'penerimaprodukdistribusi';

    protected $fillable = [
            'NamaPenerima',
            'JenisProduk',
            'JumlahProduk',
            'AlamatPenerima',
            'surveyUnitUsaha_idsurveyUnitusaha',
            'surveyUnitUsaha_UnitUsaha_idUnitUsaha',
      ];
}
