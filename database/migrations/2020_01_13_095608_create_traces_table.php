<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracesTable extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trace');
            $table->unsignedBigInteger('id_circuit');
            $table->timestamps();    
            
        });


        Schema::table('traces', function (Blueprint $table) {
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
        Schema::table('traces', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_circuit']);
            $table->dropIfExists('id_circuit');
        });
        Schema::dropIfExists('traces');
    }
}
