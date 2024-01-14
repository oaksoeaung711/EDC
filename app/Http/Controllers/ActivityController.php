<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateActivityRequest;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view('activities.index',compact('activities'));
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
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $activity)
    {
        return view('activities.edit',compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        if($request->has('image')){
            if(!empty($activity->url)){
                Storage::disk('public')->delete(explode('/',$activity->url)[1]);
            }

            $image = $request->file('image');
            $newUploadImageName = uniqid().'.'.$image->getClientOriginalExtension();
            Storage::disk('public')->put("$newUploadImageName",$image->get());
            $url = "storage/$newUploadImageName";
            $activity->url = $url;
        }
        $activity->save();
        return redirect()->route('admin.activities.index');
    }
    public function destroy(Activity $activity)
    {
        //
    }
}
