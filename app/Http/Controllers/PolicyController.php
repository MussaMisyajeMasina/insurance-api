<?php

namespace App\Http\Controllers;

use App\Model\Policy;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\PolicyRequest;
use App\Http\Resources\Policy\PolicyResource;
use Symfony\Component\HttpFoundation\Response;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $policies = PolicyResource::collection(Policy::all());

        $totalPolicies = [
            'policies' => $policies,
            'policies_count' => $policies->count()

        ];

        return $totalPolicies;


        // $q->whereDate('ExpireDate', '>', date('Y-m-d'));
        // return $q;
        // $policy=Policy::where('ExpireDate', '<=', $currentDate)->get();
        // return $today = date("d/m/Y");

        //  return PolicyResource::collection(Policy::all());


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
    public function store(PolicyRequest $request)
    {
        $policy=new policy;
        $policy->client_id=$request->client_id;
        $policy->CategoryName=$request->CategoryName;
        $policy->PolicyNumber=$request->PolicyNumber;
        $policy->EffectiveDate=$request->EffectiveDate;
        $policy->ExpireDate=$request->ExpireDate;
        $policy->save();
        return response([
            'data'=>new PolicyResource($policy)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function show(Policy $policy)
    {
        return new PolicyResource($policy);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function edit(Policy $policy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Policy $policy)
    {

        $policy->update($request->all());

        return response([
            'data'=>new PolicyResource($policy)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Policy $policy)
    {
        $policy->delete();
         return response(null,Response::HTTP_NO_CONTENT);
    }
}
