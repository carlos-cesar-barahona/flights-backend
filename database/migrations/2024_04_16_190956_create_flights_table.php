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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->time("time");
            $table->float("price");
            $table->float("duration");
            $table->unsignedBigInteger("from_id");
            $table->foreign('from_id')->references('id')->on('flight_address');

            $table->unsignedBigInteger("to_id");
            $table->foreign('to_id')->references('id')->on('flight_address');

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
        Schema::dropIfExists('flights');
    }
};
