<?php

namespace Database\Seeders;

use App\Models\Home;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        Home::create([
            'section' => 'intro-header',
            'content' => "Let's Meet Your Goal \Here!,yellow\\"
        ]);

        Home::create([
            'section' => 'intro-content',
            'content' => "We want to luanch our \E.D.C (Extracurricular Development Center),bold\ , to all the children and young learners. This project leads Win-Win situation for partners and target audients. This project will be popular and effective for our society."
        ]);

        $introSection = Home::create([
            'section' => 'intro-photo',
        ]);

        $welcomeSection = Home::create([
            'section' => 'welcome-photo',
        ]);

        for($i = 1; $i < 4; $i++){
            $introSection->images()->save(new Image([
                'url' => "storage/default$i.jpg"
            ]));
        }

        for($i = 4; $i < 12; $i++){
            $welcomeSection->images()->save(new Image([
                'url' => "storage/default$i.jpg"
            ]));
        }
    }
}
