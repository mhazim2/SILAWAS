<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm7Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form7', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TipeUnitUsaha')->nullable();
            $table->string('kapasitasPemotongan')->nullable();
            $table->string('realisasiPemotongan')->nullable();
            $table->string('operasionalPemotongan')->nullable();
            $table->string('check_sumber_lokal')->nullable();
            $table->string('sumber_lokal')->nullable();
            $table->string('check_sumber_impor')->nullable();
            $table->string('sumber_impor')->nullable();
            $table->string('distribusiDaging')->nullable();
            $table->string('check_p1_niu')->nullable(); 
            $table->string('p1_niu_id')->nullable(); 
            $table->string('p1_niu_date')->nullable(); 
            $table->string('check_p1_npwp')->nullable();
            $table->string('p1_npwp_id')->nullable(); 
            $table->string('p1_npwp_date')->nullable(); 
            $table->string('check_p1_siup')->nullable();
            $table->string('p1_siup_id')->nullable(); 
            $table->string('p1_siup_date')->nullable(); 
            $table->string('check_p1_nib')->nullable(); 
            $table->string('p1_nib_id')->nullable(); 
            $table->string('p1_nib_date')->nullable(); 
            $table->string('check_p1_pks')->nullable(); 
            $table->string('p1_pks_id')->nullable(); 
            $table->string('p1_pks_date')->nullable(); 
            $table->string('check_p2')->nullable(); 
            $table->string('P2_1')->nullable(); 
            $table->string('P2_2')->nullable(); 
            $table->string('P2_3')->nullable(); 
            $table->string('P2_4')->nullable(); 
            $table->string('check_p3')->nullable();
            $table->string('p3_count')->nullable(); 
            $table->string('check_p4')->nullable(); 
            $table->text('P4')->nullable(); 
            $table->string('check_p5')->nullable(); 
            $table->string('P5_id')->nullable(); 
            $table->string('check_p6')->nullable(); 
            $table->text('P6')->nullable(); 
            $table->string('check_p7')->nullable(); 
            $table->text('P7')->nullable(); 
            $table->string('check_p8')->nullable(); 
            $table->text('P8') ->nullable(); 
            $table->string('check_p9')->nullable(); 
            $table->text('P9') ->nullable(); 
            $table->string('check_p10')->nullable(); 
            $table->text('P10')->nullable(); 
            $table->string('check_p11')->nullable(); 
            $table->text('P11')->nullable(); 
            $table->string('check_p12')->nullable();
            $table->text('P12')->nullable(); 
            $table->string('check_p13')->nullable(); 
            $table->text('P13')->nullable(); 
            $table->string('check_p14')->nullable(); 
            $table->text('P14') ->nullable(); 
            $table->string('check_p15') ->nullable(); 
            $table->text('P15')->nullable(); 
            $table->string('check_p16')->nullable(); 
            $table->text('P16')->nullable(); 
            $table->string('check_p17')->nullable(); 
            $table->text('P17')->nullable(); 
            $table->string('check_p18')->nullable(); 
            $table->text('P18')->nullable(); 
            $table->string('check_p19')->nullable();
            $table->text('P19') ->nullable(); 
            $table->string('check_p20') ->nullable(); 
            $table->text('P20')->nullable(); 
            $table->string('check_p21')->nullable(); 
            $table->text('P21')->nullable(); 
            $table->string('check_p22')->nullable(); 
            $table->text('P22')->nullable(); 
            $table->string('check_p23')->nullable(); 
            $table->string('P23_1')->nullable(); 
            $table->string('P23_2')->nullable(); 
            $table->string('P23_3')->nullable(); 
            $table->string('P23_4') ->nullable(); 
            $table->string('check_p24')->nullable(); 
            $table->string('P24_1')->nullable(); 
            $table->string('P24_2')->nullable(); 
            $table->string('P24_3')->nullable(); 
            $table->string('P24_4')->nullable(); 
            $table->string('P24_5')->nullable(); 
            $table->string('check_p25')->nullable(); 
            $table->string('P25_jenisAlat')->nullable(); 
            $table->string('P25_jumlahAlat')->nullable(); 
            $table->string('P25_kapasitas')->nullable();
            $table->string('check_p26')->nullable(); 
            $table->string('p26_count')->nullable(); 
            $table->text('P27')->nullable(); 
            $table->text('P28')->nullable(); 
            $table->text('P29')->nullable(); 
            $table->string('P30_1')->nullable(); 
            $table->string('P30_2')->nullable(); 
            $table->string('P31_1')->nullable(); 
            $table->string('P31_2')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form7');
    }
}
