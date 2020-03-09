<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GaleriePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galerie_photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order');
            $table->unsignedBigInteger('id_photo');
            $table->foreign('id_photo')->references('id')->on('photos_circuit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galerie_photos');
    }
}
