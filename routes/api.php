<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
use App\Camper;

Route::get('campers', 'CamperController@index');
Route::get('campers/{camper}', 'CamperController@show');
Route::post('campers', 'CamperController@store');
Route::put('campers/{camper}', 'CamperController@update');
Route::delete('campers/{camper}', 'CamperController@delete');
