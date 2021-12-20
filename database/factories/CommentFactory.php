<?php

namespace Database\Factories;

use App\Models\Gift;
use App\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     * If faker is not associating the comment with a guest, then a new guest and gift will be created.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'guest_id' => Guest::factory(), // Create a new guest and gift.
            'body' => $this->faker->paragraph(2),
        ];
    }
}
