<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenitipansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penitipans', function (Blueprint $table) {
            $table->increments('penitipan_id');
            $table->integer('perjalanan_id');
            $table->integer('user_id');
            $table->string('detail_penitipan');
            $table->string('status');
            $table->string('nominal_pembeli');
            $table->string('nominal_pemesan');
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
        Schema::dropIfExists('penitipans');
    }
}
