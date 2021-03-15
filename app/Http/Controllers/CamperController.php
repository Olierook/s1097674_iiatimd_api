<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use App\Camper;

class CamperController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->middleware('auth:api');
    }


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

    public function update(Request $request, $uuid)
    {
        $camper = Camper::all()->find($uuid);
        $camper->update($request->all());

        return response()->json($camper, 200);
    }

    public function delete(Camper $camper)
    {
        $camper->delete();

        return response()->json(null, 204);
    }
}
