<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kapasitasPenampungan')->nullable();  
            $table->string('realisasiPemanfaatan')->nullable();  
            $table->string('skalaUsaha')->nullable();  
            $table->string('check_wilayahPeredaran_1')->nullable(); 
            $table->string('wilayahPeredaran_1')->nullable();  
            $table->string('check_wilayahPeredaran_2')->nullable();  
            $table->string('wilayahPeredaran_2')->nullable();  
            $table->string('check_wilayahPeredaran_3')->nullable(); 
            $table->string('wilayahPeredaran_3')->nullable();  
            $table->string('check_wilayahPeredaran_4')->nullable(); 
            $table->string('wilayahPeredaran_4')->nullable();  
            $table->string('jumlahKaryawan')->nullable(); 
            $table->boolean('check_p1_1')->nullable();  
            $table->string('P1_1_1')->nullable();  
            $table->string('P1_1_2')->nullable();  
            $table->boolean('check_p1_2')->nullable();  
            $table->string('P1_2_1')->nullable();  
            $table->string('P1_2_2')->nullable();  
            $table->boolean( 'check_p1_3')->nullable();  
            $table->string('P1_3_1')->nullable();  
            $table->string('P1_3_2')->nullable();  
            $table->boolean('check_p1_4')->nullable();  
            $table->string('P1_4_1')->nullable();  
            $table->string('P1_4_2')->nullable();  
            $table->boolean('check_p2')->nullable();  
            $table->string('P2_1')->nullable();  
            $table->string('P2_2')->nullable();  
            $table->string('P2_3')->nullable();  
            $table->string('P2_4')->nullable();  
            $table->string('P2_5')->nullable();  
            $table->boolean('check_p3')->nullable(); 
            $table->string('P3_1')->nullable();  
            $table->string('P3_2')->nullable();  
            $table->string('P3_3')->nullable();  
            $table->string('P3_4')->nullable();  
            $table->string('P3_5')->nullable();  
            $table->boolean('check_p4')->nullable();  
            $table->string('P4_1')->nullable();  
            $table->string('P4_2')->nullable(); 
            $table->boolean('check_p5')->nullable();  
            $table->string('P5_1')->nullable();  
            $table->string('P5_2')->nullable();  
            $table->string('P5_3')->nullable();  
            $table->string('P5_4')->nullable();  
            $table->boolean('check_p6')->nullable();  
            $table->text('P6_1')->nullable();  
            $table->string('P6_2')->nullable();  
            $table->string('P6_3')->nullable();  
            $table->boolean('check_p7')->nullable();  
            $table->string('P7_1')->nullable();  
            $table->string('P7_2')->nullable();  
            $table->string('P7_3')->nullable();  
            $table->string('P7_4')->nullable();  
            $table->text('P7_5')->nullable();  
            $table->boolean('check_p8')->nullable();  
            $table->string('P8_1')->nullable();  
            $table->string('P8_2')->nullable();  
            $table->string('P8_3')->nullable();  
            $table->string('P8_4')->nullable();  
            $table->string('P8_5')->nullable();  
            $table->string('P8_6')->nullable();  
            $table->text('P8_7')->nullable(); 
            $table->boolean('check_p9')->nullable();  
            $table->string('P9_1')->nullable();  
            $table->string('P9_2')->nullable();  
            $table->string('P9_3')->nullable();  
            $table->text('P9_4')->nullable();  
            $table->boolean('check_p10')->nullable();  
            $table->string('P10_1')->nullable();  
            $table->string('P10_2')->nullable();  
            $table->string('P10_3')->nullable();  
            $table->string('P10_4')->nullable();  
            $table->text('P10_5')->nullable();  
            $table->boolean('check_p11')->nullable();  
            $table->string('P11_1')->nullable();  
            $table->string('P11_2')->nullable();  
            $table->string('P11_3')->nullable();  
            $table->text('P11_4')->nullable();  
            $table->boolean('check_p12')->nullable();  
            $table->string('P12_1')->nullable();  
            $table->string('P12_2')->nullable();  
            $table->string('P12_3')->nullable();  
            $table->string('P12_4')->nullable();  
            $table->string('P12_5')->nullable();  
            $table->string('P12_6')->nullable();  
            $table->text('P12_7')->nullable();  
            $table->boolean('check_p13')->nullable();  
            $table->string('P13_1')->nullable();  
            $table->string('P13_2')->nullable();  
            $table->text('P13_3')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form2');
    }
}
