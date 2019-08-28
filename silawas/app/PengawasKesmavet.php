<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengawasKesmavet extends Model
{

    public $timestamps = false;

    protected $table = 'pengawaskesmavet';

    protected $fillable = [
      'idPengawasKesmavet',  
      'TMT',
      'NoSK',
      'PNS_idPegawai',
      'idWilayahKerja',
      'idRegencyCity',
      'isActive',
      ];

      
}
