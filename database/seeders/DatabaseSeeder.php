<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    protected static ?string $password;

    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Juan Paganuzzi',
            'email' => 'paganuzzi@gmail.com',
            'password' => '$2y$12$CfVq16m/caUY.g/FcqBcHuGGYrNBUP19vtv8Wu3H3P..M06XCf0PG',
            'remember_token' => Str::random(10),
        ]);
    }
}
