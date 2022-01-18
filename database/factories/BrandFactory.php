<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
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
            'category_id' => Category::factory(),
            'delivery_id' => Delivery::factory(),
            'image' => $this->faker->imageUrl($width = 60, $height = 60)
        ];
    }
}
