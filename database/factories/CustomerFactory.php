<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstname(),
            'lastname' => $this->faker->lastName(),
            'phone' => $this->faker->bothify('3#########'),
            'email' => $this->faker->unique()->safeEmail()
        ];
    }
}
