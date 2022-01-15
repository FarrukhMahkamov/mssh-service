<?php

namespace App\Http\Controllers;

use App\Http\Resources\RegionResource;
use App\Http\Requests\RegionRequest;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Region $region)
    {   
        return RegionResource::collection(Region::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegionRequest $request, Region $region)
    {
        $region = Region::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'state_id' =>$request->input('state_id')
        ]);
        return new RegionResource($region);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        return new RegionResource($region);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegionRequest $request, Region $region)
    {
        $region->update([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'state_id' =>$request->input('state_id')
        ]);

        return new RegionResource($region);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        $region->delete();
        return response(null, 204);
    }
}
