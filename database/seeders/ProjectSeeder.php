<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create manual project
        \App\Models\Project::create([
            'title' => 'Smart Irrigation System',
            'description' => 'IoT-based farm watering solution',
            'image' => 'projects/irrigation.jpg',
            'user_id' => 2,
            'event_id' => 1,
            'approved' => true,
        ]);

        // Create 15 fake projects using factory
        \App\Models\Project::factory(15)->create();
    }
}
