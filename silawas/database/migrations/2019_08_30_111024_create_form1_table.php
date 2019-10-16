<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kapasitasPemeliharaan')->nullable();
            $table->string('populasiTernak')->nullable();
            $table->string('sapiLaktasi')->nullable();
            $table->string('kategoriUsaha')->nullable();
            $table->string('totalProduksiSusu')->nullable();
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
            $table->boolean('check_p1_3')->nullable(); 
            $table->string('P1_3_1')->nullable(); 
            $table->string('P1_3_2')->nullable(); 
            $table->boolean('check_p1_4')->nullable(); 
            $table->string('P1_4_1')->nullable(); 
            $table->string('P1_4_2')->nullable(); 
            $table->string('P2')->nullable(); 
            $table->boolean('check_p3')->nullable(); 
            $table->string('P3_1')->nullable(); 
            $table->string('P3_2')->nullable(); 
            $table->boolean('check_p4')->nullable(); 
            $table->string('P4_1')->nullable();
            $table->text('P4_2')->nullable(); 
            $table->text('P4_3')->nullable(); 
            $table->boolean('check_p5')->nullable(); 
            $table->string('P5_1')->nullable(); 
            $table->string('P5_2')->nullable();
            $table->string('P5_3')->nullable(); 
            $table->text('P5_4')->nullable(); 
            $table->string('P5_5')->nullable();
            $table->boolean('check_p6')->nullable();
            $table->string('P6_1')->nullable();
            $table->string('P6_2')->nullable(); 
            $table->string('P6_3')->nullable(); 
            $table->text('P6_4')->nullable(); 
            $table->boolean('check_p7')->nullable(); 
            $table->string('P7_1')->nullable();
            $table->string('P7_2')->nullable(); 
            $table->text('P7_3')->nullable(); 
            $table->boolean('check_p8')->nullable(); 
            $table->string('P8_1')->nullable(); 
            $table->string('P8_2')->nullable(); 
            $table->text('P8_3')->nullable(); 
            $table->boolean('check_p9')->nullable(); 
            $table->text('P9_1')->nullable(); 
            $table->text('P9_2')->nullable(); 
            $table->boolean('check_p10')->nullable(); 
            $table->string('P10_1')->nullable();
            $table->string('P10_2')->nullable(); 
            $table->string('P10_3')->nullable(); 
            $table->boolean('check_p11')->nullable(); 
            $table->text('P11_1')->nullable();
            $table->string('P11_2')->nullable(); 
            $table->string('P11_3')->nullable(); 
            $table->boolean('check_p12')->nullable(); 
            $table->string('P12_1')->nullable(); 
            $table->string('P12_2')->nullable(); 
            $table->string('P12_3')->nullable(); 
            $table->text('P12_4')->nullable(); 
            $table->boolean('check_p13')->nullable(); 
            $table->string('P13_1')->nullable();
            $table->string('P13_2')->nullable(); 
            $table->string('P13_3')->nullable(); 
            $table->string('P13_4')->nullable(); 
            $table->string('P13_5')->nullable(); 
            $table->string('P13_6')->nullable(); 
            $table->text('P13_7')->nullable(); 
            $table->boolean('check_p14')->nullable(); 
            $table->text('P14_1')->nullable(); 
            $table->string('P14_2')->nullable(); 
            $table->string('P14_3')->nullable(); 
            $table->text('P14_4')->nullable(); 
            $table->boolean('check_p15')->nullable(); 
            $table->string('P15_1')->nullable(); 
            $table->string('P15_2')->nullable(); 
            $table->string('P15_3')->nullable(); 
            $table->string('P15_4')->nullable(); 
            $table->text('P15_5')->nullable(); 
            $table->boolean('check_p16')->nullable(); 
            $table->string('P16_1')->nullable(); 
            $table->string('P16_2')->nullable(); 
            $table->string('P16_3')->nullable(); 
            $table->text('P16_4')->nullable(); 
            $table->boolean('check_p17')->nullable(); 
            $table->string('P17_1')->nullable(); 
            $table->string('P17_2')->nullable(); 
            $table->string('P17_3')->nullable(); 
            $table->string('P17_4')->nullable(); 
            $table->string('P17_5')->nullable(); 
            $table->string('P17_6')->nullable(); 
            $table->text('P17_7')->nullable(); 
            $table->boolean('check_p18')->nullable(); 
            $table->string('P18_1')->nullable(); 
            $table->text('P18_2')->nullable(); 
            $table->boolean('check_p19')->nullable(); 
            $table->string('P19_1')->nullable(); 
            $table->string('P19_2')->nullable(); 
            $table->text('P19_3')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form1');
    }
}
