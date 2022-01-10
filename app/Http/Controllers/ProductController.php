<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductResource::collection(Product::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        $faker = \Faker\Factory::create(2);

        $product = Product::create([
            'name' => $faker->name(),
            'slug' => $faker->slug(),
            'brand_id' => $faker->randomDigit(),
            'size_id' => $faker->randomDigit(),
            'block_count' => $faker->randomDigit(),
            'image' => $faker->imageUrl($width  = 60, $heght = 60),
            'first_price' => $faker->randomDigit(),
            'second_price' => $faker->randomDigit(),
        ]);

        return new ProductResource($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'brand_id' => $request->input('brand_id'),
            'size_id' => $request->input('size_id'),
            'block_count' => $request->input('block_count'),
            'image' => $request->input('image'),
            'first_price' => $request->input('first_price'),
            'second_price' => $request->input('second_price'),
        ]);

        return new ProductResource($product);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response(null,204);
    }
}
