<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Http\Resources\BrandResource;
use App\Models\Brand;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      return BrandResource::collection(Cache::remember('brands', 60*60*24, function() {
        return Brand::with('category', 'delivery')->get();
      }));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request, Brand $brand)
    {
        $brand = Brand::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'image' => $request->file('image')->store('public/images/brands'),
            'category_id' => $request->input('category_id'),
            'delivery_id' => $request->input('delivery_id'),
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
    public function update(BrandRequest $request,Brand $brand)
    {
        $brand -> update([
            'name'=>$request->input('name'),
            'slug'=>$request-> unput('slug'),
            'image'=>$request->input('image'),
            'category_id'=>$request->input('category_id'),
            'delivery_id'=>$request->input('delivery_id'),
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

        return response(null,204);
    }
}
