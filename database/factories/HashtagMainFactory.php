<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HashtagMainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hashtag_text'=>$this->faker->text(190),
            'hashtag_first_creation_time'=>$this->faker->time,
        ];
    }
}
