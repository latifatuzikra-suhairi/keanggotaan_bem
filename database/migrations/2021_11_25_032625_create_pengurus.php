<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus', function (Blueprint $table) {
            $table->integer('id_pengurus')->autoIncrement();
            $table->string('alamat_skrng', 50)->nullable($value=false);
            $table->string('alamat_asal', 10)->nullable($value=false);
            $table->string('goldar', 10)->nullable($value=false);
            $table->string('riwayat_penyakit', 100)->nullable($value=false);
            $table->string('suku', 50)->nullable($value=false);
            $table->string('anak_ke', 10)->nullable($value=false);
            $table->string('jumlah_saudara', 10)->nullable($value=false);
            $table->string('sosmed', 50)->nullable($value=false);
            $table->string('orang_tua', 50)->nullable($value=false);
            $table->string('level_ukt', 10)->nullable($value=false);
            $table->string('cita_cita', 100)->nullable($value=false);
            $table->string('hobi', 100)->nullable($value=false);
            $table->string('beasiswa', 100)->nullable($value=false);
            $table->string('bisnis', 10)->nullable($value=false);
            $table->string('status_mentoring', 10)->nullable($value=false);
            $table->string('jabatan', 20)->nullable($value=false);
            $table->string('password', 20)->nullable($value=false);
            $table->string('role', 20)->nullable($value=false);    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengurus');
    }
}
