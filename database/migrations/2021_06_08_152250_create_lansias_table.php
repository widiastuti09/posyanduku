<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLansiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lansias', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_register');
            $table->date('tanggal_lahir');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->integer('rt');
            $table->integer('rw');
            $table->float('berat_badan');
            $table->float('tinggi_badan');
            $table->float('lingkar_pinggang');
            $table->string('tekanan_darah');
            $table->float('glukosa_darah');
            $table->float('lemak_tubuh');
            $table->float('imt');
            $table->float('lemak_perut');
            $table->float('kolestrol');
            $table->float('asam_urat');
            $table->integer('makan_berlemak');
            $table->integer('makan_manis');
            $table->integer('zat_adiktif');
            $table->integer('jelantah');
            $table->string('merokok');
            $table->integer('olahraga');
            $table->string('keterangan');
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
        Schema::dropIfExists('lansias');
    }
}
