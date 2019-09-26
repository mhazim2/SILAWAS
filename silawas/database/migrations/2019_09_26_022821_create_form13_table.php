<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm13Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form13', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenisPengolahan')->nullable(); 
            $table->string('kapasitasProduksi')->nullable(); 
            $table->string('realisasi')->nullable(); 
            $table->string('check_sumber_lokal')->nullable(); 
            $table->string('sumber_lokal')->nullable(); 
            $table->string('check_sumber_impor')->nullable(); 
            $table->string('sumber_impor')->nullable(); 
            $table->string('wilayahPeredaran')->nullable(); 
            $table->string('check_p1_niu')->nullable();
            $table->string('P1_1')->nullable();
            $table->string('check_p1_npwp')->nullable();
            $table->string('P1_2')->nullable();
            $table->string('check_p1_siup')->nullable();
            $table->string('P1_3' )->nullable();
            $table->string('check_p1_nib' )->nullable();
            $table->string('P1_4')->nullable();
            $table->string('check_p1_pks')->nullable();
            $table->string('P1_5')->nullable();
            $table->string('check_p2' )->nullable();
            $table->string('P2_1')->nullable();
            $table->string('P2_2')->nullable();
            $table->string('P2_3')->nullable();
            $table->string('P2_4')->nullable();
            $table->string('check_p3_1')->nullable();
            $table->string('P3_1')->nullable();
            $table->string('check_p3_2')->nullable();
            $table->string('P3_2_1')->nullable();
            $table->string('P3_2_2')->nullable();
            $table->string('P3_2_3')->nullable();
            $table->string('P3_2_4')->nullable();
            $table->string('check_p4')->nullable();
            $table->string('P4_1')->nullable();
            $table->string('P4_2')->nullable();
            $table->string('P4_3')->nullable();
            $table->string('check_p5')->nullable();
            $table->string('p5_count')->nullable();
            $table->string('check_p6')->nullable();
            $table->string('P6')->nullable();
            $table->string('check_p7')->nullable();
            $table->string('P7_1')->nullable();
            $table->string('P7_2')->nullable();
            $table->string('check_p8')->nullable();
            $table->string('P8_1')->nullable();
            $table->string('P8_2')->nullable();
            $table->string('check_p9')->nullable();
            $table->string('P9_1')->nullable();
            $table->string('P9_2')->nullable();
            $table->string('check_p10')->nullable();
            $table->string('P10_1')->nullable();
            $table->string('P10_2')->nullable();
            $table->string('P10_3')->nullable();
            $table->string('check_p11')->nullable();
            $table->string('P11')->nullable();
            $table->string('check_p12')->nullable();
            $table->string('P12')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form13');
    }
}
