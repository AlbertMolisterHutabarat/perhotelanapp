<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblkamar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblkamar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("idkamar");
            $table->string("jenis");
            $table->string("fasilitas1")->nullable();
            $table->string("fasilitas2")->nullable();
            $table->string("fasilitas3")->nullable();
            $table->string("fasilitas4")->nullable();
            $table->string("fasilitas5")->nullable();
            $table->string("fasilitas6")->nullable();
            $table->string("fasilitas7")->nullable();
            $table->string("fasilitas8")->nullable();
            $table->string("fasilitas9")->nullable();
            $table->string("fasilitas10")->nullable();
            $table->string("harga");
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
        Schema::dropIfExists('tblkamar');
    }
}
