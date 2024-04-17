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
class FlightReserveController extends Controller
{
    public function store(Request $request){
        try{
            $flightInfo = Flight::where("id",$request->id)->first();

            $reserve = new FlightReserve();
            $reserve->start_date = $flightInfo->date;
            $reserve->end_date = $flightInfo->date;
            $reserve->price = $flightInfo->price;
            $reserve->invoice = "000001";
            $reserve->from_flight_address_id = $flightInfo->from_id;
            $reserve->to_flight_address_id = $flightInfo->to_id;
            $reserve->flight_type_id = $flightInfo->flight_type_id ;
            $reserve->payment_method = $request->get("payment_method");
            $total = 0;
            if($reserve->save()){
                foreach($request->get("passengers") as $key => $item){
                    $total += $item["value"];
                    FlightReserveUser::create(["flights_reserve_id" => $reserve->id, "flights_user_type_id" => $item["id"],"quantity" =>  $item["value"]]);
                }
                foreach($request->get("seats") as $item){
                    FlightReserveSeat::create(["flights_reserve_id" => $reserve->id, "flights_seats_id" => $item]);
                }

                $reserve->update(["price" => ($total * $flightInfo->price ) ]);
                return ApiResponse::success('Success!',['id' => $reserve->invoice]);
            }
        }catch(Exception $ex){
            return ApiResponse::error($ex,500);
        }
    }
}