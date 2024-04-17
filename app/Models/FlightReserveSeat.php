<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FlightType;

class FlightReserveSeat extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    protected $table = "flights_reserve_seats";
    protected $fillable = [
        "flights_reserve_id",
        "flights_seats_id"
    ];
}