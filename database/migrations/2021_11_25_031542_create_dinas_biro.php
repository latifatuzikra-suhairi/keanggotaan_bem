<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDinasBiro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinas_biro', function (Blueprint $table) {
            $table->integer('dinasbiro_id')->autoIncrement();
            $table->integer('kepengurusan_id')->nullable($value=false);
            $table->string('nama_dinasbiro', 50)->nullable($value=false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dinas_biro');
    }
}
