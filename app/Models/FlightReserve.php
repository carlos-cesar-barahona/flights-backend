<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FlightType;

class FlightReserve extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    protected $table = "flights_reserve";
    protected $fillable = [
        "start_date",
        "end_date",
        "price",
        "invoice",
        "from_flight_address_id",
        "to_flight_address_id",
        "flight_type_id",
        "payment_method",
        "status",
    ];
}