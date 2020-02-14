<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomponenmateriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komponenmateri', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('id_materi')->unsigned();
            $table->foreign('id_materi')->references('id')->on('materi')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('judul');
            $table->string('file');
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
        Schema::dropIfExists('komponenmateri');
    }
}
