<?php

namespace Database\Factories;

use App\Models\Questions;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Questions::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'q_num' => $this->faker->name,
            'text' => $this->faker->name,
            'dimension' => $this->faker->name,
            'direction' => $this->faker->name,
            'meaning' => $this->faker->name,
            'min_rank' => 1,
            'max_rank' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
