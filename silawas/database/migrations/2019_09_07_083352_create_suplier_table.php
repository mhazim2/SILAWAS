<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suplierProduk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('surveyUnitUsaha_idsurveyUnitusaha');
            $table->string('namaSuplier')->nullable();
            $table->string('negara')->nullable();
            $table->string('AlamatPenerima')->nullable();
            $table->integer('tanggal')->nullable();
            $table->integer('jumlah')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suplier');
    }
}
