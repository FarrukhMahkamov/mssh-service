<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeliveryLeftoverRequest;
use App\Http\Resources\DeliveryLeftoverResource;
use App\Models\DeliveryLeftover;
use Illuminate\Http\Request;

class DeliveryLeftoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DeliveryLeftoverResource::collection(DeliveryLeftover::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , DeliveryLeftover $deliveryLeftover)
    {
    
        $deliveryLeftover=DeliveryLeftover::create([
            'data'=>$request->input('data'),
            'document'=>$request->input('document'),
            'user_id'=>$request->input('user_id'),
            'type'=>$request->input('type'),
        ]);

        return  new DeliveryLeftoverResource($deliveryLeftover);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
