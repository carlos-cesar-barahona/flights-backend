<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightSeat extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    protected $table = "flights_seats";
    public $timestamps = false;
    protected $fillable = [
        "name",
        "active"
    ];
}