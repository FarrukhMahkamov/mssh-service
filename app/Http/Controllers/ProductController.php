<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductResource::collection(Cache::remember('products', 60*60*24, function(){
            return Product::all();
        } ));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request, Product $product)
    {
        $product = Product::create([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'brand_id' => $request->input('brand_id'),
            'size_id' => $request->input('size_id'),
            'block_count' => $request->input('block_count'),
            'image' => $request->file('image')->store('public/images/products'),
            'first_price' => $request->input('first_price'),
            'second_price' => $request->input('second_price'),
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
    public function update(ProductRequest $request, Product $product)
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
