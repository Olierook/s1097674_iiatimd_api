<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use JWTAuth;
use App\Camper;

class CamperController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }


    public function index()
    {
        return Camper::all();
    }

    public function show($user_id)
    {
        return Camper::all()->where("user_id", $user_id);
    }

    public function store(Request $request)
    {
        $camper = Camper::create($request->all());

        return response()->json($camper, 201);
    }

    public function update(Request $request, $id)
    {
        $camper = Camper::find($id);
        $camper->currentBalance = $request->currentBalance;
        $camper->save();
        // $input = $request->all();
        // $camper->fill($input)->save();
        //
        // $camper->update($request->all());
        // $camper->save();

        return response()->json($camper, 200);
    }

    public function delete($id)
    {
        Camper::destroy($id);
        return response()->json(null, 204);
    }
}
