<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('evenement');
            $table->string('type_media');
            $table->timestamps();
        });

        Schema::table('traces', function (Blueprint $table) {
            $table->unsignedBigInteger('id_evenement');
            $table->foreign('id_evenement')->references('id')->on('evenements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::enableForeignKeyConstraints();
        Schema::dropIfExists('evenements');
        Schema::disableForeignKeyConstraints();
    }
}
