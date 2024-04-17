<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;

Use App\Models\FlightUserType;

use App\Utils\ApiResponse;
class FlightUserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAll(Request $request)
    {
        $flightUserType = FlightUserType::where("active",FlightUserType::STATUS_ACTIVE)->get(["id as value","name as text"]);
        return ApiResponse::success('Success!',$flightUserType);
    }
}