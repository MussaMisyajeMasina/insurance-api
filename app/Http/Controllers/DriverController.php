<?php

namespace App\Http\Controllers;

use App\Model\Driver;
use Illuminate\Http\Request;
use App\Http\Requests\DriverRequest;
use App\Http\Resources\Driver\DriverResource;
use Symfony\Component\HttpFoundation\Response;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return DriverResource::collection(Driver::all());

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
    public function store(DriverRequest $request)
    {
        $driver=new driver;
        $driver->vehicle_id=$request->vehicle_id;
        $driver->Fname=$request->Fname;
        $driver->Lname=$request->Lname;
        $driver->email=$request->email;
        $driver->DriverForBussinesPurpose=$request->DriverForBussinesPurpose;
        $driver->save();
        return response([
            'data'=>new DriverResource($driver)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        return new DriverResource($driver);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {

        $client->update($request->all());

        return response([
            'data'=>new DiverResource($driver)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
         $driver->delete();
         return response(null,Response::HTTP_NO_CONTENT);
    }
}
