<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveDuplicateColumnFromRegistrasibalitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registrasibalitas', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('namaibu', 'rt', 'rw', 'nokk', 'telp', 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registrasibalitas', function (Blueprint $table) {
        });
    }
}
