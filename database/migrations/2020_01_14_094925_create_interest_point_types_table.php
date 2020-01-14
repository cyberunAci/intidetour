<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterestPointTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interest_point_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->timestamps();
        });

        Schema::table('interest_points', function (Blueprint $table) {
            $table->unsignedBigInteger('id_type');
        });
        Schema::table('interest_points', function (Blueprint $table) {
            $table->foreign('id_type')->references('id')->on('interest_point_types');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


        Schema::table('interest_points', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_type']);
            $table->dropIfExists('id_type');
        });

        Schema::dropIfExists('interest_points_types');

    }
}
