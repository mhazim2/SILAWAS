<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemilikUsaha extends Model
{
    protected $table = 'PemilikUsaha';

    protected $fillable = [
      'idPemilikUsaha',  
      'idOrang',
      'TMTPemilikUsaha'
      ];
}
