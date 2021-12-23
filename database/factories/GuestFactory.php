<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),
            'invitation_sent_at' => now(),
            'is_attending' => $this->faker->boolean(), 
            'dietary_requirements' => $this->faker->sentence(),
            'allergies' => $this->faker->sentence(),
            'plus_one_name' => $this->faker->name(),
        ];
    }
}
