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
        Schema::create('penerima__produk_distribusi_', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NamaPenerima')->nullable();
            $table->string('JenisProduk')->nullable();
            $table->string('JumlahProduk')->nullable();
            $table->string('AlamatPenerima')->nullable();
            $table->string('surveyUnitUsaha_idsurveyUnitusaha')->nullable();
            $table->string('surveyUnitUsaha_UnitUsaha_idUnitUsaha')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penerima__produk_distribusi_');
    }
}
