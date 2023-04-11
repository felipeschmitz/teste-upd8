<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'       => fake()->name(),
            'document'   => fake()->cpf,
            'birthdate'  => fake()->date('Y-m-d', '-18 years'),
            'gender'     => fake()->randomElement(['m', 'f']),
            'postcode'   => fake()->postcode,
            'address'    => fake()->streetName,
            'number'     => fake()->buildingNumber,
            'complement' => '',
            'district'   => fake()->city,
            'state'      => fake()->stateAbbr,
            'city'       => fake()->city,
        ];
    }
}
