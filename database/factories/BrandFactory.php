<?php

namespace Database\Factories;

use App\Models\Brand;
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
            'category_id' => $this->faker->randomDigit(),
            'delivery_id' => $this->faker->randomDigit(),
            'image' => $this->faker->imageUrl($width = 60, $height = 60)
        ];
    }
}
