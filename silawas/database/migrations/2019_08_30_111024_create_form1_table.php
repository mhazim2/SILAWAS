<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kapasitasPemeliharaan')->nullable();
            $table->string('populasiTernak')->nullable();
            $table->string("kategoriUsaha")->nullable();
            $table->string("totalProduksiSusu")->nullable();
            $table->string("wilayahPeredaran")->nullable();
            $table->string("jumlahKaryawan")->nullable();
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
            $table->string('P2')->nullable();
            $table->string('check_p3')->nullable();
            $table->string('P3')->nullable();
            $table->string('check_p4')->nullable();
            $table->string('P4')->nullable();
            $table->string('check_p5')->nullable();
            $table->string('P5_1')->nullable();
            $table->string('P5_2')->nullable();
            $table->string('P5_3')->nullable();
            $table->string('P5_4')->nullable();
            $table->string('P5_5')->nullable();
            $table->string('check_p6')->nullable();
            $table->string('P6')->nullable();
            $table->string('check_p7')->nullable();
            $table->string('P7')->nullable();
            $table->string('check_p8')->nullable();
            $table->string('P8')->nullable();
            $table->string('check_p9')->nullable();
            $table->string('P9')->nullable();
            $table->string('check_p10')->nullable();
            $table->string('P10')->nullable();
            $table->string('check_p11')->nullable();
            $table->string('P11')->nullable();
            $table->string('check_p12')->nullable();
            $table->string('P12')->nullable();
            $table->string('check_p13')->nullable();
            $table->string('P13')->nullable();
            $table->string('check_p14')->nullable();
            $table->string('P14')->nullable();
            $table->string('check_p15')->nullable();
            $table->string('P15')->nullable();
            $table->string('check_p16')->nullable();
            $table->string('P16')->nullable();
            $table->string('check_p17')->nullable();
            $table->string('P17')->nullable();
            $table->string('check_p18')->nullable();
            $table->string('P18')->nullable();
            $table->string('check_p19')->nullable();
            $table->string('P19')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form1');
    }
}
