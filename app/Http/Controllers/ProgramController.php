<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
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

    public function index()
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
        return view('programs.index',compact('programs'));
    }

    public function create()
    {
        return view('programs.create');
    }

    public function store(StoreProgramRequest $request)
    {
        if($request->has('image')){
            $image = $request->file('image');
            $newUploadImageName = uniqid().'.'.$image->getClientOriginalExtension();
            Storage::disk('public')->put("$newUploadImageName",$image->get());
            $url = "storage/$newUploadImageName";
        }

        Program::create([
            "image" => $url,
            "name" => $request->name,
            "session" => $request->session,
            "time" => $request->time,
            "startdate" => $request->startdate,
            "location" => $request->location,
        ]);

        return redirect()->route('admin.programs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Program $program)
    {
        //
    }

    public function edit(Program $program)
    {
        return view('programs.edit',compact('program'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgramRequest $request, Program $program)
    {
        if($request->has('image')){
            if(!empty($program->image)){
                Storage::disk('public')->delete(explode('/',$program->image)[1]);
            }

            $image = $request->file('image');
            $newUploadImageName = uniqid().'.'.$image->getClientOriginalExtension();
            Storage::disk('public')->put("$newUploadImageName",$image->get());
            $url = "storage/$newUploadImageName";
            $program->image = $url;
        }
        $program->name = $request->name;
        $program->session = $request->session;
        $program->time = $request->time;
        $program->startdate = $request->startdate;
        $program->location = $request->location;
        $program->save();
        return redirect()->route('admin.programs.index');
    }

    public function destroy(Program $program)
    {
        Storage::disk('public')->delete(explode('/',$program->image)[1]);
        $program->delete();
        return redirect()->route('admin.programs.index');
    }
}
