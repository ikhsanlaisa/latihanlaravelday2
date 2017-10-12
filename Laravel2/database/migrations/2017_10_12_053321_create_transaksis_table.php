<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('homestay_id')->unsigned();
            $table->string('status');
            $table->string('tgl_masuk');
            $table->string('tgl_keluar');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('homestay_id')->references('id')->on('homestays');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
