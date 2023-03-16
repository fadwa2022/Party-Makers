<?php

use App\Models\User;
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
            $table->foreignId('style')->constrained('styles');
            $table->string('Localisation');
            $table->foreignId('DJ')->constrained('users');
            $table->integer('typeEvent');
            $table->date('dateEvent');
            $table->integer('PrixEvent')->nullable();
            $table->integer('NumeroPlace')->nullable();
            $table->foreignId('createur')->constrained('users');
            $table->string('Imageevent');
            $table->string('situation');


 });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventsclient');
    }
};
