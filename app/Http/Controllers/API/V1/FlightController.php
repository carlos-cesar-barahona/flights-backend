<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Validator;
use Carbon\Carbon;
use App\Models\Flight;
use App\Models\FlightReserve;
use App\Models\FlightReserveUser;
use App\Models\FlightReserveSeat;
use App\Utils\ApiResponse;
use App\Utils\HoursParse;
class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getByParms(Request $request)
    {

        $flights = Flight::with(["from","to","type"])
            ->where("from_id",$request->get("from"))
            ->where("to_id",$request->get("to"))
            ->where("date",$request->get("start_date"))
            ->where("active",Flight::STATUS_ACTIVE)
            ->get();

        foreach($flights as $item){
            $departureTime = Carbon::createFromFormat('H:i:s', $item->time);
            $arrivalTime = $departureTime->copy()->addMinutes($item->duration);
            $item->arrival_time =  $arrivalTime->format('h:i A');
            $item->time =  Carbon::createFromFormat('H:i:s', $item->time)->format('h:i A');
            $item->duration = HoursParse::getHours($item->duration);
            $item->price = number_format($item->price,2);
        }
        return ApiResponse::success('Success!',$flights);
    }

    public function getById(Request $request)
    {
        $flight = Flight::with(["from","to","type"])
            ->where("id",$request->get("id"))
            ->where("active",Flight::STATUS_ACTIVE)
            ->first();

        $departureTime = Carbon::createFromFormat('H:i:s', $flight->time);
        $arrivalTime = $departureTime->copy()->addMinutes($flight->duration);
        $flight->arrival_time =  $arrivalTime->format('h:i A');
        $flight->time =  Carbon::createFromFormat('H:i:s', $flight->time)->format('h:i A');
        $flight->duration = HoursParse::getHours($flight->duration);
        $flight->price = number_format($flight->price,2);

        return ApiResponse::success('Success!',$flight);
    }
}