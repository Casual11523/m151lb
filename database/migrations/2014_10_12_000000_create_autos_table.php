<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // List of Autos
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->increments('autoId');
            $table->string('marke');
            $table->string('modell');
            $table->string('hp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos');
    }
}
