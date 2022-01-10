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
    public function index(Delivery $delivery)
    {
        return DeliveryResource::collection(Delivery::all());
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
            'username' => $faker->name(),
            'username_slug' => $faker->slug(),
            'user_phone_number' => $faker->randomDigit(),
            'boss_name' => $faker->name(),
            'boss_name_slug' => $faker->name(),
            'boss_phone_number' => 998915,
        ]);

        return new DeliveryResource($delivery);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $delivery)
    {
        return new DeliveryResource($delivery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delivery $delivery)
    {
        $delivery->update([
            'username' => $request->input('username'),
            'username_slug' => $request->input('username_slug'),
            'user_phone_number' => $request->input('user_phone_number'),
            'boss_name' => $request->input('boss_name'),
            'boss_name_slug' => $request->input('boss_name_slug'),
            'boss_phone_number' => $request->input('boss_phone_number'),
        ]);

        return new DeliveryResource($delivery);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $delivery)
    {
        $delivery->delete();
        return response(null,204);
    }
}
