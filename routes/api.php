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

Route::post('login', 'ApiController@login');
Route::post('register', 'ApiController@register');


// Route::group(['middleware' => 'auth:api'], function() {
Route::group(['middleware' => 'auth.jwt'], function () {

    Route::get('logout', 'ApiController@logout');
    Route::get('user', 'ApiController@getAuthUser');

    Route::get('campers', 'CamperController@index');
    Route::get('campers/{camper}', 'CamperController@show');
    Route::post('campers', 'CamperController@store');
    Route::put('campers/{camper}', 'CamperController@update');
    Route::delete('campers/{camper}', 'CamperController@delete');
});


// // Route::group(['middleware' => 'auth:api'], function() {
//     Route::get('campers', 'CamperController@index');
//     Route::get('campers/{camper}', 'CamperController@show');
//     Route::post('campers', 'CamperController@store');
//     Route::put('campers/{camper}', 'CamperController@update');
//     Route::delete('campers/{camper}', 'CamperController@delete');
// // });

// Route::get('campers', 'CamperController@index');
// Route::get('campers/{camper}', 'CamperController@show');
// Route::post('campers', 'CamperController@store');
// Route::put('campers/{camper}', 'CamperController@update');
// Route::delete('campers/{camper}', 'CamperController@delete');

// Route::post('register', 'Auth\RegisterController@register');
// Route::post('register', 'Auth\RegisterController@register');
// Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@login']);
// Route::middleware('auth:api')
//     ->get('/user', function (Request $request) {
//         return $request->user();
//     });
// Auth::guard('api')->user();
// Auth::guard('api')->check();
// Auth::guard('api')->id();
