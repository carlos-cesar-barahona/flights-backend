<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightAddress extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    protected $table = "flight_address";

    protected $fillable = [
        "name",
        "code",
        "active"
    ];
}