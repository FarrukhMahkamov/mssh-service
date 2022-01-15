<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsumptionCategoryRequest;
use App\Http\Resources\ConsumptionCategoryResource;
use App\Models\ConsumptionCategory;
use Illuminate\Http\Request;

class ConsumptionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ConsumptionCategory $consumptionCategory)
    {
       return ConsumptionCategoryResource::collection(ConsumptionCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConsumptionCategory $consumptionCategory, ConsumptionCategoryRequest $request)
    {
       $consumptionCategory = $consumptionCategory::create($request->all());

        return new ConsumptionCategoryResource($consumptionCategory);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ConsumptionCategory $consumptionCategory)
    {
        return new ConsumptionCategoryResource($consumptionCategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConsumptionCategory $consumptionCategory, ConsumptionCategoryRequest $request)
    {
       $consumptionCategory = $consumptionCategory->update($request->all());

        return new ConsumptionCategoryResource($consumptionCategory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConsumptionCategory $consumptionCategory)
    {
        $consumptionCategory->delete();
        return response(null, 204);
    }
}
