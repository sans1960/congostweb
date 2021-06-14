<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pobles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('poblacio');
            $table->string('superficie');
            $table->string('densitat');
            $table->string('altura');
            $table->string('longitut');
            $table->string('latitut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pobles');
    }
}
