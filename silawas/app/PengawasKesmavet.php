<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengawasKesmavet extends Model
{
	public $timestamps = false;
	
	protected $table = 'pengawaskesmavet';
	protected $primaryKey = 'idPengawasKesmavet';
	
    protected $fillable = [
		'idUser',  
		'TMT',
		'NoSK',
		'PNS_idPegawai',
		'idWilayahKerja',
		'idRegencyCity',
		'isActive',
		'isDokter',
		'unitKerja',
		'jabatan',
		'kewenangan',
		'NoRegistrasi',
		'alamatKantor',
		'Provinsi',
	];
	
	public function user()
    {
        return $this->hasOne('App\User', 'id', 'idUser');
    }
}
