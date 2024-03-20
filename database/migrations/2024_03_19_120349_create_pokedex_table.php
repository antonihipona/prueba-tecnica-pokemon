<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pokedex', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->string('name');
            $table->string('type1');
            $table->string('type2')->nullable();
            $table->integer('total');
            $table->integer('hp');
            $table->integer('attack');
            $table->integer('defense');
            $table->integer('sp_atk');
            $table->integer('sp_def');
            $table->integer('speed');
            $table->integer('generation');
            $table->boolean('legendary');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokedex');
    }
};
