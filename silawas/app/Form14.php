<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form14 extends Model
{
    public $timestamps = false;
    
    protected $table = 'form14';

    protected $fillable = [
        
        'namaPemilikProduk',
        'alamatPemilikProduk',
        'telpPusat',
        'faxPusat',
        'emailPusat',
        'jenisAlatAngkut',
        'statusKepemilikan',
        'nomorPolisi',
        'namaPengemudi',
        'telpPengemudi',
        'kapasitasAlatAngkut',
        'jumlahProdukAngkut',
        'jenisProduk',
        'check_sumber_lokal',
        'sumber_lokal',
        'check_sumber_impor',
        'sumber_impor',
        'tujuanPengiriman',
        'check_p1',
        'P1_1',
        'P1_2',
        'check_p2',
        'P2_1',
        'P2_2',
        'check_p3',
        'P3_1',
        'P3_2',
        'check_p4',
        'P4_1',
        'P4_2',
        'check_p5',
        'P5',
        'check_p6',
        'P6',
        'check_p7',
        'P7',
        'check_p8',
        'P8',
        'check_p9',
        'P9',
	];
    
    public function surveyUnitUsaha()
    {
        return $this->belongsTo('App\SurveyUnitUsaha', 'id', 'idForm14');
    }
}
