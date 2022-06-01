<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pasien', function (Blueprint $table) {
            $table->id('ID');
            $table->string('nama_pasien');
            $table->string('alamat');
            $table->bigInteger('no_hp');
            $table->foreignId('RS');
            $table->timestamps();

            $table->foreign('RS')->references('ID')->on('tb_rumah_sakit');
            $table->engine ='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pasien');
    }
};
