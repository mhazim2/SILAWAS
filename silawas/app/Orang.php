<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orang extends Model
{
    protected $table = 'orang';

    protected $fillable = [
        'idOrang',
        'NamaLengkap',
        'TempatLahir',
        'TanggalLahir',
        'NomorKTP',
        'NomorHandphone',
        'NPWP'
      ];
}
