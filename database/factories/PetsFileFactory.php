<?php

namespace Database\Factories;

use App\Models\PetsFile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetsFile>
 */
class PetsFileFactory extends Factory
{
    protected $model = PetsFile::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fileName = $this->faker->lexify('document_????') . '.pdf';

        return [
            'uuid' => Str::uuid(),
            'attached_to_uuid' => Str::uuid(), // You override this in PetsFactory
            'file_name' => $fileName,
            'file_path' => 'uploads/' . $fileName,
            'file_type' => 'document', // or 'image', 'video', etc.
            'file_size' => $this->faker->numberBetween(10000, 5000000), // in bytes
            'file_extension' => 'pdf',
            'file_mime_type' => 'application/pdf',
            'file_hash' => hash('sha256', $fileName . now()),
            'status' => 'active',
            'deleted_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
