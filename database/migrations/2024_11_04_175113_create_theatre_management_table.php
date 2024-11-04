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
        Schema::create('theatre_management', function (Blueprint $table) {
            $table->id();
            $table->string('theatre_name');
            $table->string('city');
            $table->integer('no_of_screens');
            $table->json('movie_list'); // Store as JSON to handle multiple movies
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theatre_management');
    }
};
