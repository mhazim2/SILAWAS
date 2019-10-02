<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm8Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form8', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenisPengolahan')->nullable(); 
            $table->string('kapasitasProduksi')->nullable(); 
            $table->string('kategoriUsaha')->nullable(); 
            $table->string('realisasiProduksi')->nullable(); 
            $table->string('waktuProduksi')->nullable(); 
            $table->string('check_sumber_lokal')->nullable(); 
            $table->string('sumber_lokal')->nullable(); 
            $table->string('check_sumber_impor')->nullable(); 
            $table->string('sumber_impor')->nullable(); 
            $table->string('distribusiProduk')->nullable(); 
            $table->string('jumlahKaryawan')->nullable(); 
            $table->string('check_p1_1')->nullable(); 
            $table->string('P1_1')->nullable(); 
            $table->string('check_p1_2')->nullable(); 
            $table->string('P1_2')->nullable(); 
            $table->string('check_p1_3')->nullable(); 
            $table->string('P1_3')->nullable(); 
            $table->string('check_p1_4')->nullable(); 
            $table->string('P1_4')->nullable(); 
            $table->string('check_p1_5')->nullable(); 
            $table->string('P1_5')->nullable(); 
            $table->string('check_p2')->nullable(); 
            $table->string('P2_1')->nullable(); 
            $table->string('P2_2')->nullable(); 
            $table->string('P2_3')->nullable(); 
            $table->string('P2_4')->nullable(); 
            $table->string('P2_5')->nullable(); 
            $table->string('check_p3')->nullable(); 
            $table->string('P3_1')->nullable(); 
            $table->string('P3_2')->nullable(); 
            $table->string('P3_3')->nullable(); 
            $table->string('P3_4')->nullable(); 
            $table->string('check_p4')->nullable(); 
            $table->string('P4_1')->nullable(); 
            $table->string('P4_2')->nullable(); 
            $table->string('check_p5')->nullable(); 
            $table->string('P5_1')->nullable(); 
            $table->string('P5_2')->nullable(); 
            $table->string('P5_3')->nullable(); 
            $table->string('P5_4')->nullable(); 
            $table->string('P5_5')->nullable(); 
            $table->string('P5_6')->nullable(); 
            $table->string('P5_7')->nullable(); 
            $table->string('P5_8')->nullable(); 
            $table->string('P5_9')->nullable(); 
            $table->string('check_p6')->nullable(); 
            $table->string('P6_1')->nullable(); 
            $table->string('P6_2')->nullable(); 
            $table->string('P6_3')->nullable(); 
            $table->string('check_p7')->nullable(); 
            $table->text('P7_1')->nullable(); 
            $table->text('P7_2')->nullable(); 
            $table->string('check_p8')->nullable(); 
            $table->text('P8')->nullable(); 
            $table->string('check_p9')->nullable(); 
            $table->text('P9')->nullable(); 
            $table->string('check_p10')->nullable(); 
            $table->text('P10')->nullable(); 
            $table->string('check_p11')->nullable(); 
            $table->text('P11')->nullable(); 
            $table->string('check_p12')->nullable(); 
            $table->text('P12')->nullable(); 
            $table->string('check_p13')->nullable(); 
            $table->text('P13')->nullable(); 
            $table->string('check_p14')->nullable(); 
            $table->string('P14_1')->nullable(); 
            $table->string('P14_2')->nullable(); 
            $table->string('P14_3')->nullable(); 
            $table->string('P14_4')->nullable(); 
            $table->string('check_p15')->nullable(); 
            $table->text('P15')->nullable(); 
            $table->string('check_p16')->nullable(); 
            $table->text('P16')->nullable(); 
            $table->string('check_p17')->nullable(); 
            $table->text('P17')->nullable(); 
            $table->string('check_p18')->nullable(); 
            $table->text('P18_1')->nullable(); 
            $table->text('P18_2')->nullable(); 
            $table->string('check_p19')->nullable(); 
            $table->text('P19')->nullable(); 
            $table->string('check_p20')->nullable(); 
            $table->text('P20')->nullable(); 
            $table->string('check_p21')->nullable(); 
            $table->text('P21')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form8');
    }
}
