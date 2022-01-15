<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsumptionRequest;
use App\Http\Resources\ConsumptionResource;
use App\Models\Consumption;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ConsumptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Consumption $consumption)
    {
        return ConsumptionResource::collection(Consumption::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Consumption $consumption ,ConsumptionRequest $request)
    {
        $consumption = $consumption->create($request->all());

        return new ConsumptionResource($consumption);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Consumption $consumption)
    {
        return new ConsumptionResource($consumption);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Consumption $consumption, ConsumptionRequest $request)
    {
        $consumption = $consumption->update($request->all());

        return new ConsumptionResource($consumption);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumption $consumption)
    {
        $consumption->delete();

        return response(null, 204);
    }
}
