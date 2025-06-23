<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Event::create([
            'title' => 'FE Engineering Day 2024',
            'description' => 'Annual engineering exhibition at RUPP',
            'date' => now()->addDays(30),
            'location' => 'RUPP Campus, Phnom Penh',
            'cover_image' => 'events/cover.jpg',
            'reg_deadline' => now()->addDays(20),
        ]);
        
    }
}
