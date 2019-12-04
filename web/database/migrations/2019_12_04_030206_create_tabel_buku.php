<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblbuku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("namabuku");
            $table->string("namapengarang");
            $table->string("penerbit");
            $table->string("genre");
            $table->string("jumlah");
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
        Schema::dropIfExists('tblbuku');
    }
}
