<?php

namespace Database\Seeders;

use App\Models\Species;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class DogSpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(public_path('json/dog_species.json'));
        $species = json_decode($json, true);

        foreach ($species as $item) {
            Species::create([
                'uuid' => Str::uuid() ,
                'name' => $item['name'],
                'type' => "dog",
                'scientific_name' => $item['scientific_name']
            ]);
        }
    }
}
