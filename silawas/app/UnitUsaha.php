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
      'AlamatUnitUsaha',
      'NamaKantorPusat',
      'AlamatKantorPusat',
      'Telepon',
      'Fax',
      'Email',
      'PenangungJawabTeknis',
      'KontakPJ',
      'TahunOperasional',
      ];
}
