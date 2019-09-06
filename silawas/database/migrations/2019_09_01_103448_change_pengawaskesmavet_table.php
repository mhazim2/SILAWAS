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
        DB::statement("ALTER TABLE pengawaskesmavet MODIFY idPengawasKesmavet INT NOT NULL  AUTO_INCREMENT");   
         
    }

    /**
     * Reverse the migrations.
     *
     * @return voidPengawasKesmavet
     */
    public function down()
    {
        DB::statement("ALTER TABLE pengawaskesmavet MODIFY idPengawasKesmavet INT NOT NULL");
        DB::statement("ALTER TABLE pengawaskesmavet DROP PRIMARY KEY");
        DB::statement("ALTER TABLE pengawaskesmavet MODIFY idPengawasKesmavet INT NULL");
    }
}
