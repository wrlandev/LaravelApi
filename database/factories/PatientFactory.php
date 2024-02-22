<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->name,
            'full_name_mother' => $this->faker->name,
            'date_of_birth' => $this->faker->date,
            'document_cpf' => $this->faker->numerify('###.###.###-##'),
            'document_cns' => $this->faker->numerify('###############')
        ];
    }
}
