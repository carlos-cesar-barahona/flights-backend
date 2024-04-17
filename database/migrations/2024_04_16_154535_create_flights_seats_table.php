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
        Schema::create('flights_seats', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("flight_type_id");
            $table->foreign('flight_type_id')->references('id')->on('flight_type');

            $table->boolean("active")->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights_seats');
    }
};
