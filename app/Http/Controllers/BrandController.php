<?php

namespace App\Http\Controllers;

use App\Http\Resources\BrandResource;
use App\Models\Brands;
use Faker\Factory;
use Illuminate\Http\Request;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return BrandResource::collection(Brands::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Brands $brands)
    {
        $faker = Factory::create();

        $brands = Brands::create([
            'name'  =>$faker -> name(),
            'slug'  =>$faker -> slug(),
            'image' =>$faker -> imageUrl($width = 60, $height = 60),
            'category_id' => $faker -> randomDigit(),
            'delivery_id' => $faker -> randomDigit(),
        ]);
        return new BrandResource($brands);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brands $brands)
    {
        return new BrandResource($brands);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Brands $brands)
    {
        $brands -> update([
            'name'  => $request -> input('name'),
            'slug'  => $request -> unput('slug'),
            'image' => $request  -> input('image'),
        ]);
        return new BrandResource($brands);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brands $brands)
    {
        $brands -> delete();

        return response(null,404);
    }
}
