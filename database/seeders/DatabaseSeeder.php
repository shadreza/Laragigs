<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'John Wick',
            'email' => 'john@example.com',
        ]);

        // Listing::create([
        //     'title' => 'Laravel Junior Developer',
        //     'tags' => 'laravel, js, ts',
        //     'company' => 'Azurew Corp',
        //     'location' => 'UK',
        //     'email' => 'azurew@corp.com',
        //     'website' => 'www.azurew.com,',
        //     'description' => 'lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem-ipsum-lorem',
        // ]);

        Listing::factory(6)->create([
            'user_id' => $user['id']
        ]);
    }
}
