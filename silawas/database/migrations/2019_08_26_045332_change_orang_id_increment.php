<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeOrangIdIncrement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE orang MODIFY idOrang INT NOT NULL PRIMARY KEY AUTO_INCREMENT");            
    }

  public function down()
    {
        DB::statement("ALTER TABLE orang MODIFY idOrang INT NOT NULL");
        DB::statement("ALTER TABLE orang DROP PRIMARY KEY");
        DB::statement("ALTER TABLE orang MODIFY idOrang INT NULL");
    }
}
