<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AllDataController;
use App\Http\Controllers\API\CountryController;
use App\Http\Controllers\API\CityController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('all-data', AllDataController::class);
Route::apiResource('country', CountryController::class);
Route::apiResource('city', CityController::class);
