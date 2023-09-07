<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Question;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trick>
 */
class TrickFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          'user_id' => function() {
            return User::factory();
          },
          'question_id' => function() {
            return Question::factory();
          },
        // 'question_id' => $this->faker->numberBetween(1,50),
          'title' => $this->faker->realText($maxNbChars = 20),
          'body' => $this->faker->realText($maxNbChars = 100),
          'good_count' => $this->faker->numberBetween(0,100)
        ];
    }
}
