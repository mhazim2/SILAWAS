<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyUnitUsahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveyunitusaha', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUnitUsaha');
            $table->string('kecamatanUU');
            $table->integer('idPerusahaan')->nullable();
            $table->integer("idPemilikUsaha")->nullable();
            $table->integer("idPengawas")->nullable();
            $table->integer("idPengawas2")->nullable();
            $table->integer("idPengawas3")->nullable();
            $table->text("catatan")->nullable();
            $table->text("rekomendasi")->nullable();
            $table->string('buktiFile')->nullable();
            $table->integer("idForm1")->nullable();
            $table->integer("idForm2")->nullable();
            $table->integer("idForm3")->nullable();
            $table->integer("idForm4")->nullable();
            $table->integer("idForm5")->nullable();
            $table->integer("idForm6")->nullable();
            $table->integer("idForm7")->nullable();
            $table->integer("idForm8")->nullable();
            $table->integer("idForm9")->nullable();
            $table->integer("idForm10")->nullable();
            $table->integer("idForm11")->nullable();
            $table->integer("idForm12")->nullable();
            $table->integer("idForm13")->nullable();
            $table->integer("idForm14")->nullable();
            $table->integer("idForm15")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voids
     */
    public function down()
    {
        Schema::dropIfExists('surveyunitusaha');
    }
}
