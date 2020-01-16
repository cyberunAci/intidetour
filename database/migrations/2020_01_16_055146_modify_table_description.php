<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyTableDescription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('circuits', function (Blueprint $circuit) {
            $circuit->longText('description')->change();
            $circuit->string('duree',255);
            $circuit->string('distance',255);
            $circuit->string('latitude',255);
            $circuit->string('longitude',255);
            $circuit->timestamp('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('circuits', function (Blueprint $circuit) {
            $circuit->string('description', 255)->change();
        });
    }
}
