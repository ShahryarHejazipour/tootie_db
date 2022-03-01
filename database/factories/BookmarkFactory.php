<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookmarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tooti_id'=>$this->faker->numberBetween(1,2),
            'user_id'=>$this->faker->numberBetween(1,2),
        ];
    }
}
