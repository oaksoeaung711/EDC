@extends('layout')

@section('content')
{{-- Start Hero Section --}}
<div class="hero__section my-32 flex">
    <div class="w-full md:w-1/2">
        <h1 class="text-6xl font-normal text-center md:text-start">Let's Meet Your Goal <span class="text-secondary">Here!</span></h1>
        <p class="mt-10 px-5 text-center md:text-justify md:px-0">
            We want to luanch our <span class="font-bold">E.D.C (Extracurricular Development Center)</span> to all the children and young learners. This project leads Win-Win situation for partners and target audients. This project will be popular and effective for our society.
        </p>
        <div class="flex justify-center md:justify-start btn__slide">
            <a href="{{ route('about') }}" class="mt-5 px-5 py-3 flex items-center bg-secondary/90 text-white space-x-3 rounded-md hover:shadow-lg hover:bg-secondary/100 transition-all duration-300"><span>About Us</span><i class="fi fi-rr-angle-small-right flex items-center justify-center"></i></a>
        </div>
    </div>
    <div class="hidden md:grid grid-cols-3 w-1/2 h-[520px] justify-items-center">
        <img src="{{ asset('images/activities/14.jpg') }}" class="hero__image1 w-52 h-96 rounded-md object-cover shadow-xl" />
        <img src="{{ asset('images/activities/10.jpg') }}" class="hero__image2 w-52 h-96 rounded-md object-cover shadow-xl mt-24" />
        <img src="{{ asset('images/activities/20.jpg') }}" class="hero__image3 w-52 h-96 rounded-md object-cover shadow-xl" />
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
            <img src="{{ asset('images/activities/1.jpg') }}" class="welcome__section__image1 mt-0 md:mt-0 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
            <img src="{{ asset('images/hero/2.jpg') }}" class="welcome__section__image2 mt-0 md:mt-32 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
            <img src="{{ asset('images/activities/4.jpg') }}" class="welcome__section__image3 mt-0 md:mt-0 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
            <img src="{{ asset('images/hero/1.jpg') }}" class="welcome__section__image4 mt-0 md:mt-32 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
            <img src="{{ asset('images/activities/2.jpg') }}" class="welcome__section__image5 mt-0 md:mt-0 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
            <img src="{{ asset('images/activities/3.jpg') }}" class="welcome__section__image6 mt-0 md:mt-32 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
            <img src="{{ asset('images/hero/3.jpg') }}" class="welcome__section__image7 mt-0 md:mt-0 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
            <img src="{{ asset('images/activities/5.jpg') }}" class="welcome__section__image8 mt-0 md:mt-32 w-full h-full md:h-96 rounded-xl object-cover shadow-xl" />
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

        <div class="program__info2 w-80 h-96 border rounded-xl shadow-xl overflow-hidden bg-gray-50">
            <div class="w-full h-44">
                <img src="{{ asset('images/programs/football.jpg') }}" class="object-cover w-full h-full" />
            </div>
            <div class="p-5 mt-5 space-y-4">
                <p class="font-bold text-lg">Football Class</p>
                <p class="font-light text-sm">Saturday & Sunday</p>
                <p class="font-light text-sm">8:00AM - 10:00AM</p>
            </div>
        </div>

        <div class="program__info3 w-80 h-96 border rounded-xl shadow-xl overflow-hidden bg-gray-50">
            <div class="w-full h-44">
                <img src="{{ asset('images/programs/basketball.jpg') }}" class="object-cover w-full h-full" />
            </div>
            <div class="p-5 mt-5 space-y-4">
                <p class="font-bold text-lg">Basketball Class</p>
                <p class="font-light text-sm">Tuesday & Thursday</p>
                <p class="font-light text-sm">4:00PM - 5:00PM</p>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center btn__slide">
        <a href="{{ route('program') }}" class="mt-5 px-5 py-3 flex items-center bg-secondary/90 text-white space-x-3 rounded-md hover:shadow-lg hover:bg-secondary/100 transition-all duration-300"><span>View More</span><i class="fi fi-rr-angle-small-right flex items-center justify-center"></i></a>
    </div>
</div>
{{-- End Program Section --}}
@endsection