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
        Schema::create('flights_reserve_seats', function (Blueprint $table) {
            $table->unsignedBigInteger("flights_reserve_id");
            $table->foreign('flights_reserve_id')->references('id')->on('flights_reserve');

            $table->unsignedBigInteger("flights_seats_id");
            $table->foreign('flights_seats_id')->references('id')->on('flights_seats');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights_reserve_seats');
    }
};
