<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'addressline' => $this->faker->address(),
            'postalcode' => $this->faker->bothify('######'),
            'city' => $this->faker->city()
        ];
    }
}
