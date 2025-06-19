<?php
use Illuminate\Database\Seeder;
use App\Models\Alumni;

class AlumniSeeder extends Seeder
{
    public function run()
    {
        Alumni::factory()->count(10)->create();
    }
}

