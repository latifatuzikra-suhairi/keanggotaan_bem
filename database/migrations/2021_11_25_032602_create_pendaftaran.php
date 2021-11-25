<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->integer('daftar_id')->autoIncrement();
            $table->string('nama')->nullable($value=false);
            $table->string('nim')->nullable($value=false);
            $table->string('jurusan')->nullable($value=false);
            $table->string('email')->nullable($value=false);
            $table->string('no_hp', 13)->nullable($value=false);
            $table->string('tempat_lahir', 20)->nullable($value=false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
