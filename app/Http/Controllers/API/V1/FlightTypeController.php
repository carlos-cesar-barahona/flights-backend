<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;

Use App\Models\FlightType;

use App\Utils\ApiResponse;
class FlightTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAll(Request $request)
    {
        $flightType = FlightType::where("active",FlightType::STATUS_ACTIVE)->get();
        return ApiResponse::success('Success!',$flightType);
    }
}