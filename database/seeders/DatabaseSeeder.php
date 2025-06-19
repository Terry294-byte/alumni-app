<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            AlumniSeeder::class,
            EventSeeder::class,
        ]);
        
        // Uncomment the line below to seed the users table with 10 users
        // \App\Models\User::factory(10)->create();
        // Uncomment the line below to seed the alumni table with 20 alumni records
        // $this->call(AlumniSeeder::class);
        // Uncomment the line below to seed the events table with 20 event records
        // $this->call(EventSeeder::class);
        // Uncomment the line below to seed the users table with 10 users
        // \App\Models\User::factory(10)->create();
    }
}
