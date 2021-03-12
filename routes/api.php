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


use App\Camper;


Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::get('user', 'AuthController@me');
Route::get('campers', 'CamperController@index');
Route::get('campers/{camper}', 'CamperController@show');
Route::post('campers', 'CamperController@store');
Route::put('campers/{camper}', 'CamperController@update');
Route::delete('campers/{camper}', 'CamperController@delete');
