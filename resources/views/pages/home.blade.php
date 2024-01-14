@extends('layouts.master')

@section('content')
{{-- Start Hero Section --}}
<div class="hero__section my-32 flex">
    <div class="w-full md:w-1/2">
        <h1 class="text-6xl font-normal text-center md:text-start">{!! $formattedIntroHeader !!}</h1>
        <p class="mt-10 px-5 text-center md:text-justify md:px-0">
            {!! $formattedIntroContent !!}
        </p>
        <div class="flex justify-center md:justify-start btn__slide">
            <a href="{{ route('about') }}" class="mt-5 px-5 py-3 flex items-center bg-secondary/90 text-white space-x-3 rounded-md hover:shadow-lg hover:bg-secondary/100 transition-all duration-300"><span>About Us</span><i class="fi fi-rr-angle-small-right flex items-center justify-center"></i></a>
        </div>
    </div>
    <div class="hidden md:grid grid-cols-3 w-1/2 h-[520px] justify-items-center">
        <img src="{{ asset($introPhotos[0]->url) }}" class="hero__image1 w-52 h-96 rounded-md object-cover shadow-xl" />
        <img src="{{ asset($introPhotos[1]->url) }}" class="hero__image2 w-52 h-96 rounded-md object-cover shadow-xl mt-24" />
        <img src="{{ asset($introPhotos[2]->url) }}" class="hero__image3 w-52 h-96 rounded-md object-cover shadow-xl" />
    </div>
</div>
{{-- End Hero Section --}}
{{-- Start Welcome Section --}}
<div class="my-32 space-y-14">
    <div class="welcome__section__header">
        <h1 class="text-center">Welcome to <span class="text-secondary">EDC</span></h1>
    </div>

    <div class="p-5 grid grid-cols-1 gap-y-10 md:grid-cols-4 md:gap-x-10">
        <div class="welcome__section__card1 p-10 space-y-2 border border-gray-100 rounded-xl shadow-lg bg-gray-50 shadow-gray-100">
            <div class="text-5xl text-secondary text-center"><i class="fi fi-rr-trophy-star"></i></div>
            <p class="font-normal text-gray-700 text-xl text-center">Qualified Coaches</p>
        </div>

        <div class="welcome__section__card2 p-10 space-y-2 border border-gray-100 rounded-xl shadow-lg bg-gray-50 shadow-gray-100">
            <div class="text-5xl text-primary text-center"><i class="fi fi-rr-hotel"></i></div>
            <p class="font-normal text-gray-700 text-xl text-center">Famous Location</p>
        </div>

        <div class="welcome__section__card3 p-10 space-y-2 border border-gray-100 rounded-xl shadow-lg bg-gray-50 shadow-gray-100">
            <div class="text-5xl text-secondary text-center"><i class="fi fi-rr-chart-connected"></i></div>
            <p class="font-normal text-gray-700 text-xl text-center">Best Programs</p>
        </div>

        <div class="welcome__section__card4 p-10 space-y-2 border border-gray-100 rounded-xl shadow-lg bg-gray-50 shadow-gray-100">
            <div class="text-5xl text-primary text-center"><i class="fi fi-rr-e-learning"></i></div>
            <p class="font-normal text-gray-700 text-xl text-center">Effective Learning Style</p>
        </div>
    </div>

    <div class="p-5">
        <div class="grid grid-cols-2 md:grid-cols-8 gap-5">
            <img src="{{ asset($welcomePhotots[0]->url) }}" class="welcome__section__image1 mt-0 md:mt-0 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
            <img src="{{ asset($welcomePhotots[1]->url) }}" class="welcome__section__image2 mt-0 md:mt-32 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
            <img src="{{ asset($welcomePhotots[2]->url) }}" class="welcome__section__image3 mt-0 md:mt-0 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
            <img src="{{ asset($welcomePhotots[3]->url) }}" class="welcome__section__image4 mt-0 md:mt-32 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
            <img src="{{ asset($welcomePhotots[4]->url) }}" class="welcome__section__image5 mt-0 md:mt-0 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
            <img src="{{ asset($welcomePhotots[5]->url) }}" class="welcome__section__image6 mt-0 md:mt-32 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
            <img src="{{ asset($welcomePhotots[6]->url) }}" class="welcome__section__image7 mt-0 md:mt-0 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
            <img src="{{ asset($welcomePhotots[7]->url) }}" class="welcome__section__image8 mt-0 md:mt-32 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
        </div>
    </div>
</div>
{{-- End Welcome Section --}}
{{-- Start Program Section --}}
<div class="my-32 space-y-14">
    <div class="text-center program__header">
        <h1>Our Programs</h1>
    </div>

    <div class="p-5 grid grid-cols-1 md:grid-cols-3 place-items-center gap-5 md:gap-0">
        @foreach ($programs as $program)
            <div class="program__info1 w-80 h-full border rounded-xl shadow-xl overflow-hidden bg-gray-50">
                <div class="w-full h-44">
                    <img src="{{ asset($program->image) }}" class="object-cover w-full h-full" />
                </div>
                <div class="p-5 mt-5 space-y-4">
                    <p class="font-bold text-lg">{!! $program->name !!}</p>
                    <p class="font-light text-sm"><span class="font-bold">Session : </span>{!! $program->session !!}</p>
                    <p class="font-light text-sm"><span class="font-bold">Time : </span>{!! $program->time !!}</p>
                    <p class="font-light text-sm"><span class="font-bold">Start Date : </span>{!! $program->startdate !!}</p>
                    <p class="font-light text-sm"><span class="font-bold">Location : </span>{!! $program->location !!}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="flex items-center justify-center btn__slide">
        <a href="{{ route('program') }}" class="mt-5 px-5 py-3 flex items-center bg-secondary/90 text-white space-x-3 rounded-md hover:shadow-lg hover:bg-secondary/100 transition-all duration-300"><span>View More</span><i class="fi fi-rr-angle-small-right flex items-center justify-center"></i></a>
    </div>
</div>
{{-- End Program Section --}}
@endsection