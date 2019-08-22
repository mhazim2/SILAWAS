<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PelakuUsaha extends Model
{
    protected $table = 'pelakuusaha';

    protected $fillable = [
      'idPerusahaan',  
      'Nama',
      'NPWP',
      'SIUP',
      'idPemilikUsaha',
      'idWilayahKerja',
      'idRegencyCity',
      'JenisUsaha',
      ];
}
