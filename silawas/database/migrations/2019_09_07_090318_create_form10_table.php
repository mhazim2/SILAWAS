<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm10Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form10', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenisUnitUsaha')->nullable();
            $table->string('komoditas')->nullable();
            $table->string('kapasitasGudang')->nullable();
            $table->string('realisasiPenyimpanan')->nullable();
            $table->string('wilayahPeredaran')->nullable();
            $table->string('jumlahKaryawan')->nullable();
            $table->boolean('check_p1_niu')->nullable();
            $table->string('P1-1')->nullable();
            $table->boolean('check_p1_npwp')->nullable();
            $table->string('P1-2')->nullable();
            $table->boolean('check_p1_siup')->nullable();
            $table->string('P1-3')->nullable();
            $table->boolean('check_p1_nib')->nullable();
            $table->string('P1-4')->nullable();
            $table->boolean('check_p1_pks')->nullable();
            $table->string('P1-5')->nullable();
            $table->boolean('check_p2')->nullable();
            $table->string('P2-1')->nullable();
            $table->string('P2-2')->nullable();
            $table->string('P2-3')->nullable();
            $table->string('P2-4')->nullable();
            $table->boolean('check_p3')->nullable();
            $table->string('p3_count')->nullable();
            $table->boolean('check_p4')->nullable();
            $table->string('P4-1')->nullable();
            $table->string('P4-2')->nullable();
            $table->string('P4-3')->nullable();
            $table->string('P5')->nullable();
            $table->string('P5_ket')->nullable();
            $table->string('P6')->nullable();
            $table->string('P6-1')->nullable();
            $table->string('P6-2')->nullable();
            $table->string('P7')->nullable();
            $table->string('P7-1')->nullable();
            $table->string('P7-2')->nullable();
            $table->string('P8')->nullable();
            $table->string('P8-1')->nullable();
            $table->string('P8-2')->nullable();
            $table->string('P9')->nullable();
            $table->string('P9_ket')->nullable();
            $table->string('P10')->nullable();
            $table->string('P10-4')->nullable();
            $table->string('P11')->nullable();
            $table->string('P11-1')->nullable();
            $table->string('P11-2')->nullable();
            $table->string('P11-3')->nullable();
            $table->string('P11-4')->nullable();
            $table->string('P11-5')->nullable();
            $table->string('P12')->nullable();
            $table->string('P12-2')->nullable();
            $table->string('P12-3')->nullable();
            $table->string('P13')->nullable();
            $table->string('P13_ket')->nullable();
            $table->string('P14')->nullable();
            $table->string('P14-3')->nullable();
            $table->string('P14-4')->nullable();
            $table->string('P15')->nullable();
            $table->string('P15-2')->nullable();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form10');
    }
}
