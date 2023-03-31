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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('style');
            $table->string('Localisation');
            $table->integer('DJ');
            $table->integer('typeEvent');
            $table->date('dateEvent');
            $table->integer('PrixEvent')->nullable();
            $table->integer('NumeroPlace')->nullable();
            $table->integer('createur');
            $table->string('Imageevent');
            $table->string('situation')->default('not yet');
            $table->integer('ourevent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
