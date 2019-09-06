<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm6Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form6', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipeUnitUsaha')->nullable();
            $table->string('jenisProduk')->nullable();
            $table->integer('karyawanProduksi_L')->nullable();
            $table->integer('karyawanProduksi_P')->nullable();
            $table->integer('karyawanAdm_L')->nullable();
            $table->integer('karyawanAdm_P')->nullable();
            $table->integer('karyawanAMPM')->nullable();
            $table->integer('karyawanAWO')->nullable();
            $table->integer('juruSembelih')->nullable();
            $table->integer('operatorStunning')->nullable();
            $table->string('b1_niu_id')->nullable();
            $table->string('b1_niu_date')->nullable();
            $table->string('b1_npwp_id')->nullable();
            $table->string('b1_npwp_date')->nullable();
            $table->string('b1_siup_id')->nullable();
            $table->string('b1_siup_date')->nullable();
            $table->string('b1_nib_date')->nullable();
            $table->string('b1_pks_date')->nullable();
            $table->string('b2')->nullable();
            $table->boolean('check_b3')->nullable();
            $table->string('b3_1')->nullable();
            $table->string('b3_2')->nullable();
            $table->string('b3_3')->nullable();
            $table->boolean('check_b4')->nullable();
            $table->string('b4_id')->nullable();
            $table->boolean('check_b5_1')->nullable();
            $table->string('b5_1_nama')->nullable();
            $table->string('b5_1_alamat')->nullable();
            $table->string('b5_1_sertifikat')->nullable();
            $table->boolean('check_b5_2')->nullable();
            $table->string('b5_2_nama')->nullable();
            $table->string('b5_2_alamat')->nullable();
            $table->string('b5_2_sertifikat')->nullable();
            $table->boolean('check_b5_3')->nullable();
            $table->string('b5_3_nama')->nullable();
            $table->string('b5_3_alamat')->nullable();
            $table->string('b5_3_sertifikat')->nullable();
            $table->boolean('check_b6')->nullable();
            $table->string('b6_1')->nullable();
            $table->string('b6_2')->nullable();
            $table->string('b6_3')->nullable();
            $table->string('b6_4')->nullable();
            $table->boolean('check_b7')->nullable();
            $table->string('b7')->nullable();
            $table->boolean('check_b8')->nullable();
            $table->string('b8')->nullable();
            $table->string('b8_1')->nullable();
            $table->string('b8_2')->nullable();
            $table->boolean('check_b9')->nullable();
            $table->string('b9')->nullable();
            $table->boolean('check_b10')->nullable();
            $table->string('b10')->nullable();
            $table->boolean('check_b11')->nullable();
            $table->string('b11')->nullable();
            $table->boolean('check_b12')->nullable();
            $table->string('b12')->nullable();
            $table->boolean('check_b13')->nullable();
            $table->string('b13')->nullable();
            $table->boolean('check_b14')->nullable();
            $table->string('b14')->nullable();
            $table->string('b15')->nullable();
            $table->boolean('check_b16')->nullable();
            $table->string('b16')->nullable();
            $table->boolean('check_b17')->nullable();
            $table->string('b17')->nullable();
            $table->boolean('check_b18')->nullable();
            $table->string('b18')->nullable();
            $table->string('b19')->nullable();
            $table->string('b20')->nullable();
            $table->boolean('check_b21')->nullable();
            $table->string('b21_1')->nullable();
            $table->string('b21_2')->nullable();
            $table->boolean('check_b22')->nullable();
            $table->string('b22')->nullable();
            $table->string('b23_1')->nullable();
            $table->string('b23_2')->nullable();
            $table->string('b24')->nullable();
            $table->string('b25_1')->nullable();
            $table->string('b25_2')->nullable();
            $table->string('b26_1')->nullable();
            $table->string('b27_1')->nullable();
            $table->string('b27_2')->nullable();
            $table->string('b27_3')->nullable();
            $table->string('b28')->nullable();
            $table->boolean('check_b29')->nullable();
            $table->string('b29_1')->nullable();
            $table->string('b29_2')->nullable();
            $table->string('b29_3')->nullable();
            $table->boolean('check_b30')->nullable();
            $table->string('b30_1')->nullable();
            $table->string('b30_2')->nullable();
            $table->string('b30_3')->nullable();
            $table->string('b30_4')->nullable();
            $table->string('b31')->nullable();
            $table->string('b32_jenis')->nullable();
            $table->string('b32_jenisAlat')->nullable();
            $table->string('b32_jumlahAlat')->nullable();
            $table->string('b32_kapasitas')->nullable();
            $table->boolean('check_b33')->nullable();
            $table->string('b33')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form6');
    }
}
