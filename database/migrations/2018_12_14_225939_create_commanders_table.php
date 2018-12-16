<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commanders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('faction_id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->text('flavor_description')->nullable();
            $table->enum('rarity', ['rare']);
            $table->integer('unlocked_at_level');
            $table->integer('base_health');
            $table->integer('harvester_health');
            $table->integer('commander_power_name');
            $table->integer('commander_power_description');
            $table->integer('commander_power_cost');
            $table->timestamps();

            $table->foreign('faction_id')->references('id')->on('factions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commanders');
    }
}
