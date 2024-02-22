<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patients_id' => $this->faker->randomDigit,
            'zipcode' => $this->faker->numerify('#####-###'),
            'street' => $this->faker->streetName,
            'complement' => $this->faker->streetAddress,
            'neighborhood' => $this->faker->cityPrefix,
            'city' => $this->faker->city,
            'state'=> $this->faker->stateAbbr,
        ];
    }
}
