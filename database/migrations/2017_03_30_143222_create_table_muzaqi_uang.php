<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMuzaqiUang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('t_muzaqi_uang', function (Blueprint $table){
        $table->increments('id_muzaqi');
        $table->date('tanggal');
        $table->string('nama_muzaqi');
        $table->string('rt');
        $table->integer('jiwa');
        $table->integer('jumlah_uang');
        $table->string('foto');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_muzaqi_uang');
    }
}
