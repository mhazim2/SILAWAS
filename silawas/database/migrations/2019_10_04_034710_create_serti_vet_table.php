<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSertiVetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serti_vet', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomorSerti')->nullable();
            $table->string('namaInstansi')->nullable();
            $table->string('tanggalSerti')->nullable();
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
        Schema::dropIfExists('serti_vet');
    }
}
