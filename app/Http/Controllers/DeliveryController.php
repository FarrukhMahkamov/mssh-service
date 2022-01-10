<?php

namespace App\Http\Controllers;

use App\Http\Resources\DeliveryResource;
use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Delivery $delivery)
    {
        $faker = \Faker\Factory::create(2);

        $delivery = Delivery::create([
            'name' => $faker->name(),
            'slug' => $faker->slug(),
            'brand_id' => $faker->randomDigit(),
            'size_id' => $faker->randomDigit(),
            'block_count' => $faker->randomDigit(),
            'image' => $faker->imageUrl($width  = 60, $heght = 60),
            'first_price' => $faker->randomDigit(),
            'second_price' => $faker->randomDigit(),
        ]);

        return new DeliveryResource($delivery);
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
