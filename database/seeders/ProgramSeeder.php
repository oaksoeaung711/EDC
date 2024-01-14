<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::create([
            "image" => "storage/default1.jpg",
            "name" => "EDC Swimming Club For Universities Students",
            "session" => "Monday & Sunday",
            "time" => "9:00 AM 11:00 AM",
            "startdate" => "3rd February,2024",
            "location" => "Novotel Swimming Pool (6\\th,supper\\ Floor)",
        ]);
    }
}
