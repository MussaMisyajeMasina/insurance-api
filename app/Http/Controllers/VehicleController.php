<?php

namespace App\Http\Controllers;

use App\Model\Vehicle;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\VehicleRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Vehicle\VehicleResource;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VehicleResource::collection(Vehicle::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleRequest $request)
    {
        $vehicle=new vehicle;
        $vehicle->policy_id=$request->policy_id;
        $vehicle->MakeYear=$request->MakeYear;
        $vehicle->color=$request->color;
        $vehicle->NumberPlate=$request->NumberPlate;
        $vehicle->save();
        return response([
            'data'=>new VehicleResource($vehicle)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return new VehicleResource($vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->update($request->all());

        return response([
            'data'=>new VehicleResource($vehicle)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
         return response(null,Response::HTTP_NO_CONTENT);
    }
}
