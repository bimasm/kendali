<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugaskelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugaskelas', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_pelajaran')->unsigned();
            $table->foreign('id_pelajaran')->references('id')->on('pelajaran')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('judul');
            $table->string('tugas');
            $table->string('deadline');
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
        Schema::dropIfExists('tugaskelas');
    }
}
