<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatatanNKVTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan_nkv', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaUnitUsaha')->nullable();
            $table->string('NKV')->nullable();
            $table->string('tanggalNKV')->nullable();
            $table->integer('surveyUnitUsaha_idsurveyUnitusaha')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catatan_n_k_v');
    }
}
