<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $create = User::create([
            'uuid' => Str::uuid(),
            'last_name' => 'Doe',
            'first_name' => 'John',
            'middle_name' => 'S',
            'email_address' => 'example@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make('password'),
            'is_admin' => 1,
            'deleted_at' => null,
            'remember_token' => null,
        ]);

        $create->save();
    }
}
