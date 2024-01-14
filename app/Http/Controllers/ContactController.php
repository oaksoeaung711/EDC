<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        $contactInformations = Contact::first();
        $email = $contactInformations->email;
        $primaryphonenumber = $contactInformations->primaryphonenumber;
        $secondaryphonenumber = $contactInformations->secondaryphonenumber;
        $worktime = $contactInformations->worktime;
        $address = $this->formatText(explode('\\',$contactInformations->address));
        $facebookurl = $contactInformations->facebookurl;
        $googlemapurl = $contactInformations->googlemapurl;
        return view('contact.index',compact('contactInformations','email','primaryphonenumber','secondaryphonenumber','worktime','address','facebookurl','googlemapurl'));
    }

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
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->update([
            "email" => $request->email,
            "primaryphonenumber" => $request->primaryphonenumber,
            "secondaryphonenumber" => $request->secondaryphonenumber,
            "worktime" => $request->worktime,
            "address" => $request->address,
            "facebookurl" => $request->facebookurl,
            "googlemapurl" => $request->googlemapurl,
        ]);

        return redirect()->route('admin.contact.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
