<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\V1\FlightAddressController;
use App\Http\Controllers\API\V1\FlightUserTypeController;
use App\Http\Controllers\API\V1\FlightTypeController;
use App\Http\Controllers\API\V1\FlightSeatController;
use App\Http\Controllers\API\V1\FlightController;
use App\Http\Controllers\API\V1\FlightReserveController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->namespace('API\V1')->group(function () {
    Route::prefix('customer')->group(function () {
        
        Route::get('/flight-address-get', [FlightAddressController::class, 'getAll']);
        Route::get('/flight-user-type-get', [FlightUserTypeController::class, 'getAll']);
        Route::get('/flight-type-get', [FlightTypeController::class, 'getAll']);
        Route::get('/flight-seat-get', [FlightSeatController::class, 'getByParentId']);
        Route::get('/flight-get-by-parms', [FlightController::class, 'getByParms']);
        Route::get('/flight-get-by-id', [FlightController::class, 'getById']);
        Route::post('/flight-store', [FlightReserveController::class, 'store']);
        
    });
});
