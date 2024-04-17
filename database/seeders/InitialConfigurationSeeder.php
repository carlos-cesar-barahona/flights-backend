<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\FlightAddress;
use App\Models\FlightType;
use App\Models\FlightUserType;
use App\Models\Flight;
use App\Models\FlightSeat;

use Carbon\Carbon;

class InitialConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        FlightAddress::create(["name" => "Mérida","code" => "mid"]);
        FlightAddress::create(["name" => "Cancún", "code" => "cun"]);
        FlightAddress::create(["name" => "Ciudad de México","code" => "mex"]);


        FlightType::create(["name" => "Económico"]);
        FlightType::create(["name" => "Normal"]);
        FlightType::create(["name" => "Ejecutivo"]);
        
        for($i = 1; $i<=16; $i++){
            FlightSeat::create(["name" => $i, "flight_type_id" => 1]);
        }

        for($i = 16; $i<=32; $i++){
            FlightSeat::create(["name" => $i, "flight_type_id" => 2]);
        }

        for($i = 32; $i<=50; $i++){
            FlightSeat::create(["name" => $i, "flight_type_id" => 3]);
        }        
        
        

        FlightUserType::create(["name" => "Adultos"]);
        FlightUserType::create(["name" => "Niños"]);
        FlightUserType::create(["name" => "Infantes"]);


        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s'), "duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 1, "price" => 750]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 1, "price" => 750]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 1, "price" => 750]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 1, "price" => 750]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 1, "price" => 750]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 1, "price" => 750]);


        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s'), "duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 2, "price" => 1012.50]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 2, "price" => 1012.50]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 2, "price" => 1012.50]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 2, "price" => 1012.50]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 2, "price" => 1012.50]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 2, "price" => 1012.50]);        


        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s'), "duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 3, "price" => 1087.50]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 3, "price" => 1087.50]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 3, "price" => 1087.50]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 3, "price" => 1087.50]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 3, "price" => 1087.50]);
        Flight::create(["date" => Carbon::now()->addDays(35),"time" => Carbon::now()->addDays(35)->format('H:i:s') ,"duration" => "75","from_id" => 1, "to_id" => "2","flight_type_id" => 3, "price" => 1087.50]);
    }
}
