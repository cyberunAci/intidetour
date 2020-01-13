<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('success', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->varchar('nom');
            $table->varchar('image');
            $table->longtext('description');
            $table->timestamps();
        });

        Schema::create('users_success', function (Blueprint $table) {
            $table->unsignedBigInteger('id_success');
            $table->foreign('id_success')->references('id')->on('success');

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_success', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->dropForeign(['id_success']);
            $table->dropIfExists('id_success');
            $table->dropForeign(['id_user']);
            $table->dropIfExists('id_user');
        });

        Schema::dropIfExists('success');
        Schema::dropIfExists('users_success');
    }
}
