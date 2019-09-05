<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokterHewanPenanungJawabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter_hewan_penanung_jawab_', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namaLengkap')->nullable();
            $table->string('status')->nullable();
            $table->string('notlp')->nullable();
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
        Schema::dropIfExists('_dokter_hewan_penanung_jawab_');
    }
}
