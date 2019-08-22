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
            $table->integer('PelakuUsaha_idPerusahaan');
            $table->integer('PelakuUsaha_idPemilikUsaha');
            $table->string("NamaUnitUsaha");
            $table->text("AlamatUnitUsaha");
            $table->text("AlamatKantorPusat");
            $table->string("Telepon");
            $table->string("Fax");
            $table->string("Email");
            $table->string("PenangungJawabTeknis");
            $table->integer("TahunOperasional");
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
