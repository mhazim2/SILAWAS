<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemilikUsaha extends Model
{
    protected $table = 'pemilikusaha';

    protected $fillable = [
      'idPemilikUsaha',  
      'idOrang',
      'TMTPemilikUsaha'
      ];
}
