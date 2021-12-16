<?php

namespace Database\Factories;

use App\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;

class GiftFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'guest_id' => Guest::factory(),
            'gift_type' => $this->faker->randomElement(['cake', 'chocolate', 'gift card', 'gift set', 'cash']),
        ];
    }
}
