<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TootiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tooti_text'=>$this->faker->text,
            'tooti_time_creation'=>now(),
            'quote_text'=>$this->faker->text,
            'device_id'=>$this->faker->numberBetween(1,2),
            'user_id'=>$this->faker->numberBetween(1,2),
            're_tooti_id'=>$this->faker->numberBetween(1,2),
            'image_url_id'=>$this->faker->numberBetween(1,2),
            'view_id'=>$this->faker->numberBetween(1,2),
        ];
    }
}
