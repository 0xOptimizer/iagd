<?php

namespace Database\Factories;

use App\Models\Pets;
use App\Models\PetsDetails;
use App\Models\PetsFile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pets>
 */
class PetsFactory extends Factory
{
    protected $model = Pets::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sample = $this->faker;

        return [
            'uuid' => Str::uuid(),
            'pet_name' => $sample->firstName,
            'pet_type' => $sample->randomElement(['dog', 'cat', 'rabbit', 'parrot']),
            'image' => $sample->imageUrl(640, 480, 'animals', true, 'pet'),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Pets $pet) {
            // Create matching PetDetail
            PetsDetails::factory()->create([
                'uuid' => Str::uuid(),

            ]);

            // Create 3 uploads per pet
            PetsFile::factory()->count(3)->create([
                'attached_to_uuid' => $pet->uuid,
            ]);
        });
    }
}
