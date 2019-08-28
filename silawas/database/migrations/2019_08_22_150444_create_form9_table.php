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
            $table->boolean("P3")->nullable();
            $table->boolean("P4")->nullable();
            $table->string("P5-1")->nullable();
            $table->date("P5-2")->nullable();
            $table->boolean("P7")->nullable();
            $table->boolean("P8")->nullable();
            $table->boolean("P9")->nullable();
            $table->boolean("P10")->nullable();
            $table->boolean("P11")->nullable();
            $table->boolean("P12")->nullable();
            $table->boolean("P13")->nullable();
            $table->boolean("P14")->nullable();
            $table->boolean("P15")->nullable();
            $table->boolean("P16")->nullable();
            $table->boolean("P17")->nullable();
            $table->boolean("P18")->nullable();
            $table->boolean("P19")->nullable();
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
