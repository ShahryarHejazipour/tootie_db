<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName ,
            'name_user' => $this->faker->firstName,
            'family_user' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail(),
            'register_first_time' =>now(),
            'password' => $this->faker->password, // password
            'latitude_X'=>$this->faker->latitude,
            'longitude_Y'=>$this->faker->longitude,
            //'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
   /* public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'register_first_time' => null,
            ];
        });
    }*/
}
