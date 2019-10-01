<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form5', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kategoriRPHR')->nullable(); 
            $table->integer('karyawanProdL')->nullable(); 
            $table->integer('karyawanProdP')->nullable(); 
            $table->integer('karyawanAdmL')->nullable(); 
            $table->integer('karyawanAdmP')->nullable(); 
            $table->integer('karyawanAMPM')->nullable(); 
            $table->integer('karyawanAWO')->nullable(); 
            $table->integer('karyawanHalal')->nullable(); 
            $table->integer('karyawanButcher')->nullable(); 
            $table->integer('karyawanStunning')->nullable(); 
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
            $table->text('P4')->nullable(); 
            $table->string('check_p5')->nullable(); 
            $table->text('P5')->nullable(); 
            $table->string('check_p6')->nullable(); 
            $table->string('P6')->nullable(); 
            $table->string('check_p7')->nullable(); 
            $table->string('P7')->nullable(); 
            $table->string('check_p8')->nullable(); 
            $table->text('P8')->nullable(); 
            $table->string('check_p9')->nullable(); 
            $table->text('P9')->nullable(); 
            $table->string('check_p10')->nullable(); 
            $table->text('P10')->nullable(); 
            $table->string('check_p11')->nullable(); 
            $table->text('P11')->nullable(); 
            $table->string('check_p12')->nullable(); 
            $table->text('P12')->nullable(); 
            $table->string('check_p13')->nullable(); 
            $table->text('P13')->nullable(); 
            $table->string('check_p14')->nullable(); 
            $table->text('P14')->nullable(); 
            $table->string('check_p15')->nullable(); 
            $table->text('P15')->nullable(); 
            $table->string('check_p16')->nullable(); 
            $table->text('P16')->nullable(); 
            $table->string('check_p17')->nullable(); 
            $table->text('P17')->nullable(); 
            $table->string('check_p18')->nullable(); 
            $table->text('P18')->nullable(); 
            $table->string('check_p19')->nullable(); 
            $table->text('P19')->nullable(); 
            $table->string('check_p20')->nullable(); 
            $table->text('P20')->nullable(); 
            $table->string('check_p21')->nullable(); 
            $table->text('P21')->nullable(); 
            $table->string('check_p22')->nullable(); 
            $table->text('P22')->nullable(); 
            $table->string('check_p23')->nullable(); 
            $table->text('P23')->nullable(); 
            $table->string('check_p24')->nullable(); 
            $table->text('P24')->nullable(); 
            $table->string('check_p25')->nullable(); 
            $table->text('P25')->nullable(); 
            $table->string('check_p26')->nullable(); 
            $table->string('P26')->nullable(); 
            $table->string('check_p27')->nullable(); 
            $table->string('P27')->nullable(); 
            $table->string('check_p28')->nullable(); 
            $table->string('P28_1')->nullable(); 
            $table->string('P28_2')->nullable(); 
            $table->string('check_p29')->nullable(); 
            $table->integer('P29_1')->nullable(); 
            $table->integer('P29_2')->nullable(); 
            $table->integer('P29_3')->nullable(); 
            $table->integer('P29_4')->nullable(); 
            $table->string('check_p30')->nullable(); 
            $table->integer('P30_1')->nullable(); 
            $table->integer('P30_2')->nullable(); 
            $table->integer('P30_3')->nullable(); 
            $table->integer('P30_4')->nullable(); 
            $table->integer('P30_5')->nullable(); 
            $table->string('P31')->nullable(); 
            $table->string('check_p32')->nullable(); 
            $table->string('P32')->nullable(); 
            $table->string('P33')->nullable(); 
            $table->string('P34')->nullable(); 
            $table->integer('P35')->nullable(); 
            $table->integer('P36_1')->nullable(); 
            $table->integer('P36_2')->nullable(); 
            $table->integer('P37_1')->nullable(); 
            $table->integer('P37_2')->nullable(); 
            $table->integer('P38_1')->nullable(); 
            $table->integer('P38_2')->nullable(); 
            $table->integer('P38_3')->nullable(); 
            $table->integer('P38_4')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form5');
    }
}
