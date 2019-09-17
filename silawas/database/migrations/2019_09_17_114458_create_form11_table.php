<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm11Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form11', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('komoditas')->nullable();
            $table->string('kapasitasGudang')->nullable();
            $table->string('realisasiPenyimpanan')->nullable();
            $table->string('wilayahPeredaran')->nullable();
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
            $table->string('P4_1')->nullable();
            $table->string('P4_2')->nullable();
            $table->string('check_p5')->nullable();
            $table->string('P5_1')->nullable();
            $table->string('P5_2')->nullable();
            $table->string('check_p6')->nullable();
            $table->string('P6')->nullable();
            $table->string('check_p7')->nullable();
            $table->string('P7_1')->nullable();
            $table->string('P7_2')->nullable();
            $table->string('P7_3')->nullable();
            $table->string('P7_4')->nullable();
            $table->string('check_p8')->nullable();
            $table->string('P8')->nullable();
            $table->string('check_p9')->nullable();
            $table->string('P9_1')->nullable();
            $table->string('P9_2')->nullable();
            $table->string('P9_3')->nullable();
            $table->string('P9_4')->nullable();
            $table->string('check_p10')->nullable();
            $table->string('P10_1')->nullable();
            $table->string('P10_2')->nullable();
            $table->string('P10_3')->nullable();
            $table->string('P10_4')->nullable();
            $table->string('P10_5')->nullable();
            $table->string('check_p11')->nullable();
            $table->string('P11_1')->nullable();
            $table->string('P11_2')->nullable();
            $table->string('P11_3')->nullable();
            $table->string('P11_4')->nullable();
            $table->string('check_p12')->nullable();
            $table->string('P12')->nullable();
            $table->string('check_p13')->nullable();
            $table->string('P13_1')->nullable();
            $table->string('P13_2')->nullable();
            $table->string('P13_3')->nullable();
            $table->string('P13_4')->nullable();
            $table->string('P13_5')->nullable();
            $table->string('check_p14')->nullable();
            $table->string('P14_1')->nullable();
            $table->string('P14_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form11');
    }
}
