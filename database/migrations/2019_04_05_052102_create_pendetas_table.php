<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pendeta');
            $table->string('tlp_pendeta');
            $table->string('keterangan_pendeta')->nullable();
            $table->string('foto_pendeta')->nullable();
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
        Schema::dropIfExists('pendetas');
    }
}
