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
            $table->bigIncrements('id');
            $table->string('kapasitasPemeliharaan')->nullable();
            $table->string('populasiTernak')->nullable();
            $table->string("kategoriUsaha")->nullable();
            $table->string("totalProduksiSusu")->nullable();
            $table->string("wilayahPeredaran")->nullable();
            $table->integer("jumlahKaryawan")->nullable();
            $table->string("P1-1")->nullable();
            $table->string("P1-2")->nullable();
            $table->string("P1-3")->nullable();
            $table->string("P1-4")->nullable();
            $table->string("P2")->nullable();
            $table->string("P3")->nullable();
            $table->string("P4")->nullable();
            $table->string("P5-1")->nullable();
            $table->string("P5-2")->nullable();
            $table->string("P5-3")->nullable();
            $table->string("P6")->nullable();
            $table->string("P7")->nullable();
            $table->string("P8")->nullable();
            $table->string("P9")->nullable();
            $table->string("P10")->nullable();
            $table->string("P11")->nullable();
            $table->string("P12")->nullable();
            $table->string("P13")->nullable();
            $table->string("P14")->nullable();
            $table->string("P15")->nullable();
            $table->string("P16")->nullable();
            $table->string("P17")->nullable();
            $table->string("P18")->nullable();
            $table->string("P19")->nullable();
            $table->boolean("P3_ket")->nullable();
            $table->boolean("P4_ket")->nullable();
            $table->boolean("P6_ket")->nullable();
            $table->boolean("P7_ket")->nullable();
            $table->boolean("P8_ket")->nullable();
            $table->boolean("P9_ket")->nullable();
            $table->boolean("P10_ket")->nullable();
            $table->boolean("P11_ket")->nullable();
            $table->boolean("P12_ket")->nullable();
            $table->boolean("P13_ket")->nullable();
            $table->boolean("P14_ket")->nullable();
            $table->boolean("P15_ket")->nullable();
            $table->boolean("P16_ket")->nullable();
            $table->boolean("P17_ket")->nullable();
            $table->boolean("P18_ket")->nullable();
            $table->boolean("P19_ket")->nullable();
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
