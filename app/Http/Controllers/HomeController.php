<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomePhotoUpdateRequest;
use App\Models\Home;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
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
                }else{
                    $formattedText .= $info;
                }
            }else{
                $formattedText .= $info;
            }
        }

        return rtrim($formattedText);
    }

    public function index()
    {
        $infos = Home::all();
        $formattedIntroHeader = $this->formatText(explode("\\",Home::where('section','intro-header')->first()->content));
        $formattedIntroContent = $this->formatText(explode("\\",Home::where('section','intro-content')->first()->content));
        $programs = Program::select('name')->get();
        return view('home.index',compact('infos','formattedIntroHeader','formattedIntroContent','programs'));
    }

    public function edit(Home $home)
    {
        return view('home.edit',compact('home'));
    }

    public function photoEdit(Home $home)
    {
        return view('home.photoEdit',compact('home'));
    }

    public function update(Request $request, Home $home)
    {
        $home->content = $request->content;
        $home->save();
        return redirect()->route('admin.home.index');
    }

    public function photoUpdate(HomePhotoUpdateRequest $request, Home $home)
    {
        if($request->has('images')){
            foreach($request->file('images') as $idx => $image)
            {
                if(!empty($home->images[$idx]->url)){
                    Storage::disk('public')->delete(explode('/',$home->images[$idx]->url)[1]);
                }

                $newUploadImageName = uniqid().'.'.$image->getClientOriginalExtension();
                Storage::disk('public')->put("$newUploadImageName",$image->get());
                $home->images[$idx]->url = "storage/$newUploadImageName";
                $home->images[$idx]->save();
            }
        }

        return redirect()->route('admin.home.index');
    }

    public function destroy(Home $home)
    {
        //
    }
}
