<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::create([
            "email" => "EDCactivitiescenter@gmail.com",
            "primaryphonenumber" => "09771435596",
            "secondaryphonenumber" => "09771435596",
            "worktime" => "9 AM 4 PM",
            "address" => "No.(504/506), Room A (4),39\\th,supper\\ St (Lower Block), Kyauktada, Yangon",
            "facebookurl" => "https://www.facebook.com/profile.php?id=100095479575321",
            "googlemapurl" => "https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2311.6194359644987!2d96.11795676851716!3d16.85711385745237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smm!4v1704032545274!5m2!1sen!2smm"
        ]);
    }
}
