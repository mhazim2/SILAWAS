<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm12Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form12', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TipeUnitUsaha')->nullable();
            $table->string('komoditas')->nullable();
            $table->string('kapasitasTempat')->nullable();
            $table->string('realisasi')->nullable();
            $table->string('jumlahKaryawan')->nullable();
            $table->string('check_p1_niu')->nullable();
            $table->string('P1_1')->nullable();
            $table->string('check_p1_npwp')->nullable(); 
            $table->string('P1_2')->nullable();
            $table->string('check_p1_siup')->nullable(); 
            $table->string('P1_3')->nullable();
            $table->string('check_p1_nib')->nullable(); 
            $table->string('P1_4')->nullable(); 
            $table->string('check_p1_pks')->nullable(); 
            $table->string('P1_5')->nullable();
            $table->string('check_p2')->nullable(); 
            $table->string('P2_1')->nullable();
            $table->string('P2_2')->nullable();
            $table->string('P2_3')->nullable();
            $table->string('P2_4')->nullable();
            $table->string('check_p3')->nullable(); 
            $table->string('p3_count')->nullable();
            $table->string('check_p4')->nullable();
            $table->string('P4')->nullable(); 
            $table->string('check_p5')->nullable();
            $table->string('P5_1')->nullable(); 
            $table->string('P5_2')->nullable();
            $table->string('P5_3')->nullable(); 
            $table->string('P5_4')->nullable();
            $table->string('check_p6')->nullable(); 
            $table->string('P6')->nullable();
            $table->string('check_p7')->nullable(); 
            $table->string('P7_1')->nullable(); 
            $table->string('P7_1_jenis')->nullable(); 
            $table->string('P7_1_merk')->nullable(); 
            $table->string('P7_2')->nullable(); 
            $table->string('P7_2_tanggal')->nullable(); 
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form12');
    }
}
