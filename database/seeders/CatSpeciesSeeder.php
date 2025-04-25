<?php

namespace Database\Seeders;

use App\Models\Species;
use File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class CatSpeciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(public_path('json/cat_species.json'));
        $species = json_decode($json, true);

        foreach ($species as $item) {
            Species::create([
                'uuid' => Str::uuid() ,
                'name' => $item['name'],
                'type' => "cat",
                'scientific_name' => $item['scientific_name']
            ]);
        }
    }
}
