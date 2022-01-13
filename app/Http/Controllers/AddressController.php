<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Http\Resources\AddressResource;
use App\Models\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AddressResource::collection(Address::all());
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddressRequest $request , Address $address)
    {
        $address=Address::create([
            'name'=>$request -> input('name'),
            'slug'=>$request -> input('slug'),
            'region_id'=>$request -> input('region_id'),
        ]);

        return new AddressResource($address);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address )
    {
       return new AddressResource($address);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AddressRequest $request , Address $address)
    {
        $address->update([
            'name'=>$request->input('name'),
            'slug'=>$request->input('slug'),
            'region_id'=>$request->input('region_id'),
        ]);

        return new AddressResource($address);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return response(NULL,202);
    }
}
