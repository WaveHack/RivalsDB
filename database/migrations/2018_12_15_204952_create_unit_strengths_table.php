<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitStrengthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_strengths', function (Blueprint $table) {
            $table->unsignedInteger('unit_id');
            $table->enum('type', ['infantry', 'vehicles', 'aircraft']);

            $table->primary(['unit_id', 'type']);

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
        Schema::dropIfExists('unit_strengths');
    }
}
