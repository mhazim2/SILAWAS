<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitUsaha extends Model
{
    protected $table = 'unitusaha';

    protected $fillable = [
      'id',  
      'PelakuUsaha_idPerusahaan',
      'PelakuUsaha_idPemilikUsaha',
      'NamaUnitUsaha',
      'AlamatUnitUsaha',
      'AlamatKantorPusat',
      'Telepon',
      'Fax',
      'Email',
      'PenangungJawabTeknis',
      'TahunOperasional',
      ];
}
