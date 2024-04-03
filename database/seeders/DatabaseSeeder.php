<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@outlook.com',
            'password' => Hash::make('12345678'),
            'roles' => 'admin',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'klant',
            'email' => 'klant@outlook.com',
            'password' => Hash::make('12345678'),
            'roles' => 'klant',
        ]);
    }
}
