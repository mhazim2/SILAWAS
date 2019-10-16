<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form3', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenisUnitUsaha')->nullable(); 
            $table->string('kapasitasPemeliharaan')->nullable();  
            $table->string('jumlahPopulasi')->nullable();  
            $table->string('skalaUsaha')->nullable();  
            $table->string('produksiTelurPerHari')->nullable();  
            $table->string('produksiTelurPerBulan')->nullable();  
            $table->string('kapasitasGudangTelur')->nullable();  
            $table->string('realisasiPemanfaatan')->nullable();  
            $table->string('check_wilayahPeredaran_1')->nullable();  
            $table->string('wilayahPeredaran_1')->nullable();  
            $table->string('check_wilayahPeredaran_2')->nullable();  
            $table->string('wilayahPeredaran_2')->nullable();  
            $table->string('check_wilayahPeredaran_3')->nullable();  
            $table->string('wilayahPeredaran_3')->nullable(); 
            $table->string('check_wilayahPeredaran_4')->nullable();  
            $table->string('wilayahPeredaran_4')->nullable();  
            $table->string('jumlahSDM')->nullable();  
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
            $table->boolean('check_p2')->nullable(); 
            $table->string('P2_1')->nullable(); 
            $table->string('P2_2')->nullable();  
            $table->string('P2_3')->nullable();  
            $table->text('P2_4')->nullable(); 
            $table->string('P2_5')->nullable(); 
            $table->string('P2_6')->nullable(); 
            $table->boolean( 'check_p3')->nullable(); 
            $table->string('P3_1')->nullable(); 
            $table->string('P3_2')->nullable();  
            $table->string('P3_3')->nullable();  
            $table->text('P3_4')->nullable();  
            $table->boolean('check_p4')->nullable();  
            $table->string('P4_1')->nullable();  
            $table->string('P4_2')->nullable();  
            $table->string('P4_3')->nullable();  
            $table->string('P4_4')->nullable();  
            $table->text('P4_5')->nullable();  
            $table->boolean('check_p5')->nullable();  
            $table->string('P5_1')->nullable();  
            $table->string('P5_2')->nullable();  
            $table->string('P5_3')->nullable();  
            $table->string('P5_4')->nullable();  
            $table->string('P5_5')->nullable();  
            $table->string('P5_6')->nullable();  
            $table->text('P5_7')->nullable();  
            $table->boolean('check_p6')->nullable(); 
            $table->string('P6_1')->nullable();  
            $table->string('P6_2')->nullable();  
            $table->boolean('check_p7')->nullable();  
            $table->string('P7_1')->nullable();  
            $table->text('P7_2')->nullable();  
            $table->string('P7_3')->nullable();  
            $table->boolean('check_p8')->nullable();  
            $table->string('P8_1')->nullable();  
            $table->string('P8_2')->nullable();  
            $table->string('P8_3')->nullable();  
            $table->text('P8_4')->nullable();  
            $table->boolean('check_p9')->nullable();  
            $table->string( 'P9_1')->nullable();  
            $table->text( 'P9_2')->nullable();  
            $table->boolean( 'check_p10')->nullable();  
            $table->string('P10_1')->nullable();  
            $table->string('P10_2')->nullable();  
            $table->text('P10_3')->nullable();  
            $table->boolean('check_p11')->nullable();  
            $table->text('P11_1')->nullable();  
            $table->text('P11_2')->nullable();  
            $table->boolean('check_p12')->nullable();  
            $table->string('P12_1')->nullable();  
            $table->string('P12_2')->nullable();  
            $table->string('P12_3')->nullable();  
            $table->boolean('check_p13')->nullable();  
            $table->string('P13_1')->nullable();  
            $table->string('P13_2')->nullable();  
            $table->boolean('check_p14')->nullable();  
            $table->string('P14_1')->nullable();  
            $table->string('P14_2')->nullable();  
            $table->string('P14_3')->nullable();  
            $table->text('P14_4')->nullable();  
            $table->boolean('check_p15')->nullable();  
            $table->string('P15_1')->nullable();  
            $table->string('P15_2')->nullable();  
            $table->string('P15_3')->nullable();  
            $table->string('P15_4')->nullable();  
            $table->string('P15_5')->nullable();  
            $table->string('P15_6')->nullable();  
            $table->boolean('check_p16')->nullable(); 
            $table->text('P16')->nullable();  
            $table->boolean('check_p17')->nullable();  
            $table->string('P17_1')->nullable();  
            $table->string('P17_2')->nullable();  
            $table->text('P17_3')->nullable();  
            $table->boolean('check_p18')->nullable();  
            $table->string('P18_1')->nullable();  
            $table->string('P18_2')->nullable();  
            $table->string('P18_3')->nullable();  
            $table->string('P18_4')->nullable();  
            $table->text('P18_5')->nullable();  
            $table->boolean('check_p19')->nullable();  
            $table->string('P19_1')->nullable();  
            $table->string('P19_2')->nullable();  
            $table->string('P19_3')->nullable();  
            $table->text('P19_4')->nullable();  
            $table->boolean('check_p20')->nullable();  
            $table->string('P20_1')->nullable();  
            $table->string('P20_2')->nullable();  
            $table->string('P20_3')->nullable();  
            $table->string('P20_4')->nullable();  
            $table->string('P20_5')->nullable();  
            $table->string('P20_6')->nullable();  
            $table->text('P20_7')->nullable(); 
            $table->boolean('check_p21')->nullable();  
            $table->string('P21_1')->nullable();  
            $table->text('P21_2')->nullable();  
            $table->boolean('check_p22')->nullable(); 
            $table->string('P22_1')->nullable();  
            $table->string('P22_2')->nullable();  
            $table->text('P22_3')->nullable();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form3');
    }
}
