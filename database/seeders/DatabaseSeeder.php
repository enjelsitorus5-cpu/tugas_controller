<?php

namespace Database\Seeders;

<<<<<<< HEAD
=======
use App\Models\User;
>>>>>>> b38206ac7376d41bf8af11b27f7f9943d4ab0cac
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
=======
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
>>>>>>> b38206ac7376d41bf8af11b27f7f9943d4ab0cac
    }
}
