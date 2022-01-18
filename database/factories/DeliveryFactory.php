<?php

namespace Database\Factories;

use App\Models\Delivery;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Delivery::class;

    public function definition()
    {
        return [
            'username' => $this->faker->userName(),
            'username_slug' => $this->faker->slug(),
            'user_phone_number' => $this->faker->randomDigit(),
            'boss_name' => $this->faker->name(),
            'boss_name_slug' => $this->faker->name(),
            'boss_phone_number' => $this->faker->randomDigit(),
        ];
    }
}
