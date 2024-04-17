<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FlightType;

class FlightReserveUser extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    protected $table = "flights_reserve_user";
    public $timestamps = false;
    protected $fillable = [
        "flights_reserve_id",
        "flights_user_type_id",
        "quantity"
    ];
}