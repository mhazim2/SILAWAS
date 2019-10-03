<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm9Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form9', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenisPengolahan')->nullable(); 
            $table->string('kapasitasProduksi')->nullable(); 
            $table->string('jumlahProduksi')->nullable(); 
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
            $table->string('check_p4')->nullable(); 
            $table->string('P4_1')->nullable(); 
            $table->string('P4_2')->nullable(); 
            $table->string('check_p5')->nullable(); 
            $table->string('P5_1')->nullable(); 
            $table->string('P5_2')->nullable(); 
            $table->string('P5_3')->nullable(); 
            $table->string('check_p6')->nullable(); 
            $table->string('P6_1')->nullable(); 
            $table->string('P6_2')->nullable(); 
            $table->string('check_p7')->nullable(); 
            $table->text('P7')->nullable(); 
            $table->string('check_p8')->nullable(); 
            $table->text('P8')->nullable(); 
            $table->string('check_p9')->nullable(); 
            $table->text('P9')->nullable(); 
            $table->string('check_p10')->nullable(); 
            $table->string('P10_1')->nullable(); 
            $table->string('P10_2')->nullable(); 
            $table->string('P10_3')->nullable(); 
            $table->string('P10_4')->nullable(); 
            $table->string('check_p11')->nullable(); 
            $table->string('P11_1')->nullable(); 
            $table->string('P11_2')->nullable(); 
            $table->string('P11_3')->nullable(); 
            $table->string('check_p12')->nullable(); 
            $table->string('P12_1')->nullable(); 
            $table->string('P12_2')->nullable(); 
            $table->string('P12_3')->nullable(); 
            $table->string('P12_4')->nullable(); 
            $table->string( 'P12_5')->nullable(); 
            $table->string('check_p13')->nullable(); 
            $table->string('P13_1')->nullable(); 
            $table->string('P13_2')->nullable(); 
            $table->string('P13_3')->nullable(); 
            $table->string('P13_4')->nullable(); 
            $table->string('P13_5')->nullable(); 
            $table->string('check_p14')->nullable(); 
            $table->text('P14')->nullable(); 
            $table->string('check_p15')->nullable(); 
            $table->string('P15_1')->nullable(); 
            $table->string( 'P15_2')->nullable(); 
            $table->string('P15_3')->nullable(); 
            $table->string('P15_4')->nullable(); 
            $table->string('P15_5')->nullable(); 
            $table->string('P15_6')->nullable(); 
            $table->string('check_p16')->nullable(); 
            $table->text('P16')->nullable(); 
            $table->string('check_p17')->nullable(); 
            $table->string('P17_1')->nullable(); 
            $table->string('P17_2')->nullable(); 
            $table->string('P17_3')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form9');
    }
}
