<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutPhotoUpdateRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
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
        $abouts = About::all();
        $formattedintroHeader = $this->formatText(explode('\\',About::where('section','intro-header')->first()->content));
        $formattedintroContent = $this->formatText(explode('\\',About::where('section','intro-content')->first()->content));
        $whyChooseUs = About::where('section','why-choose-us')->get();
        $officeLocation = About::where('section','office-location')->first();
        return view('about.index',compact('abouts','formattedintroHeader','formattedintroContent','whyChooseUs','officeLocation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('about.edit',compact('about'));
    }

    public function photoEdit(About $about)
    {
        return view('about.photoEdit',compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $about->content = $request->content;
        $about->save();
        return redirect()->route('admin.about.index');
    }

    public function photoUpdate(AboutPhotoUpdateRequest $request, About $about)
    {
        if($request->has('images')){
            foreach($request->file('images') as $idx => $image)
            {
                if(!empty($about->images[$idx]->url)){
                    Storage::disk('public')->delete(explode('/',$about->images[$idx]->url)[1]);
                }

                $newUploadImageName = uniqid().'.'.$image->getClientOriginalExtension();
                Storage::disk('public')->put("$newUploadImageName",$image->get());
                $about->images[$idx]->url = "storage/$newUploadImageName";
                $about->images[$idx]->save();
            }
        }

        return redirect()->route('admin.about.index');
    }

    public function destroy(About $about)
    {
        //
    }
}
