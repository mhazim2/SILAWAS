<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm14Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form14', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namaPemilikProduk')->nullable(); 
            $table->string('alamatPemilikProduk')->nullable(); 
            $table->string('telpPusat')->nullable(); 
            $table->string('faxPusat')->nullable(); 
            $table->string('emailPusat')->nullable(); 
            $table->string('jenisAlatAngkut')->nullable(); 
            $table->string('statusKepemilikan')->nullable(); 
            $table->string('nomorPolisi')->nullable(); 
            $table->string('namaPengemudi')->nullable(); 
            $table->string('telpPengemudi')->nullable(); 
            $table->string('kapasitasAlatAngkut')->nullable(); 
            $table->string('jumlahProdukAngkut')->nullable(); 
            $table->string('jenisProduk')->nullable(); 
            $table->string('check_sumber_lokal')->nullable(); 
            $table->string('sumber_lokal')->nullable(); 
            $table->string('check_sumber_impor')->nullable(); 
            $table->string('sumber_impor')->nullable(); 
            $table->string('tujuanPengiriman')->nullable(); 
            $table->string('check_p1')->nullable(); 
            $table->string('P1_1')->nullable(); 
            $table->string('P1_2')->nullable(); 
            $table->string('check_p2')->nullable(); 
            $table->string('P2_1')->nullable(); 
            $table->string('P2_2')->nullable(); 
            $table->string('check_p3')->nullable(); 
            $table->string('P3_1')->nullable(); 
            $table->string('P3_2')->nullable(); 
            $table->string('check_p4')->nullable(); 
            $table->string('P4_1')->nullable(); 
            $table->string('P4_2')->nullable(); 
            $table->string('check_p5')->nullable(); 
            $table->string('P5')->nullable(); 
            $table->string('check_p6')->nullable(); 
            $table->string('P6')->nullable(); 
            $table->string('check_p7')->nullable(); 
            $table->string('P7')->nullable(); 
            $table->string('check_p8')->nullable(); 
            $table->string('P8')->nullable(); 
            $table->string('check_p9')->nullable(); 
            $table->string('P9')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form14');
    }
}
