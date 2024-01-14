@extends('layouts.master')

@section('content')

<div class="space-y-5 p-5 md:p-0 my-32">
    <div class="grid md:grid-rows-6 md:grid-cols-12 gap-5">
        <img src="{{ asset($activities[0]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-1  md:col-span-2 row-start-auto md:row-start-1 md:row-span-2 w-full h-full object-cover" alt="1" />
        <img src="{{ asset($activities[1]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-1  md:col-span-2 row-start-auto md:row-start-3 md:row-span-2 w-full h-full object-cover" alt="2" />
        <img src="{{ asset($activities[2]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-1  md:col-span-2 row-start-auto md:row-start-5 md:row-span-2 w-full h-full object-cover" alt="3" />
        <img src="{{ asset($activities[3]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-3  md:col-span-3 row-start-auto md:row-start-5 md:row-span-2 w-full h-full object-cover" alt="4" />
        <img src="{{ asset($activities[4]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-3  md:col-span-2 row-start-auto md:row-start-1 md:row-span-4 w-full h-full object-cover" alt="5" />
        <img src="{{ asset($activities[5]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-5  md:col-span-3 row-start-auto md:row-start-1 md:row-span-4 w-full h-full object-cover" alt="6" />
        <img src="{{ asset($activities[6]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-6  md:col-span-2 row-start-auto md:row-start-5 md:row-span-2 w-full h-full object-cover" alt="7" />
        <img src="{{ asset($activities[7]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-8  md:col-span-3 row-start-auto md:row-start-1 md:row-span-2 w-full h-full object-cover" alt="8" />
        <img src="{{ asset($activities[8]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-8  md:col-span-1 row-start-auto md:row-start-3 md:row-span-1 w-full h-full object-cover" alt="9" />
        <img src="{{ asset($activities[9]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-8  md:col-span-1 row-start-auto md:row-start-4 md:row-span-1 w-full h-full object-cover" alt="10" />
        <img src="{{ asset($activities[10]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-9  md:col-span-2 row-start-auto md:row-start-3 md:row-span-2 w-full h-full object-cover" alt="11" />
        <img src="{{ asset($activities[11]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-8  md:col-span-3 row-start-auto md:row-start-5 md:row-span-2 w-full h-full object-cover" alt="12" />
        <img src="{{ asset($activities[12]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-11 md:col-span-2 row-start-auto md:row-start-1 md:row-span-3 w-full h-full object-cover" alt="13" />
        <img src="{{ asset($activities[13]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-11 md:col-span-2 row-start-auto md:row-start-4 md:row-span-3 w-full h-full object-cover" alt="14" />
    </div>
    <div class="grid md:grid-rows-6 md:grid-cols-12 gap-5">
        <img src="{{ asset($activities[14]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-1  md:col-span-3 row-start-auto md:row-start-1 md:row-span-2 w-full h-full object-cover" alt="15" />
        <img src="{{ asset($activities[15]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-4  md:col-span-2 row-start-auto md:row-start-1 md:row-span-3 w-full h-full object-cover" alt="16" />
        <img src="{{ asset($activities[16]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-1  md:col-span-2 row-start-auto md:row-start-3 md:row-span-4 w-full h-full object-cover" alt="17" />
        <img src="{{ asset($activities[17]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-3  md:col-span-1 row-start-auto md:row-start-3 md:row-span-1 w-full h-full object-cover" alt="18" />
        <img src="{{ asset($activities[18]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-3  md:col-span-3 row-start-auto md:row-start-4 md:row-span-3 w-full h-full object-cover" alt="19" />
        <img src="{{ asset($activities[19]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-6  md:col-span-4 row-start-auto md:row-start-1 md:row-span-3 w-full h-full object-cover" alt="20" />
        <img src="{{ asset($activities[20]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-10 md:col-span-3 row-start-auto md:row-start-1 md:row-span-2 w-full h-full object-cover" alt="21" />
        <img src="{{ asset($activities[21]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-6  md:col-span-2 row-start-auto md:row-start-4 md:row-span-3 w-full h-full object-cover" alt="22" />
        <img src="{{ asset($activities[22]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-8  md:col-span-2 row-start-auto md:row-start-4 md:row-span-3 w-full h-full object-cover" alt="23" />
        <img src="{{ asset($activities[23]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-10 md:col-span-3 row-start-auto md:row-start-3 md:row-span-2 w-full h-full object-cover" alt="24" />
        <img src="{{ asset($activities[24]->url) }}" class="gallery__slide rounded-lg col-start-auto md:col-start-10 md:col-span-3 row-start-auto md:row-start-5 md:row-span-2 w-full h-full object-cover" alt="25" />
    </div>
</div>
@endsection