<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Delivery;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Brand::class;
    
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'category_id' => Category::class,
            'delivery_id' => Delivery::class,
            'image' => $this->faker->imageUrl($width = 60, $height = 60)
        ];
    }
}
