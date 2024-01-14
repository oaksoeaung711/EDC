<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xls mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 md:grid-cols-4 place-items-center gap-5">
                        <a href="{{ route('admin.home.index') }}" class="flex items-center justify-center gap-2 bg-teal-50 w-full h-52 rounded-lg shadow-lg text-2xl text-teal-700 hover:shadow-sm hover:translate-y-2 transition-all duration-500 relative overflow-hidden">
                            <i class="fi fi-sr-house-chimney z-20"></i>
                            <span class="z-20">Home</span>
                            <img src="{{ asset('images/backgrounds/bg1.svg') }}" alt="bg" class="absolute object-cover left-[230px] -top-10 w-full rotate-45" />
                        </a>

                        <a href="{{ route('admin.about.index') }}" class="flex items-center justify-center gap-2 bg-sky-50 w-full h-52 rounded-lg shadow-lg text-2xl text-sky-700 hover:shadow-sm hover:translate-y-2 transition-all duration-500 relative overflow-hidden">
                            <i class="fi fi-sr-info z-20"></i>
                            <span class="z-20">About Us</span>
                            <img src="{{ asset('images/backgrounds/bg2.svg') }}" alt="bg" class="absolute object-cover left-[230px] -top-10 w-full rotate-45" />
                        </a>

                        <a href="{{ route('admin.programs.index') }}" class="flex items-center justify-center gap-2 bg-yellow-50 w-full h-52 rounded-lg shadow-lg text-2xl text-yellow-700 hover:shadow-sm hover:translate-y-2 transition-all duration-500 relative overflow-hidden">
                            <i class="fi fi-sr-browser z-20"></i>
                            <span class="z-20">Programs</span>
                            <img src="{{ asset('images/backgrounds/bg3.svg') }}" alt="bg" class="absolute object-cover left-[230px] -top-10 w-full rotate-45" />
                        </a>

                        <a href="{{ route('admin.activities.index') }}" class="flex items-center justify-center gap-2 bg-violet-50 w-full h-52 rounded-lg shadow-lg text-2xl text-violet-700 hover:shadow-sm hover:translate-y-2 transition-all duration-500 relative overflow-hidden">
                            <i class="fi fi-sr-gym z-20"></i>
                            <span class="z-20">Activities</span>
                            <img src="{{ asset('images/backgrounds/bg4.svg') }}" alt="bg" class="absolute object-cover left-[230px] -top-10 w-full rotate-45" />
                        </a>

                        <a href="{{ route('admin.contact.index') }}" class="flex items-center justify-center gap-2 bg-green-50 w-full h-52 rounded-lg shadow-lg text-2xl text-green-700 hover:shadow-sm hover:translate-y-2 transition-all duration-500 relative overflow-hidden">
                            <i class="fi fi-sr-form z-20"></i>
                            <span class="z-20">Contact</span>
                            <img src="{{ asset('images/backgrounds/bg5.svg') }}" alt="bg" class="absolute object-cover left-[230px] -top-10 w-full rotate-45" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
