<?php

namespace Database\Factories;

use App\Models\PetsDetails;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetsDetails>
 */
class PetsDetailsFactory extends Factory
{
    protected $model = PetsDetails::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => Str::uuid(),
            'breed' => $this->faker->word,
            'owner' => $this->faker->name,
            'owner_uuid' => Str::uuid(),
            'iagd_number' => strtoupper('IAGD' . $this->faker->unique()->numerify('####')),
            'stars' => $this->faker->numberBetween(0, 5),
            'location' => $this->faker->city,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'date_of_birth' => $this->faker->date('Y-m-d', '-2 years'),
            'colors_body' => $this->faker->safeColorName,
            'colors_eye' => $this->faker->safeColorName,
            'weight' => $this->faker->randomFloat(1, 1, 50),
            'height' => $this->faker->randomFloat(1, 10, 100),
            'display_status' => true,
            // add any other fields you need
        ];
    }
}
