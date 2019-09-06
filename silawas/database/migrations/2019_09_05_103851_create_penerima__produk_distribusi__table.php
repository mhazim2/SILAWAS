<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenerimaProdukDistribusiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerimaprodukdistribusi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NamaPenerima')->nullable();
            $table->string('JenisProduk')->nullable();
            $table->string('JumlahProduk')->nullable();
            $table->string('AlamatPenerima')->nullable();
            $table->integer('surveyUnitUsaha_idsurveyUnitusaha')->nullable();
            $table->integer('surveyUnitUsaha_UnitUsaha_idUnitUsaha')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penerimaprodukdistribusi');
    }
}
