<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyTablePhotosCircuit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos_circuit', function (Blueprint $table) {
            $table->renameColumn('photos', 'photo');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photos_circuit', function (Blueprint $table) {
            $table->renameColumn('photo', 'photos');

           
        });
    }
}
