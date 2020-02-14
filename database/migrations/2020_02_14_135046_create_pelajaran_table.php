<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelajaran', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sekolah')->unsigned();
            $table->foreign('id_sekolah')->references('id')->on('sekolah')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->integer('id_guru')->unsigned();
            $table->foreign('id_guru')->references('id')->on('guru')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('pelajaran');
            $table->string('kode');
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
        Schema::dropIfExists('pelajaran');
    }
}
