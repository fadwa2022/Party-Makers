<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->increments('NumeroSponsorisation');
            $table->string('message');
            $table->string('situation');
            $table->foreignId('sponsor')->constrained('users');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_sponsors');
    }
};
