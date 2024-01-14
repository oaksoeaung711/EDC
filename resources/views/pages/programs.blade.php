@extends('layouts.master')

@section('content')
<div class="space-y-10">
    <h1 class="text-center">Programs</h1>
    <p class="leading-10 text-lg text-center">The first to introduce are the classes that will be opened by the Extracurricular Development Center (EDC). Those sub-classes EDC opened with the aim of supporting children and youth between the ages of 8 and 23 for the comprehensive development and scholarship processes.</p>
</div>
<div class="my-16">
    <div class="p-5 grid grid-cols-1 md:grid-cols-3 place-items-center gap-5 md:gap-y-10">
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
</div>
@endsection