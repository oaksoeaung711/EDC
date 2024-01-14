<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $whyChooseUs = [
            "Qualified Coaches",
            "Famous Location",
            "Effective Learning Style",
            "Fair Price",
            "Friendship",
            "Basic To Professional chances",
            "Competitions For Building The Quality",
            "Good Surroundings"
        ];

        About::create([
            'section' => 'intro-header',
            'content' => "Welcome to \EDC,yellow\ Center"
        ]);

        About::create([
            'section' => 'intro-content',
            'content' => "We would like to introduce the history of EDC Center first. EDC Page is both sport-specific and It is an activities center that is organized and established by expert coaches from different fields of sports, music and different scopes, and it is a center that aims to enable young people to study until they gain skills in various fields.Therefore, we would like to further inform you that it is designed for children and youths who will seek improvement outside of school hours and EDC Center will also support your scholarship process by recommendation of expert coaches."
        ]);

        About::create([
            'section' => 'intro-photo',
        ])->images()->save(new Image([
            'url' => "storage/logo.png"
        ]));

        foreach($whyChooseUs as $quotes)
        {
            About::create([
                'section' => 'why-choose-us',
                'content' => "$quotes"
            ]);
        }

        $officeLocation = About::create([
            'section' => 'office-location',
        ]);

        for($i = 1; $i < 4; $i++){
            $officeLocation->images()->save(new Image([
                'url' => "storage/default$i.jpg"
            ]));
        }
    }
}
