<?php

namespace App\Http\Controllers;

use App\Http\Resources\BrandResource;
use App\Models\Brand;
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
      return BrandResource::collection(Brand::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Brand $brand)
    {
        $faker = Factory::create(1);

        $brand = Brand::create([
            'name'  => $faker -> name(),
            'slug'  => $faker -> slug(),
            'image' => $faker -> imageUrl($width = 60, $height = 60),
            'category_id' => $faker -> randomDigit(),
            'delivery_id' => $faker -> randomDigit(),
        ]);
        return new BrandResource($brand);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return new BrandResource($brand);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Brand $brand)
    {
        $brand -> update([
            'name'  => $request -> input('name'),
            'slug'  => $request -> unput('slug'),
            'image' => $request  -> input('image'),
            'category_id' => $request  -> input('category_id'),
            'delivery_id' => $request  -> input('delivery_id'),
        ]);
        return new BrandResource($brand);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand -> delete();

        return response(null,404);
    }
}
