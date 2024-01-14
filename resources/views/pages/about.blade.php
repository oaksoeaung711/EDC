@extends('layouts.master')


@section('content')
{{-- Start About Us Section --}}
<div class="grid grid-cols-1 md:grid-cols-2 my-32">
    <div class="about__image w-full flex justify-center items-center">
        <img src="{{ asset($introPhoto->images[0]->url) }}" class="h-[400px]" />
    </div>

    <div class="about__text p-5 aboutus__section">
        <h1 class="mb-10 text-center md:text-start">{!! $formattedintroHeader !!}</h1>
        <p class="leading-10 text-justify text-xl">
            {!! $formattedintroContent !!}
        </p>
    </div>
</div>

{{-- Start Why Choose Us --}}
<div class="about__choose relative my-32 p-5">
    <div class="md:h-[400px] grid md:grid-cols-2 p-10 rounded-2xl space-y-5" style="background-image: url('{{ asset('images/backgrounds/bg7.svg') }}')">
        <div>
            <p class="text-6xl text-gray-50 font-bold text-center md:text-start">Why Choose Us</p>
        </div>
        <div class="">
            <ul class="list-disc text-gray-50 text-xl font-bold grid md:grid-cols-2 gap-4">
                @foreach ($whyChooseUs as $quotes)
                    <li class="px-2">{{ $quotes->content }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-y-10 md:grid-cols-4 md:gap-x-10 md:absolute left-0 right-0 -bottom-28 p-10">
        <div class="welcome__section__card1 p-10 space-y-2 border border-gray-100 rounded-xl bg-gray-50 shadow-lg">
            <div class="text-5xl text-secondary text-center"><i class="fi fi-rr-trophy-star"></i></div>
            <p class="font-normal text-gray-700 text-xl text-center">Qualified Coaches</p>
        </div>

        <div class="welcome__section__card2 p-10 space-y-2 border border-gray-100 rounded-xl bg-gray-50 shadow-lg">
            <div class="text-5xl text-primary text-center"><i class="fi fi-rr-hotel"></i></div>
            <p class="font-normal text-gray-700 text-xl text-center">Famous Location</p>
        </div>

        <div class="welcome__section__card3 p-10 space-y-2 border border-gray-100 rounded-xl bg-gray-50 shadow-lg">
            <div class="text-5xl text-secondary text-center"><i class="fi fi-rr-chart-connected"></i></div>
            <p class="font-normal text-gray-700 text-xl text-center">Best Programs</p>
        </div>

        <div class="welcome__section__card4 p-10 space-y-2 border border-gray-100 rounded-xl bg-gray-50 shadow-lg">
            <div class="text-5xl text-primary text-center"><i class="fi fi-rr-e-learning"></i></div>
            <p class="font-normal text-gray-700 text-xl text-center">Effective Learning Style</p>
        </div>
    </div>

</div>
{{-- End Why Choose Us --}}


{{-- Start Office Location --}}
<div class="p-10 my-32 space-y-14">
    <div class="contactus__header">
        <h1 class="text-center">Our Office</h1>
    </div>
    <div class="office__image shadow-lg" >
        <div id="image-carousel" class="splide rounded-lg overflow-hidden">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($officeLocation->images as $image)
                        <li class="splide__slide" data-splide-interval="3000">
                            <img src="{{ asset($image->url) }}" alt="" class="w-full h-[600px] object-cover">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
{{-- Start Office Location --}}

<div class="p-10 my-32 space-y-14">
    <div class="contactus__header">
        <h1 class="text-center">Contact Us</h1>
    </div>

    <div style="background-image: url('{{ asset('images/backgrounds/bg6.svg') }}')" class="contactus__header py-14 rounded-2xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mx-10">
            <div class="contactus__info bg-white rounded-xl p-5 space-y-10">
                <div class="text-lg md:text-2xl text-primary flex items-center gap-4">
                    <div><i class="fi fi-rr-mobile-button flex items-center"></i></div>
                    <div><p>{{ $contacts->primaryphonenumber }}</p></div>
                </div>

                <div class="text-lg md:text-2xl text-primary flex items-center gap-4">
                    <div><i class="fi fi-rr-mobile-button flex items-center"></i></div>
                    <div><p>{{ $contacts->secondaryphonenumber }}</p></div>
                </div>

                <div class="text-lg md:text-2xl text-primary flex items-center gap-4">
                    <div><i class="fi fi-rr-envelope flex items-center"></i></div>
                    <div><p>{{ $contacts->email }}</p></div>
                </div>

                <div class="text-lg md:text-2xl text-primary flex items-center gap-4">
                    <div><i class="fi fi-rr-business-time flex items-center"></i></div>
                    <div><p>{{ $contacts->worktime }}</p></div>
                </div>
            </div>
            <div class="contactus__map bg-white rounded-xl p-5 space-y-5">
                <div class="text-lg md:text-2xl text-primary flex items-center gap-4">
                    <div><i class="fi fi-ss-map-marker flex items-center"></i></div>
                    <div><p class="text-xs md:text-lg">{!! $allAddress !!}</div>
                </div>
                <div>
                    <iframe class="w-full" height="200" src="{{ $contacts->googlemapurl }}" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- End About Us Section --}}
@endsection

@section('scripts')
<script src="{{ asset('js/slidejs.js') }}" type="text/javascript"></script>
@endsection