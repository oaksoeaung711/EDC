@extends('layout')

@section('content')
<div class="space-y-10">
    <h1 class="text-center">Programs</h1>
    <p class="leading-10 text-lg text-center">The first to introduce are the classes that will be opened by the Extracurricular Development Center (EDC). Those sub-classes EDC opened with the aim of supporting children and youth between the ages of 8 and 23 for the comprehensive development and scholarship processes.</p>
</div>
<div class="my-16">
    <div class="p-5 grid grid-cols-1 md:grid-cols-3 place-items-center gap-5 md:gap-y-10">
        <div class="program__info1 w-80 h-96 border rounded-xl shadow-xl overflow-hidden bg-gray-50">
            <div class="w-full h-44">
                <img src="{{ asset('images/programs/swim.jpg') }}" class="object-cover w-full h-full" />
            </div>
            <div class="p-5 mt-5 space-y-4">
                <p class="font-bold text-lg">Swimming Class</p>
                <p class="font-light text-sm">Monday & Wednesday</p>
                <p class="font-light text-sm">4:30PM - 5:30PM</p>
            </div>
        </div>

        <div class="program__info1 w-80 h-96 border rounded-xl shadow-xl overflow-hidden bg-gray-50">
            <div class="w-full h-44">
                <img src="{{ asset('images/programs/football.jpg') }}" class="object-cover w-full h-full" />
            </div>
            <div class="p-5 mt-5 space-y-4">
                <p class="font-bold text-lg">Football Class</p>
                <p class="font-light text-sm">Saturday & Sunday</p>
                <p class="font-light text-sm">8:00AM - 10:00AM</p>
            </div>
        </div>

        <div class="program__info1 w-80 h-96 border rounded-xl shadow-xl overflow-hidden bg-gray-50">
            <div class="w-full h-44">
                <img src="{{ asset('images/programs/basketball.jpg') }}" class="object-cover w-full h-full" />
            </div>
            <div class="p-5 mt-5 space-y-4">
                <p class="font-bold text-lg">Basketball Class</p>
                <p class="font-light text-sm">Tuesday & Thursday</p>
                <p class="font-light text-sm">4:00PM - 5:00PM</p>
            </div>
        </div>

        <div class="program__info1 w-80 h-96 border rounded-xl shadow-xl overflow-hidden bg-gray-50">
            <div class="w-full h-44">
                <img src="{{ asset('images/programs/chess.jpg') }}" class="object-cover w-full h-full" />
            </div>
            <div class="p-5 mt-5 space-y-4">
                <p class="font-bold text-lg">Chess Class</p>
                <p class="font-light text-sm">Monday & Wednesday</p>
                <p class="font-light text-sm">4:30PM - 5:30PM</p>
            </div>
        </div>

        <div class="program__info1 w-80 h-96 border rounded-xl shadow-xl overflow-hidden bg-gray-50">
            <div class="w-full h-44">
                <img src="{{ asset('images/programs/vocal.jpg') }}" class="object-cover w-full h-full" />
            </div>
            <div class="p-5 mt-5 space-y-4">
                <p class="font-bold text-lg">Music Theory Basic Class (Vocal)</p>
                <p class="font-light text-sm">Monday & Wednesday</p>
                <p class="font-light text-sm">4:30PM - 5:30PM</p>
            </div>
        </div>

        <div class="program__info1 w-80 h-96 border rounded-xl shadow-xl overflow-hidden bg-gray-50">
            <div class="w-full h-44">
                <img src="{{ asset('images/programs/guitar.jpg') }}" class="object-cover w-full h-full" />
            </div>
            <div class="p-5 mt-5 space-y-4">
                <p class="font-bold text-lg">EDC Music Theory Basic Class (Guitar)</p>
                <p class="font-light text-sm">Monday & Wednesday</p>
                <p class="font-light text-sm">4:30PM - 5:30PM</p>
            </div>
        </div>

        <div class="program__info1 w-80 h-96 border rounded-xl shadow-xl overflow-hidden bg-gray-50">
            <div class="w-full h-44">
                <img src="{{ asset('images/programs/violin.jpg') }}" class="object-cover w-full h-full" />
            </div>
            <div class="p-5 mt-5 space-y-4">
                <p class="font-bold text-lg">EDC Music Theory Basic Class (Violin)</p>
                <p class="font-light text-sm">Monday & Wednesday</p>
                <p class="font-light text-sm">4:30PM - 5:30PM</p>
            </div>
        </div>

        <div class="program__info1 w-80 h-96 border rounded-xl shadow-xl overflow-hidden bg-gray-50">
            <div class="w-full h-44">
                <img src="{{ asset('images/programs/piano.jpg') }}" class="object-cover w-full h-full" />
            </div>
            <div class="p-5 mt-5 space-y-4">
                <p class="font-bold text-lg">EDC Music Theory Basic Class (Keyboard)</p>
                <p class="font-light text-sm">Monday & Wednesday</p>
                <p class="font-light text-sm">4:30PM - 5:30PM</p>
            </div>
        </div>

        <div class="program__info1 w-80 h-96 border rounded-xl shadow-xl overflow-hidden bg-gray-50">
            <div class="w-full h-44">
                <img src="{{ asset('images/programs/speaking.jpg') }}" class="object-cover w-full h-full" />
            </div>
            <div class="p-5 mt-5 space-y-4">
                <p class="font-bold text-lg">Public Speaking Class</p>
                <p class="font-light text-sm">Monday & Wednesday</p>
                <p class="font-light text-sm">4:30PM - 5:30PM</p>
            </div>
        </div>

        <div class="program__info1 w-80 h-96 border rounded-xl shadow-xl overflow-hidden bg-gray-50">
            <div class="w-full h-44">
                <img src="{{ asset('images/programs/badminton.jpg') }}" class="object-cover w-full h-full" />
            </div>
            <div class="p-5 mt-5 space-y-4">
                <p class="font-bold text-lg">Badminton Class</p>
                <p class="font-light text-sm">Monday & Wednesday</p>
                <p class="font-light text-sm">4:30PM - 5:30PM</p>
            </div>
        </div>
    </div>
</div>
@endsection