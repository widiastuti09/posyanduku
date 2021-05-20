<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasibalitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasibalitas', function (Blueprint $table) {
            $table->id();
            $table->string('namabalita',100);
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->string('jeniskelamin');
            $table->string('namaayah');
            $table->string('namaibu');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('usia');
            $table->string('bblahir');
            $table->string('pblahir');
            $table->integer('nokk');
            $table->string('nikbalita');
            $table->string('telp');
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
        Schema::dropIfExists('registrasibalitas');
    }
}
