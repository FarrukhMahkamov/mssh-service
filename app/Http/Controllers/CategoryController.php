<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Database\Factories\CategoryFactory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CategoryResource::collection(Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Category $category)
    {
        $faker=\Faker\Factory::create();
        $category=Category::create([

            'name'  => $faker->name(),
            'slug'  => $faker->slug(),
            'image' => $faker->imageUrl($width=60 , $height=60),
        
            ]) ;
        return new CategoryResource($category);      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category)
    {
        $category -> update([
            'name' => $request  -> input('name'),
            'slug' => $request  -> input('slug'),
            'image' => $request -> input('image'),
        ]);
        return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response(null,404);        
    }
}
