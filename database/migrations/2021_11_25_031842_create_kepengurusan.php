<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepengurusan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepengurusan', function (Blueprint $table) {
            $table->integer('kepengurusan_id')->autoIncrement();
            $table->string('nama_kabinet', 50)->nullable($value=false);
            $table->string('periode', 10)->nullable($value=false);
            $table->integer('status_kepengurusan')->nullable($value=false);
            $table->string('logo_kabinet')->nullable($value=true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kepengurusan');
    }
}
