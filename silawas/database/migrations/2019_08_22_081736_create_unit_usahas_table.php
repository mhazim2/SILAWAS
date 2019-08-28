<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unitUsaha', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('PelakuUsaha_idPerusahaan')->nullable();
            $table->integer('PelakuUsaha_idPemilikUsaha')->nullable();
            $table->string("NamaUnitUsaha");
            $table->text("AlamatUnitUsaha");
            $table->string("NamaKantorPusat");
            $table->text("AlamatKantorPusat");
            $table->string("Telepon");
            $table->string("Fax");
            $table->string("Email");
            $table->string("PenangungJawabTeknis");
            $table->string("KontakPJ");
            $table->string("TahunOperasional");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unitUsaha');
    }
}
