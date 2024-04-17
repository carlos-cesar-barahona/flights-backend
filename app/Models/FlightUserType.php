<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightUserType extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    protected $table = "flights_user_type";

    protected $fillable = [
        "name",
        "active"
    ];
}