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
            $table->string('kapasitasPemeliharaan');
            $table->string('populasiTernak');
            $table->string("kategoriUsaha");
            $table->string("totalProduksiSusu");
            $table->string("wilayahPeredaran");
            $table->integer("jumlahKaryawan");
            $table->string("P1-1");
            $table->string("P1-2");
            $table->string("P1-3");
            $table->string("P1-4");
            $table->string("P2");
            $table->boolean("P3");
            $table->boolean("P4");
            $table->string("P5-1");
            $table->date("P5-2");
            $table->boolean("P7");
            $table->boolean("P8");
            $table->boolean("P9");
            $table->boolean("P10");
            $table->boolean("P11");
            $table->boolean("P12");
            $table->boolean("P13");
            $table->boolean("P14");
            $table->boolean("P15");
            $table->boolean("P16");
            $table->boolean("P17");
            $table->boolean("P18");
            $table->boolean("P19");
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
