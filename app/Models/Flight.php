<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FlightType;

class Flight extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    protected $table = "flights";
    public $timestamps = false;
    protected $fillable = [
        "name",
        "date",
        "time",
        "duration",
        "from_id",
        "to_id",
        "flight_type_id",
        "active"
    ];


    public function type(){
        return $this->hasOne(FlightType::class, 'id', 'flight_type_id');
    }

    public function from(){
        return $this->hasOne(FlightAddress::class, 'id', 'from_id');
    }

    public function to(){
        return $this->hasOne(FlightAddress::class, 'id', 'to_id');
    }    
}