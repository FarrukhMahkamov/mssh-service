<?php
namespace Database\Factories;


use App\Models\Brand;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'brand_id' => Brand::factory(),
            'size_id' => Size::factory(),
            'block_count' => $this->faker->randomDigit(),
            'image' => $this->faker->imageUrl($width = 60, $heght = 60),
            'first_price' => $this->faker->randomDigit(),
            'second_price' => $this->faker->randomDigit(),
        ];
    }
}
