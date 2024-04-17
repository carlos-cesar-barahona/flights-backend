<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FlightSeats;

class FlightType extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    protected $table = "flight_type";

    protected $fillable = [
        "name",
        "active"
    ];
}
