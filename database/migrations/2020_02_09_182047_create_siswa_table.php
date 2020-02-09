<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sekolah')->unsigned();
            $table->foreign('id_sekolah')->references('id')->on('sekolah')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('nama');
            $table->string('email',191);
            $table->string('password');
            $table->string('nis')->nullable();
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
        Schema::dropIfExists('siswa');
    }
}
