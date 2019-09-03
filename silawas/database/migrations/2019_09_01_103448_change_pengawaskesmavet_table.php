<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePengawaskesmavetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE pengawaskesmavet MODIFY idPengawasKesmavet INT NOT NULL PRIMARY KEY AUTO_INCREMENT");
        
        Schema::table('pengawaskesmavet', function (Blueprint $table) {
            $table->integer('idUser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
