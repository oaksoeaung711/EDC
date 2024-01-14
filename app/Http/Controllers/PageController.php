<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Activity;
use App\Models\Home;
use App\Models\Program;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected function formatText(array $array)
    {
        $formattedText = "";
        foreach($array as $info){
            if(count(explode(',',$info)) == 2){
                if( rtrim(explode(',',$info)[1]) == 'yellow' ) {
                    $formattedText .= "<span class='text-secondary'>". explode(',',$info)[0] ."</span>";
                }elseif( rtrim(explode(',',$info)[1]) == 'bold' ) {
                    $formattedText .= "<span class='font-bold'>". explode(',',$info)[0] ."</span>";
                }elseif( rtrim(explode(',',$info)[1]) == 'supper' ) {
                        $formattedText .= "<sup>". explode(',',$info)[0] ."</sup>";
                }else{
                    $formattedText .= $info;
                }
            }else{
                $formattedText .= $info;
            }
        }

        return rtrim($formattedText);
    }

    public function home()
    {
        $formattedIntroHeader = $this->formatText(explode("\\",Home::where('section','intro-header')->first()->content));
        $formattedIntroContent = $this->formatText(explode("\\",Home::where('section','intro-content')->first()->content));
        $introPhotos = Home::where('section','intro-photo')->first()->images;
        $welcomePhotots = Home::where('section','welcome-photo')->first()->images;
        $programs = Program::take(3)->get();
        $formattedPrograms = [];
        foreach($programs as $program){
            $p = [];
            $p["image"] = $program->image;
            $p["id"] = $program->id;
            $p["name"] = $this->formatText(explode("\\",$program->name));
            $p["session"] = $this->formatText(explode("\\",$program->session));
            $p["time"] = $this->formatText(explode("\\",$program->time));
            $p["startdate"] = $this->formatText(explode("\\",$program->startdate));
            $p["location"] = $this->formatText(explode("\\",$program->location));
            array_push($formattedPrograms,$p);
        }

        $programs = json_decode(json_encode($formattedPrograms));
        return view('pages.home',compact('formattedIntroHeader','formattedIntroContent','introPhotos','welcomePhotots','programs'));
    }

    public function about()
    {
        $abouts = About::all();
        $formattedintroHeader = $this->formatText(explode('\\',About::where('section','intro-header')->first()->content));
        $formattedintroContent = $this->formatText(explode('\\',About::where('section','intro-content')->first()->content));
        $introPhoto = About::where('section','intro-photo')->first();
        $whyChooseUs = About::where('section','why-choose-us')->get();
        $officeLocation = About::where('section','office-location')->first();
        return view('pages.about',compact('abouts','formattedintroHeader','formattedintroContent','whyChooseUs','officeLocation','introPhoto'));
    }

    public function program()
    {
        $programs = Program::all();
        $formattedPrograms = [];
        foreach($programs as $program){
            $p = [];
            $p["image"] = $program->image;
            $p["id"] = $program->id;
            $p["name"] = $this->formatText(explode("\\",$program->name));
            $p["session"] = $this->formatText(explode("\\",$program->session));
            $p["time"] = $this->formatText(explode("\\",$program->time));
            $p["startdate"] = $this->formatText(explode("\\",$program->startdate));
            $p["location"] = $this->formatText(explode("\\",$program->location));
            array_push($formattedPrograms,$p);
        }

        $programs = json_decode(json_encode($formattedPrograms));
        return view('pages.programs',compact('programs'));

    }

    public function activity()
    {
        $activities = Activity::all();
        return view('pages.activities',compact('activities'));
    }
}
