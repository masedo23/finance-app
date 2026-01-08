<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Mas Edo',
            'email' => 'admin@gmail.com',
            'role' => 'administrator',
            'password'=> Hash::make('admin@gmail.com'),
        ]);

        User::factory()->create([
            'name' => 'Paijo Ganteng',
            'email' => 'paijo@gmail.com',
            'role' => 'user',
            'password'=> Hash::make('paijo@gmail.com'),
        ]);

        $this->call([
            UserSeeder::class,
        ]);
    }
}
