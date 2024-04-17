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
        Schema::create('flights_reserve', function (Blueprint $table) {
            $table->id();
            $table->dateTime("start_date");
            $table->dateTime("end_date");
            $table->string("price");
            $table->string("invoice");
            $table->integer("payment_method");

            $table->unsignedBigInteger("from_flight_address_id");
            $table->foreign('from_flight_address_id')->references('id')->on('flight_address');

            $table->unsignedBigInteger("to_flight_address_id");
            $table->foreign('to_flight_address_id')->references('id')->on('flight_address');

            $table->unsignedBigInteger("flight_type_id");
            $table->foreign('flight_type_id')->references('id')->on('flight_type');
            $table->integer("status")->default(0); // 0 = PENDING PAYMENT
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights_reserve');
    }
};
