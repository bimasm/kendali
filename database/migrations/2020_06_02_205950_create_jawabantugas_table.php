<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabantugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabantugas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tugas')->unsigned();
            $table->foreign('id_tugas')->references('id')->on('tugaskelas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('id_siswa')->unsigned();
            $table->foreign('id_siswa')->references('id')->on('siswa')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('jawaban');
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
        Schema::dropIfExists('jawabantugas');
    }
}
