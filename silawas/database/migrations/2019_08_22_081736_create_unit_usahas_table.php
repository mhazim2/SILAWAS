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
            $table->increments('id');
            $table->integer('PelakuUsaha_idPerusahaan')->nullable();
            $table->integer('PelakuUsaha_idPemilikUsaha')->nullable();
            $table->string("NamaUnitUsaha")->nullable();;
            $table->text("AlamatUnitUsaha")->nullable();;
            $table->string("NamaKantorPusat")->nullable();;
            $table->text("AlamatKantorPusat")->nullable();;
            $table->string("Telepon")->nullable();;
            $table->string("Fax")->nullable();;
            $table->string("Email")->nullable();;
            $table->string("PenangungJawabTeknis")->nullable();;
            $table->string("KontakPJ")->nullable();;
            $table->string("TahunOperasional")->nullable();;
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
