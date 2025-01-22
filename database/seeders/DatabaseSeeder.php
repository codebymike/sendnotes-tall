<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Note;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Mike',
            'email' => 'mike@test.com',
            'password' => bcrypt('12345678'),
        ]);

        Note::factory(10)->create();
    }
}
