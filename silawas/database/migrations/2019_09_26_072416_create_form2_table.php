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
            $table->string('jenisPengolahan')->nullable(); 
            $table->string('jenisUnitUsaha')->nullable(); 
            $table->string('kapasitasPenampungan')->nullable(); 
            $table->string('kategoriUsaha')->nullable(); 
            $table->string('realisasiPemanfaatan')->nullable(); 
            $table->string('wilayahPeredaran')->nullable(); 
            $table->string('jumlahKaryawan')->nullable(); 
            $table->string('check_p1_1')->nullable();  
            $table->string('P1_1')->nullable(); 
            $table->string('check_p1_2')->nullable(); 
            $table->string('P1_2')->nullable();  
            $table->string('check_p1_3')->nullable();  
            $table->string('P1_3')->nullable();  
            $table->string('check_p1_4')->nullable();  
            $table->string('P1_4')->nullable();  
            $table->string('check_p1_5')->nullable();  
            $table->string('P1_5')->nullable();  
            $table->string('check_p2')->nullable(); 
            $table->string('P2_1')->nullable();   
            $table->string('P2_2')->nullable();  
            $table->string('P2_3')->nullable();  
            $table->string('P2_4')->nullable();  
            $table->string('P2_5')->nullable();  
            $table->string('check_p3')->nullable();  
            $table->string('P3_1')->nullable();  
            $table->string('P3_2')->nullable();  
            $table->string('P3_3')->nullable();  
            $table->string('P3_4')->nullable();  
            $table->string('check_p4')->nullable();  
            $table->string('P4_1')->nullable();  
            $table->string('P4_2')->nullable();  
            $table->string('check_p5')->nullable();  
            $table->string('P5')->nullable();  
            $table->string('check_p6')->nullable();  
            $table->string('P6')->nullable();  
            $table->string('check_p7')->nullable();  
            $table->string('P7')->nullable();  
            $table->string('check_p8')->nullable();  
            $table->string('P8')->nullable();  
            $table->string('check_p9')->nullable();  
            $table->string('P9')->nullable();  
            $table->string('check_p10')->nullable();  
            $table->string('P10')->nullable();  
            $table->string('check_p11')->nullable();  
            $table->string('P11')->nullable();  
            $table->string('check_p12')->nullable();  
            $table->string('P12')->nullable();  
            $table->string('check_p13')->nullable();  
            $table->string('P13')->nullable();  
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
