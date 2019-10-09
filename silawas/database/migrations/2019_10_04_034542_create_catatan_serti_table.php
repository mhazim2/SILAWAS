<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatatanSertiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan_serti', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namaUnitUsaha')->nullable();
            $table->string('nomorSerti')->nullable();
            $table->string('tanggalSerti')->nullable();
            $table->integer('masaBerlaku')->nullable();
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
        Schema::dropIfExists('catatan_serti');
    }
}
