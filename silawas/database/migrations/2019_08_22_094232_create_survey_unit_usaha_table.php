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
            $table->bigIncrements('id');
            $table->integer('idUnitUsaha');
            $table->integer('idPerusahaan');
            $table->integer("idPemilikUsaha");
            $table->integer("idPengawas");
            $table->text("catatan");
            $table->text("rekomendasi");
            $table->date("date");
            $table->timestamps();
            $table->integer("idForm9");
            $table->integer("idForm10");
            $table->integer("idForm11");
            $table->integer("idForm12");
            $table->integer("idForm13");
            $table->integer("idForm14");
            $table->integer("idForm15");
            $table->integer("idForm16");
            $table->integer("idForm17");
            $table->integer("idForm18");
            $table->integer("idForm19");
            $table->integer("idForm20");
            $table->integer("idForm21");
            $table->integer("idForm22");
           // $table->integer("idForm23");
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
