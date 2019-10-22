<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    protected $table = 'aduan';

    protected $fillable = [
       'nama',
       'kontak',
       'alamat',
       'kategori',
       'aduan',
       'bukti_fisik',
      ];
}
