<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orang extends Model
{
    public $timestamps = false;

    protected $table = 'Orang';

    protected $fillable = [
        'idOrang',
        'NamaLengkap',
        'TempatLahir',
        'TanggalLahir',
        'NomorKTP',
        'NomorHandphone',
        'NPWP'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'idOrang', 'Orang_idOrang');
    }
}
