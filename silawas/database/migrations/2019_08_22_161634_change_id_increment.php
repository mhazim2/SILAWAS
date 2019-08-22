<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeIdIncrement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE user MODIFY id INT NOT NULL PRIMARY KEY AUTO_INCREMENT");            
    }

  public function down()
    {
        DB::statement("ALTER TABLE user MODIFY id INT NOT NULL");
        DB::statement("ALTER TABLE user DROP PRIMARY KEY");
        DB::statement("ALTER TABLE user MODIFY id INT NULL");
    }
}
