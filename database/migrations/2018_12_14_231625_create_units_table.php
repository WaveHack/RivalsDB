<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('faction_id');
            $table->string('slug')->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('battle_description')->nullable();
            $table->enum('rarity', [
                'common',
                'rare',
                'epic',
            ]);
            $table->enum('type', [
                'infantry',
                'vehicles',
                'aircraft',
            ]);
            $table->integer('unlocked_at_level');
            $table->integer('health');
            $table->integer('dps');
            $table->enum('speed', [
                'slowest',
                'slow',
                'average',
                'fast',
                'fastest',
            ]);
            $table->enum('building', [
                'barracks',
                'hand of nod',
                'war factory',
                'helipad',
                'air tower',
                'tech lab',
                'temple of nod',
            ]);
            $table->integer('cost');
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
        Schema::dropIfExists('units');
    }
}
