<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbuhamilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibuhamils', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->date('tgllahir');
            $table->string('namasuami', 100);
            $table->string('goldarah', 4);
            $table->integer('tinggibadan');
            $table->integer('usia');
            $table->float('hemoglobin');
            $table->date('hpht');
            $table->date('htp');
            $table->float('beratbadan');
            $table->integer('rt');
            $table->integer('rw');
            $table->integer('hamilke');
            $table->integer('persalinanke');
            $table->integer('keguguranke');
            $table->string('telp',13);
            $table->date('tglregister');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ibuhamils');
    }
}
