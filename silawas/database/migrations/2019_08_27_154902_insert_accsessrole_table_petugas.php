<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;
class InsertAccsessroleTablePetugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('accessrole')->insert(
            array(
                'id'=>7,
                'roleName' => 'Petugas Kesmavet',
                'roleDescription' => 'Petugas Survey kesmavet',
                'dateCreate' => Carbon::now()->toDateTimeString(),
                'dateUpdate' => Carbon::now()->toDateTimeString(),
            )
        );
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
