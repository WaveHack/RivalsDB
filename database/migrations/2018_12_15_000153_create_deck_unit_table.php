<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeckUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deck_unit', function (Blueprint $table) {
            $table->unsignedInteger('deck_id');
            $table->unsignedInteger('unit_id');
            $table->timestamps();

            $table->foreign('deck_id')->references('id')->on('decks');
            $table->foreign('unit_id')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deck_unit');
    }
}
