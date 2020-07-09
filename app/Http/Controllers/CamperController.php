<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Camper;

class CamperController extends Controller
{
    public function index()
    {
        return Camper::all();
    }

    public function show(Camper $camper)
    {
        return $camper;
    }

    public function store(Request $request)
    {
        $camper = Camper::create($request->all());

        return response()->json($camper, 201);
    }

    public function update(Request $request, Camper $camper)
    {
        $camper->update($request->all());

        return response()->json($camper, 200);
    }

    public function delete(Camper $camper)
    {
        $camper->delete();

        return response()->json(null, 204);
    }
}
