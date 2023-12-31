<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Trick;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reply>
 */
class ReplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'trick_id' => function() {
                return Trick::factory();
              },
            'user_id' => function() {
                return User::factory();
              },
              'body' => $this->faker->realText($maxNbChars = 100),
              'good_count' => $this->faker->numberBetween(0,100)
        ];
    }
}
