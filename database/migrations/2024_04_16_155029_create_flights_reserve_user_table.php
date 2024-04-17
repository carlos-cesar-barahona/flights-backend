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
        Schema::create('flights_reserve_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("flights_reserve_id");
            $table->foreign('flights_reserve_id')->references('id')->on('flights_reserve');

            $table->unsignedBigInteger("flights_user_type_id");
            $table->foreign('flights_user_type_id')->references('id')->on('flights_user_type');
            $table->integer("quantity");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights_reserve_user');
    }
};
