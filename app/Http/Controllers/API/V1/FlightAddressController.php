<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;

Use App\Models\FlightAddress;

use App\Utils\ApiResponse;
class FlightAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAll(Request $request)
    {
        $flightAddress = FlightAddress::where("active",FlightAddress::STATUS_ACTIVE)->get(["name as text","id as value"]);
        return ApiResponse::success('Success!',$flightAddress);
    }
}
