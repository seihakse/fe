<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        \App\Models\Event::factory(1)->create(); // Main event
        \App\Models\User::factory(10)->create(); // Random users
        \App\Models\Project::factory(15)->create(); // Random projects
        \App\Models\Sponsor::factory(4)->create(); // Random sponsors
    }
        
}
