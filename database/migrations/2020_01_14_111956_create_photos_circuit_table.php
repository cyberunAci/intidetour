<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosCircuitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photosCircuit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('photos');
            $table->unsignedBigInteger('id_circuit');
            $table->foreign('id_circuit')->references('id')->on('circuits');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photosCircuit');
    }
}
