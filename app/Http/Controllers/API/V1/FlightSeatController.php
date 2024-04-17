<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;

Use App\Models\FlightType;
Use App\Models\FlightSeat;


use App\Utils\ApiResponse;
class FlightSeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getByParentId(Request $request)
    {
        $flightSeat = FlightSeat::where("active",FlightType::STATUS_ACTIVE)
            ->where("flight_type_id",$request->get("flight_type_id"))
            ->get(["id","name"]);
        return ApiResponse::success('Success!',$flightSeat);
    }
}