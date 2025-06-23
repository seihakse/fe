<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sponsor;

// database/seeders/SponsorSeeder.php
class SponsorSeeder extends Seeder
{
    public function run()
    {
        $tiers = ['platinum', 'gold', 'silver'];

        \App\Models\Sponsor::create([
            'name' => 'Smart Axiata',
            'logo' => 'sponsors/smart.png',
            'tier' => $tiers[0],
            'website' => 'https://www.smart.com.kh',
            'event_id' => 1,
        ]);

        foreach (['Cellcard', 'ABA Bank', 'Canadia Bank'] as $index => $name) {
            \App\Models\Sponsor::create([
                'name' => $name,
                'logo' => "sponsors/" . strtolower(str_replace(' ', '_', $name)) . ".png",
                'tier' => $tiers[$index + 1],
                'event_id' => 1,
            ]);
        }
    }
}