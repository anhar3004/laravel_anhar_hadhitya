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
        Schema::create('Tb_Rumah_Sakit', function (Blueprint $table) {
            $table->id('ID');
            $table->string('nama_RS');
            $table->string('alamat');
            $table->string('email');
            $table->bigInteger('no_hp');
            $table->timestamps();

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
        Schema::dropIfExists('Tb_Rumah_Sakit');
    }
};
