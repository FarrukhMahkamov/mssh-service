<?php

namespace App\Http\Controllers;

use App\Http\Resources\SizeResource;
use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Requests\SizeRequest;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SizeResource::collection(Size::all());
    }

    public function show(Size $size)
    {
        return new SizeResource($size);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SizeRequest $request, Size $size)
    {

        $size = Size::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
        ]);

        return new SizeResource($size);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SizeRequest $request, Size $size)
    {
        $size->update([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
        ]);

        return new SizeResource($size);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Size $size)
    {
        $size->delete();

        return response(null, 204);
    }
}
